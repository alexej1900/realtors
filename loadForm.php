<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Добавление предложения </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <div class="container row">
        <fieldset>
            <form id="load-form" action="../getdata1.php" enctype="multipart/form-data" method="POST">
                <table class="descr-table col-12">
                    <tr>
                        <td class="table-left">КАТЕГОРИЯ </td>
                        <td>
                            
                            <input type="radio" name="category" value="apartment" />Квартира 
                            <input type="radio" name="category" value="house" />Дом</td>
                    </tr>
                    <th>
                        Фотографии:
                    </th>
                    <tr>
                        <td class="table-left">Фотография 1 </td>
                        <td><input type="file" class="form-control" id="address" name="foto1" placeholder="Фото 1"></td>
                    </tr>
                     <tr>
                        <td class="table-left">Фотография 2 </td>
                        <td><input type="file" class="form-control" id="address" name="foto2" placeholder="Фото 2"></td>
                    </tr>
                     <tr>
                        <td class="table-left">Фотография 3 </td>
                        <td><input type="file" class="form-control" id="address" name="foto3" placeholder="Фото 3"></td>
                    </tr>
                     <tr>
                        <td class="table-left">Фотография 4 </td>
                        <td><input type="file" class="form-control" id="address" name="foto4" placeholder="Фото 4"></td>
                    </tr>

                    <th>
                        Местоположение:
                    </th>
                    <tr>
                        <td class="table-left">Город </td>
                        <td><input type="text" class="form-control" id="address" name="sity" placeholder="Город"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Адрес </td>
                        <td><input type="text" class="form-control" id="address" name="address" placeholder="Адрес"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Район города</sup>
                        <td><input type="text" class="form-control" id="address" name="district" placeholder="Район города"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Метро</sup>
                        </td>
                        <td><input type="text" class="form-control" id="address" name="metro" placeholder="Метро"></td>
                    </tr>
                    <th>
                        Параметры объекта:
                    </th>
                    <tr>
                        <td class="table-left">Комнат всего/разд</td>
                        <td><input type="text" class="form-control" id="address" name="rooms" placeholder="Комнат"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Этаж/этажность</td>
                        <td><input type="text" class="form-control" id="address" name="level" placeholder="Этаж"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Площадь общая/жилая/кухня, м <sup>2</sup></td>
                        <td><input type="text" class="form-control" id="address" name="area" placeholder="Площадь"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Высота потолков, м </td>
                        <td><input type="text" class="form-control" id="address" name="height" placeholder="Высота"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Год постройки </td>
                        <td><input type="text" class="form-control" id="address" name="year" placeholder="Год постройки"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Сан/узел </td>
                        <td><input type="text" class="form-control" id="address" name="toilet" placeholder="Сан узел"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Краткое описание </td>
                        <td><input type="text" class="form-control" id="address" name="small_descript" placeholder="Краткое описание"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Полное описание </td>
                        <td><input type="text" class="form-control" id="address" name="descript" placeholder="Полное описание"></td>
                    </tr>
                    <tr>
                        <td class="table-left">Цена </td>
                        <td><input type="text" class="form-control" id="address" name="price" placeholder="Полное описание"></td>
                    </tr>
                </table>
                <button type="submit" class="container btn btn-primary">Сохранить</button>
            </form>
        </fieldset>

    </div>
     <div class="container">
    <a href="APARTMENT/catalogApartment.php" class="container btn btn-lg btn-secondary">В каталог</a>
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>