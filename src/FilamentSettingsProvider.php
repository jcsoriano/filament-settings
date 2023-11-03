<?php

namespace Reworck\FilamentSettings;

use App\Providers\Filament\AdminPanelProvider;
use Livewire\Livewire;
use Reworck\FilamentSettings\Components\RenderValues;
use Reworck\FilamentSettings\Pages\Settings;
use Spatie\LaravelPackageTools\Package;

class FilamentSettingsProvider extends AdminPanelProvider
{
    public static string $name = 'filament-settings';

    protected function getPages(): array
    {
        return [
            Settings::class,
        ];
    }
}
