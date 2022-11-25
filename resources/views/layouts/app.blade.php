<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SymbIoTic has devoted all its work to help regions affected by any element of climate change to reduce food & water scarcity, improving resilience to natural disasters, connecting poor regions with ones that are willing to help.">
    <meta name="author" content="Tino Botic">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="SymbIoTic" />
    <meta property="og:image" content="{{ asset('img/ireact-platform.png') }}" />
    <meta property="og:url" content="http://symbiotic.hr" />
    <meta property="og:site_name" content="SymbIoTic - IoT development | Vertical Farming | Disaster Management" />
    <meta property="og:description" content="SymbIoTic has devoted all its work to help regions affected by any element of climate change to reduce food & water scarcity, improving resilience to natural disasters, connecting poor regions with ones that are willing to help." />

    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <title>{{ config('app.name', 'Symbiotic') }}</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom/style.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js" defer></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-43F9Q982SH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-43F9Q982SH');
  </script>

  <script>
  jQuery(document).ready(function($){
    $('.owl-carousel').owlCarousel({
      autoplay:true,
      loop:true,
      dots: false,
      margin:10,
      nav:false,
      lazyLoad: true,
      responsive:{
        0:{
          items:3
        },
        600:{
          items:4
        },
        1000:{
          items:5
        }
      }
    })
  })
  </script>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '6e2b671452e63eea37179994a8bd188465b86a65';

_smartsupp.privacyNoticeEnabled = false; // privacy notice visibility in chat widget
_smartsupp.privacyNoticeUrl = "#"; // URL of your privacy page

window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);

</script>

</head>

<body>
    <div id="app">
            @yield('header')
            @yield('content')
            @yield('footer')
    </div>
</body>
</html>
