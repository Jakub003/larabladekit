<div class="g-recaptcha"
     data-sitekey="{{$googleSiteKey}}">
</div>


@error('g-recaptcha-response')
    <div class="text-red-500">
        <p>{{$message}}</p>
    </div>
@enderror

<script src='https://www.google.com/recaptcha/api.js' async defer></script>
