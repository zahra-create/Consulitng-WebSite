<?php

namespace App\Providers;

use App\Models\ContactInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $contacts = ContactInfo::where('nom', '!=', 'Localisation')->get();
        $localisations = ContactInfo::where('nom', '=', 'Localisation')->get();

        View::share('contacts', $contacts);
        View::share('localisations', $localisations);
    }
}
