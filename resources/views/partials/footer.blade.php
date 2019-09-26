<footer class="footer">
    <div class="container">
        <div class="row footer__row">
            <div class="col-12 col-lg-3">
                <a class="brand">
                    br
                </a>
                <p class="pgh">
                    Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat.
                    Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam
                    pede cursus vitae
                </p>
            </div>
            <div class="col-12 col-lg-3">
                <div class="contact">
                    <h3>Kontakt</h3>
                    <ul class="contact__list">
                        <li class="contact__element">
                            <div class="contact__ico">
                                <img src="@asset('images/tele2.svg')" width="20px" alt="Telefon ikona">
                            </div>
                            <div class="contact__info">
                                <a href="tel:+48586680305" class="contact__way contact__way--href">+48 58 668 03 05</a>
                            </div>
                        </li>
                        <li class="contact__element">
                            <div class="contact__ico">
                                <img src="@asset('images/mail.svg')" width="25px" alt="Email ikona">
                            </div>
                            <div class="contact__info">
                                <a href="mailto:biuro@wwyrzykowski.pl"
                                    class="contact__way contact__way--href">biuro@wwyrzykowski.pl</a>
                            </div>
                        </li>
                        <li class="contact__element">
                            <div class="contact__ico">
                                <img src="@asset('images/pin.svg')" width="15px" alt="Pin ikona">
                            </div>
                            <div class="contact__info">
                                <p class="contact__way">
                                    ul.Kurpiowska 33 lok.1 <br>
                                    81-554 Gdynia
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="contact__form">
                    <h3>Napisz wiadomość</h3>
                    <form class="form" action="">
                        <div class="form__body">
                                <div class="form__column-left">
                                        <input class="input" type="text" placeholder="Telefon">
                                        <input class="input" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="form__column-right">
                                        <textarea class="textarea" placeholder="Wiadomość" name=""></textarea>
                                    </div>
                        </div>
                        <div class="form__submit">
                            <input class="btn" type="submit" value="Wyślij wiadomość">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="map" class="map"></div>

    <script>
        //['Body Beauty Fit', 52.165351, 21.076764]
        var map;
        var lat=52.165351;
        var lng=21.076764;
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
                        ['Body Beauty Fit', 52.165351, 21.076764]
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
    <script defer
        src="https://maps.google.com/maps/api/js?key=AIzaSyDrLtGTboYDKumuS-IM4cn1_BqpG6ZYP5w&callback=initialize"
        type="text/javascript"> </script>

</footer>