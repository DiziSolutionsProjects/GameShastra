<?php include 'includes/header.php' ?>


<style>
    /* Cyberpunk/Gaming Inspired Style */
    :root {
        --neon-pink: #ff2a6d;
        --neon-blue: #05d9e8;
        --neon-purple: #d300c5;
        --dark-bg: #0d0221;
        --card-bg: #1a1a2e;
    }

    body {
        font-family: 'Rajdhani', 'Arial Narrow', sans-serif;
        background-color: var(--dark-bg);
        color: white;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .portfolio-section {
        max-width: 1200px;
        margin: 80px auto;
        padding: 0 20px;
    }

    .section-title {
        text-align: center;
        font-size: 3.5rem;
        margin-bottom: 60px;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: var(--neon-blue);
        text-shadow: 0 0 10px var(--neon-blue);
        position: relative;
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
    }

    .portfolio-card {
        position: relative;
        height: 350px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(5, 217, 232, 0.3);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .portfolio-card:hover {
        transform: translateY(-15px) scale(1.03);
        box-shadow: 0 0 30px var(--neon-pink);
    }

    .portfolio-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.8);
        transition: filter 0.3s ease;
    }

    .portfolio-card:hover .portfolio-image {
        filter: brightness(1);
    }

    .portfolio-label {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 25px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
        text-align: center;
    }

    .portfolio-title {
        margin: 0;
        font-size: 1.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: white;
        text-shadow: 0 0 10px var(--neon-purple);
    }

    .portfolio-subtitle {
        margin: 5px 0 0;
        font-size: 1rem;
        color: var(--neon-blue);
        font-style: italic;
    }

    @media (max-width: 900px) {
        .portfolio-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .portfolio-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!---Banner Section start------>
    <section class="gameshastra-video-section">
        <video autoplay muted loop class="gameshastra-video-bg">
            <source src="assets/video/videoplay1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- <img src="assets/images/banner/home_banner_1.png" alt="" srcset=""> -->
        <div class="gameshastra-video-content">
            <h1 class="portfolio-title">WE BUILD GAMES WITH <span></span>PASSION</h1>
            <p class="portfolio-subtitle banner_text">Outsourcing solutions by developers, for developers.</p>
            <a href="#services" class=" btn--primary">Explore Our Services</a>

        </div>
    </section>
    <!---Banner Section End------>

    <!---Service Section Start------>
    <section id="services-block_97ce4411cf49b1581344b935416bbb4b" class="block-services background_color_ pb=">
        <div class="services__container">
            <div class="services__header">
                <h2 class="services__title text-center">
                    Devoted <b>Services</b> </h2>
            </div>

            <div class="services__list">
                <div class="services__item">
                    <div class="services__media ">
                        <div class="services__media-content services__media-content--active">
                            <video class="services__video" muted="" loop="" playsinline="" preload="metadata"
                                poster="https://devotedstudios.com/wp-content/uploads/2025/04/IMAGE-2025-04-01-184331.jpg"
                                data-loaded="true" autoplay="">
                                <source src="https://devotedstudios.com/wp-content/uploads/2025/04/Services-Co-Dev.mp4"
                                    type="video/mp4">"&gt;
                            </video>
                        </div>
                    </div>

                    <div class="services__content">
                        <h3 class="services__name">Full Cycle &amp; Co-Development</h3>

                        <div class="services__tabs" style="--tab-color: #7661FF;">
                            <p>Gameshastra offers end-to-end server architecture services, including server migration,
                                custom architecture design, and optimized backends.</p>
                        </div>

                        <a href="index.php" class=" services__link"
                            style="--tab-color: #7661FF;" target="" aria-label="Read more">
                            <span class="services__link-text btn-grad">Read more</span>

                        </a>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__content__left ">
                        <h3 class="services__name__left">Game Porting</h3>

                        <div class="services__tabs__left" style="--tab-color: #fe89da;">
                            <p>f you need to broaden your audience, or would like your game to expand to new platforms,
                                GameShastra can assist you with porting to and from any platform</p>
                        </div>

                        <a href="index.php" class="services__link"
                            style="--tab-color: #fe89da;" target="" aria-label="Read more">
                            <span class="services__link-text">Read more </span>

                        </a>
                    </div>
                    <div class="services__media__right ">
                        <div class="services__media-content services__media-content--active">
                            <video class="services__video" muted="" loop="" playsinline="" preload="metadata"
                                poster="https://devotedstudios.com/wp-content/uploads/2025/04/IMAGE-2025-04-01-184331.jpg"
                                data-loaded="true" autoplay="">
                                <source
                                    src="https://devotedstudios.com/wp-content/uploads/2025/04/Services-Porting_New.mp4"
                                    type="video/mp4">"&gt;
                            </video>
                        </div>
                    </div>


                </div>
                <div class="services__item">
                    <div class="services__media ">
                        <div class="services__media-content services__media-content--active">
                            <video class="services__video" muted="" loop="" playsinline="" preload="metadata"
                                poster="https://devotedstudios.com/wp-content/uploads/2025/04/IMAGE-2025-04-01-184331.jpg"
                                data-loaded="true" autoplay="">
                                <source src="https://devotedstudios.com/wp-content/uploads/2025/04/Services-Art.mp4"
                                    type="video/mp4">"&gt;
                            </video>
                        </div>
                    </div>

                    <div class="services__content">
                        <h3 class="services__name">Co-Development</h3>

                        <div class="services__tabs" style="--tab-color: #3BCFF3;">
                            <p>We are a co-developer on top of being a service provider. For several games, we have
                                partnered up with developers, adopting a level of ownership and creative oversight that
                                goes above and beyond simply providing services.</p>
                        </div>

                        <a href="index.php" class="services__link"
                            style="--tab-color: #3BCFF3;" target="" aria-label="Read more">
                            <span class="services__link-text">Read more</span>

                        </a>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__content__left services_content">
                        <h3 class="services__name__left">Full Cycle Game Development</h3>

                        <div class="services__tabs__left" style="--tab-color: #fe89da;">
                            <p>We can help you build your game every step of the way - from concepting, to prototyping,
                                to full production.

                                Once you explain your vision, we can bring it to life.</p>
                        </div>

                        <a href="index.php" class="services__link"
                            style="--tab-color: #fe89da;" target="" aria-label="Read more">
                            <span class="services__link-text">Read more </span>

                        </a>
                    </div>
                    <div class="services__media__right ">
                        <div class="services__media-content services__media-content--active">
                            <video class="services__video" muted="" loop="" playsinline="" preload="metadata"
                                poster="https://devotedstudios.com/wp-content/uploads/2025/04/IMAGE-2025-04-01-184331.jpg"
                                data-loaded="true" autoplay="">
                                <source
                                    src="https://devotedstudios.com/wp-content/uploads/2025/04/Services-Porting_New.mp4"
                                    type="video/mp4">"&gt;
                            </video>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </section>

    <!---Service Section End------>







    <!---About Section Start------>
    <section class="section intro-and-games">
        <div class="section-content intro about_section">
            <div class="ttg-logo about_sectio_logo"> <img class="lazy loaded" src="assets/images/about/gamer2.png">
            </div>
            <div class="intro-text about_section_text ">
                <p class="pre-title">Welcome to</p>
                <h1 class="intro-title"> Game<br> Shastra</h1>
                <p>We love games. We love making them. We love playing them. We also love teaming up with partners to
                    create truly special, hand-crafted experiences for all types of players!</p>
                <p>Contact us today to find out how we can help bring your game concept to life!</p>
                <a href="index.php" class="services__link about_button"
                    style="--tab-color: #7661FF;" target="" aria-label="Read more">
                    <span class="services__link-text about_link ">Read more</span>

                </a>
            </div>
        </div>

    </section>

    <!---About Section End------>

    <!------------case studies Start------>


    <!-- <div class="home-cs-container">
        <div id="case-studies" class="pad80 mab0 services__title text-center data-bs-target">
            <button class="case-studies__nav slide_nav_left case-studies__nav--prev carousel-control-prev"
                data-bs-target="#carouselExample" data-bs-slide="prev" tabindex="0" aria-label="Previous slide"
                aria-controls="swiper-wrapper-e6a372aaba40dc6b">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M19 12H5M5 12L11 18M5 12L11 6" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            <h1 class="mab0">Case <b>Studies</b></h1>
            <button class="case-studies__nav slide_nav_right case-studies__nav--next carousel-control-next" tabindex="0"
                aria-label="Next slide" aria-controls="swiper-wrapper-e6a372aaba40dc6b"
                data-bs-target="#carouselExample" data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
        <div class="home-cs-wrapper w-dyn-list" >
            <div fs-cmsload-animation="slide-up" fs-cmsload-element="list" role="list" class="home-cs-list w-dyn-items" owl-carousel owl-theme home-cs-wrapper>
                <div role="listitem" class="home-cs-item carousel-item active w-dyn-item"><a
                        href="/case-studies/naughty-dog" class="home-cs-link w-inline-block"><img
                            src="https://wallpaperaccess.com/full/1752211.jpg" loading="lazy" alt="" sizes="100vw"
                            srcset="https://wallpaperaccess.com/full/1752211.jpg" class="home-cs-image">
                        <div class="hover-block">
                            <div class="hover-detail">
                                <div class="hover-title">Naughty Dog x Secret 6</div>
                                <div class="hover-client">Naughty Dog</div>
                                <div class="hover-readmore">Learn More</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div role="listitem" carousel-item class="home-cs-item w-dyn-item"><a href="/case-studies/as-dusk-falls"
                        class="home-cs-link w-inline-block"><img src="https://wallpaperaccess.com/full/2086940.jpg"
                            loading="lazy" alt="" sizes="100vw" srcset="https://wallpaperaccess.com/full/2086940.jpg"
                            class="home-cs-image">
                        <div class="hover-block">
                            <div class="hover-detail">
                                <div class="hover-title">As Dusk Falls</div>
                                <div class="hover-client">INTERIOR/NIGHT</div>
                                <div class="hover-readmore">Learn More</div>

                            </div>
                        </div>
                    </a>
                </div>
                <div role="listitem" carousel-item class="home-cs-item w-dyn-item"><a
                        href="/case-studies/thesimpsonstappedout" class="home-cs-link w-inline-block"><img
                            src="https://wallpaperaccess.com/full/2096366.jpg" loading="lazy" alt="" sizes="100vw"
                            srcset="https://wallpaperaccess.com/full/2096366.jpg" class="home-cs-image">
                        <div class="hover-block">
                            <div class="hover-detail">
                                <div class="hover-title">The Simpsons Tapped Out</div>
                                <div class="hover-client">Electronic Arts, Broadsword Online Games</div>
                                <div class="hover-readmore">Learn More</div>

                            </div>
                        </div>
                    </a>
                </div>
                <div role="listitem" carousel-item class="home-cs-item w-dyn-item"><a href="/case-studies/as-dusk-falls"
                        class="home-cs-link w-inline-block"><img src="https://wallpaperaccess.com/full/2086940.jpg"
                            loading="lazy" alt="" sizes="100vw" srcset="https://wallpaperaccess.com/full/2086940.jpg"
                            class="home-cs-image">
                        <div class="hover-block">
                            <div class="hover-detail">
                                <div class="hover-title">As Dusk Falls</div>
                                <div class="hover-client">INTERIOR/NIGHT</div>
                                <div class="hover-readmore">Learn More</div>

                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div> -->


   <div class="home-cs-container">
    <div id="case-studies" class="pad80 mab0 services__title text-center data-bs-target">
        <button class="case-studies__nav slide_nav_left case-studies__nav--prev carousel-control-prev owl-prev" tabindex="0" aria-label="Previous slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19 12H5M5 12L11 18M5 12L11 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <h1 class="mab0">Case <b>Studies</b></h1>
        <button class="case-studies__nav slide_nav_right case-studies__nav--next carousel-control-next owl-next" tabindex="0" aria-label="Next slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
    
    <div class="owl-carousel owl-theme home-cs-wrapper">
        <div class="home-cs-item item">
            <a href="/case-studies/naughty-dog" class="home-cs-link w-inline-block">
                <img src="assets/images/avatar/1.webp" loading="lazy" alt="" class="home-cs-image">
                <div class="hover-block">
                    <div class="hover-detail">
                        <div class="hover-title">3D-Environment Design</div>
                        <div class="hover-client">Nature</div>
                        <div class="hover-readmore">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="home-cs-item item">
            <a href="/case-studies/as-dusk-falls" class="home-cs-link w-inline-block">
                <img src="assets/images/avatar/2.webp" loading="lazy" alt="" class="home-cs-image">
                <div class="hover-block">
                    <div class="hover-detail">
                        <div class="hover-title">3D-Creature Design</div>
                        <div class="hover-client">Dragon</div>
                        <div class="hover-readmore">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="home-cs-item item">
            <a href="/case-studies/thesimpsonstappedout" class="home-cs-link w-inline-block">
                <img src="assets/images/avatar/3.webp" loading="lazy" alt="" class="home-cs-image">
                <div class="hover-block">
                    <div class="hover-detail">
                        <div class="hover-title">3D-Concepts Design</div>
                        <div class="hover-client">Advanture of Cow Boy</div>
                        <div class="hover-readmore">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="home-cs-item item">
            <a href="/case-studies/as-dusk-falls" class="home-cs-link w-inline-block">
                <img src="assets/images/avatar/4.webp" loading="lazy" alt="" class="home-cs-image">
                <div class="hover-block">
                    <div class="hover-detail">
                        <div class="hover-title">3D- Character Design</div>
                        <div class="hover-client">Beautiful Queen</div>
                        <div class="hover-readmore">Learn More</div>
                    </div>
                </div>
            </a>
        </div>

         <div class="home-cs-item item">
            <a href="/case-studies/as-dusk-falls" class="home-cs-link w-inline-block">
                <img src="assets/images/avatar/5.webp" loading="lazy" alt="" class="home-cs-image">
                <div class="hover-block">
                    <div class="hover-detail">
                        <div class="hover-title">2D/3D Isometric Design</div>
                        <div class="hover-client">Hunting Palace</div>
                        <div class="hover-readmore">Learn More</div>
                    </div>
                </div>
            </a>
        </div>

         <div class="home-cs-item item">
            <a href="/case-studies/as-dusk-falls" class="home-cs-link w-inline-block">
                <img src="assets/images/avatar/6.webp" loading="lazy" alt="" class="home-cs-image">
                <div class="hover-block">
                    <div class="hover-detail">
                        <div class="hover-title">2D Background Design</div>
                        <div class="hover-client">Food Master Game</div>
                        <div class="hover-readmore">Learn More</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!----brands ------>

       <div class="sponsor pt-50px pb-150px tertiary-bg brand_section">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="sponsor__inner brand_header text-center">
                        <h6 class="neutral-top fw-6 brand_top"> Our Trusted <b>clients</b>
                          
                        </h6>
                        <div class="sponsor__slider swiper mt-35 swiper-initialized swiper-horizontal swiper-free-mode">
                           <div class="swiper-wrapper" id="swiper-wrapper-f5f480dd13d7e2df" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2304px, 0px, 0px); transition-delay: 0ms;"><div class="swiper-slide" role="group" aria-label="13 / 14" data-swiper-slide-index="12" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/1.png" alt="Image">
                                 </div>
                              </div><div class="swiper-slide" role="group" aria-label="14 / 14" data-swiper-slide-index="13" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/2.png" alt="Image">
                                 </div>
                              </div>
                              <div class="swiper-slide" role="group" aria-label="1 / 14" data-swiper-slide-index="0" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/3.png" alt="Image">
                                 </div>
                              </div>
                              <div class="swiper-slide" role="group" aria-label="2 / 14" data-swiper-slide-index="1" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/4.png" alt="Image">
                                 </div>
                              </div>
                              <div class="swiper-slide" role="group" aria-label="3 / 14" data-swiper-slide-index="2" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/5.png" alt="Image">
                                 </div>
                              </div>
                              <div class="swiper-slide" role="group" aria-label="4 / 14" data-swiper-slide-index="3" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/6.png" alt="Image">
                                 </div>
                              </div>
                              <div class="swiper-slide" role="group" aria-label="5 / 14" data-swiper-slide-index="4" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/7.png" alt="Image">
                                 </div>
                              </div>
                              <div class="swiper-slide" role="group" aria-label="6 / 14" data-swiper-slide-index="5" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/1.png" alt="Image">
                                 </div>
                              </div>
                              <div class="swiper-slide" role="group" aria-label="7 / 14" data-swiper-slide-index="6" style="width: 232px; margin-right: 24px;">
                                 <div class="sponsor__slider-single text-center">
                                    <img src="assets/images/sponsor/2.png" alt="Image">
                                 </div>
                              </div>
                          
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>





    <?php include 'includes/footer.php' ?>