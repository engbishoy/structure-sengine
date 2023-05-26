<head>
    <meta charset="utf-8" />
    @yield('pageHead')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="central-host" content="{{ env('APP_URL') }}" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
        @yield('pageStyle')
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link rel="stylesheet" href="{{asset('/themes/metro8/assets/plugins/bundle/plugins.bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('/themes/metro8/assets/css/bundle/style.bundle.css')}}" />
    <link rel="stylesheet" href="{{asset('/themes/metro8/assets/css/bundle/custom.css')}}" />
    <!--end::Global Stylesheets Bundle-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>