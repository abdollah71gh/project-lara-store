@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row ml-0 mr-0 justify-content-center">
            <div class="col-8">
                <div class="card">
                    @include('envelope.message')
                    <div class="card-header bg-success text-light">create about</div>
                    <div class="card-body bg-light">
                        {!! Form::open(['route'=>['gallery.update',$gallery->id],'method'=>'put','files'=>true]) !!}
                        <div class="form-group">
                            <label>Gallery</label>
                            <input type="file" class="form-control " name="gallery" placeholder="please your image !">
                            <img src="{{asset('images/gallery/'.$gallery->gallery)}}" width="50px" height="50px" >

                            @error('gallery')
                            <div class="alert alert-danger text-center">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-block rounded-pill my-2">send slider</button>
                        {!! Form::close() !!}
                        <a href="{{route('gallery.index')}}" class="btn btn-primary btn-block rounded-pill my-2">show
                            info </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
