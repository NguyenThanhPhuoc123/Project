<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate(
                [
                    "firstName" => 'required',
                    "lastName" => 'required',
                    "email" => 'required|email|unique:users',
                    "password" => 'required|confirmed|min:6',
                    "password_confirmation" => 'required'
                ],
                [
                    "firstName.required" => 'Không được để trống First Name',
                    "lastName.required" => 'Không được để trống Last Name',
                    "email.required" => 'Không được để trống Email',
                    "email.email" => 'Vui lòng nhập email hợp lệ Email',
                    "email.unique" => 'Email đã tồn tại',
                    "password.required" => 'Không được để trống Password',
                    "password.min" => 'Password ít nhất 6 ký tự',
                    "password.confirmed" => 'Password nhập lại không đúng',
                    "password_confirmation.required" => 'Không được để trống Password Confirmation',
                ]
            );

            try {
                $result =    User::create([
                    'name' => $request->input('firstName'),
                    'email' => $request->input('email'),
                    'password' =>   Hash::make($request->input('password')),
                    // 'password' => $request->input('password'),
                    // Mã hóa
                ]);
                if ($result->id > 0) {
                    // tạo ra 'success'  .flash dùng 1 lần mất đi
                    $request->session()->flash('success', 'Đăng ký thành công!');
                } else {
                    $request->session()->flash('error', 'Lỗi thêm dữ liệu!');
                }
            } catch (\Exception $ex) {
                $request->session()->flash('error', $ex);
            }
        }
        return view('user.register');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->validate(
                [
                    "email" => 'required|email',
                    "password" => 'required',
                ],
                [
                    "email.required" => 'Không được để trống Email',
                    "email.email" => 'Vui lòng nhập email hợp lệ Email',
                    "password.required" => 'Không được để trống Password',
                ]
            );

            if (Auth::attempt($data)) {
                // chứa thông tin đăng nhập
                $request->session()->regenerate();

                return redirect()->route('home');
            }

            return back()->withErrors([
                'email' => 'Email hoặc mật khẩu sai',
            ]);
        }

        return view('user.login');
    }
}
