<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Message;
use Illuminate\Support\Facades\Session;


class MessageController extends BaseController {

    public function getIndex () {
        return view('message.index')->with('navIndex', 4);
    }

    public function getJsonMessageListData () {
        $data = Message::where('deleted_at', null)->get();
        return response($data);
    }


}
