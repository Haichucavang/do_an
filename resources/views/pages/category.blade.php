@extends('layout')
@section('content')
<!--start-single-->
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">

                <div class="about-one">

                    <h3>{{ $title_category->title }}</h3>
                </div>
                <div class="about-two">
                    <p>{{ $title_category->short_desc }}</p>
                    <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
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
                    {{-- {{$category_post->links() }} --}}
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item"><a class="page-link" href="">1</a></li>

                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>


                </div>
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Danh mục gợi ý</h3>
                    <ul>
                        @foreach ($category_recomment as $key => $cate_recom)


                        <li><a href="{{ route('danh-muc.show',[$cate_recom->id ,'slug'=>Str::slug($cate_recom->title)]) }}">{{ $cate_recom->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="abt-2">
                    <h3>Bài viết xem nhiều</h3>
                    @foreach ($viewest_post as $key =>$new )
                    <a href="{{ route('bai-viet.show', [$new->id]) }}">

                    <div class="might-grid">
                        <div class="grid-might">
                            <img src="{{ asset('uploads/'.$new->image) }}" class="img-responsive" alt="">

                        </div>
                        <div class="might-top">
                            <h4><a href="{{ route('bai-viet.show', [$new->id]) }}">{{ $new->title }}</a></h4>
                            <p>{!! substr($new->short_desc,0,104) !!}...</p>
                            <a href="{{ route('bai-viet.show', [$post->id]) }}">Xem thêm...</a>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </a>
                    @endforeach
                </div>


            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end-single-->
@endsection
