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
    <title>videos</title>
</head>

<body>
    <?php
    include "header.php";
   ?>



    <section class="head-main">
        <div class="second-main">

            <h1>videos</h1>
        </div>

    </section>

    <section class="all-videos">

        <div class="video-filter">
            <button id="recentBtn" class="active">Recent Videos</button>
            <button id="featuredBtn">Featured Videos</button>
        </div>

        <div id="videoContainer">
            <!-- Recent videos -->
            <div id="recentVideos">
                <!-- Add your recent videos here -->
                <div class="video">
                       <div class="vid"><iframe width="560" height="315" src="https://www.youtube.com/embed/oDjW4XzDct8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        </div>
                </div>
                <div class="video">Recent Video 2</div>
                <div class="video">Recent Video 3</div>
            </div>

            <!-- Featured videos -->
            <div id="featuredVideos">
                <!-- Add your featured videos here -->
                <div class="video">Featured Video 1</div>
                <div class="video">Featured Video 2</div>
                <div class="video">Featured Video 3</div>
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
        window.addEventListener("load", function () {
            document.getElementById("recentVideos").style.display = "block";
            document.getElementById("featuredVideos").style.display = "none";
            document.getElementById("recentBtn").classList.add("active");
        });

        document.getElementById("recentBtn").addEventListener("click", function () {
            document.getElementById("recentVideos").style.display = "block";
            document.getElementById("featuredVideos").style.display = "none";
            this.classList.add("active");
            document.getElementById("featuredBtn").classList.remove("active");
        });

        document.getElementById("featuredBtn").addEventListener("click", function () {
            document.getElementById("recentVideos").style.display = "none";
            document.getElementById("featuredVideos").style.display = "block";
            this.classList.add("active");
            document.getElementById("recentBtn").classList.remove("active");
        });


    </script>
</body>

</html>