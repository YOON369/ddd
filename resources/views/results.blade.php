 @extends('layouts.frontend')


 @section('content')


 <!-- Page Header -->
 <div class="page-header">
    <div class="page-header-overlay">
        <div class="container">
            <h2 class="page-title">Search result: {{$query}}</h2>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="main-wrap">
    <div class="section section-padding video-list-section">



        <div class="container">
            <div class="video-list">
             @if($posts->count() > 0)
             @foreach($posts as $post)        
             <div class="video-item">
                <div class="video-thumb">
                    <img src="{{$post->featured}}" style="max-width: 200px;" alt="Movie thumb">
                </div>
                <div class="video-details">
                    <h3 class="video-title"><a href="{{route('post.single', ['slug' =>$post->slug ])}}">{{$post->title}}</a></h3>

                    <div class="video-attributes">
                        <p class="cast"><label>상영시간:</label> {{$post->time}}</p>

                    </div>

                </div>

                <div class="watch-now-wrap">
                    <a class="btn-watch-now" href="{{route('post.single', ['slug' =>$post->slug ])}}">Watch Now</a>
                </div>
            </div>
            @endforeach

            @else
            <h1 class="text-center">
                No result find
            </h1>
            @endif
        </div>
    </div>
</div>
</div>



@stop