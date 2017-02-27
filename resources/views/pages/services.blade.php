@extends('layout')
@section('title', trans('meta.services.title'))
@section('description', trans('meta.services.description'))
@section('header')
    @include('header')
@stop
@section('body_class', 'paslaugos select-color4')
@section('content')
    @include('menu')
    <div class="main-paslaugos">
        <div class="paslaugos-header">
            <h1 class="bold">{!! trans('services.header-text-1') !!}</h1>
            <span class="fs22">{!! trans('services.under-header-text-1') !!}</span>
        </div>

        <div class="sections">
            {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator only1024')) !!}
            <section class="seo-sec">
                <div class="paslaugos-button opacity1">
                    {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator first-seperator')) !!}
                    {!! HTML::image('img/seo-icon.svgz', 'separator line', array('class' => 'paslaugos-icon section-open')) !!}
                    <h2 class="blue bold section-open">{!! trans('services.seo') !!}</h2>
                    {!! HTML::image('img/arrow-down-blue.svgz', 'arrow down', array('class' => 'button-down section-open')) !!}
                    {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator mt-18')) !!}
                </div>

                <div class="hidden">
                    {!! HTML::image('img/hidden-icon-seo.svgz', 'secret image', array('class' => 'hidden-icon')) !!}
                    <p class="hidden-text">{!! trans('services.hidden-text-1') !!}</p>
                </div>

                <div class="button-content">
                    <div class="first-par mt20">
                        <span class="fs20 bold">Websites from <br/><span class="blue fs30">£299</span></span>
                        <ul style="text-align: left;">
                            <li>built with Wordpress</li>
                            <li>domain for £1.99/year</li>
                            <li>SEO ready</li>
                            <li>social integration</li>
                            <li>website security</li>
                            <li>modern design</li>
                            <li>Analytics integration</li>
                        </ul>
                    </div>
                    <div class="daugiau-button">
                        <span class="blue"><a class="button-link blue" href="#websites">{!! trans('services.more') !!}</a></span>
                    </div>
                </div>
            </section>

            <section class="prog-sec">
                <div class="paslaugos-button opacity1">
                    {!! HTML::image('img/programing-icon.svgz', 'development', array('class' => 'paslaugos-icon section-open')) !!}
                    <h2 class="green section-open">{!! trans('services.programming') !!}</h2>
                    {!! HTML::image('img/arrow-green.svgz', 'arrow down', array('class' => 'button-down section-open')) !!}
                    {!! HTML::image('img/line.png', 'development', array('class' => 'seperator mt-18')) !!}
                </div>

                <div class="hidden">
                    {!! HTML::image('img/hidden-icon-programavimas.svgz', 'secret image', array('class' => 'hidden-icon')) !!}
                    <p class="hidden-text">{!! trans('services.hidden-text-2') !!}</p>
                </div>

                <div class="button-content">
                    <div class="first-par mt20">
                        <span class="fs20 bold">Starting at <br/><span class="green fs30">£59/m</span></span>
                        <ul style="text-align: left;">
                            <li>one month for <span class="green">FREE</span> when paid annually</li>
                            <li><span class="green">25% OFF</span> any Web development services</li>
                            <li>24/7 website uptime monitoring</li>
                            <li>full functionality checks</li>
                        </ul>
                    </div>
                    <div class="daugiau-button">
                        <span class="green"><a class="button-link green" href="#maintenance">{!! trans('services.more') !!}</a></span>
                    </div>
                </div>
            </section>

            <section class="diz-sec">
                <div class="paslaugos-button opacity1">
                    {!! HTML::image('img/design-icon.svgz', 'design', array('class' => 'paslaugos-icon section-open')) !!}
                    <h2 class="orange section-open">{!! trans('services.design') !!}</h2>
                    {!! HTML::image('img/arrow-yellow.svgz', 'arrow down', array('class' => 'button-down section-open')) !!}
                    {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator mt-18')) !!}
                </div>

                <div class="hidden">
                    {!! HTML::image('img/hidden-icon-dizainas.svgz', 'secret image', array('class' => 'hidden-icon')) !!}
                    <p class="hidden-text">{!! trans('services.hidden-text-3') !!}</p>
                </div>

                <div class="button-content">
                    <div class="first-par mt20">
                        <span class="fs20 bold">We offer a price of <br/><span class="orange fs30">£29/h</span></span><br/>
                        <ul style="text-align: left;">
                            <li>the price is for the first 5 hours of work if it takes more than 10 hours</li>
                            <li>the default price is <span class="orange">£39/h</span></li>
                            <li><span class="orange">25% OFF</span> the default price if we already maintain your website</li>
                        </ul>
                    </div>
                    <div class="daugiau-button">
                        <span class="orange"><a class="button-link orange" href="#development">{!! trans('services.more') !!}</a></span>
                    </div>
                </div>
            </section>

        </div>

        <div class="kokybe-wrap" id="websites"></div>

        <div class="content-header">
            <h1 class="blue mt100 inline-block">Websites</h1>
            {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
        </div>

        <div class="flex-container mt20 design-containers">
            <div class="inline-block">
                {!! HTML::image('img/design-icons/wordpress.svg', 'wordpress logo', array('class' => 'centered-icon small-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">Websites from <span class="blue">£299</span></h2>
                    <p class="content-text">
                    <span class="bold blue">Features:</span> built with Wordpress, domain for £1.99/year, SEO ready, social integration, website security, modern design, Analytics integration
                    </ul>
                    </p>
                </div>
            </div>

            <div class="inline-block">
                {!! HTML::image('img/design-icons/laravel.svg', 'laravel icon', array('class' => 'centered-icon small-icon')) !!}
                <div class="paragraph">
                    <h2 class="bold">Custom solutions from <span class="blue">£999</span></h2>
                    <p class="content-text">We create custom websites using the most <span class="bold">trending and fast-growing <span class="blue">laravel</span></span> framework. Contact us to get the personal quote.</p>
                </div>
            </div>
        </div>

        <h2 class="blue fs30">***</h2>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                Simple is beautiful and customers don't want to be flummoxed by complex or distracting features. A great website is clean, beautiful to look at, optimised for a clean user journey and embedded with the functionality that the customer wants to use. The simpler and cleaner the site, the easier it is for clients to find the information they are looking for.
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                At Pixsens Services we offer beautifully designed, robustly built and expertly optimised digital services that deliver tangible, bottom-line benefits to your business.
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                Our programmers are adept at adapting your website to work across smartphones, tablets and all brands of digital device - adapting animation, function and visual elements for a perfect user experience.
            </p>
        </div>

        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator mt20')) !!}

        <div class="paragraph maxwidth780 text-center">
            <p class="content-text fs20">
                It's simple to have a website – contact us and we will do the job!
            </p>
        </div>

        <div class="contact-button">
            <span class="blue"><a class="button-link blue" href="{{ url(trans('routes.contacts')) }}">Contact Us Now</a></span>
        </div>

        <div class="inline-block" id="maintenance">
            <div class="content-header">
                <h1 class="mt100 green">Maintenance</h1>
                {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
                <span class="fs22 mt20 inline-block">Starting at <span class="bold green">£59/month</span></span>
                <ul class="inline-block">
                    <li>get one month <span class="green">FREE</span> when paid annually</li>
                    <li><span class="green">25% OFF</span> any Web development services</li>
                </ul>
            </div>
        </div>

        <h2 class="green fs30">***</h2>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                Even the most robustly-built, beautifully designed and future-proofed website will rapidly age and lose its value without an ongoing programme of maintenance and upgrade. Your new business website is your platform to e-commerce and your window to the digital world - so it's vital to continue to invest in this core marketing, sales and engagement channel.
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                We offer a range of specialist services to help you to do just that. Whether you need single and discrete pieces of one-off upgrade work or an ongoing retainer package to provide continuous review, development and evolution of your digital assets, we can help - with quality services delivered at cost effective prices.
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                From software updates through to backups, and from analytics through to link checking, we can take care of your website's ongoing maintenance, administration and update needs, so that you maximise the return in your digital asset.
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                <span class="bold green">Our web maintenance and upgrade services include:</span>
                <ul class="maintenance-ul">
                    <li><span><span class="bold">Full functionality checks</span> to ensure that your core functionality, plug-ins and other technical elements are working as they should</span></li>
                    <li><span><span class="bold">Technical analysis</span> - outage, downtime, website backup, website speed checks etc.</span></li>
                    <li><span>Security updates</span></li>
                    <li><span><span class="bold">24/7</span> website uptime monitoring</span></li>
                    <li><span><span class="bold">Recommendations</span> for upgrades, new functionalities, plug-ins and so forth</span></li>
                    <li><span><span class="bold">Fixing the problem</span> if it takes less than 30min</span></li>
                </ul>
            </p>
        </div>

        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator mt20')) !!}

        <div class="paragraph maxwidth780 text-center">
            <p class="content-text fs22">
                The prices are for basic Wordpress website and may vary depending on a website technologies, CMS, complexity, traffic etc.<br/>
            </p>
            <p class="content-text fs22">
                <span class="green">Contact us</span> to get a personal quote.
            </p>
        </div>

        <div class="contact-button">
            <span class="green"><a class="button-link green" href="{{ url(trans('routes.contacts')) }}">Contact Us Now</a></span>
        </div>

        <div class="inline-block" id="development">
            <div class="paragraph maxwidth780">
                <h1 class="mt100 orange">Web Development</h1>
                {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator wide-seperator mt20')) !!}
                <span class="fs22 mt20 inline-block">We offer a price of <span class="orange bold">£29/h</span></span></span>
                <p>
                    if we already maintain your website or for the first 5 hours if the work takes more than 10h.<br/>
                    <span class="bold">The default price is <span class="orange">£39/h</span></span>
                </p>
            </div>
        </div>

        <h2 class="orange fs30">***</h2>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                We specialise in finding and fixing the issues with your website quickly as well as developing new functionality or upgrading existing ones.
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                <span class="orange">Languages, CMS'es and frameworks we mostly work with are:</span>
                <ul class="development-ul">
                    <li><span>PHP, MySQL, JS, jQuery, HTML, CSS</span></li>
                    <li><span>Wordpress, Joomla</span></li>
                    <li><span>Laravel, Symfony</span></li>
                </ul>
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                For a successful business website, you need to ensure that functionality, design, user journeys and content are all optimised - giving your customers a superb, seamless experience that quickly takes them to the content they want to see.
            </p>
        </div>

        <div class="paragraph maxwidth780 text-center mob-not-center">
            <p class="content-text">
                Similarly, with technologies constantly evolving, we can manage the ongoing development and upgrade of your site to meet emerging standards and make it all the more engaging for your customers - whether this means improving loading times, correcting errors, creating a plug-in or functional module or migrating your servers or CMS. Our professional and expert team can deliver against any of your requirements, and will also make recommendations for development work as required.
            </p>
        </div>

        {!! HTML::image('img/line.png', 'separator line', array('class' => 'seperator mt20')) !!}

        <div class="paragraph maxwidth780 text-center">
            <p class="content-text fs22">
                <span class="orange">Contact us</span> for any help with your website.
            </p>
        </div>

        <div class="contact-button mb100">
            <span class="orange"><a class="button-link orange" href="{{ url(trans('routes.contacts')) }}">Contact Us Now</a></span>
        </div>

        <a href="#0" class="cd-top">Top</a>
    </div>
    @include('footer')
@stop