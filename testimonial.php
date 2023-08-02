<section class="testi-border page-width">
    <section class="test-container">
        <div class="left-testi"><img src="./imgs/dots.png.png" alt="" width="118" height="104">
            <p>what People Say</p>
            <h1>Client's Talk</h1>
            <p> <span> We have a wealth of experience working as main building contractors on all kinds of projects, big
                    and
                    small,
                    from home maintenance and
                    improvements to extensions, refurbishments and new builds.</span></p>
            <a href="" class="view-more">view-more</a>
        </div>
        <div class="right-testi">
            <div class="white-box" id="testi-animation">

                <div class="testi-review  ">
                    <h1>I noticed one thing: it's very productive to discuss a project with pople who
                        have technical background. I forgot how to explain obvious technical things
                        that often happen with more humanitarian people and just get more done.</h1>
                    <div class="person">
                        <img src="./imgs/user1.png.png" alt="">
                        <div class="name">
                            <h3>Jesiu Petit</h3>
                            <p>customer</p>
                        </div>
                    </div>

                </div>




                <div class="testi-review ">
                    <h1>I noticed one thing: it's very productive to discuss a project with pople who
                        have technical background. I forgot how to explain obvious technical things
                        that often happen with more humanitarian people and just get more done.</h1>
                    <div class="person">
                        <img src="./imgs/user1.png.png" alt="">
                        <div class="name">
                            <h3>aadi rajput</h3>
                            <p>customer</p>
                        </div>
                    </div>

                </div>



                <div class="testi-review visible">
                    <h1>I noticed one thing: it's very productive to discuss a project with pople who
                        have technical background. I forgot how to explain obvious technical things
                        that often happen with more humanitarian people and just get more done.</h1>
                    <div class="person">
                        <img src="./imgs/user1.png.png" alt="">
                        <div class="name">
                            <h3>pawan sharma</h3>
                            <p>customer</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="checkbox-input" id="testi-input">
                <label for="">
                    <input type="radio" onchange="testimonialChange(this.value)" name="first" value="0">
                    <span></span></label>

                <label for="">
                    <input type="radio" onchange="testimonialChange(this.value)" name="first" value="1">
                    <span></span></label>

                <label for="">
                    <input type="radio" onchange="testimonialChange(this.value)" name="first" value="2">
                    <span></span></label>


            </div>

        </div>



    </section>
</section>
<script>
    const testimonials = document.querySelectorAll("#testi-animation>div")

    function testimonialChange(value) {

        testimonials.forEach(element => {
            element.classList.remove("visible")
        });
        testimonials[parseInt(value)].classList.add("visible")

    }









</script>