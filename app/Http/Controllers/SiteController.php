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
use App\Article;
use App\Example;
use App\Message;
use Illuminate\Support\Facades\DB;

class SiteController extends BaseController {

    public function getJob($id) {
        $job = $this->getJobData($id);
        //$job->job_requires = str_replace(PHP_EOL, '<br/>', $job->job_requires);
        //$job->job_desc = str_replace(PHP_EOL, '<br/>', $job->job_desc);
        return view('site.job')->with('navIndex', -1)->with('job', $job);
    }

    private function getJobData($id) {
        $job = VirtualJob::find($id);
        return $job;
    }

    private function getAreaJobListData() {
        $job1 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 1)
            ->orderBy('updated_at', 'desc')->take(3);

        $job2 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 2)
            ->orderBy('updated_at', 'desc')->take(3);

        $job3 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 3)
            ->orderBy('updated_at', 'desc')->take(3);

        $job4 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 4)
            ->orderBy('updated_at', 'desc')->take(3);

        $job5 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 5)
            ->orderBy('updated_at', 'desc')->take(3);

        $job6 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 6)
            ->orderBy('updated_at', 'desc')->take(3);

        $job = $job1->union($job2)->union($job3)->union($job4)->union($job5)->union($job6)->get();

        return $job;
    }

    private function getArticleListData() {
        $article1 = DB::table('articles')
            ->select('id', 'title', 'publish', 'type')
            ->where('deleted_at', null)->where('showing', 1)->where('type', 1)
            ->orderBy('publish', 'desc')->take(6);

        $article2 = DB::table('articles')
            ->select('id', 'title', 'publish', 'type')
            ->where('deleted_at', null)->where('showing', 1)->where('type', 2)
            ->orderBy('publish', 'desc')->take(6);

        $article3 = DB::table('articles')
            ->select('id', 'title', 'publish', 'type')
            ->where('deleted_at', null)->where('showing', 1)->where('type', 3)
            ->orderBy('publish', 'desc')->take(6);

        $article4 = DB::table('articles')
            ->select('id', 'title', 'publish', 'type')
            ->where('deleted_at', null)->where('showing', 1)->where('type', 4)
            ->orderBy('publish', 'desc')->take(6);

        $article = $article1->union($article2)->union($article3)->union($article4)->get();
        return $article;
    }

    private function getUpdateData() {
        $data = DB::table('examples')
            ->where('deleted_at', null)->where('showing', 1)
            ->orderBy('publish', 'desc')->take(16)->get();
        return $data;
    }

    public function postCreateMessage() {
        $msg = request()->input('message');
        $message = new Message();
        foreach ($msg as $key=>$value) {
            $message->$key = $value;
        }
        $message->save();
        return response($message->id);
//        DB::insert('insert into messages (name, tel, email, type, created_at, updated_at) values (?, ?, ?, ?, ?, ?)', [$msg->name, $msg->tel, $msg->type, getdate(), getdate()]);
//        return response('1');
    }

    public function getIndex() {
        $url = strtolower(request()->url());
        $job = $this->getAreaJobListData();
        if (strpos($url, 'wap.giewoo') === false) {
            $art = $this->getArticleListData();
            $update = $this->getUpdateData();
            return view('site.index')->with(['navIndex'=>0, 'jobList'=>$job, 'artList'=>$art, 'updateList'=>$update]);
        } else {
            return view('site.mobile')->with('jobList', $job);
        }
    }

    public function getHunter() {
        return view('site.hunter')->with('navIndex', 1);
    }

    public function getTrain() {
        return view('site.train')->with('navIndex', 2);
    }

    public function getConsult() {
        return view('site.consult')->with('navIndex', 2);
    }

    public function getExample() {
        return view('site.example')->with('navIndex', 3);
    }

    public function getCareer() {
        return view('site.career')->with('navIndex', 4);
    }

    public function getJobList() {
        $job = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'work_area')
            ->where('deleted_at', null)->where('showing', 1)
            ->orderBy('updated_at', 'desc')->take(50)->get();

        return response($job);
    }

    public function getClub() {
        return view('site.club')->with('navIndex', 5);
    }

    public function getJoin() {
        return view('site.join')->with('navIndex', 6);
    }

    public function getAbout() {
        return view('site.about')->with('navIndex', -1);
    }

    private function getArticleData($id) {
        $art = Article::find($id);
        return $art;
    }

    public function getArticle($id) {
        $art = $this->getArticleData($id);
        return view('site.article')->with('navIndex', -1)->with('art', $art);
    }

    public function getMobile() {
        $job = $this->getAreaJobListData();
        return view('site.mobile')->with('jobList', $job);
    }

}
