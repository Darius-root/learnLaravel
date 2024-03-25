<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="Sale ">

    <title>@yield('title') </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">

    <!-- endinject -->
    <link rel="stylesheet" href="{{ asset('vendors/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    @php
        $route = request()->route()->getName();
    @endphp

    <nav class="nav justify-content-center bg-light">
        <a class="nav-link active" href="/">Agence</a>
        <!-- Explication de la ligne ci-dessous -->
        <!--
          Cette ligne génère un lien de navigation en fonction de la route actuelle.
          - Si la route active contient 'property.', alors le lien sera actif, ce qui signifie qu'il sera souligné.
          - Le texte du lien sera "Biens".
          - La classe 'nav-link' est toujours présente, même si le lien est actif ou pas.
          - Le lien mène vers la route 'property.show'.
          - Le lien est construit à l'aide d'une condition d'affichage, qui utilise la fonction 'class'.
          - La fonction 'class' prend un tableau de paires clé/valeur, où la clé est la classe, et la valeur est un booléen qui indique si la classe doit être présente ou non.
        -->
        <a href="{{route('property.index')}}" class="nav-link {{ Str::contains($route, 'property.') ? 'active' : '' }}">Biens</a>
        <!-- Fin de l'explication -->
    </nav>

    @yield('content')
</body>

</html>
