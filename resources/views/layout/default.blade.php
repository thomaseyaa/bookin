<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title-->
    <title>Bookin</title>
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&amp;display=swap&amp;subset=latin-ext" rel="stylesheet">
    <!-- Style CSS-->
    <link href="/css/style.css" rel="stylesheet">
    <!-- Libs CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="/css/aos.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">

    <!-- Google Map Script-->
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Bookin store
            const paris = { lat: 48.86835780785306, lng: 2.3505001450936724 };
            // The map, centered at Bookin store
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: paris,
            });
            // The marker, positioned at Bookin store
            const marker = new google.maps.Marker({
                position: paris,
                map: map,
            });
        }
    </script>
</head>
<body>
<!-- Header-->
@include('include.header')

<!-- Body-->
@yield('content')

<!-- Footer-->
@include('include.footer')

<!-- Scripts-->
<script src="/js/aos.js"></script>
<script src="/js/app.js" type="module"></script>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/jquery.bootstrap-autohidingnavbar.min.js"></script>
<script src="/js/jquery.inview.min.js" type="module"></script>
<script src="/js/pace.min.js" type="module"></script>
</body>

