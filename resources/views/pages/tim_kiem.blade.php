@extends('layout')
@section('content')
<!--start-single-->
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">

                <div class="about-one">

                    <h3>Từ khoá tìm kiếm : {{ $keywords }}</h3>
                </div>

                <div class="about-tre">
                    <div class="a-1">
                        <div class="row" style="margin:5px">
                        @foreach ($category as $key => $post)
                            <a href="{{ route('bai-viet.show',[$post->id]) }}">
                        <div class="col-md-6 abt-left">
                        <img width="100%" src="{{ asset('uploads/'.$post->image)}}
                        "alt="{{ Str::slug($post->title) }}"/>
                            <div class="col-md-6 abt-left">
                        <h6>{{ $post->category->title }}</h6>
                        <h3>{{ $post->title }}</h3>
                        <p>{!!  $post->short_desc !!} </p>
                        <label>{{ $post->post_date }}</label>

                            <a href="{{ route('bai-viet.show',[$post->id]) }}">Xem thêm...</a>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div>
                    </div>

                <div class="clearfix"></div>
                    </div>


                </div>
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Danh mục gợi ý</h3>
                    <ul>
                        @foreach ($category as $key => $cate_recom)


                        <li><a href="{{ route('danh-muc.show',[$cate_recom->id ,'slug'=>Str::slug($cate_recom->title)]) }}">{{ $cate_recom->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end-single-->
@endsection
