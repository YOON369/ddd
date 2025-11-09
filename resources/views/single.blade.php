@extends('layouts.frontend')


@section('content')
<!-- Stunning Header -->






<div class="main-wrap text-center" style="margin-top: 30px;" >
    <div class="section video-single-section text-center">
        <div class="container">
            <div class="video-single text-center">

                <div class="row">
                    <div class="col-xs-6" style="float: none; margin-right: auto; margin-left: auto;">
                        <!-- <div class="img-responsive thumb-wrap single-thumb">
                            <img class="img-responsive" src="{{$post->featured}}" alt="">
                            <div class="thumb-hover">
                                <a class="play-video img-responsive" href="{{$post->youtube_movie}}"><i class="fa fa-play"></i></a>
                            </div>
                        </div> -->


                        <div class="upcomming-featured thumb-wrap video-item" style="50%">


                            <img class="img-responsive" src="{{$post->featured}}" width="100%" alt="Upcomming Featured">

                            <div class="thumb-hover">
                                <a class="play-video" href="{{$post->youtube_movie}}"><i class="fa fa-play"></i></a>
                            </div>
                        </div>

                        <div class="content-wrap">

                            <div class="video-details xs-top-40" style="width: 100%">
                                <div class="single-section" style="text-align: center;">
                                    <h3 class="video-title">{{$post->title}}</h3>
                                    <p class="video-release-date">{{$post->time}}</p>
                                    <div class="ratings-wrap" style="text-align: center;">
                                        <div class="expanded-rating">


                                        </div>
                                    </div>
                                    <div class="video-attributes">
                                        <p class="cast" ><label>기간 : &nbsp</label>{{$post->time}}</p>

                                    </div>


                                </div>

                                <div class="share-on text-center">
                                    <div class="share-social">
                                        @foreach($post->tags as $tag)
                                        <a href="{{route('tag.single', ['id'=> $tag->id])}}" style="font-size: 20px;" class="w-tags-item">{{$tag->tag}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="single-section video-entry" style="margin-top: 30px;">
                                <hr>
                                <h3 class="single-section-title text-center">내용</h3>
                                <div class="section-content text-center">
                                    <pre style="background-color: #ffffff; border: none;">{!! $post->content !!}</pre>
                                </div>
                                <hr>
                            </div>
                            @include('includes.disqus')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
