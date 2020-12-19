<?php require '../db.php';?>

<?php $city=get_sity_by_id($_GET['id']);?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="недвижимость, Киев, Ирпень, Буча, квартиры, таунхаусы">
    <meta name="description" content="Каталог недвижимости в Киеве и Киевской области. Дома, квартиры, дуплексы, таунхаусы.">
    <link rel="stylesheet" href="../style2.css">
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

    <title>КАТАЛОГ недвижимости</title>
</head>

<body>
    <div class="container">
        <!-- Полоса навигации -->
        <?php require 'navigation-apartment.php'; ?>
        <div class="col-12 mb-1 houses-col">
            <div class="butt" style="font-size: 24px;font-weight: 900;color: #000; text-transform:uppercase;">КВАРТИРЫ В <?php echo $city["sity"];?></div>
        </div>
                 <!-- КНОПКА ПОЗВОНИ МНЕ, Модальное окно -->
                 <?php require '../popupWindow.php'; ?>
                <!-- ОДНОКОМНАТНЫЕ -->
                <div class="col-12 mb-1 houses-col" id="1room">
                    <p class="btn btn-dark btn-lg btn-block">ОДНОКОМНАТНЫЕ</p>
                </div>
    </div>
        </div>

       
       <!-- ОДНОКОМНАТНЫЕ -->
        <div class="house-line">
            <div class="row">
            <?php $forms=get_form_by_city_rooms($_GET['id'],1);
            foreach ($forms as $forms): ?>
                <?php require 'apartmrnt-maket.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- ДВУХКОМНАТНЫЕ -->
        <div class="row">
            <div class="col-12 mb-1 houses-col" id="2room">
                <p class="btn btn-dark btn-lg btn-block">ДВУХКОМНАТНЫЕ</p>
            </div>
        </div>
        <div class="house-line">
            <div class="row">
            <?php $forms=get_form_by_city_rooms($_GET['id'],2);
            foreach ($forms as $forms): ?>
                <?php require 'apartmrnt-maket.php'; ?>
                <?php endforeach; ?>
            </div>
           
        </div>
        <!-- ТРЕХКОМНАТНЫЕ -->
        <div class="row">
            <div class="col-12 mb-1 houses-col" id="3room">
                <p class="btn btn-dark btn-lg btn-block">ТРЕХКОМНАТНЫЕ</p>
            </div>
        </div>
        <div class="house-line">
            <div class="row">
            <?php $forms=get_form_by_city_rooms($_GET['id'],3);
            foreach ($forms as $forms): ?>
                <?php require 'apartmrnt-maket.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- ЧЕТЫРЕХХКОМНАТНЫЕ -->
        <div class="row">
            <div class="col-12 mb-1 houses-col" id="4room">
                <p class="btn btn-dark btn-lg btn-block">4 КОМНАТЫ И БОЛЕЕ</p>
            </div>
        </div>
        <div class="house-line">
            <div class="row">
            <?php $forms=get_form_by_city_rooms($_GET['id'],4);
            foreach ($forms as $forms): ?>
                <?php require 'apartmrnt-maket.php'; ?>
                <?php endforeach; ?>
            </div>
       </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
    <!-- ПОДКЛЮЧЕНИЕ МОДАЛЬНОГО ОКНА -->
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
        });
    </script>
</body>

</html>