<footer>
    <div class="footer-logo-cont">
        <a href="{{ url('/') }}">{!! HTML::image('img/logo-footer.svgz', 'logo footer', array('class' => 'footer-logo')) !!}</a>
    </div>
    {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13')) !!}
    <div class="social-likes">
        <div class="social-container hidden">
            {{--<a href="https://twitter.com/PixsensLTD" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @PixsensLTD</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <div class="linkedin">
                <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                <script type="IN/FollowCompany" data-id="3834069" data-counter="right"></script>
            </div>--}}
            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FpixsensLTD&width=118&layout=button_count&action=like&size=small&show_faces=false&share=false&height=46&appId=1646316419027352" width="118" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            <a href="https://twitter.com/PixsensLTD" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @PixsensLTD</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            {{--<div><div class="g-plusone" data-size="medium" data-href="https://plus.google.com/+PIXSENSlT2014"></div></div>--}}
        </div>
    </div>
    <div class="footer-flex">
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13')) !!}
        <div class="footer-block footer-menu resp-pad-left">
            <ul class="footer-list">
                <li>{!! trans('footer.about-us') !!}</li>
                {{--<li><a href="{{ url(trans('routes.seo')) }}">{!! trans('footer.seo') !!}</a></li>
                <li><a href="{{ url(trans('routes.programming')) }}">{!! trans('footer.programming') !!}</a></li>
                <li><a href="{{ url(trans('routes.design')) }}">{!! trans('footer.design') !!}</a></li>--}}
                <li><a href="{{ url('/') }}">{!! trans('footer.home') !!}</a></li>
                <li><a href="{{ url(trans('routes.services')) }}">{!! trans('footer.services') !!}</a></li>
                <li><a href="{{ url(trans('routes.contacts')) }}">{!! trans('footer.contacts') !!}</a></li>
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13 footer-menu-sep')) !!}
        <div class="footer-block">
            <ul class="footer-list">
                <li>{!! trans('footer.contacts-details') !!}</li>
                <li>{!! trans('contacts.email-address') !!}</li>
                <li>{!! trans('footer.city') !!}</li>
                <li>{!! trans('contacts.phone-number') !!}</li>
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13 on500')) !!}
        <div class="footer-block">
            <ul class="footer-list with-icons">
                <li>{!! trans('footer.find-us') !!}</li>
                <li class="facebook"><a href="{!! env('FACEBOOK') !!}">Facebook</a></li>
                <li class="googleplus"><a href="{!! env('GOOGLEPLUS') !!}">Google+</a></li>
                <li class="twitter"><a href="{!! env('TWITTER') !!}">Twitter</a></li>
                <li class="linkedin"><a href="{!! env('LINKEDIN') !!}">LinkedIn</a></li>
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible mb13 px1150-none')) !!}
        <div class="footer-block resp-pad-right">
            <ul class="footer-list footer-tags">
                {!! trans('footer.services-list') !!}
            </ul>
        </div>
        {!! HTML::image('img/line.png', 'line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <div class="footer-block">
            <ul class="footer-list footer-tags mb13">
                <li>©{{ date('Y') }} Pixsens LTD</li>
            </ul>
        </div>
    </div>
</footer>