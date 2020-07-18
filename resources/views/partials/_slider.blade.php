

<div class="slider ">

    <div class="row mr-0 ml-0">
        <div class="col-12 ">
            <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        @foreach($slider as $item)
                        <li><img src="{{asset('images/slider/'.$item->image)}}" alt="{{$item->alt}}" title="{{$item->caption}}" id="wows1_0"/ ></li>

                        @endforeach
                    </ul>
                </div>
                <div class="ws_bullets">
                    <div>
                        <a href="#" title="2"><span><img src="{{asset('slider/data1/tooltips/2.jpg')}}"
                                                         alt="2"/>1</span></a>
                        <a href="#" title="3"><span><img src="{{asset('slider/data1/tooltips/3.jpg')}}"
                                                         alt="3"/>2</span></a>
                        <a href="#" title="4"><span><img src="{{asset('slider/data1/tooltips/4.jpg')}}"
                                                         alt="4"/>3</span></a>
                        <a href="#" title="5"><span><img src="{{asset('slider/data1/tooltips/5.jpg')}}"
                                                         alt="5"/>4</span></a>
                    </div>
                </div>
                <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">css
                        slider</a> by WOWSlider.com v8.8
                </div>
                <div class="ws_shadow"></div>
            </div>
        </div>
    </div>
</div>
