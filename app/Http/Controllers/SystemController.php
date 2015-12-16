<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;
use App\Menu;
use App\Manager;

class SystemController extends BaseController {
    public function getLogin () {
        return view('system.login');
    }

    public function postLogin () {
        $name = request()->input('name');
        $password = request()->input('password');

        $manager = Manager::whereRaw('name = ? and password = ?', [$name, md5($password)])->get();

        if ($manager->count()) {

            Session::set('name', $name);
            Session::set('power', 'manager');
            Session::set('nickname', $manager->first()->nickname);
            Session::set('navData', ManagerMenuData::jsonMenu());

            return response(['status'=>1, 'err_code'=>'-1', 'err_msg'=>'']);
        } else {
            return response(['status'=>0, 'err_code'=>'not found', 'err_msg'=>'用户名或密码不正确']);
        }
    }

    public function getLogout() {
        Session::flush();
        return redirect('/system/login');
    }

    public function getRegister() {
        return view('system.register');
    }

    public function postRegister() {
        $name = request()->input('name');
        $nickname = request()->input('nickname');
        $password = request()->input('password');

        $ret = ['status'=>1, 'err_code'=>'-1', 'err_msg'=>''];

        if (!isset($name) || !isset($nickname) || !isset($password)) {
            $ret['status'] = 0;
            $ret['err_code'] = 'params missed';
            $ret['err_msg'] = '参数缺失';
        } else {
            $count = Manager::where('name', '=', $name)->count();

            if ($count === 0) {
                $manager = new Manager();
                $manager->name = $name;
                $manager->nickname = $nickname;
                $manager->password = md5($password);
                $manager->save();
            } else {
                $ret['status'] = 0;
                $ret['err_code'] = 'email exist';
                $ret['err_msg'] = '邮箱已经被注册';
            }
        }
        return response($ret);
    }
}

class ManagerMenuData {

    public static function jsonMenu() {
        $menus = Menu::where('depth', 1)->where('status', 1)->where('belong_to', 'manager')->get()->sortBy('sort');
        $submenus = Menu::where('depth', 2)->where('status', 1)->where('belong_to', 'manager')->get()->sortBy('sort');

        function getSubs($subs, $mid) {
            $submenu = array();
            foreach ($subs as $sub) {
                if ($sub->parent_id == $mid) {
                    array_push($submenu, $sub);
                }
            }
            return $submenu;
        }

        $subList = array();

        foreach ($menus as $menu) {
            $subList[$menu->id] = getSubs($submenus, $menu->id);
        }

        return ['menus' => $menus, 'submenus' => $subList];
    }

}