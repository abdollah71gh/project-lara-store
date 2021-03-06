<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @foreach($setting as $item)
    <title>{{$item->title}}</title>
    <meta name="keywords" content="{{$item->keywords}}">
    <meta name="description" content="{{$item->description}}">
    <meta name="author" content="{{$item->author}}">
    @endforeach
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="slider/engine1/style.css">
    <link rel="stylesheet" href="{{asset('plugin/dist/css/lumos.css')}}">
    @yield('css')

</head>
<body>
