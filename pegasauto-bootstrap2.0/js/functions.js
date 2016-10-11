var page;
var numberSlide=1;
$(document).ready(function(){
    if(page==2) {
        color_model = "Cерый";
        engine_model = "1.6 л/87 л.с./Бензин";
        transmission_model = "Механика";
        body_model = "Седан";
        control_model = "Нет";
        doors_model = "5";
        var price_model2 = "1300 руб./сут.";
        name_model= "Renault Logan седан";
        document.getElementById('tax_1').innerHTML = color_model;
        document.getElementById('tax_2').innerHTML = engine_model;
        document.getElementById('tax_3').innerHTML = transmission_model;
        document.getElementById('tax_4').innerHTML = body_model;
        document.getElementById('tax_5').innerHTML = control_model;
        document.getElementById('tax_6').innerHTML = doors_model;
        document.getElementById('tax_7').innerHTML = price_model2;
        document.getElementById('tax_8').innerHTML = name_model;
    }
});

function Delele_img() {
    $(".taxi_car_img").css("display","none");

}
function Writer() {
    document.getElementById('tax_1').innerHTML = color_model;
    document.getElementById('tax_2').innerHTML = engine_model;
    document.getElementById('tax_3').innerHTML = transmission_model;
    document.getElementById('tax_4').innerHTML = body_model;
    document.getElementById('tax_5').innerHTML = control_model;
    document.getElementById('tax_6').innerHTML = doors_model;
    document.getElementById('tax_7').innerHTML = price_model2;
    document.getElementById('tax_8').innerHTML = name_model;
}

