<div class="mob-menu mobile-menu">
    {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
    <ul class="mob-menu-list light">
        {{--<a href="{{ url(trans('routes.seo')) }}"><li><span>{!! trans('menu.mobile-seo') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.programming')) }}"><li><span>{!! trans('menu.mobile-programming') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.design')) }}"><li><span>{!! trans('menu.mobile-design') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}--}}
        <a href="{{ url('/') }}"><li><span>{!! trans('menu.mobile-home') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.services')) }}"><li><span>{!! trans('menu.mobile-services') !!}</span></li></a>
        {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
        <a href="{{ url(trans('routes.contacts')) }}"><li><span>{!! trans('menu.mobile-contacts') !!}</span></li></a>
    </ul>
    {!! HTML::image('img/menu-line.png', 'menu line', array('class' => 'seperator wide-seperator mob-visible')) !!}
    <div class="mob-menu-social">
        <div class="mob-social-cont">
            <a href="{!! env('FACEBOOK') !!}">{!! HTML::image('img/social-icons/f-icon.svgz', 'Facebook icon') !!}</a>
        </div>
        <div class="mob-social-cont">
            <a href="{!! env('GOOGLEPLUS') !!}">{!! HTML::image('img/social-icons/gplus-icon.svgz', 'Google icon') !!}</a>
        </div>
        <div class="mob-social-cont">
            <a href="{!! env('TWITTER') !!}">{!! HTML::image('img/social-icons/twitter-icon.svgz', 'Twitter icon') !!}</a>
        </div>
        <div class="mob-social-cont">
            <a href="{!! env('LINKEDIN') !!}">{!! HTML::image('img/social-icons/in-icon.svgz', 'LinkedIn icon') !!}</a>
        </div>
    </div>
</div>