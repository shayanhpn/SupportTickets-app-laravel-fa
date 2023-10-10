<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{route('main')}}">{{Route::is('main') ? 'ارسال تیکت' : 'داشبورد'}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('main') ? 'active' : ''}}" aria-current="page" href="{{route('main')}}">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('create-ticket') ? 'active' : ''}}" href="{{route('create-ticket')}}">ثبت تیکت</a>
                </li>
                @auth
                @if(auth()->user()->isAdmin)
                <li class="nav-item">
                    <a class="nav-link {{Route::is('admin.show.users') ? 'active' : ''}}" href="{{route('admin.show.users')}}">لیست کاربران</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('admin.show.tickets') ? 'active' : ''}}" href="{{route('admin.show.tickets')}}">لیست تیکت ها</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('client.active.tickets')}}">تیکت های فعال من</a>
                </li>
                @endif
                @endauth
            </ul>

        </div>
        @auth
        <h5><a href="{{route('client.panel')}}" class="badge bg-teal shadow-sm">حساب کاربری</a></h5>
        <form class="mt-2 mx-4" action="{{route('logout')}}" method="POST">@csrf @method('POST')<button type="submit" class="btn btn-sm btn-danger shadow-sm">خروج</button></form>
        @else
            <a class="btn btn-sm teal login-desktop" href="{{route('login')}}">ورود/ثبت نام</a>
        @endauth
    </div>
</nav>
