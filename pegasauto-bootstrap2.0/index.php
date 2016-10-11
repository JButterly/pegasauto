<?php $Title="Пегас Авто. Аренда автомобилей в Санкт-Петербурге";?>
<?php require_once ("header_for_main_page.php"); ?>

<div class="fixed-content">
<section id="reservation" class="res_car">
	<div class="res_container row">
		<div class="banner col-xs-12 col-sm-6 col-sm-push-6 col-md-6">
			<div class="title_foto">
				<h1> Аренда автомобиля в Санкт-Петербурге </h1>
				<p> от 1300 рублей/сутки </p>
			</div>
			<div class="image_banner">
			</div>
		</div>

		<div class="form_res col-xs-12 col-sm-6 col-sm-pull-6 col-md-6">
			<form name="res_car" method="post" action="">
				<select name="model_car">
				<option value="<? echo $_SESSION['posModel'];?>">Выберите модель автомобиля</option>
                    <?foreach($arResult as $itemName){?>
				<option value="<?=$item["nameModel"]?>"><?=$itemName["nameModel"]?> </option>
            <?}?>
				</select>
				<div class="calendar">
					<div class="calendar_data">
						<div class="calendar_title">Начало </div>
						<div class="calendar_day">
							<input name="pick_up_data" type="text" pattern="[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2}" placeholder="ДД.ММ.ГГ" value="<?php echo $posPick;?>"> 
						</div>
					</div>
					<div class="calendar_select">
						<select name="pick_up_time">
						<option value="10:00">10:00</option>
						<option value="10:30">10:30</option>
						<option value="11:00">11:00</option>
						<option value="11:30">11:30</option>
						<option value="12:30">12:30</option>
						<option value="13:00">13:00</option>
						<option value="13:30">13:30</option>
						<option value="14:00">14:00</option>
						<option value="14:30">14:30</option>
						<option value="15:00">15:00</option>
						<option value="15:30">15:30</option>
						<option value="16:00">16:00</option>
						<option value="16:30">16:30</option>
						<option value="17:00">17:00</option>
						<option value="17:30">17:30</option>
						<option value="18:00">18:00</option>
						<option value="18:30">18:30</option>
						<option value="19:00">19:00</option>
						<option value="19:30">19:30</option>
						<option value="20:00">20:00</option>
						</select>
					</div>
					<div class="clear"></div>
				</div>
				<div class="calendar">
					<div class="calendar_data">
						<div class="calendar_title">Окончание </div>
						<div class="calendar_day">
							<input name="drop_off_data" type="text" pattern="[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2}" placeholder="ДД.ММ.ГГ" value="<?php echo $posDrop;?>"> 
						</div>
					</div>
					<div class="calendar_select">
						<select name="drop_off_time">
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:30">12:30</option>
							<option value="13:00">13:00</option>
							<option value="13:30">13:30</option>
							<option value="14:00">14:00</option>
							<option value="14:30">14:30</option>
							<option value="15:00">15:00</option>
							<option value="15:30">15:30</option>
							<option value="16:00">16:00</option>
							<option value="16:30">16:30</option>
							<option value="17:00">17:00</option>
							<option value="17:30">17:30</option>
							<option value="18:00">18:00</option>
							<option value="18:30">18:30</option>
							<option value="19:00">19:00</option>
							<option value="19:30">19:30</option>
							<option value="20:00">20:00</option>
						</select>
					</div>
					<div class="clear"></div>
				</div>
				<input id="<?php echo $error_mail;?>" class="calendar_mail" name="c_mail" type="text" placeholder="Ваш Email" value="<?php echo $_SESSION['posEmail'];?>"> 
				<input id="<?php echo $error_phone;?>" class="calendar_phone" name="c_phone" type="text" placeholder="Номер телефона" value="<?php echo $_SESSION['posPhone'];?>">
				<input id="<?php echo $error_text;?>" class="calendar_comment" name="c_text" type="text" placeholder="Ваши комментарии" value="<?php echo $_SESSION['posText'];?>"> 
				<input id="<?php echo $null_form;?>" class="calendar_sent" type="submit" name="calendar_sent" value="Забронировать">
				<div id="success"> <?php echo $successfull;?></div>
			</form>
		</div>
		
	</div>
