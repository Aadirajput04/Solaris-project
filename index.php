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


<div class="containers">
    <div class="circles">
      <div class="circle" id="circle1"></div>
      <div class="circle" id="circle2"></div>
      <div class="circle" id="circle3"></div>
      <div class="circle" id="circle4"></div>
    </div>
  </div>





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