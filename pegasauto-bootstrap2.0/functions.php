<?php
session_start();
if (isset($_POST["calendar_sent"])) {
$posModel = $_POST['model_car'];
$posEmail = $_POST['c_mail'];
$posPhone = $_POST['c_phone'];
$posDrop = $_POST['drop_off_data'];
$posDrop_Time = $_POST['drop_off_time'];
$posPick = $_POST['pick_up_data'];
$posPick_Time = $_POST['pick_up_time'];
$to = "info@pegasauto.ru";
$posText = $_POST['c_text'];
$subject = "Новый заказ с сайта";
$_SESSION['posModel'] = $posModel;
$_SESSION['posEmail'] = $posEmail;
$_SESSION['posPhone'] = $posPhone;
$_SESSION['posText'] = $posText;
$_SESSION['posPick'] = $posPick;
$_SESSION['posPick_Time'] = $posPick_Time;
$_SESSION['posDrop'] = $posDrop;
$_SESSION['posDrop_Time'] = $posDrop_Time;
$error_mail = "";
$error_phone = "";
$error_text = "";
$error = false;
$successfull = "";
if (strlen($posPhone) <= 4) {
	$error_phone = "_error";
	$error = true;
}
if (!preg_match("/^[a-z0-9][a-z0-9\.-_]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i",$posEmail)){
	$error_mail = "_error";
	$error = true;
}
if (!$error){
$postMessage ="<div style='width:100%'>Cообщение от пользователя: $posEmail</div><div style='width:100%'>Модель автомобиля: $posModel</div><div style='width:100%'>Дата начала: $posPick, Время: $posPick_Time </div><div style='width:100%'>Дата окончания: $posDrop, Время: $posDrop_Time </div><div style='width:100%'>Номер для связи:<a href='tel:$posPhone'> $posPhone</a></div><div style='width:100%'>Комментарии: $posText</div>";
$subject ="=?utf-8?B?".base64_encode($subject)."?=";
$headers ="From:$posEmail\r\nReply-to:$posEmail\r\nContent-type: text/html; charset=utf-8\r\n";
mail($to, $subject, $postMessage, $headers);
$null_form=_success;
$successfull = "Заявка отправлена, мы свяжемся с вами в ближайшее время!!!";
$_SESSION['posModel'] = "";
$_SESSION['posEmail'] = "";
$_SESSION['posPhone'] = "";
$_SESSION['posText'] = "";
$_SESSION['posPick'] = "";
$_SESSION['posDrop'] = "";
session_destroy();
}
}
?>
<?php
if (isset($_POST["s_sent"])) {
$S_Email = $_POST['s_mail'];
print_r ($S_mail);
$to = "info@pegasauto.ru";
$subject = "Подписка на сайте";
$_SESSION['S_Email'] = $S_Email;
$error_mail_1 = "";
$error = false;
$successfull = "";
if (!preg_match("/^[a-z0-9][a-z0-9\.-_]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i",$S_Email)){
	$error_mail_1 = "_error";
	$error = true;
}
if (!$error){
$subject ="=?utf-8?B?".base64_encode($subject)."?=";
$headers ="From:$S_Email\r\nReply-to:$S_Email\r\nContent-type: text/plain; charset=utf-8\r\n";
mail($to, $subject, $S_Email, $headers);
$successfull_1 = "Вы успешно подписались";
$_SESSION['S_mail'] = "";
session_destroy();
}
}
if (isset($_POST["taxi_button"])) {
    $posName = $_POST['posName'];
    $posEmail = $_POST['posEmail'];
    $posPhone = $_POST['posPhone'];
//    $posText = $_POST['posText'];
    $to = "metrika@egor-orlov.com, taxi@pegasauto.ru";
    $subject = "Новое обращение с сайта Pegasauto (такси)";
//    $_SESSION['posText'] = $posText;
    $_SESSION['posEmail'] = $posEmail;
    $_SESSION['posName'] = $posName;
    $_SESSION['posPhone'] = $posPhone;
    $error_mail = "";
    $error_name = "";
//    $error_text = "";
    $error_phone = "";
    $error = false;
    $successfull = "";
    if (strlen($posName) == 0) {
        $error_name = "_error";
        $error = true;
    }
    if (strlen($posPhone) < 5) {
        $error_phone = "_error";
        $error = true;
    }
    if (!preg_match("/^[a-z0-9][a-z0-9\.-_]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i",$posEmail)){
        $error_mail = "_error";
        $error = true;
    }
//    if (strlen($posText) == 0) {
//        $error_text = "errormes";
//        $error = true;
//    }
    if (!$error){
        $postMessage ="<div style='width:100%'>Cообщение от пользователя: $posName</div><div style='width:100%'>Телефон для связи: $posPhone</div><div style='width:100%'>Почтовый адрес: $posEmail</div>";
        $subject ="=?utf-8?B?".base64_encode($subject)."?=";
        $headers ="From:$posEmail\r\nReply-to:$posEmail\r\nContent-type: text/html; charset=utf-8\r\n";
        mail($to, $subject, $postMessage, $headers);
        $success = "success";
        $successfull = "Заявка успешно отправлена, ожидайте звонка!";
//        $_SESSION['posText'] = "";
        $_SESSION['posEmail'] = "";
        $_SESSION['posName'] = "";
        $_SESSION['posPhone'] = "";

    }
}
if (isset($_POST["rent_button"])) {
    $rentBrand = $_POST['rentBrand'];
    $rentModel = $_POST['rentModel'];
    $rentKpp = $_POST['rentKpp'];
    $rentPhone = $_POST['rentPhone'];
    $rentEmail = $_POST['rentEmail'];
    $rentName = $_POST['rentName'];
    $to = "metrika@egor-orlov.com, taxi@pegasauto.ru";
    $subject = "Новое обращение с сайта Pegasauto (аренда с выкупом)";
    $_SESSION['rentBrand'] = $rentBrand;
    $_SESSION['rentModel'] = $rentModel;
    $_SESSION['rentKpp'] = $rentKpp;
    $_SESSION['rentPhone'] = $rentPhone;
    $_SESSION['rentEmail'] = $rentEmail;
    $_SESSION['rentName'] = $rentName;
    $error_brand = "";
    $error_model = "";
    $error_kpp = "";
    $error_phone = "";
    $error_mail = "";
    $error_name = "";
    $error = false;
    $error_title="Заполните пожалуйста поля";
    $successfull = "";
    if (strlen($rentBrand) < 4) {
        $error_brand = "_error";
        $error = true;
    }
    if (strlen($rentModel) < 4) {
        $error_model = "_error";
        $error = true;
    }
    if (strlen($rentKpp) < 4) {
        $error_kpp = "_error";
        $error = true;
    }
    if (strlen($rentPhone) < 5) {
        $error_phone = "_error";
        $error = true;
    }
    if (!preg_match("/^[a-z0-9][a-z0-9\.-_]*[a-z0-9]*@([a-z0-9]+([a-z0-9-]*[a-z0-9]+)*\.)+[a-z]+/i",$rentEmail)){
        $error_mail = "_error";
        $error = true;
    }
    if (!$error){
        $postMessage ="
<!doctype html>
<html>
<body>
<div style='width:100%'>Cообщение от пользователя: $rentEmail</div>
<div style='width:100%'>Телефон для связи: $rentPhone</div>
<div style='width:100%'>Почтовый адрес: $rentEmail</div>
<div style='width:100%'>Марка авто: $rentBrand</div>
<div style='width:100%'>Модель: $rentModel</div>
<div style='width:100%'>Коробка передач: $rentKpp</div>
<div style='width:100%'>Первоночальный взнос: $rentName</div>
</body>
</html>";
        $subject ="=?utf-8?B?".base64_encode($subject)."?=";
        $headers ="From:$rentEmail\r\nReply-to:$rentEmail\r\nContent-type: text/html; charset=utf-8\r\n";
        mail($to, $subject, $postMessage, $headers);
        $success = "success";
        $successfull = "Заявка успешно отправлена, ожидайте звонка!";
        $_SESSION['rentBrand'] = "";
        $_SESSION['rentModel'] = "";
        $_SESSION['rentKpp'] = "";
        $_SESSION['rentPhone'] = "";
        $_SESSION['rentEmail'] = "";
        $_SESSION['rentName'] = "";

    }else{
        $errorEcho=$error_title;
    }
}
?>
<?php
$arResult=array(
    "Model_1"=>array(
        "id"=>"1",
        "nameModel"=>"Renault Logan седан",
        "priceModel"=>"1200",
        "doorsModel"=>"5",
        "controlModel"=>"Нет",
        "bodyModel"=>"Седан",
        "transmission"=>"Механика",
        "engineModel"=>"1.6л/87 л.с./Бензин",
        "colorModel"=>"Cерый",
        "url"=>'image/logan.jpg'
    ),
    "Model_2"=>array(
        "id"=>"2",
        "nameModel"=>"Chevrolet Lacetti хэтчбек",
        "priceModel"=>"1500",
        "doorsModel"=>"5",
        "controlModel"=>"Нет",
        "bodyModel"=>"Хэтчбек",
        "transmission"=>"Механика",
        "engineModel"=>"1.4л/94 л.с./Бензин",
        "colorModel"=>"Синий/Черный",
        "url"=>"image/Chevrolet_lacetti_hech.png"
    ),

    "Model_3"=>array(
        "id"=>"3",
        "nameModel"=>"Chevrolet Lacetti универсал",
        "priceModel"=>"1500",
        "doorsModel"=>"5",
        "controlModel"=>"Нет",
        "bodyModel"=>"Универсал",
        "transmission"=>"Механика",
        "engineModel"=>"1.6л/109 л.с./Бензин",
        "colorModel"=>"Синий металик",
        "url"=>"image/Chevrolet_lacetti_universal.png"
    ),
    "Model_4"=>array(
        "id"=>"4",
        "nameModel"=>"Chevrolet Lacetti седан",
        "priceModel"=>"1500",
        "doorsModel"=>"4",
        "controlModel"=>"Да",
        "bodyModel"=>"Седан",
        "transmission"=>"Механика",
        "engineModel"=>"1.4л/96 л.с./Бензин",
        "colorModel"=>"Синий",
        "url"=>"image/chevrolet_lacetti.png"
    ),
    "Model_5"=>array(
        "id"=>"5",
        "nameModel"=>"Nissan Primera седан",
        "priceModel"=>"1500",
        "doorsModel"=>"4",
        "controlModel"=>"Да",
        "bodyModel"=>"Седан",
        "transmission"=>"Механика",
        "engineModel"=>"1.8л/116 л.с./Бензин",
        "colorModel"=>"Бежевый",
        "url"=>"image/nissan_primera.jpg"
    ),
    "Model_6"=>array(
        "id"=>"6",
        "nameModel"=>"Chevrolet Aveo седан",
        "priceModel"=>"1500",
        "doorsModel"=>"4",
        "controlModel"=>"Нет",
        "bodyModel"=>"Седан",
        "transmission"=>"Механика",
        "engineModel"=>"1.2л/84 л.с./Бензин",
        "colorModel"=>"Черный",
        "url"=>"image/chevrolet_aveo.png"
    ),
    "Model_7"=>array(
        "id"=>"7",
        "nameModel"=>"Peugeot 308 хэтчбек",
        "priceModel"=>"1800",
        "doorsModel"=>"5",
        "controlModel"=>"Нет",
        "bodyModel"=>"Хэтчбек",
        "transmission"=>"Автомат",
        "engineModel"=>"1.6л/120 л.с./Бензин",
        "colorModel"=>"Cерый",
        "url"=>"image/peugeot_308_hetch.png"
    ),
    "Model_8"=>array(
        "id"=>"8",
        "nameModel"=>"Opel Corsa хэтчбек",
        "priceModel"=>"1500",
        "doorsModel"=>"5",
        "controlModel"=>"Нет",
        "bodyModel"=>"Хэтчбек",
        "transmission"=>"Автомат",
        "engineModel"=>"1.2л/86 л.с./Бензин",
        "colorModel"=>"Серебро",
        "url"=>"image/opel_corsa_silver.png"
    ),
    "Model_9"=>array(
        "id"=>"9",
        "nameModel"=>"Nissan Almera седан",
        "priceModel"=>"1500",
        "doorsModel"=>"4",
        "controlModel"=>"Нет",
        "bodyModel"=>"Седан",
        "transmission"=>"Механика",
        "engineModel"=>"1.6 л/102 л.с./Бензин",
        "colorModel"=>"Черный",
        "url"=>"image/nissan_almera_black.png"
    ),
    "Model_10"=>array(
        "id"=>"10",
        "nameModel"=>"Kia Rio седан",
        "priceModel"=>"1500",
        "doorsModel"=>"4",
        "controlModel"=>"Нет",
        "bodyModel"=>"Седан",
        "transmission"=>"Автомат",
        "engineModel"=>"1.4 л/107 л.с./Бензин",
        "colorModel"=>"Черный",
        "url"=>"image/kia_rio_black.png"
    ),

);
$modelIdJson=$_REQUEST["id"];
foreach($arResult as $item){
    if ($item["id"] ==$modelIdJson ) {
        $arModel=$item["colorModel"];
    }
};
//echo json_encode($arModel);
?>
