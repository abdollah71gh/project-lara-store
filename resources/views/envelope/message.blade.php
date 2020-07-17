{{--@if($errors->any())--}}
{{--    <div class="lord ">--}}
{{--        @foreach($errors->all() as $item)--}}

{{--            <ul>--}}
{{--                <li class="alert alert-danger text-center"> {{$item}}</li>--}}
{{--            </ul>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--@endif--}}

@if(session('success'))

    <div class="alert alert-success">{{session('success')}}</div>

    @endif

@if(session('danger'))

    <div class="alert alert-danger">{{session('danger')}}</div>

@endif

