<?php require '../db.php';?>

<?php $form=get_form_by_id($_GET['id']);
$table='form';?>


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
        <?php require 'navigation.php';?>
        <!-- НАВИГАЦИЯ ДОМОЙ и НАЗАД________________________________________-->
        <div class="nav-line">
            <div class="row  ">
                <div class="col-6 col-sm-2 mb-1 ">
                    <a class="btn btn-secondary btn-lg " href="../index.php" role="button">Главная</a>
                </div>
                <div class="col-6 col-sm-4 mb-1 ">
                    <a class="btn btn-secondary btn-lg " href="Apartment.php?id=<?php echo $form["city_id"];?>" role="button">Назад</a>
                </div>

                <div class="col-12 mb-1 houses-col">
                    <div class="butt" style="font-size: 24px;font-weight: 900;color: #000; text-transform:uppercase;">КВАРТИРА В <?php $sitys=get_sity_by_id($form["city_id"]);
            echo $sitys["sity"];?></div>
                </div>
            </div>
        </div>
         <!-- КНОПКА ПОЗВОНИ МНЕ, Модальное окно -->
         <?php require '../popupWindow.php'; ?>
        <!-- Описание квартиры ________________________________________-->
        <div class="house-line row">
            <!-- Карусель ________________________________________-->
            <div class="item-page mb-4 col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-1 active">
                            <a href="<?php echo $form["foto1"];?>" target="blank"><img src="<?php echo $form["foto1"];?>" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item carousel-item-2">
                            <a href="<?php echo $form["foto2"];?>" target="blank"><img src="<?php echo $form["foto2"];?>" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item carousel-item-3">
                            <a href="<?php echo $form["foto3"];?>" target="blank"><img src="<?php echo $form["foto3"];?>" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item carousel-item-4">
                            <a href="<?php echo $form["foto4"];?>" target="blank"><img src="<?php echo $form["foto4"];?>" class="d-block w-100" alt="..."></a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
               
                <div class="row item-descr">
                    <div class=" item-descr-p col-12 col-md-8">
                        <p><?php echo $form["description"];?></p>
                    </div>
                    <div class="price col-12 col-lg-4">
                        <p><?php echo $form["price"];?></p>
                    </div>

                </div>
            </div>
        </div>
        <!-- КОНЕЦ Карусели ________________________________________-->
        <!-- ТАБЛИЦА подробного описания ________________________________________-->
        <div class="container row">
            <table class="descr-table col-12">
                <th>
                    Местоположение:
                </th>
                <tr>
                    <td class="table-left">Адрес </td>
                    <td><?php echo $form["address"];?></td>
                </tr>
                <tr>
                    <td class="table-left">Район города</sup>
                    <td><?php echo $form["distrikt"];?></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="table-left">Метро</sup>
                    </td>
                    <td><?php echo $form["metro"];?></td>
                </tr>
                <th>
                    Параметры объекта:
                </th>
                <tr>
                    <td class="table-left">Комнат всего/разд</td>
                    <td><?php echo $form["rooms"];?></td>
                </tr>
                <tr>
                    <td class="table-left">Этаж/этажность</td>
                    <td><?php echo $form["level"];?></td>
                </tr>
                <tr>
                    <td class="table-left">Площадь общая/жилая/кухня, м <sup>2</sup></td>
                    <td><?php echo $form["area"];?></td>
                </tr>
                <tr>
                    <td class="table-left">Высота потолков, м </td>
                    <td><?php echo $form["heigt"];?></td>
                </tr>
                <tr>
                    <td class="table-left">Год постройки </td>
                    <td><?php echo $form["year"];?></td>
                </tr>
                <tr>
                    <td class="table-left">Сан/узел </td>
                    <td><?php echo $form["toilet"];?></td>
                </tr>
                <tr>
                    <td class="table-left">Примечания </td>
                    <td><?php echo $form["small descript"];?></td>
                </tr>
            </table>
        </div>
        <br><br>
        <div class="container minuss">-</div>
        <?php require '../popupEnterDel.php'; ?>
    
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
            $('.minuss').on('click', function(event) {
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