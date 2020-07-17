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
                                <th>title</th>
                                <th>author</th>
                                <th>keywords</th>
                                <th>description</th>
                                <th>show</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($setting as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->author}}</td>
                                    <td>{{substr($item->keywords,5)}}</td>
                                    <td>{{substr($item->description,5)}}</td>

                                    <td><a href="{{route('setting.show',$item->id)}}"
                                           class="btn btn-success btn-sm rounded-pill">show</a></td>
                                    <td>
                                        {!! Form::open(['route'=>['setting.destroy',$item->id],'method'=>'delete']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill">delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('setting.create')}}"
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
