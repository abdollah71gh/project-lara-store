@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row  justify-content-center ml-0 mr-0">
            <div class="col-12">
                <div class="card">
                    @include('envelope.message')
                    <div class="card-header bg-success text-light">show info</div>
                    <div class="card-body bg-light">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>font</th>
                                <th>color</th>
                                <th>about</th>
                                <th>show</th>
                                <th>maneger</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($about as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->font}} </td>
                                    <td>{{$item->color}} <h4 style="background-color: {{$item->color}}">color </h4></td>
                                    <td>{{$item->about}}</td>
                                    <td><a href="{{route('about.show',$item->id)}}"
                                           class="btn btn-success btn-sm rounded-pill">show</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route'=>['about.destroy',$item->id],'method'=>'delete','files'=>true]) !!}
                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill">delete</button>
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('about.create')}}" class="btn btn-secondary btn-block rounded-pill">create info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
