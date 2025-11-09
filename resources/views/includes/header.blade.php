


<!-- Main Header -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{asset('images/template/logo.png')}}" alt="Site Logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav-collapse">
            <form class="navbar-form navbar-left" method="get" action="/results">

                <select name="type">
                    <option value="movie" selected>Movie</option>
                </select>

                <input type="search" name="query" type="text" required>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
            <ul class="nav navbar-nav navbar-right">

                @foreach($categories as $category)
                <li class="">
                    <a href="{{route('category.single', ['id' => $category->id])}}">{{$category->name}}</a>
                </li>

                @endforeach


                <li class="dropdown">
                    <a href="/intro">소개</a>

                    <ul class="dropdown-menu" style="left: -9px; min-width: 100px;"  >
                        <li><a href="/snack">매점 안내</a></li>
                        <li><a href="/come">오시는 길</a></li>
                        <li><a href="/use">이용 안내</a></li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Main Header End -->


