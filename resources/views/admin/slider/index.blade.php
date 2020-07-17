@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row  justify-content-center ml-0 mr-0">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success text-light">show info</div>
                    <div class="card-body bg-light">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>caption</th>
                                <th>iamge</th>
                                <th>alt</th>
                                <th>show</th>
                                <th>maneger</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($slider as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->caption}}</td>
                                    <td><img src="{{asset('images/slider/'.$item->image)}}" width="50xp" height="50px">
                                    </td>
                                    <td>{{$item->alt}}</td>
                                    <td><a href="{{route('slider.show',$item->id)}}"
                                           class="btn btn-success btn-sm rounded-pill">show</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['slider.destroy',$item->id],'method'=>'delete','files'=>true]) !!}
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill">delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('slider.create')}}" class="btn btn-secondary btn-block rounded-pill">create info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
