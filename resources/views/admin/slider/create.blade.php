@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row ml-0 mr-0 justify-content-center">
            <div  class="col-8">
                <div class="card">
                    <div class="card-header bg-success text-light">create slider</div>
                    <div class="card-body bg-light">
                       {!! Form::open(['route'=>'slider.store','method'=>'post','files'=>'true']) !!}
                        <div class="form-group">
                            <label>caption</label>
                            <input type="text" class="form-control" name="caption" placeholder="please your caption !">
                            @error('caption')
                            <div class="alert alert-danger text-center">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">alt</label>
                            <input type="text" name="alt" class="form-control" placeholder="please your alt?" >
                            @error('alt')
                            <div class="alert alert-danger text-center">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">image</label>
                            <input type="file"  name="image" class="form-control">
                            @error('image')
                            <div class="alert alert-danger text-center">{{$message}}</div>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-success btn-block rounded-pill">send slider</button>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
