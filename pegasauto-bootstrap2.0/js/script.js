var color_model;
var engine_model;
var transmission_model;
var body_model;
var control_model;
var doors_model;
var price_model;
var url_model;
var name_model;

$(document).ready(function(){
    $(".model_car_container li").on("click",function () {
        modelId=$(this).attr("id");
        url_model=$(this).data("url");
        color_model=$(this).data("color");
        engine_model=$(this).data("engine");
        transmission_model=$(this).data("transmission");
        body_model=$(this).data("body");
        control_model=$(this).data("control");
        doors_model=$(this).data("doors");
        price_model=$(this).data("price");
        name_model=$(this).data("name");
        $(".model_car_container li").removeClass ("active");
        $(this).addClass("active");
        $("#color_model").text(color_model);
        $("#engine_model").text(engine_model);
        $("#transmission_model").text(transmission_model);
        $("#body_model").text(body_model);
        $("#control_model").text(control_model);
        $("#doors_model").text(doors_model);
        $("#price_model").text(price_model);
        $("#url_model").attr("src",url_model);

    })
});



$(document).ready(function(){
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){
        myMap = new ymaps.Map ("maps", {
            center: [59.85276826, 30.33429250],
            zoom: 17
        });

        myPlacemark = new ymaps.Placemark(myMap.getCenter(),{
            balloonContent: 'Пегас Авто - Аренда автомобилей <br/> ул.Типанова  дом 19',
            hintContent: 'Пегас Авто'},{
            iconLayout: 'default#image',
            iconImageHref: 'image/Maps.png',
            iconImageSize: [75, 75],
            iconImageOffset: [30, -85]
        });

        myMap.geoObjects.add(myPlacemark);
    }
});