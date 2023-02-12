<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GoogleRecaptcha extends Component
{
    public string $googleSiteKey;

    public function __construct()
    {
        $this->googleSiteKey = env('GOOGLE_SITE_KEY');
    }

    public function render(): View
    {
        return view('components.google-recaptcha');
    }
}
