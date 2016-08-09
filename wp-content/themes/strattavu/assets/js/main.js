$(document).ready(function() {

    $(".close-btn").click(function() {
        $(this).css({
            'z-index': 101
        });
        $(this).toggleClass('toggle-fixed');
        $(this).find("i.fi-list").toggleClass("fi-x");
        $(".mobile-nav-container").toggleClass('open');
    });

    if ($("#ninja_forms_field_3").length) {
        $("#ninja_forms_field_3").attr("placeholder", "Message: How can we help?");
    }
    

    // GOOGLE MAP API CALL
    function initGoogleMap() {
        var map;
        if ($("#map").length) {
            var center = { lat: 49.285184, lng: -123.110808 };
            var styles = [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 29
                }, {
                    "weight": 0.2
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 18
                }]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f5f5f5"
                }, {
                    "lightness": 21
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#dedede"
                }, {
                    "lightness": 21
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "color": "#ffffff"
                }, {
                    "lightness": 16
                }]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{
                    "saturation": 36
                }, {
                    "color": "#333333"
                }, {
                    "lightness": 40
                }]
            }, {
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f2f2f2"
                }, {
                    "lightness": 19
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 20
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fefefe"
                }, {
                    "lightness": 17
                }, {
                    "weight": 1.2
                }]
            }];
            map = new google.maps.Map(document.getElementById('map'), {
                center: center,
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoomControl: true,
                scaleControl: false,
                scrollwheel: false,
                disableDoubleClickZoom: true,
                styles: styles,
                draggable: false
            });

            var infoString = '<div style="text-align: center; padding: 10px; line-height: 1.6;"><span style="color: #3d6c99; font-weight: bold;">Strattavu</span> <br>2185 West 33rd Ave Vancouver, BC, V6M 1C1<br><br><a href="https://www.google.ca/maps/dir//2185+W+33rd+Ave,+Vancouver,+BC+V6M+1C1/@49.2424283,-123.1592115,17z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x548673767cb199d3:0x50608bfb85f5c628!2m2!1d-123.1570228!2d49.2424248!3e0" style="font-weight: bold; color: #3d6c99;" target="_blank">Get Directions</a></div>';
            var infowindow = new google.maps.InfoWindow({
                content: infoString
            });


            var marker = new google.maps.Marker({
                position: center,
                animation: google.maps.Animation.DROP,
                map: map,
                icon: '/wp-content/themes/strattavu/assets/img/map_pin.png'
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }

    }

    initGoogleMap();

});
