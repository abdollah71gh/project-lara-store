@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row ml-0 mr-0 justify-content-center">
            <div class="col-8">
                <div class="card">
                    @include('envelope.message')
                    <div class="card-header bg-success text-light">create about</div>
                    <div class="card-body bg-light">
                        {!! Form::open(['route'=>'about.store','method'=>'post','files'=>'true']) !!}
                        <div class="form-group">
                            <label>font</label>
                            <input type="number" class="form-control" name="font" placeholder="please your font !" min="16" max="40"
                                   value="16">
                            @error('font')
                            <div class="alert alert-danger text-center">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">color</label>
                            <input type="color" name="color" class="form-control" placeholder="please your color?">
                            @error('color')
                            <div class="alert alert-danger text-center">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>about</label>
                            <textarea class="form-control" name="about" placeholder="enter your about ?">
                            </textarea>
                        </div>
                    <button type="submit" class="btn btn-success btn-block rounded-pill my-2">send slider</button>
                    {!! Form::close() !!}
                    <a href="{{route('about.index')}}" class="btn btn-primary btn-block rounded-pill my-2">show
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
