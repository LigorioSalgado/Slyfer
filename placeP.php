
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Slyfer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <style type="text/css">

        .myButton {
    -moz-box-shadow:inset 0px 1px 3px 0px #91b8b3;
    -webkit-box-shadow:inset 0px 1px 3px 0px #91b8b3;
    box-shadow:inset 0px 1px 3px 0px #91b8b3;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #768d87), color-stop(1, #6c7c7c));
    background:-moz-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:-webkit-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:-o-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:-ms-linear-gradient(top, #768d87 5%, #6c7c7c 100%);
    background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#768d87', endColorstr='#6c7c7c',GradientType=0);
    background-color:#768d87;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    border:1px solid #566963;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:11px 23px;
    text-decoration:none;
    text-shadow:0px -1px 0px #2b665e;
    float: right;
    width: 20em;
}
.myButton:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #6c7c7c), color-stop(1, #768d87));
    background:-moz-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:-webkit-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:-o-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:-ms-linear-gradient(top, #6c7c7c 5%, #768d87 100%);
    background:linear-gradient(to bottom, #6c7c7c 5%, #768d87 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c7c7c', endColorstr='#768d87',GradientType=0);
    background-color:#6c7c7c;
}
.myButton:active {
    position:relative;
    top:1px;
}


    </style>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--    TOGGLE INFORMATION  -->

    <script>
        $(document).ready(function(){

        $("sabre").hide();
        $("airbnb").hide();
        $("uber").hide();

                $(".fa-plane").mouseover(function(){
                $("sabre").slideToggle();
            });

                $(".fa-home").mouseover(function(){
                $("airbnb").slideToggle();
            });

                $(".fa-car").mouseover(function(){
                $("uber").slideToggle();
            });

        });
    </script>


    <!---------------------------------->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Slyfer</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Propular Places</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
        </ul>
    </nav>

    <div style="position: absolute; z-index: -99; width: 100%; height: 100%; text-align:center;">
                <iframe width="1150" height="650" src="https://www.youtube.com/embed/hWo-43ObCP8?rel=0&autoplay=1" frameborder="0">
            </iframe>
    </div>

    <!-- Header -->
    <header id="top" class="headerPlace">
        <div class="text-vertical-center">

            <p style="font-size: 200px; font-color:ffffff;"><strong>Paris</strong></p>
            <p style="font-size: 80px; font-color:ffffff;">The city of love</p>
            <br>
        </div>

        <div style="position: fixed; z-index: -99; width: 100%; height: 100%">

        </div>

    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primaryFrance">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1>About:</h1>

                    <h3>
                        Lingering over pain au chocolat in a sidewalk café, relaxing after a day of strolling along the Seine and marveling at icons like the Eiffel Tower and the Arc de Triomphe… the perfect Paris experience combines leisure and liveliness with enough time to savor both an exquisite meal and exhibits at the Louvre
                    </h3>

                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="calloutFrance">
        <div class="text-vertical-center">
            <h1>Select your services and prices</h1>
        </div>
    </aside>

    <!-- Callout Package -->
    <aside class="calloutPackage">
        <div class="text-vertical-center">
            <h1>Construct Package</h1>

            <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-plane fa-stack-1x text-primaryF"></i>
            </span>

            <br>
                <sabre>

                  <p>Fecha ida: <input type="text" id="datepicker" style="width:65px;">



                  	  Fecha Regreso: <input type="text" id="datepickerFin" style="width:65px;">


                  	</p>


                  	<p>Origen: <input type="text"  id ="origenTxt"  value ="MEX" style="width:65px;">
                  	<p>Destino <input type="text"  id ="destinationTxt" value="CDG"style="width:65px;">
                  	<p>Pasajeros: <input type="text" id ="passengercountTxt" style="width:65px;">
                  	<button type="button" onclick="consultarViaje()">Buscar</button>
                </sabre>
            <br>

            <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-home fa-stack-1x text-primaryF"></i>
            </span>

            <br>
                <airbnb>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1597.2986491645286!2d2.2938605847424505!3d48.85878748228206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTorre+Eiffel!5e0!3m2!1ses-419!2smx!4v1438510049398" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </airbnb>
            <br>

            <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-car fa-stack-1x text-primaryF"></i>
            </span>

            <br>
                <uber>

                  <?php
                  include 'vendor/autoload.php';

                  use Pest;
                  use Uber\API\Client;
                  $token = 'jMUZUJ8an1j3FFlV5_Gaa1KI65YZkB22ayAvh7EK';
                  try {
                      $adapter = new Pest('https://api.uber.com/');

                      $client = new Client($adapter, $token, false); // define SERVER token here
                      $client->setLocale('nl_NL');

                      $products = $client->products(19.442272,-99.203453);
                    //  print_r($products);

                      $estimatesPrice = $client->estimatesPrice(19.4345888,-99.0695859,19.4848572,-99.1178616);
                      //  print_r($estimatesPrice);
                        $obj = json_decode($estimatesPrice);

                        $obj1= $obj->{'prices'};
                        echo "<table class='table'>
                      <thead>
                        <tr>
                          <th>Tipo de Uber</th>
                          <th>Min estimado</th>
                          <th>Max estimado</th>
                          <th>Duracion aprox</th>
                          <th>Distancia</th>
                          <th>Seleccion</th>
                        </tr>
                      </thead>
                      <tbody>";
                      for($i=0;$i<4;$i++){
                        $duration=round(intval($obj1[$i]->duration)/60);
                      echo"
                        <tr>
                          <td>".$obj1[$i]->localized_display_name."</td>
                          <td>$ ".$obj1[$i]->low_estimate." MXN </td>
                          <td>$".$obj1[$i]->high_estimate." MXN </td>
                          <td>".$duration." Mins</td>
                          <td>".$obj1[$i]->distance." Kms</td>
                          <td> <input type='radio' name='select' value='".$obj1[$i]->high_estimate."'/> </td>
                        </tr>";}
                    echo"
                      </tbody>
                    </table>";
                      /*  print_r($obj1[0]->localized_display_name);
                        print_r($obj1[1]->localized_display_name);
                        print_r($obj1[2]->localized_display_name);
                        print_r($obj1[3]->localized_display_name); */
                      //$estimatesTime = $client->estimatesTime(19.442272,-99.203453,19.4326018,-99.1332049);


                      //print_r($estimatesTime);
                  } catch(Exception $e) {
                      print $e->getMessage();
                  }
                  ?>

                </uber>
            <br>

        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                    <a href="payform.php" class="myButton">Buy Package</a>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



    <!--    Map
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>
    --!>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <p class="text-muted">Copyright &copy; Slyfer 2015</p>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <script>

    var token = 'T1RLAQKTXWFqC5zRHJP5mMcbTnZMNBluVhCypr5zSB0PlL+1BRE1UFa5AACg8sMWGZZmisrh45NMKfUYQ00iQMiM3GDE6L/xSit7g0tgkgtkPGfL5TvxfxtJRhiuaa0VDDe+LXkT9/AQZntwdnA2L7JCTv2oaYmyXKFgrE+xxrgN6zy/YRbHyFbM2oytQAQ20IWyYrZFunXFEY6mXNl40qwRkOL8aHWooeR2iHD9HRj4VQPtkhvgDvp7tj2nTrW0u2vt+fjal658L2zr3g**'


    function consultarViaje(){

      var origin =  $('#origenTxt').val().toUpperCase()
      var destination = $('#destinationTxt').val().toUpperCase()
    var   departuredate = $('#datepicker').val().toUpperCase()
   var    returndate = $('#datepickerFin').val().toUpperCase()

      var passengercount = $('#passengercountTxt').val().toUpperCase()
      var pointofsalecountry = 'MX'// $('#pointofsalecountryTxt').val().toUpperCase()


          /*origin = 'MEX'
        destination = 'LAX'
        departuredate = '2015-10-10'
        returndate = '2015-10-11'
        passengercount = '1'
        pointofsalecountry = 'MX'*/

      var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://api.test.sabre.com/v1/shop/flights?origin='+origin+'&destination='+destination+'&departuredate='+departuredate+'&returndate='+returndate+'&onlineitinerariesonly=N&limit='+'1'+'&offset='+'1'+'&eticketsonly='+'N'+'&sortby=totalfare&order=asc&sortby2=departuretime&order2=asc&pointofsalecountry='+pointofsalecountry+'&passengercount='+passengercount+'');

    xhr.setRequestHeader('Authorization', 'Bearer ' + token);

    xhr.onload = function() {
      //alert(xhr.responseText);

    var getViaje = JSON.parse(xhr.responseText);

    var idaVuelo = getViaje.PricedItineraries[0].AirItinerary.OriginDestinationOptions.OriginDestinationOption[0].FlightSegment[0].DepartureDateTime
    var vueltaVuelo = getViaje.PricedItineraries[0].AirItinerary.OriginDestinationOptions.OriginDestinationOption[0].FlightSegment[0].ArrivalDateTime
    var noVuelo = getViaje.PricedItineraries[0].AirItinerary.OriginDestinationOptions.OriginDestinationOption[0].FlightSegment[0].FlightNumber
    var asientos = getViaje.PricedItineraries[0].AirItineraryPricingInfo.FareInfos.FareInfo[0].TPA_Extensions.SeatsRemaining.Number
    var currencyCode = getViaje.PricedItineraries[0].AirItineraryPricingInfo.ItinTotalFare.TotalFare.CurrencyCode
    var costoFinal = getViaje.PricedItineraries[0].AirItineraryPricingInfo.ItinTotalFare.TotalFare.Amount
    var codeAerolinea = getViaje.PricedItineraries[0].AirItinerary.OriginDestinationOptions.OriginDestinationOption[0].FlightSegment[0].MarketingAirline.Code


    //var aerolinea


    alert( idaVuelo
    + " , " +
    vueltaVuelo
    + " , " +
    noVuelo
    + " , " +
    asientos
    + " , " +
    currencyCode
    + " " +
    costoFinal
    + " " +
    codeAerolinea


    )


    $.ajax({
        url: "https://api.test.sabre.com/v1/lists/utilities/airlines?airlinecode="+codeAerolinea+"",
        headers: {"Authorization": 'Bearer ' + token },
        success: function(result) {

          alert('Aerolinea: ' + result.AirlineInfo[0].AirlineName);
        }
    });



    };
    xhr.onerror = function() {
      alert(null);
    };
    xhr.send();
  }



  $(function() {
      $("#datepicker").datepicker( {
          onSelect: function(date) {
            var dateSelec = new Date(date);
            departuredate = dateSelec
          //alert(dateSelec)
          },
          dateFormat: "yy-mm-dd"
      });
    });

    $(function() {
      $( "#datepickerFin" ).datepicker( {
        onSelect: function(date) {
          var dateSelecFin = new Date(date);
              returndate = dateSelecFin
        },
        dateFormat: "yy-mm-dd"
      });
    });

</script>

</body>

</html>
