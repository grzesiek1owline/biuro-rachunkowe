<footer class="footer"></footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        <a class="brand">
          <img src="" alt="" class="logo">
        </a>
        <p class="pgh">sdsdsd</p>
      </div>
      <div class="col-12 col-lg-3">
        <div class="contact">
          <h3>Kontakt</h3>
          <ul class="contact__list">
            <li class="contact__element">
              <img src="" alt="" class="contact__ico">
              <div class="contact__info">
                <a href="" class="contact__way"></a>
              </div>
            </li>
            <li class="contact__element">
                <img src="" alt="" class="contact__ico">
                <div class="contact__info">
                  <a href="" class="contact__way"></a>
                </div>
              </li>
              <li class="contact__element">
                  <img src="" alt="" class="contact__ico">
                  <div class="contact__info">
                    <a href="" class="contact__way"></a>
                  </div>
                </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="contact__form">
          <h3>Napisz wiadomość</h3>
          <form class="form" action="">
            <div class="form__column">
              <input class="input" type="text" placeholder="ssss">
              <input class="input" type="text" placeholder="ssss">
            </div>
            <div class="form__column">
              <textarea class="textarea" name="" id="" cols="30" rows="10"></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="map"></div>

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

                    var image = '@asset('images/001-maps-and-flags.png')';

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
    <script defer src="https://maps.google.com/maps/api/js?key=AIzaSyBkJcRS9_dSttwtBABTAe9dpPl-hTPWGvM&callback=initialize" type="text/javascript"> </script>

</footer>
