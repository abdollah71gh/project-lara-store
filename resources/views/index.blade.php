<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه اصلی</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="slider/engine1/style.css">
    <link rel="stylesheet" href="luos/dist/css/lumos.css">


</head>
<body>
<!--main website-->
<main class="container-fluid pl-0 pr-0">

    <!-- make menu -->
    <section class="menu">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">news</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- end make menu -->

    <!--    make Slider-->
    <div class="slider ">

        <div class="row mr-0 ml-0">
            <div class="col-12 ">
                <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
                <div id="wowslider-container1">
                    <div class="ws_images">
                        <ul>
                            <li><img src="{{asset('slider/data1/images/2.jpg')}}" alt="2" title="2" id="wows1_0"/></li>
                            <li><img src="{{asset('slider/data1/images/3.jpg')}}" alt="3" title="3" id="wows1_1"/></li>
                            <li><a href="http://wowslider.net"><img src="{{asset('slider/data1/images/4.jpg')}}"
                                                                    alt="css image gallery" title="4" id="wows1_2"/></a>
                            </li>
                            <li><img src="{{asset('slider/data1/images/5.jpg')}}" alt="5" title="5" id="wows1_3"/></li>
                        </ul>
                    </div>
                    <div class="ws_bullets">
                        <div>
                            <a href="#" title="2"><span><img src="{{asset('slider/data1/tooltips/2.jpg')}}" alt="2"/>1</span></a>
                            <a href="#" title="3"><span><img src="{{asset('slider/data1/tooltips/3.jpg')}}" alt="3"/>2</span></a>
                            <a href="#" title="4"><span><img src="{{asset('slider/data1/tooltips/4.jpg')}}" alt="4"/>3</span></a>
                            <a href="#" title="5"><span><img src="{{asset('slider/data1/tooltips/5.jpg')}}" alt="5"/>4</span></a>
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
    <!--    make About-->
    <div class="about">
        <div class="row ml-0 mr-0">
            <div class="col-10 offset-1">
                <h2 class="text-center text-capitalize">about me </h2>
                <div class="borderAbout"></div>
                <h6 style="font-size: 16px;color: darkgray">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Adipisci asperiores consectetur
                    consequatur cum dolore ducimus est ex exercitationem fuga molestiae nesciunt,
                    nihil officiis quae rem similique, sit, tenetur vitae voluptatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dicta distinctio enim excepturi
                    laborum laudantium molestiae, mollitia nisi non quibusdam quo quos, sequi tempora tempore
                    temporibus,
                    voluptates voluptatibus. Non, ut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                    assumenda autem corporis dolor est facere facilis in laborum maiores necessitatibus, nesciunt non,
                    odio odit quae quam quos sapiente sint unde. Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Accusamus aperiam beatae distinctio dolor dolores, eveniet necessitatibus sint totam? Debitis
                    dolores eos ipsam,
                    maxime minima non obcaecati quas rem soluta vero.</h6>
            </div>
        </div>
    </div>
    <!--    end make About-->
    <!--    make Gallery-->
    <div class="gallery">
        <div class="row ml-0 mr-0">
            <div class="col-10 offset-1">
                <h1 class="text-center">Gallery</h1>
                <div class="borderGallery"></div>
                <div class="row ml-0 mr-0">
                    <div class="col-10 offset-1">
                        <div class="row mr-0 mr-0">
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{asset('luos/demo/img/img1.jpg')}}">
                                    <img src="{{asset('luos/demo/img/img1.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{asset('luos/demo/img/img2.jpg')}}">
                                    <img src="{{asset('luos/demo/img/img2.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{asset('luos/demo/img/img3.jpg')}}">
                                    <img src="{{asset('luos/demo/img/img3.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{asset('luos/demo/img/img4.jpg')}}">
                                    <img src="{{asset('luos/demo/img/img4.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{asset('luos/demo/img/img5.jpg')}}">
                                    <img src="{{asset('luos/demo/img/img5.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{'luos/demo/img/img6.jpg'}}">
                                    <img src="{{asset('luos/demo/img/img6.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{asset('luos/demo/img/img7.jpg')}}">
                                    <img src="{{asset('luos/demo/img/img7.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="lumos-link" data-lumos="gallery1" href="{{asset('luos/demo/img/img8.jpg')}}">
                                    <img src="{{asset('luos/demo/img/img8.jpg')}}" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--    End make Gallery-->
    <!--    make Contact-->
    <div class="contact">
        <div class="row ml-0 mr-0">
            <div class="col-10 offset-1">
                <h1 class="text-center text-capitalize">Contact us</h1>
                <div class="borderContact mb-4"></div>
                <div class="row ml-0 mr-0">
                    <div class="col-8 offset-2">
                        <form action="" method="post">
                            <div class="card text-left">
                                <div class="card-header bg-light ">info contack</div>
                                <div class="card-body bg-light">
                                    <div class="form-group">
                                        <label for="fullname">fullName</label>
                                        <input type="text" name="fullname" class="form-control"
                                               placeholder="please enter fullname ?">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" name="email" class="form-control"
                                               placeholder="please enter email ?">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">comment</label>
                                        <textarea class="form-control" name="comment" id="comment">
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-block rounded-pill">send info
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    end make Cantect-->
    <!--    make Footer-->
    <footer class="footer">
        <p  class="text-capitalize text-capitalize">desgin by and abodollah :: phone:09368451575  </p>
    </footer>
    <!--    end make Footer-->

</main>
<!--end main website-->

<!--js-->

<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('slider/engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{asset('slider/engine1/script.js')}}"></script>
<script src="{{asset('luos/dist/js/lumos-min.js')}}"></script>
<script src="{{asset('luos/dist/js/lumos.js')}}"></script>


</body>
</html>
