@extends('layouts.app')

@section('content')

<div class="col-lg-3"  style="float: left;">
    <div class="card" >
        <div class="card-header text-center" > Posted</div>

        <div class="card-body text-center">
            {{$posts_count}}
        </div>
    </div>
</div>

<div class="col-lg-3" style="float: left;" >
    <div class="card" >
        <div class="card-header text-center">tashed Post</div>

        <div class="card-body text-center">
             {{$trashed_count}}
        </div>
    </div>
</div>

<div class="col-lg-3" style="float: left;">
    <div class="card">
        <div class="card-header text-center">Users</div>

        <div class="card-body text-center">
             {{$users_count}}
        </div>
    </div>
</div>

<div class="col-lg-3" style="float: left;">
    <div class="card">
        <div class="card-header text-center">Category</div>

        <div class="card-body text-center">
             {{$categories_count}}
        </div>
    </div>
</div>

@endsection
