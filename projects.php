<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5f77a54189.js" crossorigin="anonymous"></script>
  <title>projects</title>
</head>

<body>
  <?php
    include "header.php";
   ?>



  <section class="head-main page-width">
    <div class="second-main">

      <h1>projects</h1>
    </div>

  </section>

  <div class="proj-main page-width">
    <h1>explore recent projects</h1>

    <div class="filter-buttons">
      <button id="all" onclick="filterProjects('all')" class="active">All</button>
      <button id="upcoming" onclick="filterProjects('upcoming')">Upcoming projects</button>
      <button id="ongoing" onclick="filterProjects('ongoing')">Ongoing projects</button>
      <button id="completed" onclick="filterProjects('completed')">Completed projects</button>
    </div>

    <div class="project-gallery">
      <div class="project-item upcoming">
        <div class="img-container">
          <img src="./imgs/pro-1.png" alt="">
          <img src="./imgs/pro-2.png" alt="">
        </div>

      </div>
      <div class="project-item ongoing">
        <div class="img-container">
          <img src="./imgs/pro-2.png" alt="">
          <img src="./imgs/pro-1.png" alt="">
        </div>
      </div>
      <div class="project-item completed">
        <div class="img-container">
          <img src="./imgs/pro-3.png" alt="">
          <img src="./imgs/pro-1.png" alt="">
        </div>
      </div>

    </div>



  </div>
  <section class="realtor-container ">
    <div class="realtor-heading">
      <h2>SEE HOW REALTOR CAN GELP</h2>
      <p>Aliquam lacinia diam quis lacus euismod</p>

    </div>

    <div class="realtor-boxes">
      <div class="realtor-box">
        <img class="bg-dot" src="./imgs/service_box_shape1-1.png.svg" alt="">
        <img src="./imgs/icon1.svg.png" alt="">
        <h4>Buy a property</h4>
        <p>Nullam Sollicitudin blandit eros eu pretium. Nullam maximus ulticies auctor.</p>
        <a href="#">Find Home <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
            fill="none">
            <path
              d="M14.5833 0H5.41669C5.18638 0 5.00001 0.186367 5.00001 0.416683C5.00001 0.646989 5.18638 0.833364 5.41669 0.833364H13.5775L0.12208 14.2887C-0.0406935 14.4516 -0.0406935 14.7152 0.12208 14.8779C0.203447 14.9593 0.310088 15 0.41669 15C0.523291 15 0.629892 14.9593 0.711299 14.8779L14.1667 1.42254V9.58331C14.1667 9.81366 14.3531 10 14.5833 10C14.8137 10 15 9.81366 15 9.58331V0.416683C15 0.186367 14.8137 0 14.5833 0Z"
              fill="white" />
          </svg></a>



      </div>
      <div class="realtor-box">
        <img class="bg-dot" src="./imgs/service_box_shape1-1.png.svg" alt="">
        <img src="./imgs/icon1.svg.png" alt="">
        <h4>Sell a Property</h4>
        <p>Nullam Sollicitudin blandit eros eu pretium. Nullam maximus ulticies auctor.</p>
        <a href="#">place an ad <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
            fill="none">
            <path
              d="M14.5833 0H5.41669C5.18638 0 5.00001 0.186367 5.00001 0.416683C5.00001 0.646989 5.18638 0.833364 5.41669 0.833364H13.5775L0.12208 14.2887C-0.0406935 14.4516 -0.0406935 14.7152 0.12208 14.8779C0.203447 14.9593 0.310088 15 0.41669 15C0.523291 15 0.629892 14.9593 0.711299 14.8779L14.1667 1.42254V9.58331C14.1667 9.81366 14.3531 10 14.5833 10C14.8137 10 15 9.81366 15 9.58331V0.416683C15 0.186367 14.8137 0 14.5833 0Z"
              fill="white" />
          </svg></a>



      </div> <div class="realtor-box">
        <img class="bg-dot" src="./imgs/service_box_shape1-1.png.svg" alt="">
        <img src="./imgs/icon1.svg.png" alt="">
        <h4>Rent a property</h4>
        <p>Nullam Sollicitudin blandit eros eu pretium. Nullam maximus ulticies auctor.</p>
        <a href="#">find a rental<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
            fill="none">
            <path
              d="M14.5833 0H5.41669C5.18638 0 5.00001 0.186367 5.00001 0.416683C5.00001 0.646989 5.18638 0.833364 5.41669 0.833364H13.5775L0.12208 14.2887C-0.0406935 14.4516 -0.0406935 14.7152 0.12208 14.8779C0.203447 14.9593 0.310088 15 0.41669 15C0.523291 15 0.629892 14.9593 0.711299 14.8779L14.1667 1.42254V9.58331C14.1667 9.81366 14.3531 10 14.5833 10C14.8137 10 15 9.81366 15 9.58331V0.416683C15 0.186367 14.8137 0 14.5833 0Z"
              fill="white" />
          </svg></a>



      </div>




    </div>






  </section>












  <?php
   include "testimonial.php";
  ?>


  <?php
   include "footer.php";
  ?>



  <script>
    function filterProjects(category) {
      var projectItems = document.querySelectorAll('.project-item');
      var filterButtons = document.querySelectorAll('.filter-buttons button');

      projectItems.forEach(function (item) {
        if (category === 'all' || item.classList.contains(category)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });

      filterButtons.forEach(function (button) {
        if (button.id === category) {
          button.classList.add('active');
        } else {
          button.classList.remove('active');
        }
      });
    }

    // Trigger the filterProjects() function with the 'all' category on page load
    window.onload = function () {
      filterProjects('all');
    };
  </script>



</body>

</html>