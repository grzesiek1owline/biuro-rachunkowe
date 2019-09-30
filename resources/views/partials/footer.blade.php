<footer class="footer" id="kontakt">
    <div class="container">
        <div class="row footer__row">
            <div class="col-12 col-lg-3">
                @php
                    $brandType = get_field('typ_logo','option');
                    $url = site_url();

                    if($brandType == 'text'){
                      echo '<a href="'.$url.'" class="brand brand--footer">'.get_field('logo_tekstowe','option').'</a>';
                    } else {
                      $img = get_field('obraz_logo','option');
                      echo '<a href="'.$url.'" class="brand brand--footer"><img class="brand__img" scr="'.$img['url'].'"></img></a>';
                    }
                @endphp
                <p class="pgh">
                    {!! get_field('krotka_informacja_w_stopce','option') !!}
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <div class="contact">
                    <h3>Kontakt</h3>
                    <ul class="contact__list">
                        <li class="contact__element">
                            <div class="contact__ico">
                                <img src="@asset('images/tele2.svg')" width="20px" alt="Telefon ikona">
                            </div>
                            <div class="contact__info">
                                <a href="tel:+{!! get_field('telefon','option') !!}" class="contact__way contact__way--href">{!! get_field('telefon','option') !!}</a>
                            </div>
                        </li>
                        <li class="contact__element">
                            <div class="contact__ico">
                                <img src="@asset('images/mail.svg')" width="25px" alt="Email ikona">
                            </div>
                            <div class="contact__info">
                                <a href="mailto:{!! get_field('email','option') !!}"
                                    class="contact__way contact__way--href">{!! get_field('email','option') !!}</a>
                            </div>
                        </li>
                        <li class="contact__element">
                            <div class="contact__ico">
                                <img src="@asset('images/pin.svg')" width="15px" alt="Pin ikona">
                            </div>
                            <div class="contact__info">
                                <p class="contact__way">
                                    {!! get_field('adres','option') !!}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="contact__form">
                    <h3>Napisz wiadomość</h3>
                    @php
                        $sh = get_field('formularz','option');
                        echo do_shortcode($sh);
                    @endphp
                </div>
            </div>
        </div>
    </div>

    <div id="map" class="map"></div>

    <script>
        var map;
        var lat= {{ get_field('szerokosc_geograficzna','option') }}; //sz
        var lng= {{ get_field('dlugosc_geograficzna','option') }};
        var zoom=10;
        function initialize() {
                    var myLatlng = new google.maps.LatLng(lat,lng);
                    var myOptions = {
                        zoom: zoom,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.hybrid,
                        styles: [
                          {
                              "featureType": "water",
                              "elementType": "geometry",
                              "stylers": [
                                  {
                                      "color": "#e9e9e9"
                                  },
                                  {
                                      "lightness": 17
                                  }
                              ]
                          },
                          {
                              "featureType": "landscape",
                              "elementType": "geometry",
                              "stylers": [
                                  {
                                      "color": "#f5f5f5"
                                  },
                                  {
                                      "lightness": 20
                                  }
                              ]
                          },
                          {
                              "featureType": "road.highway",
                              "elementType": "geometry.fill",
                              "stylers": [
                                  {
                                      "color": "#ffffff"
                                  },
                                  {
                                      "lightness": 17
                                  }
                              ]
                          },
                          {
                              "featureType": "road.highway",
                              "elementType": "geometry.stroke",
                              "stylers": [
                                  {
                                      "color": "#ffffff"
                                  },
                                  {
                                      "lightness": 29
                                  },
                                  {
                                      "weight": 0.2
                                  }
                              ]
                          },
                          {
                              "featureType": "road.arterial",
                              "elementType": "geometry",
                              "stylers": [
                                  {
                                      "color": "#ffffff"
                                  },
                                  {
                                      "lightness": 18
                                  }
                              ]
                          },
                          {
                              "featureType": "road.local",
                              "elementType": "geometry",
                              "stylers": [
                                  {
                                      "color": "#ffffff"
                                  },
                                  {
                                      "lightness": 16
                                  }
                              ]
                          },
                          {
                              "featureType": "poi",
                              "elementType": "geometry",
                              "stylers": [
                                  {
                                      "color": "#f5f5f5"
                                  },
                                  {
                                      "lightness": 21
                                  }
                              ]
                          },
                          {
                              "featureType": "poi.park",
                              "elementType": "geometry",
                              "stylers": [
                                  {
                                      "color": "#dedede"
                                  },
                                  {
                                      "lightness": 21
                                  }
                              ]
                          },
                          {
                              "elementType": "labels.text.stroke",
                              "stylers": [
                                  {
                                      "visibility": "on"
                                  },
                                  {
                                      "color": "#ffffff"
                                  },
                                  {
                                      "lightness": 16
                                  }
                              ]
                          },
                          {
                              "elementType": "labels.text.fill",
                              "stylers": [
                                  {
                                      "saturation": 36
                                  },
                                  {
                                      "color": "#333333"
                                  },
                                  {
                                      "lightness": 40
                                  }
                              ]
                          },
                          {
                              "elementType": "labels.icon",
                              "stylers": [
                                  {
                                      "visibility": "off"
                                  }
                              ]
                          },
                          {
                              "featureType": "transit",
                              "elementType": "geometry",
                              "stylers": [
                                  {
                                      "color": "#f2f2f2"
                                  },
                                  {
                                      "lightness": 19
                                  }
                              ]
                          },
                          {
                              "featureType": "administrative",
                              "elementType": "geometry.fill",
                              "stylers": [
                                  {
                                      "color": "#fefefe"
                                  },
                                  {
                                      "lightness": 20
                                  }
                              ]
                          },
                          {
                              "featureType": "administrative",
                              "elementType": "geometry.stroke",
                              "stylers": [
                                  {
                                      "color": "#fefefe"
                                  },
                                  {
                                      "lightness": 17
                                  },
                                  {
                                      "weight": 1.2
                                  }
                              ]
                          }
                      ]
                    }
                    var map = new google.maps.Map(document.getElementById("map"), myOptions);

                    var markers = [
                        ['Body Beauty Fit', lat, lng]
                    ];

                    var sizeX = 32;
                    var sizeY = 32;

                    var image = {
                        url: '@asset('images/pin.svg')',
                        size: new google.maps.Size(sizeX, sizeY),
                        scaledSize: new google.maps.Size(sizeX, sizeY),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(sizeX/2, sizeY/2)
                    }

                    for (var i = 0; i < markers.length; i++) {
                        var draftMarker = markers[i];
                        var myLatLng = new google.maps.LatLng(draftMarker[1], draftMarker[2]);
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: draftMarker[0],
                            icon: image
                        });
                    }
                }
    </script>
    <script defer src="https://maps.google.com/maps/api/js?key={{ get_field('google_maps_api','option') }}&callback=initialize" type="text/javascript"> </script>

</footer>