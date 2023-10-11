<?php

namespace App\Http\Controllers\capthca;

use App\Http\Controllers\Controller;
use Mews\Captcha\Facades\Captcha;

class CaptchaController extends Controller
{
    public function reloadCaptcha()
    {
        return Captcha::src('default');
    }
}
