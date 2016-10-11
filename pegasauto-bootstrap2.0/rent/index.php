<?php $Title="Пегас Авто. Аренда автомобилей в Санкт-Петербурге";?>
<?php require_once ("../header.php"); ?>

<div class="fixed-content">
    <div class="clear"></div>

    <div class="background_rent_container">
        <section class="background_rent row">
            <div class="text_rent col-xs-12 col-sm-12 col-md-12">
                <h1 class="title-text">аренда авто с выкупом</h1>
                <p>Если Ваш возраст от <span class="bold-text">30 лет</span> и стаж вождения
                от <span class="bold-text"> 5 лет</span>,</br>
                тогда Вы можете воспользоваться нашей услугой</p>
            </div>
        </section>
    </div>

    <div class="clear"></div>

    <section class="requirements_rent">
        <h3 id="header">требования</h3>
        <div class="blocks row">
            <div class="requirement col-xs-12 col-sm-offset-0 col-sm-6 col-md-6 requirement-1">
                <div class="requirement_icon_1 icon_height_xs"></div>
                <aside><p><span class="medium_font">&#8226;</span> Возраст <span class="medium_font">от 26 лет</span>.</p></aside>
            </div>
            <div class="requirement col-xs-12 col-sm-offset-0 col-sm-6 col-md-6 requirement-2">
                <div class="requirement_icon_2 icon_height_xs"></div>
                <aside><p><span class="medium_font">&#8226; Постоянная регистрация</span> и прописка в СПб и Ленинградской области.</p></aside>
            </div>
            <div class="requirement col-xs-12 col-sm-offset-0 col-sm-6 col-md-6 requirement-1">
                <div class="requirement_icon_3 icon_height_xs"></div>
                <aside><p><span class="medium_font">&#8226;</span> Стаж вождения <span class="medium_font">от 5 лет</span>.</p></aside>
            </div>
            <div class="requirement col-xs-12 col-sm-offset-0 col-sm-6 col-md-6 requirement-2">
                <div class="requirement_icon_4 icon_height_xs"></div>
                <aside><p><span class="medium_font">&#8226; Первоначальный взнос</span> от 15&#37; стоимости атомобиля.</p></aside>
            </div>
        </div>
    </section>

    <div class="clear"></div>

    <section class="workflow">
        <div class="wraper">
            <h3 id="header">как это работает</h3>
                <div class="blocks row">
                    <div class="how-does-it-works col-xs-12 col-sm-6 col-md-6">
                        <div class="first_step">
                            <div class="step_1_icon steps_icon_xs"></div>
                            <aside><p>Заполните анкету</p></aside>
                            <form id="form" action="#form" method="post">
                                <div class="input">
                                    <input name="rentBrand" type="text" id="<?php echo $error_brand;?>" placeholder="Марка" value="<?php echo $_SESSION['rentBrand'];?>" />
                                </div>
                                <div class="input">
                                    <input name="rentModel" type="text" id="<?php echo $error_model;?>" placeholder="Модель" value="<?php echo $_SESSION['rentModel'];?>"/>
                                </div>
                                <div class="input">
                                    <input name="rentKpp" type="text" id="<?php echo $error_kpp;?>" placeholder="КПП" value="<?php echo $_SESSION['rentKpp'];?>"/>
                                </div>
                                <div class="input">
                                    <input name="rentPhone" type="tel" id="<?php echo $error_phone;?>" placeholder="Телефон" value="<?php echo $_SESSION['rentPhone'];?>"/>
                                </div>
                                <div class="input">
                                    <input name="rentEmail" type="email" id="<?php echo $error_mail;?>" placeholder="e-mail" value="<?php echo $_SESSION['rentEmail'];?>"/>
                                </div>
                                <div class="input">
                                    <input name="rentName" type="text" id="<?php echo $error_name;?>" placeholder="Первоначальный взнос, &#37;" value="<?php echo $_SESSION['rentName'];?>"/>
                                </div>
                                <div id="echo_form" class="<?php echo $success;?>"><?php echo $successfull;?><?php echo $errorEcho;?></div>
                                <div class="button">
                                    <button name="rent_button" type="submit">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="how-does-it-works col-xs-12 col-sm-6 col-md-6">
                        <div class="second-step">
                            <div class="step_2_icon steps_icon_xs"></div>
                            <aside><p>Обработка данных</p></aside>
                            <p>Мы обрабатываем Ваш запрос, формируем предложение и отправляем его Вам на e-mail указанный в Вашей анкете.</p>
                        </div>

                        <div class="third-step">
                            <div class="step_3_icon steps_icon_xs"></div>
                            <aside><p>Назначение встречи</p></aside>
                            <p>Наш оператор связывается с Вами и назначает встречу в подходящее для Вас время в нашем офисе.</p>
                        </div>
                        <aside class="end"><p>От покупки автомобиля<br> в рассрочку, Вас отделяют<br> <b>всего три шага!</b></p></aside>
                    </div>
                <div id="clear-div"></div>
            </div>
        </div>
    </section>


<?php require_once ("../footer.php"); ?>
</div>
