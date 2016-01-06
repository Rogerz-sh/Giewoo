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
        $data = Message::where('deleted_at', null)->orderBy('created_at', 'desc')->get();
        return response($data);
    }

    public function postDelete($id) {
        $msg = Message::find($id);
        $msg->delete();
        return response($msg->id);
    }

    public function postReply($id) {
        $msg = Message::find($id);
        $msg->replied = 1;
        $msg->replied_at = date('y-m-d h:i:s', time());
        $msg->replied_by = Session::get('name');
        $msg->save();
        return response($msg->id);
    }
}
