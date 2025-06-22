<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Facades\Filament;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Illuminate\Contracts\Support\Htmlable;
use RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms\ApplicationForm;
use RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms\MailForm;
use RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms\SecurityForm;
use RectitudeOpen\FilamentSystemSettings\Settings\SystemSettings;

class SystemSettingsPage extends SettingsPage
{
    use HasPageShield;

    protected static ?string $slug = 'settings/application';

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$navigationIcon ?? config('filament-system-settings.navigation_icon', 'heroicon-o-cog-6-tooth');
    }

    public static function getNavigationSort(): ?int
    {
        return config('filament-system-settings.filament-system-settings.navigation_sort', 0);
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-system-settings::filament-system-settings.nav.label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-system-settings::filament-system-settings.nav.group');
    }

    public static function getSettings(): string
    {
        return config('filament-system-settings.system_settings', SystemSettings::class);
    }

    public function mount(): void
    {
        parent::mount();
    }

    public function form(Form $form): Form
    {
        $arrTabs = [];

        $arrTabs[] = Tabs\Tab::make('System Tab')
            ->label(__('filament-system-settings::filament-system-settings.tab.system'))
            ->icon('heroicon-o-tv')
            ->schema(ApplicationForm::get());

        $arrTabs[] = Tabs\Tab::make('Mail Tab')
            ->label(__('filament-system-settings::filament-system-settings.tab.mail'))
            ->icon('heroicon-o-envelope')
            ->schema(MailForm::get());

        $arrTabs[] = Tabs\Tab::make('Security Tab')
            ->label(__('filament-system-settings::filament-system-settings.tab.security'))
            ->icon('heroicon-o-shield-check')
            ->schema(SecurityForm::get());

        return $form
            ->columns(1)
            ->schema([
                Tabs::make('Tabs')
                    ->tabs($arrTabs)
                    ->activeTab(1),
            ]);
    }

    public static function canAccess(array $parameters = []): bool
    {
        $admin = Filament::auth()->user();

        // @phpstan-ignore-next-line
        return $admin->hasRole('super-admin') || $admin->can(static::getPermissionName());
    }
}
