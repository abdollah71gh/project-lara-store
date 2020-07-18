<div class="about">
    <div class="row ml-0 mr-0">
        <div class="col-10 offset-1">
            <h2 class="text-center text-capitalize">about me </h2>
            <div class="borderAbout"></div>
            @foreach($about as $item)
                <h6 style="font-size: {{$item->font}}px;color: {{$item->color}}">
                    {{$item->about}}
                    @endforeach
                </h6>
        </div>
    </div>
</div>
