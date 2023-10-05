<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function messages()
    {
        return [
            'firstname.required' => 'وارد کردن نام الزامی است',
            'firstname.max' => 'حداکثر تعداد ورودی 50 کاراکتر می باشد',
            'lastname.required' => 'وارد کردن نام خانوادگی الزامی است',
            'lastname.max' => 'حداکثر تعداد ورودی 70 کاراکتر می باشد',
            'email.required' => 'وارد کردن ایمیل الزامی است',
            'email.email' => 'لطفا ایمیل را بصورت صحیح وارد کنید',
            'email.max' => 'حداکثر تعداد ورودی 255 کاراکتر می باشد',
            'password.required' => 'وارد کردن رمز عبور الزامی است',
            'password.min' => 'حداقل کاراکتر برای رمز عبور 6 حرف و رقم می باشد',
            'password.max' => 'حداکثر تعداد ورودی رمز عبور 20 حرف و رقم می باشد',
            'password.confirmed' => 'رمز عبور یکسان نمی باشد'
        ];
    }

    public function rules(): array
    {
        return [
            'firstname' => ['required','max:50'],
            'lastname' => ['required','max:70'],
            'email' => ['required','email','max:255'],
            'password' => ['required','min:6','max:20','confirmed']
        ];
    }
}
