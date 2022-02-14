<?php

namespace App\Filament\Widgets;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Widgets\Widget;

class BlogPostsOverview extends Widget
{
    protected static string $view = 'filament.widgets.blog-posts-overview';
    protected static ?int $sort = 2;
    public static function canView(): bool
    {
        // return auth()->user()->isAdmin();
        return true;
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('email')->email()->required(),
            // ...
        ]);
    }
}