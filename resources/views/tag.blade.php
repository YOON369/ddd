

 @extends('layouts.frontend')


@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">{{$tag->tag}}</h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-wrap">
        <div class="section section-padding video-list-section">


            
            <div class="container">
                <div class="video-list">
                 @foreach($tag->posts as $post)                       
                    <div class="video-item">
                        <div class="video-thumb">
                            <img src="{{$post->featured}}" style="max-width: 200px;" alt="Movie thumb">
                        </div>
                        <div class="video-details">
                            <h3 class="video-title"><a href="{{route('post.single', ['slug' =>$post->slug ])}}">{{$post->title}}</a></h3>

                            <div class="video-attributes">
                                <p class="cast"><label>상영시간:</label>{{$post->time}}</p>
        
                            </div>
                                 <div class="share-on ">
                                    @foreach($post->tags as $tag)
                                    <div class="share-social">
                                        <a href="{{route('tag.single', ['id'=> $tag->id])}}" class="w-tags-item">{{$tag->tag}}</a>
                                    </div>
                                    @endforeach
                                </div>
                        </div>

                        <div class="watch-now-wrap">
                            <a class="btn-watch-now" href="{{route('post.single', ['slug' =>$post->slug ])}}">Watch Now</a>
                        </div>
                    </div>
                        @endforeach
                
                </div>
            </div>
        </div>
    </div>



@stop