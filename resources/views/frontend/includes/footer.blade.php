<footer class="footer mt-5">
    <div class="footer-copyright text-center py-1">
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3">
                <div class="col-12 mx-auto mb-4">
                    <h3 class="font-weight-bold">{!! __('Contact us') !!}</h3>
                    <hr class="accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 128px;">
                    @if(config('contact.facebook.active'))
                        <p class="text-left"><a href="https://www.facebook.com/{{ config('contact.facebook.url') }}"><i class="fab fa-facebook-square mr-3"></i> {{ config('contact.facebook.name') }}</a></p>
                    @endif
                    @if(config('contact.email.active'))
                        <p class="text-left"><a href="mailto:{{ config('contact.email.address') }}"><i class="fas fa-envelope mr-3"></i> {{ config('contact.email.address') }}</a></p>
                    @endif
                </div>
            </div>
        </div>
        <hr class="accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60%;">
        <p class="mt-4">{!! __('Copyright © :year :appName. All rights reserved. Powered by :appName.', ['year' => date('Y'), 'appName' => appName()]) !!}</p>
    </div>
</footer>
