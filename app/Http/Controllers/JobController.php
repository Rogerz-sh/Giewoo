<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/11/10
 * Time: 下午4:42
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Routing\Controller as BaseController;


class JobController extends BaseController {

    public function getIndex () {
        return view('job.index')->with('navIndex', 1);
    }

    public function getCreate () {
        return view('job.create')->with('navIndex', 1);
    }
}