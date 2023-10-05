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

    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top ">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <h3>تیکت و پشتیبانی</h3>
            </a>

        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>فهرست</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 1</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 2</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 3</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 4</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 5</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>تماس با ما</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 1</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 2</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 3</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 4</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 5</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>دسته بندی</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 1</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 2</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 3</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 4</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">مورد 5</a></li>
            </ul>
        </div>
    </footer>

</html>
