<?php

namespace App\Filament\Resources\GithubResource\Pages;

use App\Filament\Resources\GithubResource;
use App\Http\Livewire\Github;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Livewire\Livewire;

class ListGithubs extends ListRecords
{
    protected static string $resource = GithubResource::class;
}
