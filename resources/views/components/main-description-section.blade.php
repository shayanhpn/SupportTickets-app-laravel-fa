<div class="card shadow-sm text-center">
  <div class="card-header bg-teal text-white">
    سیستم پشتیبانی تیکت
  </div>
  <div class="card-body">
    <h5 class="card-title">ثبت تیکت</h5>
    <p class="card-text">شما نیز می توانید برای مدیریت و پیگیری تیکت خود ابتدا ثبت نام کرده و سپس اقدام به ثبت تیکت کنید</p>
    @if(!auth()->check())<a href="{{route('register')}}" class="btn btn-lg btn-lightgreen mx-2 my-2">ثبت نام</a>@endif<a href="{{route('create-ticket')}}" class="btn btn-lg btn-lightgreen">ثبت تیکت</a>

  </div>
</div>
