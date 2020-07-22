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
                                <th>fullname</th>
                                <th>email</th>
                                <th>comment</th>
                                <th>show</th>
                                <th>maneger</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contact as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->fullname}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->comment}}</td>

                                    <td><a href="{{route('contact.show',$item->id)}}"
                                           class="btn btn-success btn-sm rounded-pill">show</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['contact.destroy',$item->id],'method'=>'delete']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill ">delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
