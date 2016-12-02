<!DOCTYPE html>
<html lang="{{ trans('layout.lang') }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description')">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <link href='{!! env('GOOGLEPLUS') !!}' rel='publisher'>
    {!! HTML::style('css/app.css', array(), false) !!}
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '{{ trans('layout.analytics') }}', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body class="@yield('body_class')">
    <div id="fb-root"></div>
    <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "Pixsens",
      "url" : "http://www.pixsens.co.uk",
      "sameAs" : [
        "{!! env('FACEBOOK') !!}",
        "{!! env('TWITTER') !!}",
        "{!! env('GOOGLEPLUS') !!}",
        "{!! env('LINKEDIN') !!}"
     ]
    }
    </script>
    @yield('header')
    @yield('content')
    {!! HTML::script('js/all.js', array(), false) !!}
    <script src="https://apis.google.com/js/platform.js" async defer>
        {lang: 'en-GB'}
    </script>
    <!--Start of Tawk.to Script-->
    {{--<script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/'+'{{ trans('layout.tawk') }}'+'/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>--}}
    <!--End of Tawk.to Script-->
    @yield('scripts')
</body>
</html>
