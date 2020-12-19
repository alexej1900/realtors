<?php require '../db.php';?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="недвижимость, Киев, Ирпень, Буча, квартиры, таунхаусы">
    <meta name="description" content="Каталог недвижимости в Киеве и Киевской области. Дома, квартиры, дуплексы, таунхаусы.">
    
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../style2.css">
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

    <title>КАТАЛОГ недвижимости. Квартиры</title>
</head>

<body>
    <div class="container">
        <!-- Полоса навигации -->
        <?php require 'navigation.php';?>
        <div class="nav-line">
            <div class="row  ">
                <div class="col-5 col-sm-6 mb-1 home">
                    <a class="btn btn-secondary btn-lg " href="../index.php" role="button">Главная</a>
                </div>

                <!-- Выбор города -->
                <?php require 'sity_apartment.php';?>

                <div class="col-12 mb-1 houses-col">
                    <div class="butt" style="font-size: 24px;font-weight: 900;color: #000;">КВАРТИРЫ</div>
                </div>
               
                <!-- КНОПКА ПОЗВОНИ МНЕ, Модальное окно -->
                <?php require '../popupWindow.php'; ?>

            </div>
        </div>
        <section class="house-line">
            <div class="row">
            <?php $forms=get_forms_all_main();
            foreach ($forms as $forms): ?>
                <?php require 'apartmrnt-maket.php'; ?>
                <?php endforeach; ?>
            </div>

        </section>
        
    </div>
    <!-- Кнопка Добавления товара -->
        <div class="container pluss">+</div>
        <?php require '../popupEnter.php'; ?>
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
            $('.pluss').on('click', function(event) {
                event.preventDefault();
                $('.enter').show(1000);
            });
            $('.popup-close').on('click', function(event) {
                event.preventDefault();
                $('.popup').hide();
            });
            $('.enter-close').on('click', function(event) {
                event.preventDefault();
                $('.enter').hide();
                $('#pass').val('');
            });
            
        });
    </script>
</body>

</html>