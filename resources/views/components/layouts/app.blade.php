<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
        <title>{{ $title ?? 'Page Title' }}    c'est chaud la chaleur</title>
    </head>
    <body>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId">
            <li class="nav-item">
                <a href="#tab1Id" class="nav-link active">Active</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#tab2Id">Action</a>
                    <a class="dropdown-item" href="#tab3Id">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#tab4Id">Action</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#tab5Id" class="nav-link">Another link</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link disabled">Disabled</a>
            </li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
        </div>
        
        <script>
            $('#navId a').click(e => {
                e.preventDefault();
                $(this).tab('show');
            });
        </script>
<div id="content mt-5">
            <ul class="timeline">
              <li class="event" data-date="12:30 - 1:00pm">
                <h3 class="title">Testing full component of livewire </h3>
                <p>              {{ $slot }}
                </p>
              </li>
            </ul>
          </div>
      
    </body>
</html>