$(document).ready(function(){
    $(".taxi_car_back").on("click",function () {
        if(numberSlide==9){
            numberSlide=0;
        }
        numberSlide+=1;
        if(numberSlide==1){
            Delele_img();
            $(".taxi_car_img_1").removeAttr("style");
            color_model = "Cерый";
            engine_model = "1.6л/87 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1300 руб./сут.";
            name_model= "Renault Logan седан";
            Writer();
        }
        if(numberSlide==2){
            Delele_img();
            $(".taxi_car_img_2").removeAttr("style");
            color_model = "Синий/Черный";
            engine_model = "1.4л/94 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Хэтчбек";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1400 руб./сут.";
            name_model= "Chevrolet Lacetti хэтчбек";
            Writer();
        }
        if(numberSlide==3){
            Delele_img();
            $(".taxi_car_img_3").removeAttr("style");
            color_model = "Синий металик";
            engine_model = "1.6л/109 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Универсал";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1500 руб./сут.";
            name_model= "Chevrolet Lacetti универсал";
            Writer();
        }
        if(numberSlide==4){
            Delele_img();
            $(".taxi_car_img_4").removeAttr("style");
            color_model = "Синий";
            engine_model = "1.4л/96 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Да";
            doors_model = "4";
            price_model2 = "1400 руб./сут.";
            name_model= "Chevrolet Lacetti седан";
            Writer();
        }
        if(numberSlide==5){
            Delele_img();
            $(".taxi_car_img_5").removeAttr("style");
            color_model = "Бежевый";
            engine_model = "1.8л/116 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Да";
            doors_model = "4";
            price_model2 = "1500 руб./сут.";
            name_model= "Nissan Primera седан";
            Writer();
        }
        if(numberSlide==6){
            Delele_img();
            $(".taxi_car_img_6").removeAttr("style");
            color_model = "Черный";
            engine_model = "1.2л/84 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "4";
            price_model2 = "1500 руб./сут.";
            name_model= "Chevrolet Aveo седан";
            Writer();
        }
        if(numberSlide==7){
            Delele_img();
            $(".taxi_car_img_7").removeAttr("style");
            color_model = "Серый";
            engine_model = "1.6л/120 л.с./Бензин";
            transmission_model = "Автомат";
            body_model = "Хэтчбек";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1800 руб./сут.";
            name_model= "Peugeot 308 хэтчбек";
            Writer();
        }
        if(numberSlide==8){
            Delele_img();
            $(".taxi_car_img_8").removeAttr("style");
            color_model = "Серебристый";
            engine_model = "1.5л/86 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "4";
            price_model2 = "1000 руб./сут.";
            name_model= "Chevrolet Lanos седан";
            Writer();
        }
        if(numberSlide==9){
            Delele_img();
            $(".taxi_car_img_9").removeAttr("style");
            color_model = "Черный";
            engine_model = "1.5л/86 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "4";
            price_model2 = "1100 руб./сут.";
            name_model= "Daewoo Nexia седан";
            Writer();
        }


    });
    $(".taxi_car_next").on("click",function () {
        if(numberSlide==1){
            numberSlide=10;
        }
        numberSlide-=1;
        if(numberSlide==1){
            Delele_img();
            $(".taxi_car_img_1").removeAttr("style");
            color_model = "Cерый";
            engine_model = "1.6л/87 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1300 руб./сут.";
            name_model= "Renault Logan седан";
            Writer();
            numberSlide=9;
        }
        if(numberSlide==2){
            Delele_img();
            $(".taxi_car_img_2").removeAttr("style");
            color_model = "Синий/Черный";
            engine_model = "1.4л/94 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Хэтчбек";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1400 руб./сут.";
            name_model= "Chevrolet Lacetti хэтчбек";
            Writer();
        }
        if(numberSlide==3){
            Delele_img();
            $(".taxi_car_img_3").removeAttr("style");
            color_model = "Синий металик";
            engine_model = "1.6л/109 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Универсал";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1500 руб./сут.";
            name_model= "Chevrolet Lacetti универсал";
            Writer();
        }
        if(numberSlide==4){
            Delele_img();
            $(".taxi_car_img_4").removeAttr("style");
            color_model = "Синий";
            engine_model = "1.4л/96 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Да";
            doors_model = "4";
            price_model2 = "1400 руб./сут.";
            name_model= "Chevrolet Lacetti седан";
            Writer();
        }
        if(numberSlide==5){
            Delele_img();
            $(".taxi_car_img_5").removeAttr("style");
            color_model = "Бежевый";
            engine_model = "1.8л/116 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Да";
            doors_model = "4";
            price_model2 = "1500 руб./сут.";
            name_model= "Nissan Primera седан";
            Writer();
        }
        if(numberSlide==6){
            Delele_img();
            $(".taxi_car_img_6").removeAttr("style");
            color_model = "Черный";
            engine_model = "1.2л/84 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "4";
            price_model2 = "1500 руб./сут.";
            name_model= "Chevrolet Aveo седан";
            Writer();
        }
        if(numberSlide==7){
            Delele_img();
            $(".taxi_car_img_7").removeAttr("style");
            color_model = "Серый";
            engine_model = "1.6л/120 л.с./Бензин";
            transmission_model = "Автомат";
            body_model = "Хэтчбек";
            control_model = "Нет";
            doors_model = "5";
            price_model2 = "1800 руб./сут.";
            name_model= "Peugeot 308 хэтчбек";
            Writer();
        }
        if(numberSlide==8){
            Delele_img();
            $(".taxi_car_img_8").removeAttr("style");
            color_model = "Серебристый";
            engine_model = "1.5л/86 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "4";
            price_model2 = "1000 руб./сут.";
            name_model= "Chevrolet Lanos седан";
            Writer();
        }
        if(numberSlide==9){
            Delele_img();
            $(".taxi_car_img_9").removeAttr("style");
            color_model = "Черный";
            engine_model = "1.5л/86 л.с./Бензин";
            transmission_model = "Механика";
            body_model = "Седан";
            control_model = "Нет";
            doors_model = "4";
            price_model2 = "1100 руб./сут.";
            name_model= "Daewoo Nexia седан";
            Writer();
        }

    });
});