@extends('front.master')

@section('title')
    {{ $blog->title }}
@endsection

@section('body')
    <section class="page-title overlay" style="background-image: url({{ asset('/') }}front/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Blog Single</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('/') }}">Home</a>
                        </li>
                        <li>{{ $blog->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- blog single -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-100">
                    <div class="border rounded bg-white">
                        <img class="img-fluid w-100 rounded-top" src="{{ asset($blog->image) }}" alt="blog-image" style="height: 450px">
                        <div class="p-4">
                            <h3>{{ $blog->title }}</h3>
                            <ul class="list-inline d-block pb-4 border-bottom mb-3">
                                @php
                                    $author = \App\Models\User::find($blog->author_id);
                                @endphp
                                <li class="list-inline-item text-color">Posted By {{ $author->name }}</li>
{{--                                <li class="list-inline-item text-color">On {{ $blog->created_at->format('d M') }}</li>--}}
                                <li class="list-inline-item text-color">On {{ \Illuminate\Support\Carbon::parse($blog->created_at)->format('d F') }}</li>
{{--                                <li class="list-inline-item text-color">published {{ \Illuminate\Support\Carbon::parse($blog->created_at)->diffForHumans() }}</li>--}}
                            </ul>
                            <p style="text-align: justify">{!! $blog->long_description !!}</p>
                        </div>
                    </div>
                    <div class="py-4 border-bottom mb-100">
                        <div class="row">
                            <div class="col-lg-5 mb-4 mb-lg-0">
                                <!-- share-icon -->
                                <div class="d-flex">
                                    <span class="font-weight-light mt-2 mr-3">Share:</span>
                                    <ul class="list-inline d-inline-block">
                                        <li class="list-inline-item">
                                            <a class="share-icon bg-facebook" href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="share-icon bg-twitter" href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="share-icon bg-linkedin" href="#">
                                                <i class="ti-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="share-icon bg-google" href="#">
                                                <i class="ti-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <!-- tags -->
                                <div class="d-flex">
                                    <span class="font-weight-light mt-2 mr-3">Tags:</span>
                                    <ul class="list-inline tag-list">
                                        <li class="list-inline-item">
                                            <a href="#">Business</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">Marketing</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">Finance</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="bg-white px-4 py-100 sidebar-box-shadow">
                        <!-- Search Widget -->
                        <div class="mb-50">
                            <h4 class="mb-3">Search Here</h4>
                            <div class="search-wrapper">
                                <input type="text" class="form-control" name="search" placeholder="Type Here...">
                            </div>
                        </div>
                        <!-- categories -->
                        <div class="mb-50">
                            <h4 class="mb-3">Categories</h4>
                            <ul class="pl-0 mb-0">
                                @foreach($blogCategories as $blogCategory)
                                    <li class="border-bottom">
                                        <a href="#" class="d-block text-color py-10">{{ $blogCategory->category_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Widget Recent Post -->
                        <div class="mb-50">
                            <h4 class="mb-3">Recent News</h4>
                            <div class="d-flex py-3 border-bottom">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="images/blog/post-thumb-sm-01.jpg" alt="post-thumb">
                                    </a>
                                </div>
                                <div>
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Marketing Strategy 2017-2018.</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                            <div class="d-flex py-3 border-bottom">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="images/blog/post-thumb-sm-02.jpg" alt="post-thumb">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Jack Ma & future of E-commerce</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                            <div class="d-flex py-3">
                                <div class="mr-4">
                                    <a href="blog-single.html">
                                        <img class="rounded" src="images/blog/post-thumb-sm-03.jpg" alt="post-thumb">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="mb-3">
                                        <a class="text-dark" href="blog-single.html">Jack Ma & future of E-commerce</a>
                                    </h6>
                                    <p class="meta">16 Dec, 2018</p>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Tags -->
                        <div class="mb-50">
                            <h4 class="mb-3">Tags</h4>
                            <ul class="list-inline tag-list">
                                <li class="list-inline-item">
                                    <a href="#">Business</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Marketing</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Finance</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Consultancy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Market Analysis</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Rvenenue</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Newsletter -->
                        <div class="newsletter">
                            <h4 class="mb-3">Stay Updated</h4>
                            <form action="#">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /blog-single -->
@endsection
