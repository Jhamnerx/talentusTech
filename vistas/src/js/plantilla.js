/*=============================================
PLANTILLA
=============================================*/
var rutaOculta = $("#rutaOculta").val();
// Herramienta TOOLTIP
//$('[data-toggle="tooltip"]').tooltip(); 

$.ajax({

    url:rutaOculta+"ajax/plantilla.ajax.php",
    success:function(respuesta){

        console.log(respuesta.colorFondo);

        var colorFondo = JSON.parse(respuesta).colorFondo;
        var colorTexto = JSON.parse(respuesta).colorTexto;
        
        $(".backColor, .backColor a").css({"background": colorFondo,
                                            "color": colorTexto
                                            })


    }

})



/*=============================================
LOADER
=============================================*/
var myVar;

function loaderPagina() {
    myVar = setTimeout(showPage(), 200);
}

function showPage() {

    //$("#spinner-content").classList.add("spinner-hidden");
    $("#spinner-content").addClass("spinner-hidden");

    setTimeout(removeSpinner(), 1000);
}

function removeSpinner() {

    //document.getElementById("spinner-content").style.display = "none";
    $(".spinner-content").css("display", "none");
}


/*=============================================
ENLACES ACTIVOS
=============================================*/

var url = window.location.href;

var indice = url.split("/");



var pagActual = indice[4];

//console.log(pagActual);


if(isNaN(pagActual)){

	$("."+pagActual).addClass("current-menu");

}else{
	
	$(".inicio").addClass("current-menu");	
}

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


    /*========================
    04: Background Image
    ==========================*/
    var $bgImg = $('[data-bg-img]');
    $bgImg.css('background-image', function () {
        return 'url("' + $(this).data('bg-img') + '")';
    }).removeAttr('data-bg-img').addClass('bg-img');


    /*==================================
    10: Google map 
    ====================================*/
    var $map = $('[data-trigger="map"]'),
        $mapOps;

    if ($map.length) {
        // Map Options
        $mapOps = $map.data('map-options');

        // Map Initialization
        window.initMap = function () {
            $map.css('min-height', '200px');
            $map.each(function () {
                var $t = $(this), map, lat, lng, zoom;

                $mapOps = $t.data('map-options');
                lat = parseFloat($mapOps.latitude, 10);
                lng = parseFloat($mapOps.longitude, 10);
                zoom = parseFloat($mapOps.zoom, 10);

                map = new google.maps.Map($t[0], {
                    center: { lat: lat, lng: lng },
                    zoom: zoom,
                    scrollwheel: false,
                    disableDefaultUI: true,
                    zoomControl: true,
                    styles: 
                        [
                            {
                                "featureType": "all",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "saturation": 36
                                    },
                                    {
                                        "color": "#000000"
                                    },
                                    {
                                        "lightness": 40
                                    }
                                ]
                            },

                            {
                                "featureType": "water",
                                "elementType": "geometry",
                                "stylers": [
                                    {
                                        "color": "#000000"
                                    },
                                    {
                                        "lightness": 17
                                    }
                                ]
                            }
                        ]
                });

                map = new google.maps.Marker({
                    position: { lat: lat, lng: lng },
                    map: map,
                    animation: google.maps.Animation.DROP,
                    draggable: false,
                    icon: 'vistas/src/images/map-marker.png'
                });

            });
        };
        initMap();
    };
    /*==================================
    05: Check Data
    ====================================*/
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };
    /*==================================
    06: Owl Carousel
    ====================================*/
    var $owlCarousel = $('.owl-carousel');
    $owlCarousel.each(function () {
        var $t = $(this);

        $t.owlCarousel({
            items: checkData($t.data('owl-items'), 1),
            margin: checkData($t.data('owl-margin'), 0),
            loop: checkData($t.data('owl-loop'), true),
            smartSpeed: 450,
            autoplay: checkData($t.data('owl-autoplay'), true),
            autoplayTimeout: checkData($t.data('owl-speed'), 8000),
            center: checkData($t.data('owl-center'), false),
            animateIn: checkData($t.data('owl-animate-in'), false),
            animateOut: checkData($t.data('owl-animate-out'), false),
            nav: checkData($t.data('owl-nav'), false),
            navText: ['<img src="vistas/src/images/icons/angle-left.svg" class="svg">', '<img src="vistas/src/images/icons/angle-right.svg" class="svg">'],
            dots: checkData($t.data('owl-dots'), false),
            responsive: checkData($t.data('owl-responsive'), {})
        });
    });