@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center ml-0 mr-0">
            <div class="col-8">
                <div class="card bg-light">
                    @include('envelope.message')
                    <div class="card-header bg-secondary text-light">setting</div>
                    <div class="card-body bg-light">
                        <form method="post" action="{{route('setting.store')}}">
                            @csrf
                            <div class="form-group">
                                <label>title</label>
                                <input type="text" class="form-control" name="title" placeholder="enter your title?">
                                @error('title')
                                <div class="alert alert-danger text-center">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>author</label>
                                <input type="text" class="form-control" name="author" placeholder="enter your author?">
                                @error('author')
                                <div class="alert alert-danger text-center">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>keywords</label>
                                <textarea class="form-control" name="keywords"
                                          placeholder="enter your keywords?"></textarea>
                                @error('keywords')
                                <div class="alert alert-danger text-center">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>description</label>
                                <textarea class="form-control" name="description"
                                          placeholder="enter your description?"></textarea>
                                @error('description')
                                <div class="alert alert-danger text-center">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block rounded-pill my-3">send</button>
                            <a href="{{route('setting.index')}}" class="btn btn-info btn-block rounded-pill">show index</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
