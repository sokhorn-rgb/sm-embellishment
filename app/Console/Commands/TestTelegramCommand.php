<?php

namespace App\Console\Commands;

use App\Services\TelegramService;
use Illuminate\Console\Command;

class TestTelegramCommand extends Command
{
    protected $signature = 'telegram:test {chat_id? : Custom Telegram Chat ID to send test message to}';

    protected $description = 'Send a test message to verify Telegram Bot integration';

    public function handle(): int
    {
        $this->info('កំពុងសាកល្បងផ្ញើសារទៅកាន់ Telegram Bot...');

        $chatId = $this->argument('chat_id');
        $result = TelegramService::sendTestMessage($chatId);

        if ($result['success']) {
            $this->info('✓ '.$result['message']);

            return self::SUCCESS;
        }

        $this->error('✗ '.$result['message']);

        return self::FAILURE;
    }
}
