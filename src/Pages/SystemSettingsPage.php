<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentSystemSettings\Pages;

use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Facades\Filament;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms\ApplicationForm;
use RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms\MailForm;
use RectitudeOpen\FilamentSystemSettings\Pages\SystemSettings\Forms\SecurityForm;
use RectitudeOpen\FilamentSystemSettings\Settings\SystemSettings;

class SystemSettingsPage extends SettingsPage
{
    use HasPageShield;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $title = 'System';

    protected static ?string $slug = 'settings/application';

    protected static ?string $navigationGroup = 'Settings';

    public static function getSettings(): string
    {
        return config('filapress-core.system_settings', SystemSettings::class);
    }

    public function mount(): void
    {
        parent::mount();
    }

    public function form(Form $form): Form
    {
        $arrTabs = [];

        $arrTabs[] = Tabs\Tab::make('System Tab')
            ->label('System')
            ->icon('heroicon-o-tv')
            ->schema(ApplicationForm::get());

        $arrTabs[] = Tabs\Tab::make('Mail Tab')
            ->label('Mail')
            ->icon('heroicon-o-envelope')
            ->schema(MailForm::get());

        $arrTabs[] = Tabs\Tab::make('Security Tab')
            ->label('Security')
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
