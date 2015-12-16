<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;



class EnterpriseController extends BaseController {

    public function getIndex () {
        return view('enterprise.index')->with('navIndex', 0);
    }
}
