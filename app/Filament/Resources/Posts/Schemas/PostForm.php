<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\PostCategory;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Content')
                    ->components([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Textarea::make('excerpt')
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText('Short intro snippet shown on blog archive page'),

                        RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Publishing & Metadata')
                    ->components([
                        Grid::make(3)
                            ->components([
                                Select::make('post_category_id')
                                    ->label('Category')
                                    ->options(PostCategory::pluck('name', 'id'))
                                    ->searchable(),

                                Select::make('user_id')
                                    ->label('Author')
                                    ->options(User::pluck('name', 'id'))
                                    ->default(auth()->id())
                                    ->required(),

                                Select::make('status')
                                    ->options([
                                        'draft' => 'Draft',
                                        'published' => 'Published',
                                        'archived' => 'Archived',
                                    ])
                                    ->default('draft')
                                    ->required(),
                            ]),

                        Grid::make(2)
                            ->components([
                                DateTimePicker::make('published_at')
                                    ->default(now()),

                                Toggle::make('is_featured')
                                    ->label('Feature as Top Story')
                                    ->default(false),
                            ]),

                        TagsInput::make('tags')
                            ->placeholder('Add tags (hit Enter)'),

                        FileUpload::make('thumbnail')
                            ->image()
                            ->disk('public')
                            ->directory('blog')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
