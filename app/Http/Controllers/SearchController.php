<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/11/27
 * Time: 下午10:44
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Routing\Controller as BaseController;


class SearchController extends BaseController {

    public function getIndex () {
        return view('search.index')->with('navIndex', 4);
    }
}