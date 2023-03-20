@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
    </div>
    @endif
    @if (Session::has('failure'))
    <div class="alert alert-danger">
        <p>{{ Session::get('failure') }}</p>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Bài viết
                    <a href="{{ ('/home') }}">Back</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-ressponsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Lượt xem</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Mô tả ngắn</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Ngày thêm</th>

                          </tr>
                        </thead>

                        <tbody>
                            @php
                                $i =0;
                            @endphp
                            @foreach ($post as $p)
                            @php
                                $i++;
                            @endphp
                          <tr>
                            <th scope="row">{{ $i }}</th>
                            <th scope="row">{{ $p->title }}</th>
                            <th scope="row">{{ $p->views }}</th>
                            <th scope="row"><img width="200px" src="{{ asset('uploads/'.$p->image)}}"></th>
                            <th scope="row">{!! substr( $p->short_desc,0,295) !!}</th>
                            <th scope="row">{{ $p->category->title }}</th>
                            <th scope="row">{{ $p->post_date }}</th>
                            <td>
                                <form action="{{ route('post.destroy',[$p->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                                </form>
                                <a class="btn btn-warning btn-sm"href="{{ route('post.show',[$p->id])}}">Edit</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
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
            {{-- <div width="5%" style="margin:6px">
                {{$post->links()}}
                </div> --}}
        </div>
        </div>
    </div>

  @endsection