</section>

<div class="arrow_down"></div>

<div class="service_container">
	<h2 id="service"> Мы предлагаем вам </h2>
	<span class="underline"></span>
	<article>
		<div class="service_box row">
			<div class="service col-md-4 col-sm-4 col-xs-6">
				<div class="sevice_icon_1 service_icon_xs"> </div>
				<h3>Аренда без лимита по<br>пробегу </h3>
			</div>
			<div class="service col-md-4 col-sm-4 col-xs-6">
				<div class="sevice_icon_3 service_icon_xs"> </div>
				<h3>Фиксированная ставка<br>без переплат</h3>
			</div>
			<div class="service col-md-4 col-sm-4 col-xs-6">
				<div class="sevice_icon_2 service_icon_xs"> </div>
				<h3>Специальные цены на<br>длительный срок аренды </h3>
			</div>
			<div class="service col-md-4 col-sm-4 col-xs-6">
				<div class="sevice_icon_4 service_icon_xs"> </div>
				<h3>Всегда чистые и ухоженные<br>автомобили </h3>
			</div>
			<div class="service col-md-4 col-sm-4 col-xs-6">
				<div class="sevice_icon_5 service_icon_xs"> </div>
				<h3>Широкий выбор автомобилей<br>по кузову </h3>
			</div>
			<div class="service col-md-4 col-sm-4 col-xs-6">
				<div class="sevice_icon_6 service_icon_xs"> </div>
				<h3>Надежность и безопасность</h3>
			</div>
		</div>
	</article>
</div>

<div id="promo" class="promotion">
	<div class="sing_up_block row">
		<div class="sing_up col-xs-12 col-sm-12 col-md-6">
			<p class="sing_up_title"> Подпишитесь на уникальные предложения </p>
			<p class="sing_up_subtitle"> Эксклюзивный доступ к предложениям и акциям </p>
		</div>
		<div class="sing_up_form col-xs-12 col-sm-12 col-md-6">
			<form name="sing_up" method="post" action="" class="row">
				<input id="<?php echo $error_mail_1;?>" class="col-xs-7 col-sm-7 col-md-7" name="s_mail" type="text" placeholder="Укажите ваш Email адрес" value="<?php echo $_SESSION['S_Email'];?>">
				<input type="submit" class="col-xs-5 col-sm-5 col-md-5" name="s_sent" value="Отправить">
			</form>
			<div id="successfull"> <?php echo $successfull_1;?></div>
		</div>
	</div>
</div>


