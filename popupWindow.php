  <!-- Кнопка ПОЗВОНИТЬ -->
<div class="collme">
    Заказать <br> звонок
</div>
 <!-- Модальное окно -->
 <div class="popup">
        <div class="popup-content">

            <button class="popup-close">&times;</button>
            <div class="popup-form">
                <fieldset>
                    <legend>Напишите нам <br> и мы с вами свяжемся</legend>
                    <form id="form" action="telegram.php" method="POST">

                        <div class="#form-group">
                            <label for="username">Введите ваше имя</label>
                            <input type="text" class="form-control" id="username" name="user_name" placeholder="Например, Иван">
                        </div>

                        <div class="form-group">
                            <label for="#userphone">Введите номер телефона</label>
                            <input type="tel" class="form-control" id="userphone" name="user_phone" placeholder="+38 (00) 99 99 999">
                        </div>

                        <div class="form-group">
                            <label for="#useremail">Введите email</label>
                            <input type="text" class="form-control" id="useremail" aria-describedby="emailHelp" name="user_email" placeholder="mail@mail.ua">
                        </div>

                        <button type="submit" class="btn btn-primary">Отправить заявку</button>
                    </form>
                </fieldset>
            </div>
        </div>

</div>


    