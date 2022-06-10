<?php

namespace App\Filament\Resources\GithubResource\Pages;

use App\Filament\Resources\GithubResource;
use Filament\Resources\Pages\Page;
use GuzzleHttp\Middleware;

class Github extends Page
{
    protected static string $resource = GithubResource::class;
    protected static string $view = 'livewire.github';
    // protected static string $title = "Darlley";
}
