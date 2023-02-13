<div class="g-recaptcha"
     data-sitekey="{{$googleSiteKey}}">
</div>


@error('g-recaptcha-response')
    <div class="text-red-500">
        <p>{{$message}}</p>
    </div>
@enderror

<script src='https://www.google.com/recaptcha/api.js' async defer></script>

<script>
    window.addEventListener('load', () => {
        const $recaptcha = document.querySelector('#g-recaptcha-response');
        if ($recaptcha) {
            $recaptcha.setAttribute('required', 'required');
        }
    })
</script>

<style>
    #g-recaptcha-response {
        display: block !important;
        position: absolute;
        margin: -78px 0 0 0 !important;
        width: 302px !important;
        height: 76px !important;
        z-index: -999999;
        opacity: 0;
    }
</style>
