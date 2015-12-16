<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/11/27
 * Time: 下午4:39
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Routing\Controller as BaseController;


class ResumeController extends BaseController {

    public function getIndex () {
        return view('resume.index')->with('navIndex', 2);
    }

    public function getSearch () {
        return view('resume.search')->with('navIndex', 2);
    }

    public function getView ($id) {
        return view('resume.view')->with('navIndex', 2)->with('id', $id);
    }
}