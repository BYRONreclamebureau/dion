<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
            <div class="home-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="home-about">
                                <h1 class="h1-intro"><i class="fas fa-code"></i>Developer</h1>
                                <p class="home-intro-tekst">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce elit neque, placerat a fermentum non, malesuada in arcu.
                                    Cras a lacus iaculis, malesuada metus ut, sollicitudin ante.
                                    Mauris lobortis augue risus, sed ultricies dolor auctor at.
                                    Donec eget nisl justo.
                                </p>
                                <a class="button" href="#"><button>Lorem ipsum.</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skills-part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="intro">
                                <h1>Expertises</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br />
                                    Quisque nec blandit nunc. Praesent tempor augue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="skills">
                        <div class="row">
                            <div class="col-lg-3 p-0">
                                <div class="card">
                                    <img src="/wp-content/uploads/2018/11/html.png" alt="HTML5 Logo">
                                    <h3>HTML</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 p-0">
                                <div class="card">
                                    <img src="/wp-content/uploads/2018/11/css.png" alt="CSS3 Shield">
                                    <h3>CSS</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 p-0">
                                <div class="card">
                                    <img src="/wp-content/uploads/2018/11/js.png" alt="JavaScript Logo">
                                    <h3>JavaScript</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 p-0">
                                <div class="card">
                                    <img src="/wp-content/uploads/2018/11/php.png" alt="PHP Logo">
                                    <h3>PHP</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 p-0">
                                <div class="card">
                                    <img src="/wp-content/uploads/2018/11/wp.png" alt="WP Logo">
                                    <h3>WordPress</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="resume">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="intro">
                                <h1>Resume</h1>
                                <p class="home-intro-tekst">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                                    Fusce elit neque, placerat a fermentum non, malesuada in arcu.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cv">
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="byron" src="/wp-content/uploads/2018/11/BYRON-logo.svg" alt="BYRON Logo">
                            </div>
                            <div class="col-lg-9">
                                <h3 class="bedrijfsnaam">BYRON</h3>
                                <h6 class="periode">(08-2018 - 02-2019)</h6>
                                <p class="bedrijfsinfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis turpis consequat, porta ante et, eleifend enim. Pellentesque molestie massa sed neque feugiat congue. Suspendisse cursus lacinia magna, vitae dictum erat elementum et. Maecenas tincidunt risus arcu, et semper elit.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="social-deal" src="/wp-content/uploads/2018/11/socialdealLogo.png" alt="SD Logo">
                            </div>
                            <div class="col-lg-9">
                                <h3 class="bedrijfsnaam">Social Deal</h3>
                                <h6 class="periode">(02-2017 - 06-2017)</h6>
                                <p class="bedrijfsinfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis turpis consequat, porta ante et, eleifend enim. Pellentesque molestie massa sed neque feugiat congue. Suspendisse cursus lacinia magna, vitae dictum erat elementum et. Maecenas tincidunt risus arcu, et semper elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <?php
    }
    wp_reset_postdata();
}

get_footer();
