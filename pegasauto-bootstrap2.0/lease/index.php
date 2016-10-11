<?php $Title="Пегас Авто. Аренда автомобилей в Санкт-Петербурге";?>
<?php require_once ("../header.php"); ?>

<div class="fixed-content">
    <div class="background_lease_container">
        <section class="background_lease row">
            <div class="text_banner col-md-offset-4 col-md-8">
                <h1 class="title-text">сдать в аренду</br><span class="lowercase">свой автомобиль</span></h1>
                <p>
                    Ваша прибыль составляет </br>
                    от 20 000 руб. в месяц
                </p>
                <p>
                    Обслуживание автомобиля </br>
                    мы берем на себя
                </p>
            </div>
        </section>
    </div>

    <section class="requirements">
        <h3 id="header">требования</h3>
        <div class="blocks row">
            <div class="requirement col-xs-12 col-sm-6 col-md-6">
                <div><img src="../image/cars.png"></div>
                <aside><p><span class="medium_font">&#8226;</span> Автомобиль должен быть <span class="medium_font">не старше 2010 года</span>.</p></aside>
            </div>
            <div class="requirement col-xs-12 col-sm-6 col-md-6">
                <div><img src="../image/milage.png"></div>
                <aside><p><span class="medium_font">&#8226;</span> Пробег <span class="medium_font">не имеет значения</span>.   </p></aside>
            </div>
            <div class="requirement col-xs-12 col-sm-6 col-md-6">
                <div><img src="../image/gearbox.png"></div>
                <aside><p><span class="medium_font">&#8226;</span> Автоматическая коробка<br>передач/Механическая коробка передач.</p></aside>
            </div>
            <div class="requirement col-xs-12 col-sm-6 col-md-6">
                <div><img src="../image/insurance.png"></div>
                <aside><p><span class="medium_font">&#8226;</span> Автомобиль должен быть застрахован <span class="medium_font">ОСАГО, КАСКО</span> (возможно застраховать авто в рассрочку/по желанию).</p></aside>
            </div>
        </div>
        <p class="our_team">Наша компания "Пегас Авто" берет в аренду автомобили эконом и комфорт класса такие как: Chevroler Lacetti, Hyundai Solaris, Škoda Octavia, Škoda Rapid, Nissan Primera и др.</p>
    </section>

    <section class="questionary">
        <h3 id="header">заполните анкету </br><span class="lowercase-title">и начните зарабатывать уже сегодня</span></h3>
        <div class="wraper">  
            <form id="form" action="#form" method="post" class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <input name="rentBrand" type="text" id="<?php echo $error_brand;?>" placeholder="Марка" value="<?php echo $_SESSION['rentBrand'];?>" />
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <input name="rentName" type="text" id="<?php echo $error_name;?>" placeholder="Первоначальный взнос, &#37;" value="<?php echo $_SESSION['rentName'];?>"/>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <input name="rentModel" type="text" id="<?php echo $error_model;?>" placeholder="Модель" value="<?php echo $_SESSION['rentModel'];?>"/>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <input name="rentKpp" type="text" id="<?php echo $error_kpp;?>" placeholder="КПП" value="<?php echo $_SESSION['rentKpp'];?>"/>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <input name="rentPhone" type="tel" id="<?php echo $error_phone;?>" placeholder="Телефон" value="<?php echo $_SESSION['rentPhone'];?>"/>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <input name="rentEmail" type="email" id="<?php echo $error_mail;?>" placeholder="e-mail" value="<?php echo $_SESSION['rentEmail'];?>"/>
                </div>
                <div id="echo_form" class="<?php echo $success;?>"><?php echo $successfull;?><?php echo $errorEcho;?>
                </div>
                <div class="button">
                    <button name="rent_button" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </section>

    <?php require_once ("../footer.php"); ?>
</div>
