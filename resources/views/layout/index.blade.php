<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{ url('assets/logo/favicon.png') }}" type="image/gif">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Import CSS -->
    @yield('css')
</head>

<body>
    <div>
        <div class="col-sm-12" style="background-color: #E5E5E5">
            <div class="d-flex offset-sm-1">
                <div class="col-sm-1 m-2">File a claim</div>
                <div class="col-sm-1 m-2">Mitra kunang</div>
                <div class="m-2">Asuransi embedded</div>
            </div>
        </div>
        <div class="d-flex offset-sm-1 justify-content-space-between">
            <nav class="navbar navbar-expand-sm bg-light">
                <div class="row justify-content-space-between">
                    <div class="col">
                        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    </div>
                    <div class="col-md-auto">
                        <input  type="text" class="form-control" style="width: 900px">
                    </div>
                    <div class="col-md-auto align-items-center">
                        <a class="col-sm-3"><img src="{{asset('img/icon/keranjang.png')}}" alt=""></a>
                    </div>
                    <div class="col-md-auto align-items-center">
                        <a class="col-sm-3"><img src="{{asset('img/icon/akun.png')}}" alt=""></a>
                    </div>
                    <div class="col">
                        <button class="btn form-control " style="background-color:#F64C72; color: white">Lapor Klaim</button>
                    </div>
                </div>
            </nav>
        </div>
    </div>



    @yield('content')

</body>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}"></script>

@stack('script')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.7/cropper.js" integrity="sha512-giNJUOlLO0dY67uM6egCyoEHV/pBZ048SNOoPH4d6zJNnPcrRkZcxpo3gsNnsy+MI8hjKk/NRAOTFVE/u0HtCQ==" crossorigin="anonymous"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LWJBTHGZ7D"></script>
 <!-- JQuery -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-LWJBTHGZ7D');
</script>

<script>
    // $('#editProfile').modal('show');
</script>
<!-- Import JS Script -->
@yield('script')

</html>
