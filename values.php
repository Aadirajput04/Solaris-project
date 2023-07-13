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
    <title>values</title>
</head>

<body>
    <?php
    include "header.php";
   ?>

    </div>


    <section class="head-main">
        <div class="second-main">

            <h1>values</h1>
        </div>

    </section>
    <section class="all-filter">
        <div class="buttons-1">

            <button class="filter-button actives" data-filter="all">All</button>
            <button class="filter-button" data-filter="innovation">Innovation</button>
            <button class="filter-button" data-filter="quality">Quality</button>
            <button class="filter-button" data-filter="trust">Trust</button>
            <button class="filter-button" data-filter="commitment">Commitment</button>
            <button class="filter-button" data-filter="excellence">Excellence</button>
        </div>

        <div class="all-value-boxes">
            <div class="product-box" data-tags="innovation">
                <div class="item-1 w">
                    <div class="item-img"><img src="./imgs/value-item-1.png" alt=""></div>

                    <h4>Innovation</h4>
                    <p>Leveraging the latest development in real estate. solaris’ projects are the pinnacle of design
                        and
                        innovation.</p>
                    <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

                    </div>
                </div>
            </div>
            <div class="product-box" data-tags="quality">
                <div class="item-2 w">
                    <div class="item-img"><img src="./imgs/value-item-2.png" alt=""></div>

                    <h4>Quality</h4>
                    <p>With an unrelenting focus on socurcing only the finest quality materials. solaris’ spaces are
                        desig....</p>
                    <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

                    </div>
                </div>
            </div>
            <div class="product-box" data-tags="trust">
                <div class="item-2 w">
                    <div class="item-img"><img src="./imgs/value-item-2.png" alt=""></div>

                    <h4>Trust</h4>
                    <p>With cumulative experience of over 41 years in the field, the promoters have garnered the trust
                        of cus.....</p>
                    <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

                    </div>
                </div>
            </div>
            <div class="product-box" data-tags="commitment">
                <div class="item-2 w">
                    <div class="item-img"><img src="./imgs/value-item-2.png" alt=""></div>

                    <h4>Commitment</h4>
                    <p>Leveraging the latest development in real estate. solaris’ projects are the pinnacle of design
                        and innovation.</p>
                    <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

                    </div>
                </div>
            </div>
            <div class="product-box" data-tags="excellence">
                <div class="item-2 w">
                    <div class="item-img"><img src="./imgs/value-item-2.png" alt=""></div>

                    <h4>Excellence</h4>
                    <p>With an unrelenting focus on socurcing only the finest quality materials. solaris’ spaces are
                        desig....</p>
                    <div class="read-arroy"><a href="#">Read more <img src="./imgs/Frame.svg" alt=""></a>

                    </div>
                </div>
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
        document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.filter-button');
            const productBoxes = document.querySelectorAll('.product-box');

            filterButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    const filter = button.getAttribute('data-filter');

                    // Add active class to the clicked button
                    filterButtons.forEach(function (btn) {
                        if (btn === button) {
                            btn.classList.add('actives');
                        } else {
                            btn.classList.remove('actives');
                        }
                    });

                    productBoxes.forEach(function (box) {
                        const tags = box.getAttribute('data-tags');

                        if (filter === 'all' || tags.includes(filter)) {
                            box.style.display = 'block';
                        } else {
                            box.style.display = 'none';
                        }
                    });
                });
            });
        });

    </script>

</body>

</html>