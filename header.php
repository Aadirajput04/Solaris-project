<nav class="navbar">
    <a href="./index.php" class="navbar-logo"><img src="./imgs/nav-logo.png" alt="" width="131" height="75"></a>

    <ul class="navbar-pages">
        <li><a class="nav-items" href="./index.php">Home</a></li>

        <li>
            <a class="nav-items" href="./projects.php">PROJECTS <img src="./imgs/arroy.svg" alt="" width="16"></a>
            <div class="dropdown-content">
                <a href="./projects.php#upcoming">Upcoming </a>
                <a href="./projects.php#ongoing">Ongoing </a>
                <a href="./projects.php#completed">Completed </a>
            </div>
        </li>
        <li>
            <a class="nav-items" href="./values.php">Our Values <img src="./imgs/arroy.svg" alt="" width="16"></a>
            <div class="dropdown-content">
                <a href="./values.php#innovation">Innovation</a>
                <a href="./values.php#quality">Quality</a>
                <a href="./values.php#trust">Trust</a>
                <a href="./values.php#commitment">Commitment</a>
                <a href="./values.php#excellence">Excellence</a>
            </div>
        </li>
        <li>
            <a class="nav-items" href="#">Other Links <img src="./imgs/arroy.svg" alt="" width="16"></a>
            <div class="dropdown-content">
                <a href="#">Service 1</a>
                <a href="#">Service 2</a>
                <a href="#">Service 3</a>
            </div>
        </li>
        <li><a class="nav-items" href="./videos.php">Videos</a></li>
        <li><a class="nav-items" href="./gallery.php">Gallery</a></li>
        <li><a class="nav-items" href="./about-us.php">About Us</a></li>

    </ul>

    <a href="./contact-us.php" class="contact-button">Contact Us</a>
</nav>
<script>

   
    const navItems = document.querySelectorAll('.nav-item');

   
    navItems.forEach((item, index) => {
        item.addEventListener('click', function () {
            
            navItems.forEach(item => {
                item.classList.remove('active');
            });

           
            this.classList.add('active');

          
            if (index === 1) {
                navItems[1].classList.add('active');
            }
        });
    });



</script>