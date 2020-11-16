<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EcoEv</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="header" style="height: 80px; display: flex; align-items: center;">
        <div class="container" >
            <div class="navbar p-0">
                <div class="logo">
                    <a href="">
                        <img src="img/logo.png" alt="EcoEv" >
                    <span class="logo__text" style="font-weight: 900">{{trans("app.title")}} </span>
                    
                    </a>
                </div>
                <div class="menu">
                    <ul class="menu__list" style="font-weight: 900">
                        <li> <a href="#home">{{__("app.header.main")}}</a> </li>
                        <li> <a href="#gallery">{{trans("app.header.gallery")}}</a> </li>
                        <li> <a href="#plan">{{trans("app.header.plan")}}</a> </li>
                        <li> <a href="#detail">{{trans("app.header.details")}}</a> </li>
                        <li> <a href="#contacts">{{trans("app.header.contact")}}</a> </li>
                    </ul>
                </div>
                <div class="menu">
                    <ul style="list-style: none">
                        <li class="lang_switch">
                            <div class="dropdown">
                                <img src="img/tk-lang.png" alt="lang" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/tr">TR</a>
                                    <a class="dropdown-item" href="/en">EN</a>
                                 
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="main" class="main">

        <div class="hero" style="background-image: linear-gradient(rgba(24, 33, 43, 0.3),rgba(24, 33, 43, 0.1)), url();">
            {{-- <img src="{{asset('storage/'.$main->image)  }}" alt="ecoev" class="w-100"> --}}
            <video poster="https://www.kodasema.com/wp-content/uploads/2018/10/tiny-movable-concrete-house.jpg" width="100% preload="" autoplay="" muted="" loop="" playsinline="">
				<source src="img\1.mp4" type="video/mp4">
            </video> 
            <div class="video-mask"></div> 
            <div class="hero-content">
                    <h1 class="hero-title">KÜÇÜK EV, BÜYÜK YAŞAM</h1>
            </div>
        </div>
    </div>
    <section class="main__bottom">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="title">
                        <img src="img/icon_1.png" alt="">
                        <span>{{trans("app.content.design")}}</span>
                    </div>
                    <div class="desc"> {{trans("app.content.design1")}} </div>
                </div>
                <div class="col-4">
                    <div class="title">
                        <img src="img/icon_2.png" alt="">
                        <span>{{trans("app.content.ecology")}}</span>
                    </div>
                    <div class="desc"> {{trans("app.content.ecology1")}} </div>
                </div>
                <div class="col-4">
                    <div class="title">
                        <img src="img/icon_3.png" alt="">
                        <span>{{trans("app.content.windows")}}</span>
                    </div>
                    <div class="desc"> {{trans("app.content.windows1")}} </div>
                </div>
            </div>
        </div>
    </section>
    <section class="outside">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="slider-wrapper">
                        <div class="slider0">
                            @foreach(json_decode($outside->image, true) as $images)
                                <img src="{{ asset("storage/".$images)  }}" alt="">
                            @endforeach
                            </div>
                        <div class="custom-arrows">
                            <div class="prev0">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </div>
                            <div class="next0">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 content__middle">
                <div class="title">{{$outside->getTranslatedAttribute('name', $locale, 'tr')}}</div>
                    <div class="desc">{{$outside->getTranslatedAttribute('text', $locale, 'tr')}}</div>
                </div>
            </div>
        </div>
    </section>
