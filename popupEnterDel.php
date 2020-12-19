 <!-- Модальное окно -->
 <div class="enter">
        <div class="enter-content">

            <button class="enter-close">&times;</button>
            <div class="enter-form">
                <fieldset>
                    <form id="form-enter" action="../passDel.php" method="POST">

                        <div class="#form-group">
                            <label for="pass">ТОЧНО УДАЛИТЬ?</label>
                            <input type="text" class="form-control" id="pass" name="user_pass" placeholder="Пароль">
                            <input type="hidden" class="form-control" id="pass" name="id" value="<?php echo $form["id"];
                            echo $house["id"];?>">
                            <input type="hidden" class="form-control" id="pass" name="categ" value="<?php echo $table;?>">
                        </div>

                        <button type="submit" class="btn btn-primary pass-btn">УДАЛИТЬ!</button>
                    </form>
                </fieldset>
            </div>
        </div>

</div>