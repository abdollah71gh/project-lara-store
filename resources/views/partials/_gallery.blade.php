<div class="gallery">
    <div class="row ml-0 mr-0">
        <div class="col-10 offset-1">
            <h1 class="text-center">Gallery</h1>
            <div class="borderGallery"></div>
            <div class="row ml-0 mr-0">
                <div class="col-10 offset-1">
                    <div class="row mr-0 mr-0">
                        @foreach($gallery as $itme)
                        <div class="col-4 my-2">
                            <a class="lumos-link" href="{{asset('images/gallery/'.$itme->gallery)}}">
                                <img src="{{asset('images/gallery/'.$itme->gallery)}}" class="img-fluid">
                            </a>
                        </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--    End make Gallery-->
    <!--    make Contact-->

</div>
