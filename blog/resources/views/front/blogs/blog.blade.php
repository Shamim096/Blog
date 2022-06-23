@extends('front.master')

@section('body')
    <section class="page-title overlay" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Our Blog</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('/') }}">Home</a>
                        </li>
                        <li>Our Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- blog-item -->
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top" src="{{ asset($blog->image) }}" style="height: 200px" alt="blog-thumbnail">
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="py-3 px-4 border-right text-center">
                                    <h3 class="text-primary mb-0">{{ $blog->created_at->format('d') }}</h3>
                                    <p class="mb-0">{{ $blog->created_at->format('M') }}</p>
                                </div>
                                <div class="p-3">
                                    <a href="{{ route('blog-details', ['id' => $blog->id]) }}" class="h4 font-primary text-dark">{{ $blog->title }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- blog-item -->
            </div>
        </div>
    </section>
    <!-- /blog -->
@endsection