<div class="avtopark_container">
	<h2 id="avtopark">Наш автопарк  </h2>
	<span class="underline"></span>
	<section class="model_container row">
		<div class="model_car_container col-xs-12 col-sm-6 col-md-3 visible-xs">
			<nav class="avtopark_menu">
				<button class="btn btn-default dropdown-toggle avtopark_btn" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    				Выбор модели
    				<span class="caret"></span>
  				</button>
				<ul class="dropdown-menu avtopark_submenu" aria-labelledby="dropdownMenu1">
                	<?
                		foreach($arResult as $item){
                			if($item["id"]==1){?>
                    			<li id="<?=$item["id"]?>"
                        			data-name="<?=$item["nameModel"]?>"
                        			data-price="<?=$item["priceModel"]?>"
                        			data-doors="<?=$item["doorsModel"]?>"
                        			data-control="<?=$item["controlModel"]?>"
                        			data-body="<?=$item["bodyModel"]?>"
                        			data-transmission="<?=$item["transmission"]?>"
                        			data-engine="<?=$item["engineModel"]?>"
                        			data-color="<?=$item["colorModel"]?>"
                        			data-url="<?=$item["url"]?>"
                        			class="active">
                        			<p><?=$item["nameModel"]?></p>
                        			<span></span>
                        		</li>
               				<?}else{?>
                    			<li id="<?=$item["id"]?>"
                        			data-name="<?=$item["nameModel"]?>"
                        			data-price="<?=$item["priceModel"]?>"
                        			data-doors="<?=$item["doorsModel"]?>"
                        			data-control="<?=$item["controlModel"]?>"
                        			data-body="<?=$item["bodyModel"]?>"
                        			data-transmission="<?=$item["transmission"]?>"
                        			data-engine="<?=$item["engineModel"]?>"
                        			data-color="<?=$item["colorModel"]?>"
                        			data-url="<?=$item["url"]?>"
                    				>
                    				<p><?=$item["nameModel"]?></p> 
                    				<span></span>
                    			</li>
                			<?}
                		};
                	?>
				</ul>
			</nav>
		</div>

		<div class="model_car_container col-xs-12 col-sm-6 col-md-3 hidden-xs">
			<nav class="avtopark_menu">
				<ul class="avtopark_submenu">
                	<?
                		foreach($arResult as $item){
                			if($item["id"]==1){?>
                    			<li id="<?=$item["id"]?>"
                        			data-name="<?=$item["nameModel"]?>"
                        			data-price="<?=$item["priceModel"]?>"
                        			data-doors="<?=$item["doorsModel"]?>"
                        			data-control="<?=$item["controlModel"]?>"
                        			data-body="<?=$item["bodyModel"]?>"
                        			data-transmission="<?=$item["transmission"]?>"
                        			data-engine="<?=$item["engineModel"]?>"
                        			data-color="<?=$item["colorModel"]?>"
                        			data-url="<?=$item["url"]?>"
                        			class="active">
                        			<p><?=$item["nameModel"]?></p>
                        			<span></span>
                        		</li>
               				<?}else{?>
                    			<li id="<?=$item["id"]?>"
                        			data-name="<?=$item["nameModel"]?>"
                        			data-price="<?=$item["priceModel"]?>"
                        			data-doors="<?=$item["doorsModel"]?>"
                        			data-control="<?=$item["controlModel"]?>"
                        			data-body="<?=$item["bodyModel"]?>"
                        			data-transmission="<?=$item["transmission"]?>"
                        			data-engine="<?=$item["engineModel"]?>"
                        			data-color="<?=$item["colorModel"]?>"
                        			data-url="<?=$item["url"]?>"
                    				>
                    				<p><?=$item["nameModel"]?></p> 
                    				<span></span>
                    			</li>
                			<?}
                		};
                	?>
				</ul>
			</nav>
		</div>

    	<?$var=0?>
    	<?foreach($arResult as $itemprop){
    	if($var<1){?>

		<div class="model_foto col-xs-12 col-sm-6 col-md-6">
			<img id="url_model" src="<?=$itemprop["url"]?>">
		</div>

		<div class="model_tech col-xs-12 col-sm-12 col-md-3">
			<div class="model_tech_wrap">

				<div class="model_tech_option">
					<table>
						<tr>
							<td>Цвет </td>
							<td id="color_model">
                    			<?php=$itemprop["colorModel"]?>
                			</td>
						</tr>
						<tr>
							<td>Двигатель </td>
							<td id="engine_model">
                    			<?php=$itemprop["engineModel"]?>
                			</td>
						</tr>
						<tr>
							<td>Трансмиссия </td>
							<td id="transmission_model">
                    			<?php=$itemprop["transmission"]?>
                			</td>
						</tr>
						<tr>
							<td>Кузов </td>
							<td id="body_model">
                    			<?php=$itemprop["bodyModel"]?>
                			</td>
						</tr>
						<tr>
							<td>Климат-контроль </td>
							<td id="control_model">
                			    <?php=$itemprop["controlModel"]?>
                			</td>
						</tr>
						<tr>
							<td>Кол-во дверей </td>
							<td id="doors_model">
                    			<?php=$itemprop["doorsModel"]?>
                			</td>
						</tr>
                		<?$var++;?>
                    	<?}else{
                			continue;
                		}?>
                		<?}?>
					</table>
				</div>

				<div class="price_model">
            		<p id="price_model"><?=$itemprop["priceModel"]?></p>
            		<p class="rub">&#8381;</p>
            		<span> за сутки </span>
        		</div>

				

				<div class="model_reserve">
					<div class="model_reserve_title">
						<a href="#contact">Забронировать</a>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>

<div class="location">
	<div id="maps">
	</div>
</div>


<?php require_once ("footer.php"); ?>
</div>
