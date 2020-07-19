@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center ">
            <div class="col-12">
                <div class="card">
                    @include('envelope.message')
                    <div class="card-header text-light bg-secondary">show info</div>
                    <div class="card-body bg-light">
                        <table class="table table-hover ">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>image</th>
                                <th>show</th>
                                <th>maneger</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($gallery as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td> <img src="{{asset('images/gallery/'.$item->gallery)}}" width="60px"></td>

                                    <td><a href="{{route('gallery.show',$item->id)}}"
                                           class="btn btn-success btn-sm rounded-pill">show</a></td>
                                    <td>
                                        {!! Form::open(['route'=>['gallery.destroy',$item->id],'method'=>'delete']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill ">delete</button>
                                        <a href="{{route('gallery.edit',$item->id)}}" class="btn btn-success rounded-pill btn-sm">edit</a>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('gallery.create')}}"
                           class="btn btn-secondary rounded-pill btn-block">create</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
