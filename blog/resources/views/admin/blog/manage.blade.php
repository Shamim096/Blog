@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <table class="table" id="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->blogCategory->category_name }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->short_description }}</td>
                                    <td>{!! \Illuminate\Support\Str::words($blog->long_description, 20, '....') !!}</td>
                                    <td>
                                        <img src="{{ asset($blog->image) }}" alt="" style="height: 80px; width: 80px;">
                                    </td>
                                    <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="btn btn-sm btn-secondary">edit</a>
                                        <a href="{{ route('delete-blog', ['id' => $blog->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this data?')">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
