<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 15/10/26
 * Time: 下午4:08
 */
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\VirtualJob;
use Illuminate\Support\Facades\Session;


class VirtualJobController extends BaseController {

    public function getIndex () {
        return view('virtual-job.index')->with('navIndex', 1);
    }

    public function getJsonJobListData () {
        $data = VirtualJob::where('deleted_at', null)->get();
        return response($data);
    }

    public function getCreate () {
        return view('virtual-job.create')->with('navIndex', 1);
    }

    public function postCreate () {
        $newJob = request()->input('job');
        $job = new VirtualJob();
        foreach ($newJob as $key=>$value) {
            $job->$key = $value;
        }
        $job->created_by = Session::get('name');
        $job->save();
        return response($job->job_name);
    }

    public function getEdit ($id) {
        return view('virtual-job.edit')->with('navIndex', 1)->with('id', $id);
    }

    public function getJsonJobData ($id) {
        $job = VirtualJob::find($id);
        return response($job);
    }

    public function postEdit () {
        $editJob = request()->input('job');
        $job = VirtualJob::find($editJob['id']);
        foreach ($editJob as $key=>$value) {
            $job->$key = $value;
        }
        $job->updated_by = Session::get('name');
        $job->save();
        return response($job->id);
    }

    public function postDelete ($id) {
        $job = VirtualJob::find($id);
        $job->delete();
        return response($job->id);
    }
}