<section class="outside">
    <div class="container">
        <div class="row">
            <div class="col-4 content__middle left">
                <div class="title">{{$furniture->getTranslatedAttribute('name', $locale, 'tr')}}</div>
            <div class="desc">{{$furniture->getTranslatedAttribute('text', $locale, 'tr')}}</div>
            </div>
            <div class="col-8">
                <div class="slider-wrapper">
                    <div class="slider1">
                            @foreach(json_decode($furniture->images, true) as $image)
                                <img src="{{asset("storage/".$image)}}" alt="">
                            @endforeach
                    </div>
                    <div class="custom-arrows">
                        <div class="prev1">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="next1">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <section id="gallery" class="gallery__wrapper">
        <div class="container">
            <div class="gallery">

                {{-- {{ dd($gallery) }} --}}
                @foreach ($gallery as $k=>$gallerys)
                @if($k == 1)
                <figure class="gallery__item gallery__item--1" href="{{asset("storage/".$gallerys->image)}}" data-fancybox="images" data-caption="My caption">
                    <img src="{{asset("storage/".$gallerys->image)}}" alt="" class="gallery__img">
                </figure>
                @elseif($k == 2)
                <figure class="gallery__item gallery__item--2" href="{{asset("storage/".$gallerys->image)}}" data-fancybox="images" data-caption="My caption">
                    <img src="{{asset("storage/".$gallerys->image)}}" alt="" class="gallery__img">
                </figure>
                @elseif($k == 3)
                <figure class="gallery__item gallery__item--3" href="{{asset("storage/".$gallerys->image)}}" data-fancybox="images" data-caption="My caption">
                    <img src="{{asset("storage/".$gallerys->image)}}" alt="" class="gallery__img">
                </figure>
                @elseif($k == 4)
                <figure class="gallery__item gallery__item--4" href="{{asset("storage/".$gallerys->image)}}" data-fancybox="images" data-caption="My caption">
                    <img src="{{asset("storage/".$gallerys->image)}}" alt="" class="gallery__img">
                </figure>
                @elseif($k == 5)
                <figure class="gallery__item gallery__item--5" href="{{asset("storage/".$gallerys->image)}}" data-fancybox="images" data-caption="My caption">
                    <img src="{{asset("storage/".$gallerys->image)}}" alt="" class="gallery__img">
                </figure>
                @elseif($k == 6)
                <figure class="gallery__item gallery__item--6" href="{{asset("storage/".$gallerys->image)}}" data-fancybox="images" data-caption="My caption">
                    <img src="{{asset("storage/".$gallerys->image)}}" alt="" class="gallery__img">
                </figure>
                @else
                <figure class="gallery__item gallery__item--7" href="{{asset("storage/".$gallerys->image)}}" data-fancybox="images" data-caption="My caption">
                    <img src="{{asset("storage/".$gallerys->image)}}" alt="" class="gallery__img">
                </figure>
                @endif
                    
                   
                @endforeach
               
                
              
            </div>
        </div>
    </section>
    <section id="plan" class="outside">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="slider-wrapper">
                        <div class="slider2">
                            @foreach(json_decode($houseplan->images, true) as $image)
                                <img src="{{asset("storage/".$image)}}" alt="">
                            @endforeach
                        </div>
                        <div class="custom-arrows">
                            <div class="prev2">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </div>
                            <div class="next2">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 content__middle">
                <div class="title">{{$houseplan->getTranslatedAttribute('title', $locale, 'tr')}}</div>
                    <div class="desc">
                        <div>{{$houseplan->getTranslatedAttribute('text', $locale, 'tr')}}</div>
                        {{-- <div>- House length 940 centimeters</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="detail" class="outside">
        <div class="container">
            <div class="row">
                <div class="col-4 content__middle left">
                    <div class="title">{{$workprocess->getTranslatedAttribute('title', $locale, 'tr')}}</div>
                    <div class="desc">{{$workprocess->getTranslatedAttribute('text', $locale, 'tr')}}</div>  
                </div>
                <div class="col-8">
                    <div class="slider-wrapper">
                        <div class="slider3">
                            @foreach(json_decode($workprocess->images, true) as $image)
                                 <img src="{{asset("storage/".$image)}}" alt="">
                            @endforeach
                        </div>
                        <div class="custom-arrows">
                            <div class="prev3">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </div>
                            <div class="next3">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="forms" class="forms">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="form_content">
                        <h2>{{trans("app.help.help1")}}</h2>
                        <h4>{{trans("app.help.dream")}}</h4>
                        <p> {{trans("app.help.fill")}} </p>
                        <div class="user_info">
                            <div class="inner">
                                <img src="img/kal.png" alt="">
                                <div class="user_name">
                                    <h5>Fazliddin Akhrarov</h5>
                                    <p>{{trans("app.help.director")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-4">
                        <form id="w0" class="form_block" action="{{route("telegram")}}" method="post" autocomplete="off">
                            @csrf
                        <div class="form-group field-question-name required">
                            <input type="text" id="question-name" class="form-control" name="username" maxlength="100" placeholder="{{trans("app.help.name")}}" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <p>{{trans("app.help.communicate")}}</p>
                        <div class="callback_type">
                            <input type="radio" id="radio1" name="type" value="Номер телефона" checked="">
                            <input type="radio" id="radio2" name="type" value="Telegram">
                            <label for="radio2" class="last"><i class="fa fa-telegram mr-2" aria-hidden="true"></i>Telegram</label>
                        </div>
                        <div class="form-group field-question-phone_or_telegram required">
                            <input type="text" id="question-phone_or_telegram" class="phone" name="tel_number" maxlength="100" placeholder="{{trans("app.help.number")}}" aria-required="true">
                            <div class="help-block"></div>
                        </div>
                        <button type="submit" class="">
                            <span>{{trans("app.help.back")}}</span>
                        </button>    
                        <div class="form_phone">
                            <p>{{trans("app.help.call")}}: <a href="tel:+905376752935">+90 537 675 29 35</a></p>
                        </div>
                    </form>        
                </div>

            </div>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <div class="section_title2">
            <div class="line"></div>
            <h2>{{trans("app.footer.contactus")}}</h2>
        </div>
        <div class="map">
            <div class="container">
                <div class="contacts_block">
                    <div class="contact_item">
                        <embed src="img/location.png" />
                        <div class="contact_text">
                            <h5>{{trans("app.footer.office")}}</h5>
                            <p>IOSB Dersankoop Trios Industrial Estate, A Blok Kat: 1 No: 81 Başakşehir-Istanbul-TURKEY</p> 
                        </div>
                    </div>
                    <div class="contact_item">
                        <embed src="img/phoneicon.png" />
                        <div class="contact_text">
                            <h5>{{trans("app.footer.contactnumber")}}</h5>
                            <p>+90 537 675 29 35</p>
                        </div>
                    </div>
                    <div class="contact_item">
                        <embed src="img/emailicon.png" />
                        <div class="contact_text">
                            <h5>E-mail</h5>
                            <p>ecoev34@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3007.3902378105145!2d28.794639687051255!3d41.08231951990006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDA0JzU3LjIiTiAyOMKwNDcnMzkuNSJF!5e0!3m2!1sru!2s!4v1594041063552!5m2!1sru!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="copyright">
                        &copy; 2020, Ecoev.org
                    </div>
                </div>
                <div class="col-6 text-right">
                    <ul class="social">
                        <li>
                            <a href="">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-telegram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="up shadow-sm">
        <i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>