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



  <section class="head-main">
    <div class="second-main">

      <h1>projects</h1>
    </div>

  </section>

  <div class="proj-main">
    <h1>explore recent projects</h1>
    <!-- 
<div id="buttons">
    <button class="button-value" onclick="filterproduct('all')">All</button>
    <button class="button-value" onclick="filterproduct('Upcoming-projects')">Upcoming projects</button>
    <button class="button-value" onclick="filterproduct('Ongoing-projects')">Ongoing projects</button>
    <button class="button-value" onclick="filterproduct('completed-projects')">completed projects</button>
</div>
<div id="projects"></div> -->
    <div class="filter-buttons">
      <button id="all" onclick="filterProjects('all')" class="active">All</button>
      <button id="upcoming" onclick="filterProjects('upcoming')">Upcoming projects</button>
      <button id="ongoing" onclick="filterProjects('ongoing')">Ongoing projects</button>
      <button id="completed" onclick="filterProjects('completed')">Completed projects</button>
    </div>

    <div class="project-gallery">
      <div class="project-item upcoming">
        <img src="./imgs/project-1.png" alt="Upcoming Project 1">
        <img src="./imgs/project-2.png" alt="Upcoming Project 1">
        <img src="./imgs/project-3.png" alt="Upcoming Project 1">
      </div>
      <div class="project-item ongoing">
        <img src="./imgs/project-4.png" alt="Upcoming Project 1">
        <img src="./imgs/project-5.png" alt="Upcoming Project 1">
        <img src="./imgs/project-6.png" alt="Upcoming Project 1">
      </div>
      <div class="project-item completed">
        <img src="./imgs/project-7.png" alt="Upcoming Project 1">
        <img src="./imgs/project-8.png" alt="Upcoming Project 1">
        <img src="./imgs/project-9.png" alt="Upcoming Project 1">
      </div>

    </div>



  </div>













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

  <!-- 
<script>


let projects = {
    data: [
        {
            category: "Upcoming-projects",
            image: "project-1.png",
        },
        {
            category: "Upcoming-projects",
            image: "project-2.png",
        },
        {
            category: "Upcoming-projects",
            image: "project-3.png",
        },
        {
            category: "ongoing-projects",
            image: "project-4.png",
        },
        {
            category: "ongoing-projects",
            image: "project-5.png",
        },
        {
            category: "ongoing-projects",
            image: "project-6.png",
        },
        {
            category: "completed-projects",
            image: "project-7.png",
        },
        {
            category: "completed-projects",
            image: "project-8.png",
        },
        {
            category: "completed-projects",
            image: "project-9.png",
        },
    ]
};

for(let i of projects.data){
    let card = document.createElement("div");
    card.classList.add("card", i.category, "hide");
    let imgcontainer = document.createElement("div");
    imgcontainer.classList.add("image-container")
    let image =document.createElement("img");
    image.setAttribute("scr", i.image);
    imgcontainer.appendChild(image);
    card.appendChild(imgcontainer);
    document.getElementById("projects").appendChild(card)

}

function filterproduct(value){
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach(button =>{
        if(value.toUpperCase() == button.innertext.toUpperCase()) {
        button.classList.add("active");
    }

    else{
        button.classList.remove("active");

    }
    })
}

window.onload = () => {
    filterproduct("all")
}

</script> -->


</body>

</html>