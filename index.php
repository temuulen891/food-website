<?php 
session_start(); 
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хоолны газруудын талаарх мэдээлэл</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="logo.png" width="160" height="36" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="#home">Нүүр хуудас</a></li>
                                <li><a href="#about">Ресторанууд</a></li>
                                <li><a href="#menu">Сонирхолтой мэдээлэл</a></li>
                                <li><a href="#Сэтгэгдэл унших" class="nav-item nav-link active">Сэтгэгдэл</a></li>
                                <li><a href="#contact">Холбоо барих</a></li>
                            </ul>
                        </nav>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="assets/images/berry.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="assets/images/leaf.png" alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Тавтай морил
                                </h1>
                                <h1 class="h1-titles">
                               Олон жил үйл ажиллагаагаа явуулж буй Тав тух найрсаг хамт олон болон 
                               үйлчилгээ сайтай ресторануудыг танилцуулж байна
                            </h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url(assets/images/main-b.jpg);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Ресторануудын түүх</p>
                                  <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <h1 class="h1-sub">
                                 1. Cork Wine&Kitchen</h1>
                                <p>
                                Reviews: Хоолны амт супер, хамт олон маш нөхөрсөг, найрсаг харилцаатай, үйлчилгээ сайтай, хоол болон</p>
                                <p>
                                виноны үнэ боломжийн,шилтэй болон задгай пиво, виноны сонголт арвинтай, интерьер дизайн cozy </p>

                                <p>Олон жил Veranda ресторанд ажиллаж байсан туршлага бүхий тогооч, менежер, зөөгч зэрэг бүрэлдэхүүнтэй.</p>
                                Онцлох хоол: Паста, пицца, стейк, seafood stew, lunch set (1, 2-р хоол+десерт+кофе өөрийн сонголтоор > 13K)...  

                                <p>Байршил: Сүхбаатар дүүрэг, Олимпийн гудамж 22, Хүүхдийн Паркын зүүн талын Олимпик Резиденсийн 3-р давхар  </p>
                             </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="about-video">
                            <div class="about-video-img" style="background-image: url(assets/images/about.png);"></div>
                                <br>
                                <div class="about-video-img" style="background-image: url(assets/images/gazar.png);"> </br>
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/video.mp4" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>
                                    </a>
                                    <span>Тухайн газрын танилцуулга видео</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <h1 class="h1-sub">
                                    2. Takesan Miso Ramen
                            </h1>
                                <p> Reviews: Амт гэж ванлий, Улаанбаатар хот дахь жинхэнэ (оригнал) Япон мисо рамен, үйлчилгээ түргэн, шаламгай, баг нь нөхөрсөг, уриалган, орчин тойрон жижиг атал ая тухтай, байршил нь хотын төвд, үзэгдэх орчин онц</p>
<p>
    Япон тогоочтой, зөвхөн япон хүнсний бүтээгдэхүүн ашигладаг батламжтай, японы эрүүл баталгаат хүнс нийлүүлэгч байгууллага, гоймонгоо өөрсдийн гараар бэлдэж хийдэг, онцлох хоол халуун ногоотой Кара мисо тонкоцу рамен, Тантанмэн, Чашү мисо тонкоцу рамен, Веган рамен, ногоотой шарсан банш</p>

<p>Олон жил Veranda ресторанд ажиллаж байсан туршлага бүхий тогооч, менежер, зөөгч зэрэг бүрэлдэхүүнтэй.</p>
 Онцлох хоол: Паста, пицца, стейк, seafood stew, lunch set (1, 2-р хоол+десерт+кофе өөрийн сонголтоор > 13K)...  

<p>Байршил: Шангрила Моллын зүүн талд Олимпик Резиденсийн 3 давхарт</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(assets/images/gazar1.png);">
                                </div>
                                <br>
                                <div class="about-video-img" style="background-image: url(assets/images/gazar2.png);"> </br>
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/video.mp4" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Тухайн газрын танилцуулга видео</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                </div>
                                <h1 class="h1-sub">
                                    3. Sushi Hero
                            </h1>
                                <p> Reviews: Улаанбаатар дахь онцлууштай сүши ресторануудын нэг, түргэн үйлчилгээ, цэвэрхэн, тухлаг орчинтой, төвийн байршилтай,</p> 
                                    <p>олон төрлийн хоолны сонголттой. Монгол дахь Япончууд тогтмол үйлчлүүлдэг.</p>
<p>
    Онцлох хоол сүши, тонкоцу, сашими, үхрийн махтай удон гоймонтой шөл, авокадо салмон загастай будаа... </p>
<p>Байршил: Сүхбаатар дүүрэг, Чагдаржавын гудамж дагуу Соёл-Эрдэм дээд сургууль, Эдельвейс зочид буудлын эсрэг талд байрлана. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-video">
                                <div class="about-video-img" style="background-image: url(assets/images/gazar3.png);">
                                </div>
                                <div class="play-btn-wp">
                                    <a href="assets/images/video.mp4" data-fancybox="video" class="play-btn">
                                        <i class="uil uil-play"></i>

                                    </a>
                                    <span>Тухайн газрын танилцуулга видео</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Хоолны талаарх сонирхолтой мэдээллүүд</p>
                                    <h2 class="h2-title">Орон орны хоолны соёл</h2>
                                    <div class="sec-title-shape mb-4">
                                    <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                                <img src="assets/images/menu-1.png" alt="">
                                                Бүгд
                                            </li>
                                            <li class="filter" data-filter=".breakfast">
                                                <img src="assets/images/menu-2.png" alt="">
                                                Өглөөний цай
                                            </li>
                                            <li class="filter" data-filter=".lunch">
                                                <img src="assets/images/menu-3.png" alt="">
                                                Үдийн хоол
                                            </li>
                                            <li class="filter" data-filter=".dinner">
                                                <img src="assets/images/menu-4.png" alt="">
                                                Оройн хоол
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-list-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                        <img src="assets/images/dish/1.png" alt="">
                                        </div>
                                        <div class="dish-rating"> 
                                        <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                        <h3 class="h3-title">Англи өглөөний цай</h3>
                                        <br>Англи өглөөний цайнд зөвхөн өндөг, сам хорхой, шош, улаан лооль, шарсан төмс,хар царцмал байдаг гэж бүү бодоорой. Эдгээрээс гадна тослог гахайн махан сэндвичээрээ алдартай. Энэхүү гахайн махан сендвичийг Лондон дахь ‘’East London’’ нарийн боовны газраас амталж болно.</br>
                                        </div>
                                        <div class="dish-info">  
                                        </div>
                                    <div class="dist-bottom-row">
                                </div>
                            </div>
                        </div>
                                <!-- 2 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/2.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                           
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Унгар өглөөний цай</h3>
                                            <br>Унгарт өглөөний цай уух нь талх, хальс эсвэл хавирган сар хэлбэртэй kiflik (амттай, амттай амтат боов), цөцгийн тос, саатал эсвэл зөгийн бал, олон төрлийн өндөг, хиам, бяслаг, цай, кофе, сүүнээс бүрдэх холимогоос бүрдэнэ . Зуны улиралд заримдаа lecso (улаан лоолийн чинжүүтэй шөл) байдаг.</br>
                                        </div>
                                        <div class="dish-info">
                                            
                                        </div>
                                        <div class="dist-bottom-row">
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/3.png" alt="">
                                        </div>
                                       
                                        <div class="dish-title">
                                            <h3 class="h3-title">Тахиа,мөөгтэй омлэт</h3>
                                            <br>Омлет хийх хэвээ тослоод жигнэсэн мөөг, тахианы махаа хийж дээрээс нь үрж жижиглэсэн бяслагаа хийнэ. Хүсвэл амтат чинжүү эсвэл улаан лооль нэмээрэй. Сүүгээр зуурсан өндгөө хийнэ. Хөвсгөр омлетийн харьцаа – 50 мл сүүнд 1 өндөг гэж тооцно. Шарах шүүгээнд 180 хэмээр 15 минут шарна. Олон үйлдэлт будаа агшаачинд хийж болно.

                                            </br>
                                           
                                        </div>
                                        <div class="dish-info">
                                            
                                        </div>
                                        <div class="dist-bottom-row">
                                           
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp lunch" data-cat="lunch">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/4.png" alt="">
                                        </div>
                                        
                                        <div class="dish-title">
                                            <h3 class="h3-title">Бууцайтай паста

                                                </h3>
                                                <br>Хатуу үрийн паста чанаж бэлдэнэ. Хагас стакан шүүстэй нь үлдээгээд бусад усыг нь асгана. Паста чанасан савандаа цөцгийн тос хийж жижиглэн хэрчсэн сармис хийж 2 минут орчим шарна. Дээрээс нь паста, бууцайгаа хийнэ. Навч зөөлөртөл болгоно. Гаргахдаа бага зэргийн бяслаг нэмнэ. Сайтар хутгаад давс, перецээр амтална. Тавагласныхаа дараа дахин бяслаг цацна.</br>

                                       
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                
                                                
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/5.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                           
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Улаан лоолийн соустай паста</h3>
                                            <br>Лууван, сонгино, сармис зэргээ шоо дөрвөлжин хэлбэртэй хэрчээд оливын тосонд хуурах аж. Үүндээ шошоо нэмэн 2 минут дахин хуурах бөгөөд улаан лоолийн шүүс болон усаа нэмээд сайтар хутгаарай. Мэдээж шөлөндөө гоймонгоо хийж чанах бөгөөд 10 минутын дараа гэхэд л таны хоол бэлэн болох юм. Хэрэв та хүсвэл хоолондоо бяслаг үйрүүлж өгч болно.</br>
                                            
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dinner" data-cat="dinner">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="assets/images/dish/6.png" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Польш: Бигус</h3>
                                            <br>Бигус – жигнэсэн махаар хийсэн хоол бөгөөд Польш, Литв болон Белоруссьт алдартай боловч Польшийн үндэсний хоолны тоонд багтана. Энэ нь маш өег хоол бөгөөд байцаа, олон төрлийн мах, хүнсний ногоо, мөөгийг ашиглан хийдэг аж. Талхан дотор эсвэл тавган дээр тавьж өгч болно.</br>
                                            
                                            
                                            
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                               
                                                
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sec-img mt-5">
                                <img src="assets/images/pizza.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sec-text">
                                <h2 class="xxl-title">Тахианы мах пепперонитой пизза</h2>
                                <p>Улаан лооль, элсэн чихэр, сармис давс, лаврын, орегано, давс, хар перц зэргийг саванд хийж холино. Дунд зэргийн дулаан дээр 10-15 минутын турш халаах хүртэл жигнэх. Соусыг жигд тавган дээр тахианы хөхний дээр жигд хийнэ. Улаан лоолийн соусыг пепперони болон моцарелла бяслагаар бүрхэнэ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="two-col-sec section pt-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-1 order-2">
                            <div class="sec-text">
                            <h2 class="xxl-title">Суши</h2>
                            <p>Суши нь цагаан цуунд чанаж болгосон, түүхий болон чанасан далайн хоол, төрөл бүрийн амтлагч, дүүргэгчээр үйлчилдэг дунд зэргийн ширхэгтэй будаатай япон хоол юм. Түгээмэл итгэл үнэмшлээс ялгаатай нь будаа нь түүхий загас биш харин сушигийн гол бүрэлдэхүүн хэсэг юм. Та өнхрүүлсэн сушиг төгс хазуулсан хэмжээтэй хэрчсэнийг мэддэг байх, гэхдээ бүх суши өнхрөхгүй.</p>
                            </div>
                            </div>
                            <div class="col-lg-6 order-lg-2 order-1">
                            <div class="sec-img">
                                <img src="assets/images/sushi.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                               

                          

            </section>
            <section class="faq-sec section-repeat-img" style="background-image: url(assets/images/faq-bg.png);">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    
                                    <h2 class="h2-title">Сонирхолтой <span>мэдээллүүд</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">Яагаад чинжүү халуун байдаг вэ?</h4>
                                <p>Чинжүүнд агуулагдах капсаицин чинжүүг халуун болгодог – капсаицин нь температурын өөрчлөлтийг хариуцдаг мэдрэлийн төгсгөл рүү мэдрэлийн импульс дамжуулж нөлөөлдөг. Тиймээс өвдөлтийн дохиог хүлээн авдаг тархи үүнд чухал үүрэг гүйцэтгэдэг.

                                   </p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Яагаад яншуй заримдаа саван шиг амтагддаг вэ?

                                   </h4>
                                <p>Зарим хүнд яншуйны амт яг саван шиг амтагддаг. Энэ бүгд альдегидэд мэдрэг OR6A2 гентэй холбоотой. Альдегид нь савангийн үнэр, яншуйны үнэр амтны шинж чанарыг хангадаг юм.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Сонирхолтой баримт</h4>
                                <p>-Францад хоолыг хурдан идэхийг хориглодог. Энэ нь бүдүүлэг хэрэг хэмээн тооцогддог бөгөөд хүн бүр таныг гайхаж харах болно. </p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Хамгийн их Суши</h4>
                                <p>1993 онд Японд хамгийн урт ролл бэлтгэх шинэ рекорд тогтоожээ. Урт нь 1 км-ээс их байжээ. 600 гаруй хүн бэлтгэл ажил дээрээ ажиллаж байсан.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Хүйтэн цай нь</h4>
                                <p>Та шинэхэн чанасан, идээшүүлсэн цайг ууж байгаарай. Япончууд "Хоносон цай уух нь могойд хатгуулахаас ч аюултай" хэмээдэг аж. Учир нь хөрсөн, удсан цай нь ходоодны ханыг цочроож, гэмтээдэг байна. Хятадууд ч мөн хүйтэн цайг хор гэж үздэг юм.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Зөгийн бал</h4>
                                <p>Зөгийн бал муудаж, чанараа алдана гэж байдаггүй. Хамгийн эртний зөгийн балыг 1922 онд Ховард Кантер гэх эрхэм Египетийн фараон Тутанхамоны бунхнаас олсон байдаг. Эрдэмтэд тус зөгийн балыг судлаж үзээд одоо ч хэрэглэх боломжтой хэмээх дүгнэлт гаргасан юм. </p>
                            </div>
                        </div>

                    </div>
                </div>

            

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>       
            <div class="bg-pattern bg-light repeat-img"
                style="background-image: url(assets/images/blog-pattern-bg.png);">
                <section class="blog-sec section" id="blog">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title text-center mb-5">
                                        <p class="sec-sub-title mb-3">Сонирхолтой мэдээлэл</p>
                                        <h2 class="h2-title">ДАРСНЫ ЕРТӨНЦӨӨР АЯЛАХУЙ...</span></h2>
                                        <div class="sec-title-shape mb-4">
                                            <img src="assets/images/title-shape.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/dars1.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">1600 жилийн настай дарс</p>
                                            
                                            <p>7000 жилийн өмнө Иранд дарс нэрж байсан үлдэц олдсон гэхээр хүн төрөлхтөн дарстай хэдийнээс нөхөрлснийг амархан илтгэх мэт. Тэгвэл дэлхийн хамгийн удаан хадгалагдсан дарс бараг 1700 жилийн настай гэвэл та итгэх үү? Германы Шпэйэр хэмээх хотын музейд хадгалагдаж буй энэхүү дарсыг онгойлгох, амталж үзэх оролдлого "хэд хэдэн удаа" гарч байсан учраас маш өндөр хамгаалалт дунд хадгалдаг гэнэ шүү.</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/dars2.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">Бүргэдэн сахиуст дарс</p>
                                            
                                            <p>Алдартай брэнд бүтсэн түүх, түүнтэй холбоотой түүхүүд зуун дамнан яригдаж, хэрэглэгчдээ татах, урамшуулах нэг гол хөшүүрэг нь болсоор байдаг. "Эрчүүдийн" хэмээх тодотголтой Calvet брэндийн түүх ч маш сонирхолтой. 1808 онд өвлөн авсан усан үзмийн талбайдаа дарсны бизнесээ эхлүүлсэн Ж.Калве нэгэн бүргэд хар хурдаараа талбай руу нь шумбаж, боловсорч гүйцсэн усан үзмийг нь зуун одохыг харжээ.</p>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/vino3.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">Уур амьсгалын өөрлөлт дарсанд ч нөлөөлдөг</p>
                                            
                                            <p>Уур амьсгалын өөрчлөлт бидний мэдэх бүх зүйлсэд нөлөөлж, олон зүйлийг дэг жаягийг эвдэж байгааг бид мэднэ. Тэгвэл энэ өөрчлөлт дарсны үйлдвэрлэл, хэрэглээнд ч нөлөөлөхийг судалгаанууд баталжээ. 2006 онд дэлхийн дулаарал нь өндөр чанартай дарсанд хэрэглэгддэг усан үзмийн ургацанд нөлөөлж, 2100 он гэхэд нийт үйлдвэрлэлийн 81 хувийг үгүй хийх тухай тооцоо гарсан байна.</p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="Сэтгэгдэл унших">
                            <div class="container-fluid py-5">
                            <div class="container py-5">
                            <section id="Сэтгэгдэл бичих">
        <div class="container mt-5">
        
              <?php include('message.php'); ?>
        
              <div class="row">
                  <div class="col-md-12">
                  <div class="card">
                        <div class="card-header">
                              <h4>Сэтгэгдэл бичих
                              </h4>
                        </div>
                        <div class="card-body">
                              <form action="comment.php" method="POST">
                              
      
                              <div class="mb-3">
                                    <input type="text" name="text" class="form-control">
                              </div>
                              <div class="mb-3">
                                    <button type="submit" name="save_student" class="btn btn-primary">Илгээх</button>
                              </div>
                              </form>
                        </div>
                  </div>
                  </div>
            </div>
      </div>
                        <section class="book-table section bg-light">
                            <?php include('message.php'); ?>
                        
                            <div class="row">
                                    <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                                <h4>Сэтгэгдэл
                                                </h4>
                                        </div>
                                        <div class="card-body">
                        
                                                <table class="table table-bordered table-striped">
                                                <thead1>
                                                    <tr>
                                                            
                                                            <th>Сэтгэгдэл</th>
                                                            <style>
                        .table thead th {
                            color: #ffffff;
                            background-color: #007bff;
                        }
                        </style>
                        </section>
                        </tr>
                                                </thead1>
                        
                                                <tbody>
                                                    <?php 
                                                            $query = "SELECT * FROM comment";
                                                            $query_run = mysqli_query($conn, $query);
                                                            if(mysqli_num_rows($query_run) > 0)
                                                            {
                                                            foreach($query_run as $student)
                                                            {
                                                                ?>
                                                                <tr>
                                                                        
                                                                        <td><?= $student['comment']; ?></td>

                                                                        <td>
                                                                            <!-- /<a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm"></a> -->
                                                                            
                                                                        </td>
                                                                        <!-- /<a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm"></a> -->
                                                                        
                                                                        
                                                                        </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                            }
                                                            else
                                                            {
                                                            echo "<h5> </h5>";
                                                            }
                                                    ?>
                                                    
                                                </tbody>
                                                </table>
                        
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>

               

            

                                <div class="sec-wp">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="sec-title text-center mb-5">
                                                    <h2 class="h2-title">Холбоо барих</h2>
                                                    <div class="sec-title-shape mb-4">
                                                        <img src="assets/images/title-shape.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
           
                                    </div>
                                </div>
                                        <div class="book-table-info">
                                            <div class="row align-items-center">
                                                <div class="col-lg-4">
                                                    <div class="social-icon">
                                                        <img src="logo.png" alt="">
                                                        <h3 class="h3-title">Social холбоос</h3>
                                                        <br>
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="uil uil-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="uil uil-instagram"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="uil uil-github-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="uil uil-youtube"></i>
                                                                </a>
                                                            </li>
                                                        </br>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="call-now text-center">
                                                        <h3 class="h3-title">Бидэнтэй холбогдох</h3>
                                                        <i class="uil uil-phone"></i>
                                                        <a href="tel:+91-8866998866">+976: 90550221, 89894742
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="table-title text-center">
                                                                <div class="footer-menu food-nav-menu">
                                                                    <h3 class="h3-title">Холбоос</h3>
                                                                    <ul class="column-2">
                                                                        <li>
                                                                            <a href="#home" class="footer-active-menu">Нүүр хуудас</a>
                                                                        </li>
                                                                        <li><a href="#about">Ресторанууд</a></li>
                                                                        <li><a href="#menu">Сонирхолтой мэдээлэл</a></li>
                                                            
                                                                        <li><a href="#contact">Холбоо барих</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="footer-menu">
                                                                </div>
                                                            </div>
                                                        </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            
                        </div>
                        <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
                    </div>
                </div>
            </footer>



        </div>
    </div>
    





    <!-- jquery  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="assets/js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="assets/js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="assets/js/smooth-scroll.js"></script>
    <!-- custom js  -->
    <script src="main.js"></script>

</body>

</html>