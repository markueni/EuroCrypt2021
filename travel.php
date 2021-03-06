<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> travel and venue"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> travel and venue"/>

    <style>
     div#venuemap {
       margin-top: 15px;
       height: 600px;
       width: 100%;
       border: 1px solid #ccc;
     }

     ul.hotel-info {
       list-style: none;
       padding:0;
       margin:0;
     }

     ul.hotel-info li {
       padding-left: 28px;
       display: block;
     }

     ul.hotel-info li:empty {
       height: 1.2rem;
     }

     ul.hotel-info li.email {
       background: url('images/icons/email.svg') no-repeat left 4px;
       background-size: 18px;
     }

     ul.hotel-info li.location {
       background: url('images/icons/location.svg') no-repeat left 4px;
       background-size: 18px;
     }

     ul.hotel-info li.phone {
       background: url('images/icons/phone.svg') no-repeat left 4px;
       background-size: 18px;
     }
    </style>

    <title>
      <?php echo $META['shortName'];?> Travel & Venue
    </title>

    <link rel="stylesheet" href="https://iacr.org/libs/js/leafletjs/leaflet.css"/>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Travel & Venue Information
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under construction. 
           please delete this paragram when you add other content. -->
    
      <!-- NOTE: below is placeholder content derived from the Crypto
           2019 conference. please uncomment and replace with your own
           content when ready. this code is here to give you an idea of
           what the structure of this page has looked like in the past -->
      <div class="row">
        <section class="col-md-8">
          <p>
            The conference will be held on Clarion Hotel Trondheim. You can reach conference venue by plane, train, boat or car.
            
           <p> By plane:
            Trondheim airport (Trondheim lufthavn) is located in Værnes, 30 minutes north of the city.
            To reach Trondheim from the airport, you can take the express bus that runs every 10-15 minutes and takes 30-40 minutes to travel.More information about bus can be found <a href="https://www.vaernesekspressen.no/"> here </a>.
            You can also take a taxi, for instance via <a href="https://trondertaxi.no/">here</a> or <a href="https://www.taxifix.no/booking">there</a>.
            </p>
            
            <p>
            By train:
            Trondheim train station (Trondheim sentralstasjon) is close to the city center, 10 mins walk. There are few trains from Oslo to Trondheim everyday, and you can enjoy scenic views during the journey. More information can be found <a href="https://www.vy.no/en">here</a>.
            </p>
            
            <p>
            By boat:
            Trondheim ferry station (Trondheim Hurtigbåtterminal) is next to the train station. You can either take a ferry (more information <a href="https://www.atb.no/en/boat/">here</a>) or the famous Hurtigruten (more information <a href="https://www.hurtigruten.no/praktisk-informasjon/ruteplan/">here</a>).
            </p>
            
            <p>
            By car:
            If you drive to Trondheim, then just reach the E6 and at one point, you will cross Trondheim. Some information <a href="https://en.wikivoyage.org/wiki/E6_through_Sweden_and_Norway">here </a>.
            International car rental companies are based in Norway, to cite a few Hertz, Avis, Europcar, Sixt. Please check that your driving license is accepted in Norway.
            Trondheim has several car parks. More information <a href="https://trondheimparkering.no/english">here</a>.
            </p>
            
            <p>
            During your stay:
            To commute inside the city, check the bus company <a href="https://www.atb.no/en/">AtB</a>. Single tickets can be purchased on the application of the bus company (<a href="https://www.atb.no/en/atb-mobillett/">AtB</a>) or on the machines diplayed at some bus stops. Note that single tickets purchased on board are more expensive! More information <a href="https://www.atb.no/en/ticket/">here</a>.
            </p>
            If any questions or problems, please contact <a href="mailto:eurocrypt2021@iacr.org">
           eurocrypt2021@iacr.org </a>  
          </p>
        </section>

        <div class="col-md-4">
          <div class="alert alert-success" role="alert">
            <img src="images/icons/exclamation.svg" class="icon" />&emsp;
            <!-- this could be a warning that hotels book up fast in the season -->
            Bring a sweater and/or jacket. Trondheim
              can be cold. (This is crucial when going out!)
          </div>
        </div>
      </div>

      <div id="venuemap">
      </div>

      <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
           This is content from a past Crypto that shows how the formatting should work.
      <h3 class="pageSubtitle mt-5">
        On-Campus Accommodations
      </h3>
      <p>
        On-campus accomodations consist of dormitory rooms (dorms) and a small number of hotel-style rooms at the Club &amp; Guest House. For attendees staying on campus, free shuttle bus service is available between here and the airport. In addition, parking is also available at no cost to attendees who reside on-site. A permit can be requested from the front desk upon arrival.
      </p>
      <p>
        Note that children under the age of 13 cannot stay in on-site accommodations, so those bringing younger children will need to make separate arrangements in one of the nearby hotels.
      </p>

      <div class="row justify-content-around">
        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Dormitory rooms
          </h4>
          <p>
            Reasonably priced accommodations are available in the university residence halls (dorms) for conference attendees and their registered guests. These have shared bathrooms for the floor.
          </p>
          <p>
            Once on-site registration is available, there will be a link below.
          </p>
          <a href="http://kaymckelly.com" class="btn btn-warning btn-block disabled mb-5 mt-auto" role="button">Register for dorms</a>
        </section>

        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Club &amp; Guest House at UC Santa Barbara
          </h4>
          <address>
            <ul class="hotel-info">
              <li class="location">
                Building 581
              </li>
              <li>
                University of California
              </li>
              <li>
                Santa Barbara, CA 93106
              </li>
              <?php // NOTE: this li is used for spacing purposes only ?>
              <li></li>
              <li class="phone">
                805.893.7781
              </li>
              <li class="email">
                simon.herrera@theclub.ucsb.edu
              </li>
            </ul>
          </address>
          <p>
            Rates: $100 single/double (Sunday - Thursday). Please note that Friday &amp; Saturday rates may differ.
          </p>
          <p>
            Well-appointed guest rooms all come with lagoon and ocean views and guests enjoy two complimentary deluxe continental breakfasts. Conference meeting locations are within a 5-minute walking distance from The Guest House.
          </p>
        </section>
      </div>

      <h3 class="pageSubtitle mt-4">
        Off-Campus Accommodations
      </h3>
      <p>
        For those who choose not to stay on-site, the following is a list of hotels that have provided room blocks for <?php echo $META['shortName'];?>. Note that none of the hotels is walking distance to the venue. Those who choose to stay off-site are responsible for making their own reservations. Early reservations are advised since August is a popular season in Santa Barbara.
      </p>
      <aside class="alert alert-warning">
        <img src="images/icons/exclamation.svg" class="icon" />&ensp;
        All prices are subject to change and do not include tax; prices should be confirmed by calling the hotels directly. Room blocks may be released as early as two months prior to the conference. You must mention Crypto 2020 when you are making your reservations so you will be eligible for any special rates that may be available. Other hotels are available in the area.
      </aside>

      <div class="row justify-content-around">
        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Best Western South Coast Inn
          </h4>
          <address>
            <ul class="hotel-info">
              <li class="location">
                5620 Calle Real
              </li>
              <li>
                Goleta, CA 93117
              </li>
              <?php // NOTE: this li is used for spacing purposes only ?>
              <li></li>
              <li class="phone">
                805.967.3200
              </li>
              <li>
                Fax: 805.683.4466
              </li>
            </ul>
          </address>
          <p>
            Rates: $177 single/double (Sunday - Thursday). $223 (Friday and Saturday).
          </p>
          <p>
            Five minutes from the University; newly renovated. Breakfast Buffet daily. Complimentary afternoon beverages Monday through Thursday. Free local calls. Refrigerator, coffeemaker, hairdryer and WI-FI for free internet access in all rooms. Pool and spa. Morning and evening shuttle to UCSB and airport 7:30am–10:00pm.
          </p>
          <a class="btn btn-warning btn-block mt-auto" role="button" href="https://www.hotelsone.com/goleta-hotels-us/best-western-plus-south-coast-inn.html">Reservations</a>
        </section>
        <section class="col-lg-4 col-md-6 d-flex flex-column mt-4">
          <h4 class="subSubtitle text-center">
            Pacifica Suites
          </h4>
          <address>
            <ul class="hotel-info">
              <li class="location">
                5490 Hollister Ave
              </li>
              <li>
                Goleta, CA 93111
              </li>
              <?php // NOTE: this li is used for spacing purposes only ?>
              <li></li>
              <li class="phone">
                805.893.6722
              </li>
              <li>
                Fax: 805.683.4121
              </li>
            </ul>
          </address>
          <p>
            Rates: $209 single/double (Sunday - Wednesday). $249 single/double (Thursday, Friday, Saturday).
          </p>
          <p>
            Rate includes up to two complimentary cooked-to- order breakfasts, two rooms, high-speed wireless internet, two TVs, microwave, stereo, refrigerator, pool and hot tub. Complimentary beverages served from 5-7pm. With 24-hour advance notice, will provide shuttle service to and from the Santa Barbara Airport, 8:00am - 5:00pm.
          </p>
          <a class="btn btn-warning btn-block mt-auto" role="button" href="https://www.pacificasuites.com">www.pacificasuites.com</a>
        </section>
      </div>
      %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    </main>

    <script src="https://iacr.org/libs/js/leafletjs/leaflet-src.js"></script>
    <script>
     // You can recover latitude & longitude from this page:
     // https://iacr.org/events/edit.php
     var mymap = L.map('venuemap').setView([<?php echo $META['longitude'] . ',' . $META['latitude'];?>], 13);
     var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {maxZoom: 18, attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'});

     tiles.addTo(mymap);

     var points = [{name: 'Conference Venue: UCSB',
                    latitude: <?php echo $META['latitude'];?>,
                    longitude: <?php echo $META['longitude'];?> },
                   {name: 'Santa Barbara Airport',
                    latitude: -119.8365,
                    longitude: 34.424},
                   {name: 'Best Western South Coast Inn',
                    latitude: -119.8198,
                    longitude: 34.44197},
                   {name: 'Pacifica Suites',
                    latitude: -119.8159,
                    longitude: 34.436806},
                   {name: 'The Club &amp; Guest House at UC Santa Barbara',
                    latitude: -119.851345,
                    longitude: 34.411853},
                   {name: 'Dormitory accomodations (various)',
                    latitude: -119.84423,
                    longitude: 34.4111}];

     for (let i = 0; i < points.length; i++) {
       let point = points[i];
       var marker = L.marker([point.longitude, point.latitude]).addTo(mymap);
       marker.bindPopup("<p>" + point.name + "</p>");
     }
    </script>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
