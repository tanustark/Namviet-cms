@extends('layouts.master')

@section('title')
    Edit Post
@endsection

@section('top-navbar')
    @include('Shared.top-navbar')
@endsection

@section('left-navbar')
    @include('Shared.post-left-navbar')
@endsection

@section('content')
    <div class="container">
        <div class="col-lg-9 container">
            <div class="page-wrapper">
                <div class="page-header" style="text-align: center">
                    <h1>Edit Your Post</h1>
                    <p>*You can edit your post here</p>
                </div>

                <form method="POST" action="/posts/{{ $post->id }}/update" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    </div>

                    <div class="form-group">
                        <label for="image_file">Cover Image</label>
                        <input type="file" id="image_file" name="image_file">
                        <p class="help-block">This is image will be shown as your post's cover image.</p>
                    </div>

                    <div class="form-group">
                        <textarea type="text" class="form-control" name="body">{{ $post->body }}</textarea>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-success"  data-toggle="modal" data-target="#updateSuccess">Update</button>
                        <a href="/posts/manage" class="btn btn-primary" role="button">Back</a>

                        <!-- Modal -->
                        <div id="updateSuccess" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="{{ URL::to('/') }}/assets/img/check.png" width="100" height="100">
                                        <hr>
                                        <br><br>
                                        <p style="text-align: center; font-size: 16pt">Your post is updated successfully</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection