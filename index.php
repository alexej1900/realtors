<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="недвижимость, Киев, Ирпень, Буча, квартиры, таунхаусы">
    <meta name="description" content="Продажа, покупка и аренда недвижимости в Киеве и Киевской области. Мы предлагаем эксклюзивные варианты. Дома, квартиры, дуплексы, таунхаусы не только в Киеве, но и в Ирпене, Буче, Гостомеле. Лучшие цены!">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(67386970, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/67386970" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178122924-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-178122924-1');
    </script>

    <title>Недвижимость Киева и Киевской области. Риэлторские услуги в Ирпене, Буче, Гостомеле</title>

</head>


<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">
                <img src="img/LOGO.png" width="40" height="40" class="d-inline-block" alt="LOGO" loading="lazy"> МОЙ РИЭЛТОР
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#services">УСЛУГИ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">О НАС</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">ОТЗЫВЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">КОНТАКТЫ</a>
                    </li>
                </ul>

            </div>
            <!--<div class="butn-lang">
                <div class="butn butn1">RU</div>
                <div class="butn butn2">UA</div>
                <div class="butn butn3">EN</div>
            </div>-->
        </nav>
        <main class="main-page container">
            <div class="row">
                <div class="main-page-text col-lg-8 col-md-7 col-12">
                    <h1> <strong>МОЙ РИЭЛТОР</strong> <br> недвижимость в Киеве <br> и Киевской области </h1>
                    <p class="text-p ">Киев. Ирпень. Буча. Гостомель ...</p>
                    <p class="text-p ">Мы можем предложить то,<br> что понравится именно вам. <br> Работаем круглосуточно. <br>Всегда на связи</p>
                    <p class="tel-num">+38 (00) 700-00-00</p>
                </div>
               
                 <!-- КНОПКА ПОЗВОНИ МНЕ, Модальное окно -->
                <?php require 'popupWindow.php'; ?>
            </div>

            <!-- СТРОКА КВАРТИРЫ-ДОМА                              -->
            <div class="row mt-2 houses-row">
                <div class="col-6  mb-1 houses-col">
                    <a class="btn btn-secondary btn-lg btn-block" href="APARTMENT/catalogApartment.php" role="button"><span>Квартиры</span></a>
                </div>
                <div class="col-6  mb-1 houses-col">
                    <a class="btn btn-secondary btn-lg btn-block" href="HOUSES/catalogHouse.php" role="button">Дома, дуплексы, таунхаусы</a>
                </div>
            </div>
        </main>

        <section id="services" class="container">
            <h2 class="block-h2 text-center">УСЛУГИ</h2>
            <!-- СЛАЙДЕР УСЛУГ -->
            <div class="services-slider">
                <div class="services-block  text-center">
                    <h3>ПРОДАЖА</h3>
                    <img src="img/Sale.png" alt="Мы продаем">
                </div>
                <div class="services-block  text-center">
                    <h3>ПОКУПКА</h3>
                    <img src="img/pay.png" alt="Помощь в покупке">
                </div>
                <div class="services-block  text-center">
                    <h3>АРЕНДА</h3>
                    <img src="img/rent.png" alt="Мы предлагаем аренду">
                </div>
                <div class="services-block  text-center">
                    <h3>СОПРОВОЖДЕНИЕ</h3>
                    <img src="img/rent2.png" alt="Сопровождение сделок">
                </div>
            </div>
            <!-- О НАС________________________________________ -->
        </section>
        <section id="about-us" class="container">
            <h2 class="block-h2 text-light text-center">О НАС</h2>
            <div class="about-us-cards row mt-2">
                <div class="about-us-block col-10 expand-1 col-sm-6 col-md-4">
                    <div class="about-front text-center">
                        <h3 class="about-h3">ДОСТУПНОСТЬ</h3>
                        <img src="img/about1-280.png" alt="ДОСТУПНОСТЬ">
                    </div>
                    <div class="about-back text-center">
                        <p class="about-text">Мы работаем круглосуточно! <br> Мы всегда доступны по телефону, в различных мессенджерах, социальных сетях. Мы всегда готовы выехать на встречу с вами.</p>
                    </div>
                </div>
                <div class="about-us-block col-10 expand-1 col-sm-6 col-md-4">
                    <div class="about-front text-center">
                        <h3 class="about-h3">КАЧЕСТВО</h3>
                        <img src="img/kontrol-kazestva-280.png" alt="КАЧЕСТВО">
                    </div>
                    <div class="about-back text-center">
                        <p class="about-text">Мы работаем только с проверенной информацией и реальными документами! Предолставляем только реальное жилье!</p>
                    </div>
                </div>
                <div class="about-us-block col-10 expand-1 col-sm-6 col-md-4">
                    <div class="about-front text-center">
                        <h3 class="about-h3">ОПЕРАТИВНОСТЬ</h3>
                        <img src="img/clock-280.png" alt="ОПЕРАТИВНОСТЬ">
                    </div>
                    <div class="about-back text-center">
                        <p class="about-text">Мы работаем быстро! <br> Мы подберем для вас то, что нужно в кратчайшие сроки.</p>
                    </div>
                </div>
                <div class="about-us-block col-10 expand-1 col-sm-6 col-md-4">
                    <div class="about-front text-center">
                        <h3 class="about-h3">ОПЫТ</h3>
                        <img src="img/about2-280.png" alt="ОПЫТ">
                    </div>
                    <div class="about-back text-center">
                        <p class="about-text">Мы работаем в сфере недвижимости <br> <strong>уже более 10 лет.</strong> <br> Мы всегда готовы ответить на ваши вопросы.
                        </p>
                    </div>
                </div>
                <div class="about-us-block col-10 expand-1 col-sm-6 col-md-4">
                    <div class="about-front text-center">
                        <h3 class="about-h3">ШИРОКИЙ <br> АССОРТИМЕНТ</h3>
                        <img src="img/big-data1.png" alt="ШИРОКИЙ АССОРТИМЕНТ">
                    </div>
                    <div class="about-back text-center">
                        <p class="about-text">Предложения, котые вы не найдете в интернете. <br> Эксклюзивные предложения от собственников.
                        </p>
                    </div>
                </div>
                <div class="about-us-block col-10 expand-1 col-sm-6 col-md-4">
                    <div class="about-front text-center">
                        <h3 class="about-h3">ДОВЕРИЕ</h3>
                        <img src="img/rukopozhatie-280.png" alt="ДОВЕРИЕ">
                    </div>
                    <div class="about-back text-center">
                        <p class="about-text">Мы предлагаем выгодные условия и стремимся к долгосрочному сотрудничеству.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ОТЗЫВЫ________________________________________ -->
        <section id="review" class="container">
            <h2 class="block-h2 text-center">ОТЗЫВЫ</h2>
            <div class="review-blocks row">
                <div class="review-block col-12 offset-md-1 col-md-8">
                    <img src="img/klient1.jpg" alt="klient 1">
                    <p class="review-text">В связи с переездом в другой город нужно было быстро продать квартиру. Времени на поиски покупателей не было. Обратился к частному риэлтору. И не прогадал. Покупателя нашли оперативно, оформили сделку по закону.
                        <br><b>Николай, бизнесмен</b></p>
                </div>
                <div class="review-block col-12 offset-md-1 col-md-8">
                    <img src="img/klient2.jpg" alt="klient 2">
                    <p class="review-text">Приехала устраиваться на работу. Не могла снять подходящее жилье. Обратилась к частному риэлтору. Огромное спасибо за работу. Предложили именно такой вариант, который меня устраивал.
                        <br><b>Елена, кассир</b>
                    </p>
                </div>
                <div class="review-block col-12 offset-md-1 col-md-8">
                    <img src="img/klient3.jpg" alt="klient 3">
                    <p class="review-text">Спасибо частному риэлтору. Оперативно нашли шикарную квартиру. И сопроводили сделку как положено.
                        <br><b>Виктория, владелец магазина</b>
                    </p>
                </div>
            </div>
        </section>
        <!-- КОНТАКТЫ________________________________________ -->
        <section id="contacts" class="container">
            <h2 class="block-h2 text-center">КОНТАКТЫ</h2>
            <div class="row">
                <div class="contact-left col-12 col-md-6">
                    <div class="contacts-left-img">
                        <img src="img/logo-250.png" alt="ЛОГОТИП">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="contacts-left">
                        <div class="contacts">
                            <img src="img/phone-icon-30.png" alt="ТЕЛЕФОН">
                            <p>+38 00 700-00-00</p>
                        </div>
                        <div class="contacts">
                            <img src="img/mail-logo-30.png" alt="e-mail">
                            <p>email@email.ua</p>
                        </div>
                        <div class="contacts">
                            <img src="img/marker.png" alt="АДРЕС">
                            <p>my-address</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <a href="#" class="social-link">
                <img src="img/telegr1.png" alt="telegr">
            </a>
            <a href="#" class="social-link">
                <img src="img/viber1.png" alt="viber-link">
            </a>
            <a href="#" class="social-link">
                <img src="img/watsapp1.png" alt="watsapp">
            </a>
            <a href="#" class="social-link">
                <img src="img/sqype1.png" alt="sqype">
            </a>
        </footer>
    </div>
   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Подключение слайдера услуг -->
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">


    <script src="slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.collme').on('click', function(event) {
                event.preventDefault();
                $('.popup').show(1000);
            });
            $('.popup-close').on('click', function(event) {
                event.preventDefault();
                $('.popup').hide();
            });
            $('.services-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        prevArrow: '<button  class="prev"></button>',
                        nextArrow: '<button  class="next"></button>',
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 425,
                    settings: {
                        slidesToShow: 1,
                        prevArrow: '<button  class="prev"></button>',
                        nextArrow: '<button  class="next"></button>',
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>


</body>

</html>