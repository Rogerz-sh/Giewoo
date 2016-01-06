@extends('layout.header')
@section('title', '即沃咨询 - 文章&资讯')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrap bg-white margin-top-20 margin-bottom-20 padding-10">
                <h3 class="text-center" id="title">{{$art->title}}</h3>
                <div class="col-xs-12">
                    <blockquote>
                        <p class="indent gray line-height-10"><small id="blockquote">{{$art->blockquote}}</small></p>
                    </blockquote>
                </div>
                <div class="col-xs-12">
                    <div id="content" class="padding-30">{!!$art->content!!}</div>
                </div>
                <div class="col-xs-12 padding-50">
                    <p class="gray"><i>作者：<span id="author">{{$art->author}}</span></i> <i class="pull-right">发布日期：<span id="publish">{{date('Y-m-d', strtotime($art->publish))}}</span></i></p>
                    <div class="clearfix"></div>
                    <p class="gray">
                        @if($art->source == '原创')
                        <small>
                            即沃咨询诚意推荐<br>
                            版权声明：“即沃咨询”所推送文章除非确实无法确认，我们都会注明作者和来源。部分文章推送时未能与原作者取得联系。若涉及版权问题，烦请原作者联系我们，我们会在24小时内删除处理，谢谢！
                        </small>
                        @else
                        <small>
                            本文系即沃-猎头学堂原创文章，如要转载请遵循以下原则：<br>
                            1、欢迎原文转载，若非原文转载请标出处；<br>
                            2、如果是商业目的的转载，需经作者本人同意。
                        </small>
                        @endif
                    </p>
                </div>
                <div class="col-xs-12">
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
    <script src="/scripts/plugins/ajax.js"></script>
    <script src="/scripts/site/home.js"></script>
@stop