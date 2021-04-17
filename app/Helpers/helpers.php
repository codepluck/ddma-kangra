<?php

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Text;
use GeneaLabs\NovaFileUploadField\FileUpload;

if (!function_exists('ddmaSettings')) {

    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    function ddmaSettings()
    {
        // Using a callable
        \OptimistDigital\NovaSettings\NovaSettings::addSettingsFields(function () {
            return [
                new Panel('App Settings', settingsMain()),
                new Panel('Logo Primary', settingsLogoPrimary()),
                new Panel('Logo Secondary', settingsLogoSecondary()),
                new Panel('Social Media', settingsMeta()),
            ];
        });
    }

}

if (!function_exists('settingsMeta')) {

    function settingsMeta()
    {
        return [
            Text::make('Email', 'email'),
            Text::make('Phone', 'phone'),
            Text::make('Facebook', 'facebook'),
            Text::make('Twitter', 'twitter'),
            Text::make('Gmail', 'gmail'),
        ];
    }

}
if (!function_exists('settingsMain')) {

    function settingsMain()
    {
        return [
            Text::make('App Name', 'name'),
            Text::make('Description', 'description'),
        ];
    }

}


if (!function_exists('settingsLogoPrimary')) {

    function settingsLogoPrimary()
    {
        return [
            FileUpload::make("Primary Logo", "logo")
                ->thumbnail(function ($image) {
                    return $image ? asset($image) : '';
                })
                ->disk("public")
                ->path("media")
                ->prunable(),
        ];
    }

}


if (!function_exists('settingsLogoSecondary')) {

    function settingsLogoSecondary()
    {
        return [
            FileUpload::make("Secondary Logo", "logo_sec")
                ->thumbnail(function ($image) {
                    return $image ? asset($image) : '';
                })
                ->disk("public")
                ->path("media")
                ->prunable(),
        ];
    }

}
