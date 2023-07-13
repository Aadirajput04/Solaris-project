<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
  <title>home-solaris</title>
</head>

<body>
  <?php
    include "header.php";
   ?>

  <div class="main-home">
    <div class="containers">
      <div class="left-headings">
        <h1>Solaris Royce</h1>
        <h4>Corporate Offices & Showroom</h4>
        <a href="./contact-us.php" class="contact-button">Contact Us</a>
      </div>


      <div class="circles">
        <div class="circle" id="circle1"></div>
        <div class="circle" id="circle2"></div>
        <div class="circle" id="circle3"></div>
        <div class="circle" id="circle4"></div>
      </div>
    </div>

    <div class="center-boxes">
      <div class="box-line">
        <div class="center-box-1 flex-start state-box bg-white"><img src="./imgs/Group 223.png" alt="">
          <h1>Apartment List</h1>
          <p>Windows, skylights, vents, and glass portions of doors helps</p>
        </div>
        <div class="center-box-2 flex-start state-box bg-white"><img src="./imgs/Group 222.png" alt="">
          <h1>Location</h1>
          <p>An energy recovery ventilation system provides contrilled.</p>
        </div>
        <div class="center-box-3 flex-start state-box bg-white"><img src="./imgs/Group 221.png" alt="">
          <h1>Contact</h1>
          <p>Ventilstion and minimizes energy loss change manage.</p>
        </div>
      </div>
    </div>

  </div>




  <section class="our-value-sec">
    <div class="value-head">
      <h1>Our Values</h1>
      <p>Built on 5 key pillars, our values guide us day-to-day, to ensure excellence</p>
    </div>

    <div class="value-items">
      <div class="item-1 w">
        <div class="item-img"><img src="./imgs/value-item-1.png" alt=""></div>

        <h4>Innovation</h4>
        <p>Leveraging the latest development in real estate. solaris’ projects are the pinnacle of design and
          innovation.</p>
        <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

        </div>
      </div>
      <div class="item-2 w">
        <div class="item-img"><img src="./imgs/value-item-2.png" alt=""></div>

        <h4>Quality</h4>
        <p>With an unrelenting focus on socurcing only the finest quality materials. solaris’ spaces are desig....</p>
        <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

        </div>
      </div>
      <div class="item-3 w">
        <div class="item-img"><img src="./imgs/value-item-3.png" alt=""></div>
        <h4>Trust</h4>
        <p>With cumulative experience of over 41 years in the field, the promoters have garnered the trust of cus.....
        </p>
        <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

        </div>
      </div>
    </div>
  </section>



  <section class="three-home-boxes">
    <div class="boxes">
      <div class="boxes-1 bg-white">
        <img src="./imgs/mission.png" alt="">
        <div class="box-texts">
          <h4>Our Mission</h4>
          <p>Solaris group mission is to provide the highest-quality workmanship possible. we succeed at because of the
            integrity of our...</p>
        </div>
      </div>
      <div class="boxes-2 bg-white"> <img src="./imgs/mission.png" alt="">
        <div class="box-texts">
          <h4>Our Vision </h4>
          <p>To be leading construction company in the global market to become the customers’ most preferred choce in
            quality andtimely completed...</p>
        </div>
      </div>
      <div class="boxes-3 bg-white"> <img src="./imgs/mission.png" alt="">
        <div class="box-texts">
          <h4>Our Commitment</h4>
          <p>We ensure to give you 100% satisfaction, your number one source for all your requirement we’re dedicated to
            providing you</p>
        </div>
      </div>
    </div>



  </section>











  <?php
    include "statestic.php";
   ?>


  <?php
    include "testimonial.php";
   ?>


  <?php
    include "footer.php";
   ?>
  <script>
    const containers = document.querySelector('.containers');

    window.addEventListener('load', () => {
      containers.classList.add('default');
    });

    const circles = document.querySelectorAll('.circle');

    circles.forEach(circle => {
      circle.addEventListener('click', () => {
        const backgroundImage = window.getComputedStyle(circle).getPropertyValue('background-image');
        containers.style.backgroundImage = backgroundImage;
        containers.classList.remove('default');
      });
    });


  </script>
  <script src="script.js"></script>
</body>

</html>