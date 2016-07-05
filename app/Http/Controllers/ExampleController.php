<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Example;
use Illuminate\Support\Facades\Session;


class ExampleController extends BaseController {

    public function getIndex () {
        return view('example.index')->with('navIndex', 3);
    }

    public function getJsonJobListData () {
        $data = Example::orderBy('created_at', 'desc')->get();
        return response($data);
    }

    public function getCreate () {
        return view('example.create')->with('navIndex', 3);
    }

    public function postCreate () {
        $newJob = request()->input('job');
        $job = new Example();
        foreach ($newJob as $key=>$value) {
            $job->$key = $value;
        }
        $job->created_by = Session::get('name');
        $job->save();
        return response($job->job_name);
    }

    public function getEdit ($id) {
        return view('example.edit')->with('navIndex', 3)->with('id', $id);
    }

    public function getJsonJobData ($id) {
        $job = Example::find($id);
        return response($job);
    }

    public function postEdit () {
        $editJob = request()->input('job');
        $job = Example::find($editJob['id']);
        foreach ($editJob as $key=>$value) {
            $job->$key = $value;
        }
        $job->updated_by = Session::get('name');
        $job->save();
        return response($job->id);
    }

    public function postDelete ($id) {
        $job = Example::find($id);
        $job->delete();
        return response($job->id);
    }
}
