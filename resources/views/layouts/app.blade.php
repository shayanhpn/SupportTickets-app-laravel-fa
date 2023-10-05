<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>یک اپ تیکت</title>
</head>
@if(session('success'))
    <div class="alert alert-success rounded-0 top-0 mx-4 my-4 position-absolute" role="alert">
        {{session('success')}}
    </div>
@endif
@if(session('danger'))
    <div class="alert alert-danger rounded-0 top-0 mx-4 my-4 position-absolute" role="alert">
        {{session('danger')}}
    </div>
@endif
<body class="bg-light">

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://kit.fontawesome.com/add5785b56.js" crossorigin="anonymous"></script>
</body>

<div class="container-fluid {{Route::is('create-ticket','register','show.update.user') ? '' : 'position-absolute'}} w-100 bottom-0">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">کپی رایت 2023 - شایان</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
    </footer>
</div>


</html>
