<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'firstname' => ['required','max:50'],
            'email' => ['required','email','max:255'],
            'title' => ['required','max:255'],
            'priority' => ['required','in:کم,متوسط,زیاد'],
            'section' => ['required','in:فنی,مالی,ارتباط عمومی'],
            'message' => ['required','max:2000']
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'وارد کردن نام الزامی است',
            'firstname.max' => 'کارکترهای ورودی بیش از حد مجاز',
            'email.required' => 'وارد کردن ایمیل الزامی است',
            'email.email' => 'لطفا ایمیل مجاز وارد کنید',
            'email.max' => 'کارکترهای ورودی بیش از حد مجاز',
            'title.required'=> 'وارد کردن عنوان الزامی است',
            'title.max' => 'کارکترهای ورودی بیش از حد مجاز',
            'priority.required' => 'وارد کردن اولویت الزامی می باشد',
            'priority.in' => 'لطفا از مقدار ورودی های مجاز استفاده کنید',
            'section.reuqired' => 'وارد کردن بخش الزامی می باشد',
            'section.in' => 'لطفا از مقدار ورودی های مجاز استفاده کنید',
            'message.required' => 'وارد کردن پیام الزامی می باشد',
            'message.max' => 'کارکترهای ورودی بیش از حد مجاز'
        ];
    }
}
