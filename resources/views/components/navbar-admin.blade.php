<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">داشبورد</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create-ticket')}}">ثبت تیکت</a>
                </li>
                @if(auth()->user()->isAdmin)
                <li class="nav-item">
                    <a class="nav-link" href="#">لیست کاربران</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">لیست تیکت ها</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">تیکت های فعال</a>
                </li>
            </ul>

        </div>
        <a class="login-desktop mx-4">درود {{auth()->user()->firstname}}</a>
        <form class="mt-3" action="{{route('logout')}}" method="POST">@csrf @method('POST')<button type="submit" class="btn btn-danger">خروج</button></form>
    </div>
</nav>
