<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/14
 * Time: 上午12:00
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {
    public function getIndex () {
        return view('user.index');
    }

    public function getLogin () {
        return view('user.login');
    }

    public function getRegister () {
        return view('user.register');
    }

    public function anyForget () {
        return redirect('/user/login');
    }
}