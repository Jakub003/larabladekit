# Get key from google

Visit website url
    
    https://www.google.com/recaptcha/admin/create

Create project with reCAPTCHA v2 and "I'm not a robot" Checkbox.

Add domains.

Click submit.

Copy Site key.

# Paste site key in .env

Create new key with name "GOOGLE_SITE_KEY".Add google site key to value.

# Create blade component with name GoogleRecaptcha

In google-recaptcha blade file

    <div class="g-recaptcha"
         data-sitekey="{{$googleSiteKey}}">
    </div>

    @error('g-recaptcha-response')
        <div class="text-red-500">
            <p>{{$message}}</p>
        </div>
    @enderror

    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

In php file

    public string $googleSiteKey;

    public function __construct()
    {
        $this->googleSiteKey = env('GOOGLE_SITE_KEY');
    }


# Usage

    <x-google-recaptcha></x-google-recaptcha>


