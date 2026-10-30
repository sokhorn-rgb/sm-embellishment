<?php

namespace App\Services;

use App\Models\Inquiry;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class TelegramService
{
    public static function isConfigured(): bool
    {
        return ! empty(config('services.telegram.bot_token')) && ! empty(config('services.telegram.chat_id'));
    }

    public static function sendInquiryNotification(Inquiry $inquiry): bool
    {
        $botToken = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        if (empty($botToken) || empty($chatId)) {
            Log::info('Telegram notification skipped: TELEGRAM_BOT_TOKEN or TELEGRAM_CHAT_ID is not configured.');

            return false;
        }

        try {
            $serviceName = $inquiry->service?->title ?? 'ការសាកសួរទូទៅ (General)';
            $time = $inquiry->created_at ? $inquiry->created_at->timezone('Asia/Phnom_Penh')->format('d/m/Y h:i A') : now()->format('d/m/Y h:i A');
            $adminUrl = url('/admin/inquiries/'.$inquiry->id.'/edit');

            $text = "👑 <b>មានការកក់ & សាកសួរថ្មីពីអតិថិជន!</b>\n";
            $text .= "<b>ស្រីម៉ៅ​ មង្គល សម្អាងការ (SM Embellishment)</b>\n";
            $text .= "━━━━━━━━━━━━━━━━━━━━━\n";
            $text .= '👤 <b>ឈ្មោះ:</b> '.htmlspecialchars($inquiry->name)."\n";
            $text .= '📞 <b>ទូរស័ព្ទ:</b> <code>'.htmlspecialchars($inquiry->phone ?? 'មិនមាន')."</code>\n";
            $text .= '📧 <b>អ៊ីមែល:</b> '.htmlspecialchars($inquiry->email)."\n";
            $text .= '💎 <b>សេវាកម្ម:</b> '.htmlspecialchars($serviceName)."\n";

            if (! empty($inquiry->subject)) {
                $text .= '📝 <b>ប្រធានបទ:</b> '.htmlspecialchars($inquiry->subject)."\n";
            }

            $text .= "💬 <b>ខ្លឹមសារសារ:</b>\n<i>\"".htmlspecialchars($inquiry->message)."\"</i>\n";
            $text .= "━━━━━━━━━━━━━━━━━━━━━\n";
            $text .= "⏰ <b>កាលបរិច្ឆេទ:</b> {$time}\n";
            $text .= "👉 <a href=\"{$adminUrl}\">ចុចទីនេះដើម្បីចូលពិនិត្យក្នុង Admin</a>";

            $response = Http::timeout(6)->asJson()->post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML',
                'disable_web_page_preview' => true,
            ]);

            if ($response->successful()) {
                Log::info("Telegram alert sent successfully for Inquiry ID: {$inquiry->id}");

                return true;
            }

            Log::warning('Telegram alert failed: '.$response->body());

            return false;
        } catch (Throwable $e) {
            Log::error('Telegram alert exception: '.$e->getMessage());

            return false;
        }
    }

    public static function sendTestMessage(?string $customChatId = null): array
    {
        $botToken = config('services.telegram.bot_token');
        $chatId = $customChatId ?: config('services.telegram.chat_id');

        if (empty($botToken)) {
            return ['success' => false, 'message' => 'TELEGRAM_BOT_TOKEN មិនទាន់បានកំណត់ក្នុង .env ឡើយ'];
        }

        if (empty($chatId)) {
            return ['success' => false, 'message' => 'TELEGRAM_CHAT_ID មិនទាន់បានកំណត់ក្នុង .env ឡើយ'];
        }

        try {
            $text = "👑 <b>តេស្តការតភ្ជាប់ Telegram Bot ដោយជោគជ័យ!</b>\n";
            $text .= "គេហទំព័រ <b>ស្រីម៉ៅ​ មង្គល សម្អាងការ</b> បានភ្ជាប់ទៅកាន់ Telegram រួចរាល់។\n";
            $text .= '⏰ '.now()->timezone('Asia/Phnom_Penh')->format('d/m/Y h:i:s A');

            $response = Http::timeout(6)->asJson()->post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'HTML',
            ]);

            if ($response->successful()) {
                return ['success' => true, 'message' => 'បានផ្ញើសារសាកល្បងទៅកាន់ Telegram ដោយជោគជ័យ!'];
            }

            return ['success' => false, 'message' => 'Telegram Error: '.$response->body()];
        } catch (Throwable $e) {
            return ['success' => false, 'message' => 'Exception: '.$e->getMessage()];
        }
    }
}
