@extends('layout')
@section('content')
    @include('pages.banner')

    <div class="about">
        <div class="container">
            <div class="about-main">
                <div class="row">
                    <div class="col-md-8 about-left">
                        <div class="about-tre">
                            <div class="a-1">
                                <div class="row" style="margin:5px">

                                    @foreach ($all_post as $key => $post)
                                    <a href="{{ route('danh-muc.show',[$post->category->id ,'slug'=>Str::slug($post->category->title)]) }}">{{ $post->category->title }}</a>
                                        <a href="{{ route('bai-viet.show', [$post->id]) }}">
                                            <div class="col-md-6 abt-left">
                                                <img width="100%"
                                                    src="{{ asset('uploads/' . $post->image) }}
                            "alt="{{ Str::slug($post->title) }}" />
                                                <div class="col-md-12">
                                                    <h6>{{ $post->category->title }}</h6>
                                                    <h3>{{ $post->title }}</h3>
                                                    <p>{!! $post->short_desc !!} </p>
                                                    <label>{{ $post->post_date }}</label>
                                                    <a href="{{ route('bai-viet.show', [$post->id]) }}">Xem thêm...</a>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- {{ $all_post->links() }} --}}
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
                    <div class="col-md-4 about-right heading">

                        <div class="abt-2">
                            <h3>Bài viết mới nhất</h3>
                            @foreach ($newest_post as $key =>$new )
                            <div class="might-grid">
                            <a href="{{ route('danh-muc.show',[$new->category->id ,'slug'=>Str::slug($new->category->title)]) }}">{{ $new->category->title }}</a>
                            <a href="{{ route('bai-viet.show', [$new->id]) }}">


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
                        <div class="abt-2">
                            <h3>Bài viết xem nhiều</h3>
                            <ul>
                                @foreach ($viewest_post as $key =>$view )
                                <li><a href="{{ route('bai-viet.show', [$view->id]) }}">{{ $view->title }}</a></li>
                                    @endforeach
                            </ul>
                        </div>
                        <div class="abt-2">
                            <h3>NEWS LETTER</h3>
                            <div class="news">
                                <form>
                                    <input type="text" value="Email" onfocus="this.value = '';"
                                        onblur="if (this.value == '') {this.value = 'Email';}" />
                                    <input type="submit" value="Đăng ký">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
