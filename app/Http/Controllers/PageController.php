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

class PageController extends BaseController {

    private $jobIndustry = [
        "1"=>"IT&互联网",
        "2"=>"金融",
        "3"=>"房地产",
        "4"=>"机械制造",
        "5"=>"文件&养老&健康",
        "6"=>"消费品",
        "7"=>"化工 & 环保 & 能源",
        "8"=>"广告 & 传媒 & 教育",
        "9"=>"交通 & 贸易 & 物流",
        "10"=>"通信 & 电子 & 硬件"
    ];

    private $articleType = [
        "1"=>"职场动态",
        "2"=>"即沃研究院"
    ];

//    public function getJob($id) {
//        $job = $this->getJobData($id);
//        //$job->job_requires = str_replace(PHP_EOL, '<br/>', $job->job_requires);
//        //$job->job_desc = str_replace(PHP_EOL, '<br/>', $job->job_desc);
//        return view('site.job')->with('navIndex', -1)->with('job', $job);
//    }

    private function getJobData($id) {
        $job = VirtualJob::find($id);
        return $job;
    }

    private function getAreaJobListData() {
        $job1 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 1)
            ->orderBy('updated_at', 'desc')->take(5);

        $job2 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 2)
            ->orderBy('updated_at', 'desc')->take(5);

        $job3 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 3)
            ->orderBy('updated_at', 'desc')->take(5);

        $job4 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 4)
            ->orderBy('updated_at', 'desc')->take(5);

        $job5 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 5)
            ->orderBy('updated_at', 'desc')->take(5);

        $job6 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 6)
            ->orderBy('updated_at', 'desc')->take(5);

        $job7 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 7)
            ->orderBy('updated_at', 'desc')->take(5);

        $job8 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 8)
            ->orderBy('updated_at', 'desc')->take(5);

        $job9 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 9)
            ->orderBy('updated_at', 'desc')->take(5);

        $job10 = DB::table('virtual-jobs')
            ->select('id', 'job_name', 'salary', 'company_name', 'years', 'work_area', 'industry as type')
            ->where('deleted_at', null)->where('showing', 1)->where('industry', 10)
            ->orderBy('updated_at', 'desc')->take(5);

        $job = $job1->union($job2)->union($job3)->union($job4)->union($job5)->union($job6)
            ->union($job7)->union($job8)->union($job9)->union($job10)->get();

        return $job;
    }

    private function getUpdateData() {
        $data = DB::table('examples')
            ->where('deleted_at', null)->where('showing', 1)
            ->orderBy('publish', 'desc')->take(12)->get();
        return $data;
    }

    private function getArticleListData() {
        $article1 = DB::table('articles_new')
            ->select('id', 'title', 'picture', 'content', 'type')
            ->where('deleted_at', null)->where('type', 1)
            ->orderBy('date', 'desc')->take(8);

        $article2 = DB::table('articles_new')
            ->select('id', 'title', 'picture', 'content', 'type')
            ->where('deleted_at', null)->where('type', 2)
            ->orderBy('date', 'desc')->take(8);

        $article = $article1->union($article2)->get();
        return $article;
    }

    public function getIndex() {
        $job = $this->getAreaJobListData();
        $art = $this->getArticleListData();
        $update = $this->getUpdateData();
        return view('page.index')->with(['jobList'=>$job, 'artList'=>$art, 'banner'=>$update]);
    }

    public function getJobList($type=1) {
        $art = VirtualJob::where('industry', $type)->orderBy('created_at', 'desc')->get();
        return view('page.job-list')->with(['jobList'=>$art, 'industryList'=>$this->jobIndustry, 'industry'=>$this->jobIndustry[$type]]);
    }

    public function getJobView($id) {
        $job = VirtualJob::find($id);
        $jobs = VirtualJob::where('industry', $job->industry)->orderBy('created_at', 'desc')->take(10)->get();
        return view('page.job-view')->with(['job'=>$job, 'jobs'=>$jobs, 'industry'=>$this->jobIndustry[$job->industry]]);
    }

    public function getJobs($id=1) {
        return $this->getJobList($id);
    }

    public function getJob($id) {
        return $this->getJobView($id);
    }

    public function getArtList($type=1) {
        $art = Article::where('type', $type)->orderBy('date', 'desc')->get();
        $sideType = $type == 1 ? 2 : 1;
        $list = Article::select('id', 'title')->where('type', $sideType)->orderBy('date', 'desc')->take(10)->get();
        return view('page.art-list')->with(['artList'=>$art, 'list'=>$list, 'type'=>$type, 'typeList'=>$this->articleType]);
    }

    public function getArtView($id) {
        $art = Article::find($id);
        $list = Article::select('id', 'title')->where('type', $art->type)->orderBy('date', 'desc')->take(10)->get();
        return view('page.art-view')->with(['art'=>$art, 'list'=>$list, 'type'=>$this->articleType[$art->type]]);
    }

    public function getResearch($id=0) {
        if ($id == 0) {
            return $this->getArtList(2);
        } else {
            return $this->getArtView($id);
        }
    }

    public function getDynamic($id=0) {
        if ($id == 0) {
            return $this->getArtList(1);
        } else {
            return $this->getArtView($id);
        }
    }

    public function postUpload() {
        $file = request()->file('file');
        $filename = date('Y-m-d-H-i-s');
        $extension = $file->getClientOriginalExtension();
        $path = 'upload/article/pic/'.date('Y').'/'.date('m');
        $saveName = $filename.'.'.$extension;
        $file->move($path, $saveName);

        return response('"/'.$path.'/'.$saveName.'"');
    }

    public function getExampleList() {
        $examples = Example::orderBy('created_at', 'desc')->take(30)->get();
        $jobs = VirtualJob::orderBy('created_at', 'desc')->take(10)->get();
        return view('page.example-list')->with(['examples'=>$examples, 'jobs'=>$jobs]);
    }

    public function getExampleView($id) {
        $examples = Example::orderBy('created_at', 'desc')->take(10)->get();
        $example = Example::find($id);
        return view('page.example-view')->with(['example'=>$example, 'industryList'=>$this->jobIndustry, 'examples'=>$examples]);
    }

}
