<?php
/**
 * Template Name: demo
 *
 * This is the template that displays the front page by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package talha-ali
 */
get_header();
?>

    <!--
  ┌─────────────────────────────────────────────┐
  │          SECTION HERO   : START             │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--hero">
      <div class="hero">
        <div class="container-auto">
          <div class="hero__container">
            <div class="hero__content">
              <div class="heading--tertiary">
                <h3>Your Vision, My Design Expertise</h3>
              </div>
              <div class="heading--primary mt-18">
                <h1>
                  <span class="cl-gradient">I'm james,</span> product design
                  based in USA Hello
                </h1>
              </div>
              <div class="hero__text mt-16">
                <p>
                  Hi, I’m James, a passionate Product Designer based in the USA.
                  I specialize in crafting intuitive, user-centered designs that
                  merge functionality with aesthetics, With a focus on creating
                  seamless digital experiences.
                </p>
              </div>
              <div class="hero__btns mt-24">
                <a href="#" class="btn btn--primary">get started </a>
              </div>
            </div>
            <div class="hero__imges">
              <div class="hero__img">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/hero-img.png.png" alt="hero imges" />
              </div>
              <div class="hero__bg-img">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/hero-img-bg-shape.png" alt="" />
              </div>
              <div class="hero__box hero__count">
                <span id="counter" min="0" max="8">5+</span>
                <p>years experiences</p>
              </div>
              <div class="hero__box hero__users">
                <p>real coustomer</p>
                <div class="hero__users-images">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-1.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-2.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-3.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-4.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/customer-img-5.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │  SECTION MARQUEE SCROLL   : START           │
  └─────────────────────────────────────────────┘
  -->

    <div class="scrolling-text bg-gradient">
      <div class="rail">
        <h1 class="category ml-30">WIREFRAME DESIGN</h1>
        <h1 class="category">MOBILE APP DESIGN</h1>
        <h1 class="category">WEBSITE DESIGN</h1>
        <h1 class="category">WEBSITE DESIGN</h1>
        <h1 class="category">DASHBOARD DESIGN</h1>
      </div>
    </div>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  SERVICES   : START           │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--services mt-[17rem] max-[670px]:mt-[8rem]">
      <div class="services">
        <div class="container-auto">
          <div class="services__head-container">
            <div class="services__title">
              <div class="heading--tertiary">
                <h3>my specialization</h3>
              </div>
              <div class="heading--secondary">
                <h2>
                  Innovative best design and
                  <span class="cl-gradient">development services</span>
                </h2>
              </div>
            </div>
            <div class="services__text">
              <p>
                As a skilled Product Designer, I offer a range of services
                tailored to help you create exceptional digital products and
                experiences.
              </p>
              <a href="#" class="btn btn--primary">view all services</a>
            </div>
          </div>
          <div class="services__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#" class="services__item">
                  <div class="services__item-head">
                    <div class="services__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/services__icon-1.png" alt="" />
                    </div>
                    <div class="arrow arrow--primary">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/arrow.png" alt="" />
                    </div>
                  </div>
                  <div class="heading--secondary-md mt-[8.2rem]">
                    <h2>UI/UX Design System Creation</h2>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="services__item">
                  <div class="services__item-head">
                    <div class="services__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/services__icon-1.png" alt="" />
                    </div>
                    <div class="arrow arrow--primary">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/arrow.png" alt="" />
                    </div>
                  </div>
                  <div class="heading--secondary-md mt-[8.2rem]">
                    <h2>UI/UX Design System Creation</h2>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="services__item">
                  <div class="services__item-head">
                    <div class="services__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/services__icon-1.png" alt="" />
                    </div>
                    <div class="arrow arrow--primary">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/arrow.png" alt="" />
                    </div>
                  </div>
                  <div class="heading--secondary-md mt-[8.2rem]">
                    <h2>UI/UX Design System Creation</h2>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="services__item">
                  <div class="services__item-head">
                    <div class="services__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/services__icon-1.png" alt="" />
                    </div>
                    <div class="arrow arrow--primary">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/arrow.png" alt="" />
                    </div>
                  </div>
                  <div class="heading--secondary-md mt-[8.2rem]">
                    <h2>UI/UX Design System Creation</h2>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="services__item">
                  <div class="services__item-head">
                    <div class="services__icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/services__icon-1.png" alt="" />
                    </div>
                    <div class="arrow arrow--primary">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/arrow.png" alt="" />
                    </div>
                  </div>
                  <div class="heading--secondary-md mt-[8.2rem]">
                    <h2>UI/UX Design System Creation</h2>
                  </div>
                </a>
              </div>
            </div>

            <!-- Navigation -->
          </div>
          <div class="services__pagination">
            <div class="swiper-pagination"></div>
          </div>
          <div class="text text-center mt-[3.5rem]">
            <p>
              Elevate your brand with creative design solutions.
              <span class="cl-gradient underline f-sb"
                ><a href="#">Let’s bring your vision to life today!</a></span
              >
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  ABOUT US   : START           │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--about mt-[23rem] max-[670px]:mt-[15rem]">
      <div class="about">
        <div class="container-auto">
          <div class="about__container">
            <div class="about__col-left">
              <div class="about__img">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/about-img-bg-ring.png"
                  alt=""
                  class="spiner"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/about-us-img.png"
                  alt="about us img "
                  class="person"
                />
              </div>
            </div>
            <div class="about__col-right">
              <div class="heading--tertiary">
                <h3>about us</h3>
              </div>
              <div class="heading--secondary mt-8">
                <h2>who is <span class="cl-gradient">james scoot ?</span></h2>
              </div>
              <div class="heading--secondary-sm mt-18">
                <h2>
                  “Helping businesses grow with creative web design and
                  development solutions."
                </h2>
              </div>
              <div class="text mt-18">
                <p>
                  Hi, I’m James, a passionate
                  <span class="cl-gradient underline f-sb"
                    ><a href="#">UI/UX designer</a></span
                  >
                  who thrives on turning ideas into visually stunning realities.
                  With a love for creativity and a meticulous eye for detail.
                </p>
              </div>
              <div class="about__infos">
                <div class="about__info-row-left">
                  <div class="about__contact">
                    <div class="about__infos-icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/email.png" alt="email icon" />
                    </div>
                    <div class="text">
                      <p>email us at</p>
                    </div>
                    <div class="heading--secondary-sm f-sb">
                      <h2><a href="#">info@domain.com</a></h2>
                    </div>
                  </div>
                  <div class="about__contact">
                    <div class="about__infos-icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/asset/images/phone.png" alt="email icon" />
                    </div>
                    <div class="text">
                      <p>phone number</p>
                    </div>
                    <div class="heading--secondary-sm f-sb">
                      <h2><a href="#">+0 123 456 789</a></h2>
                    </div>
                  </div>
                </div>

                <div class="about__info-row-right">
                  <div class="about__year f-sb">
                    <h2 class="cl-gradient">12+</h2>
                    <p>years experience</p>
                  </div>
                  <div class="text mt-15 text-cp text-center">
                    <p>my resume <span class="cl-gradient">✦</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  SKILLS     : START           │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--skills mt-[19rem] max-[670px]:mt-[10rem]">
      <div class="skils">
        <div class="container-auto">
          <div class="skils__title">
            <div class="heading--tertiary">
              <h3>my tools</h3>
            </div>
            <div class="heading--secondary">
              <h2>
                Design, develop, deliver: my
                <span class="cl-gradient">essential gear</span>
              </h2>
            </div>
          </div>
           <div class="skils__container counter">
          <div class="skils__item">
            <div class="skils__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/images/skils-1.png" alt="" />
            </div>
            <div class="skils__name">
              <div class="heading--secondary-sm text-cp">
                <h2>figma</h2>
              </div>
              <div class="text">
                <p>Sit consectetur elit</p>
              </div>
            </div>
            <div class="skils__percent ml-8">
              <div class="heading--secondary cl-gradient">
                <h2 class="count" data-count="97"></h2>
                %
              </div>
            </div>
          </div>
          <div class="skils__item">
            <div class="skils__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/images/skils-2.png" alt="" />
            </div>
            <div class="skils__name">
              <div class="heading--secondary-sm text-cp">
                <h2>figma</h2>
              </div>
              <div class="text">
                <p>Sit consectetur elit</p>
              </div>
            </div>
            <div class="skils__percent ml-8">
              <div class="heading--secondary cl-gradient">
                <h2 class="count" data-count="97"></h2>
                %
              </div>
            </div>
          </div>
          <div class="skils__item">
            <div class="skils__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/images/skils-3.png" alt="" />
            </div>
            <div class="skils__name">
              <div class="heading--secondary-sm text-cp">
                <h2>figma</h2>
              </div>
              <div class="text">
                <p>Sit consectetur elit</p>
              </div>
            </div>
            <div class="skils__percent ml-8">
              <div class="heading--secondary cl-gradient">
                <h2 class="count" data-count="97"></h2>
                %
              </div>
            </div>
          </div>
          <div class="skils__item">
            <div class="skils__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/images/skils-4.png" alt="" />
            </div>
            <div class="skils__name">
              <div class="heading--secondary-sm text-cp">
                <h2>figma</h2>
              </div>
              <div class="text">
                <p>Sit consectetur elit</p>
              </div>
            </div>
            <div class="skils__percent ml-8">
              <div class="heading--secondary cl-gradient">
                <h2 class="count" data-count="97"></h2>
                %
              </div>
            </div>
          </div>
          <div class="skils__item">
            <div class="skils__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/images/skils-5.png" alt="" />
            </div>
            <div class="skils__name">
              <div class="heading--secondary-sm text-cp">
                <h2>figma</h2>
              </div>
              <div class="text">
                <p>Sit consectetur elit</p>
              </div>
            </div>
            <div class="skils__percent ml-8">
              <div class="heading--secondary cl-gradient">
                <h2 class="count" data-count="97"></h2>
                %
              </div>
            </div>
          </div>
          <div class="skils__item">
            <div class="skils__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/images/skils-6.png" alt="" />
            </div>
            <div class="skils__name">
              <div class="heading--secondary-sm text-cp">
                <h2>figma</h2>
              </div>
              <div class="text">
                <p>Sit consectetur elit</p>
              </div>
            </div>
            <div class="skils__percent ml-8">
              <div class="heading--secondary cl-gradient">
                <h2 class="count" data-count="97"></h2>
                %
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  showcase   : START           │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--showcase mt-[17rem] max-[670px]:mt-[10rem]">
      <div class="showcase">
        <div class="container-auto">
          <div class="services__head-container">
            <div class="services__title">
              <div class="heading--tertiary">
                <h3>my porfolio</h3>
              </div>
              <div class="heading--secondary">
                <h2>
                  Showcase of my latest projects and
                  <span class="cl-gradient">creative work</span>
                </h2>
              </div>
            </div>
            <div class="services__text">
              <p>
                From concept to completion, these works reflect my commitment to
                delivering high-quality, impactful solutions.
              </p>
              <a href="#" class="btn btn--primary">view all portfolio</a>
            </div>
          </div>
          <div class="story__container">
            <a href="#" data-tooltip="view case" class="story__item">
              <div class="story__img img-box">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/hero_slie-1.avif"
                  alt="stiry case study 1 "
                  class="img-default"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/hero_slie-6.avif"
                  class="img-hover"
                  alt=""
                />
              </div>
              <div class="story__text">
                <div class="story__content">
                  <div class="story__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images//story_logo-1.png" alt="" />
                  </div>
                  <div class="heading--tertiary-main">
                    <h3>
                      Increase In Organic Traffic by 266.4% with new revamped
                      webflow website. DA increased from 24 to 37 in 6 months.
                    </h3>
                  </div>
                  <div class="story__kewrd">
                    <ul>
                      <li>B2B SaaS</li>
                      <li>Logistics</li>
                      <li>fulfilment</li>
                    </ul>
                  </div>
                </div>
                <div class="story__footer">
                  <div class="story__footer-heading">
                    <h2>$2.7M</h2>
                    <span>in fundiing</span>
                  </div>
                  <ul>
                    <li>UI/UX design</li>
                    <li>wordpress</li>
                    <li>SEO</li>
                  </ul>
                </div>
              </div>
            </a>

            <a href="#" data-tooltip="view case" class="story__item">
              <div class="story__img img-box">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/hero_slie-2.avif"
                  alt="stiry case study 1 "
                  class="img-default"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/hero_slie-3.avif"
                  class="img-hover"
                  alt=""
                />
              </div>
              <div class="story__text">
                <div class="story__content">
                  <div class="story__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images//story_logo-2.svg" alt="" />
                  </div>
                  <div class="heading--tertiary-main">
                    <h3>
                      Onboarded 200+ HNI’s, 15+ corporate clients with the new
                      website design and development. Migrated old WordPress
                      site to Webflow
                    </h3>
                  </div>
                  <div class="story__kewrd">
                    <ul>
                      <li>B2B SaaS</li>
                      <li>Logistics</li>
                      <li>fulfilment</li>
                    </ul>
                  </div>
                </div>
                <div class="story__footer">
                  <div class="story__footer-heading">
                    <h2>$2.7M</h2>
                    <span>in fundiing</span>
                  </div>
                  <ul>
                    <li>UI/UX design</li>
                    <li>wordpress</li>
                    <li>SEO</li>
                  </ul>
                </div>
              </div>
            </a>
            <a href="#" data-tooltip="view case" class="story__item">
              <div class="story__img img-box">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/hero_slie-4.avif"
                  alt="stiry case study 1 "
                  class="img-default"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/asset/images/hero_slie-5.avif"
                  class="img-hover"
                  alt=""
                />
              </div>
              <div class="story__text">
                <div class="story__content">
                  <div class="story__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/images//story_logo-1.png" alt="" />
                  </div>
                  <div class="heading--tertiary-main">
                    <h3>
                      Increase In Organic Traffic by 266.4% with new revamped
                      webflow website. DA increased from 24 to 37 in 6 months.
                    </h3>
                  </div>
                  <div class="story__kewrd">
                    <ul>
                      <li>B2B SaaS</li>
                      <li>Logistics</li>
                      <li>fulfilment</li>
                    </ul>
                  </div>
                </div>
                <div class="story__footer">
                  <div class="story__footer-heading">
                    <h2>$2.7M</h2>
                    <span>in fundiing</span>
                  </div>
                  <ul>
                    <li>UI/UX design</li>
                    <li>wordpress</li>
                    <li>SEO</li>
                  </ul>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  HOW ITS WORD    : START      │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--work mt-[15rem] max-[670px]:mt-[10rem]">
      <div class="container-auto">
        <div class="work__accordion-container">
          <div class="work__accordion__left shine-glass-effect">
            <img
              src="<?php echo get_template_directory_uri(); ?>/asset/images/how-it-work-image.jpg"
              alt="Accordion Image"
              class="work__accordion__image active"
              id="work__accordion-img"
            />
          </div>

          <div class="work__accordion__right">
            <div class="heading--tertiary">
              <h3>how it work</h3>
            </div>
            <div class="heading--secondary text-cp">
              <h2>
                the structured workflow behind
                <span class="cl-gradient">our success</span>
              </h2>
            </div>
            <div class="text mt-10">
              <p>
                Hi, I’m James, a passionate
                <span class="cl-gradient underline f-sb"
                  ><a href="#">UI/UX designer</a></span
                >
                who thrives on turning ideas into visually stunning realities.
                With a love for creativity and a meticulous eye for detail.
              </p>
            </div>
            <!-- Item 1 -->
            <div
              class="work__accordion__item active mt-10"
              data-img="<?php echo get_template_directory_uri(); ?>/asset/images/how-it-work-image.jpg"
            >
              <div class="work__accordion__header">Mountain View</div>
              <div class="work__accordion__content">
                <p>
                  Experience the calm and serenity of mountain landscapes —
                  where crisp air meets lush green valleys. Ideal for hiking,
                  meditation, and photography lovers seeking nature’s peace.
                </p>
              </div>
            </div>

            <!-- Item 2 -->
            <div
              class="work__accordion__item"
              data-img="https://images.pexels.com/photos/31110329/pexels-photo-31110329/free-photo-of-elegant-female-model-in-london-street-fashion.jpeg?auto=compress&cs=tinysrgb&w=600&loading=lazy"
            >
              <div class="work__accordion__header">City Lights</div>
              <div class="work__accordion__content">
                <p>
                  Discover the beauty of modern skylines under the night sky.
                  The glow of thousands of lights reflects endless dreams and
                  urban rhythm. Perfect for nightlife and street explorers.
                </p>
              </div>
            </div>

            <!-- Item 3 -->
            <div
              class="work__accordion__item"
              data-img="<?php echo get_template_directory_uri(); ?>/asset/images/how-it-work-image.jpg"
            >
              <div class="work__accordion__header">Ocean Breeze</div>
              <div class="work__accordion__content">
                <p>
                  Feel the freshness of ocean air and listen to waves that calm
                  the soul. Ideal for relaxation, beach walks, and enjoying
                  sunsets over the horizon.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  PRICING         : START      │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--pricing mt-[19rem] max-[670px]:mt-[10rem]">
      <div class="pricing">
        <div class="container-auto">
          <div class="pricing__container">
            <div class="pricing__item">
              <div class="pricing__headings">
                <div class="heading--tertiary">
                  <h3>our pricing</h3>
                </div>
                <div class="heading--secondary">
                  <h2>
                    Choose the right
                    <span class="cl-gradient">plan for project</span>
                  </h2>
                </div>
              </div>
              <div class="pricing__card bg-gradient cl-primary">
                <div class="pricing__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/call-icon.png" alt="call icon" />
                </div>
                <div class="heading--secondary-sm f-sb">
                  <h2>Hey ! Custom Plans For Your Unique Needs</h2>
                </div>
                <div class="text">
                  <p>
                    If none of my standard packages quite fit what you're
                    looking for, don't worry!
                  </p>
                </div>
                <div class="pricing__btn mt-[4rem]">
                  <a href="#" class="btn btn--secondary">contact now</a>
                </div>
              </div>
            </div>
            <div class="pricing__item">
              <div class="pricing__card bg-primary-light">
                <div class="heading--secondary-sm">
                  <h2>Hourly Package</h2>
                </div>
                <div class="text">
                  <p>
                    We begin by understanding your vision, goals, Through
                    collaborative discussion
                  </p>
                </div>
                <div class="pricing-price">
                  <div class="heading--secondary cl-gradient">
                    <h2>$ 29</h2>
                  </div>
                  <span class="heading--sm">/ hours</span>
                </div>
                <div class="pricing__list">
                  <ul>
                    <li>custom website design</li>
                    <li>Responsive Design</li>
                    <li>Front-End Development</li>
                    <li>Back-End Development</li>
                    <li>E-Commerce Development</li>
                  </ul>
                </div>
                <div class="pricing__btn mt-[3rem]">
                  <a href="#" class="btn btn--primary">hire now </a>
                </div>
              </div>
            </div>
            <div class="pricing__item pricing__popular">
              <div class="pricing__card bg-primary-light">
                <div class="heading--secondary-sm">
                  <h2>monthly Package</h2>
                </div>
                <div class="text">
                  <p>
                    We begin by understanding your vision, goals, Through
                    collaborative discussion
                  </p>
                </div>
                <div class="pricing-price">
                  <div class="heading--secondary cl-gradient">
                    <h2>$ 1229</h2>
                  </div>
                  <span class="heading--sm">/ months</span>
                </div>
                <div class="pricing__list">
                  <ul>
                    <li>custom website design</li>
                    <li>Responsive Design</li>
                    <li>Front-End Development</li>
                    <li>Back-End Development</li>
                    <li>E-Commerce Development</li>
                  </ul>
                </div>
                <div class="pricing__btn mt-[3rem]">
                  <a href="#" class="btn btn--primary">hire now </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  CLIENTS         : START      │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--clients">
      <div class="clients">
        <div class="container-auto">
          <div class="clients__headings">
            <div class="heading--tertiary justify-center">
              <h3>testimonials</h3>
            </div>
            <div class="heading--secondary mt-2">
              <h2>Our happy clients</h2>
            </div>
            <div class="text__lg">
              <p>
                Hear from clients who’ve experienced remarkable transformations
                with Webyansh.
              </p>
            </div>
          </div>
          <div class="clients__slider">
            <div class="custom-pagination"></div>

            <div id="testimonial-slider" class="splide">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/44.jpg"
                        alt="Diana"
                      />
                      <div class="info">
                        <strong>Diana Kew</strong>
                        CMO, Hubly
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/46.jpg"
                        alt="Kain"
                      />
                      <div class="info">
                        <strong>Kain (Kyel) Seo</strong>
                        Cofounder, Mahojin
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/65.jpg"
                        alt="Helena"
                      />
                      <div class="info">
                        <strong>Helena Turpin</strong>
                        Co-Founder, GoFIGR
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/52.jpg"
                        alt="Lucas"
                      />
                      <div class="info">
                        <strong>Lucas Grey</strong>
                        CEO, PixelCraft
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/46.jpg"
                        alt="Sarah"
                      />
                      <div class="info">
                        <strong>Sarah Long</strong>
                        Founder, LongDesigns
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/44.jpg"
                        alt="Diana"
                      />
                      <div class="info">
                        <strong>Diana Kew</strong>
                        CMO, Hubly
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/46.jpg"
                        alt="Kain"
                      />
                      <div class="info">
                        <strong>Kain (Kyel) Seo</strong>
                        Cofounder, Mahojin
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/65.jpg"
                        alt="Helena"
                      />
                      <div class="info">
                        <strong>Helena Turpin</strong>
                        Co-Founder, GoFIGR
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/52.jpg"
                        alt="Lucas"
                      />
                      <div class="info">
                        <strong>Lucas Grey</strong>
                        CEO, PixelCraft
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <p class="testimonial-text">
                      "Mahojin's landing page work was completed with a sense of
                      responsibility despite the tight timeline and demanding
                      requirements. He successfully directed the design, 3D
                      work, and development, and communicated responsively with
                      us as the client, which allowed us to successfully launch
                      the landing page on time."
                    </p>
                    <div class="testimonial-author">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/asset/images/46.jpg"
                        alt="Sarah"
                      />
                      <div class="info">
                        <strong>Sarah Long</strong>
                        Founder, LongDesigns
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="custom-arrows">
              <button class="custom-prev bg-gradient-hvr">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/arrow.png" alt="" />
              </button>
              <button class="custom-next bg-gradient-hvr">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/arrow.png" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  FAQS            : START      │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--faq">
      <div class="faq">
        <div class="container-auto">
          <div class="faq__container">
            <div class="faq__card">
              <div class="faq__content">
                <div class="faq__icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/images/callicon.png" alt="call icon" />
                </div>
                <div class="heading--secondary-sm">
                  <h1>You have different questions? Ask Away!</h1>
                </div>
                <div class="text">
                  <p>Work With People And Brands Worldwide.</p>
                </div>
                <div class="faq__btn">
                  <a href="#" class="btn btn--primary">contact us now</a>
                </div>
              </div>
            </div>
            <div class="faq__accordion">
              <div class="accordion">
                <div class="accordion-item active">
                  <div class="accordion-header">
                    Why is Webflow the right platform for UI/UX design?
                    <div class="accordion-arrow">
                      <i class="fa-regular fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="accordion-content">
                    <div class="accordion-inner text__sm">
                      <p>
                        -SEO is a long-term strategy, and it can take anywhere
                        from 3 to 6 months to see significant improvements in
                        rankings, depending on your industry and competition
                      </p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <div class="accordion-header">
                    Why is Webflow the right platform for UI/UX design?
                    <div class="accordion-arrow">
                      <i class="fa-regular fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="accordion-content">
                    <div class="accordion-inner text__sm">
                      <p>
                        SEO is a long-term strategy, and it can take anywhere
                        from 3 to 6 months to see significant improvements in
                        rankings, depending on your industry and competition
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    Why is Webflow the right platform for UI/UX design?
                    <div class="accordion-arrow">
                      <i class="fa-regular fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="accordion-content">
                    <div class="accordion-inner text__sm">
                      <p>
                        SEO is a long-term strategy, and it can take anywhere
                        from 3 to 6 months to see significant improvements in
                        rankings, depending on your industry and competition
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    Why is Webflow the right platform for UI/UX design?
                    <div class="accordion-arrow">
                      <i class="fa-regular fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="accordion-content">
                    <div class="accordion-inner text__sm">
                      <p>
                        SEO is a long-term strategy, and it can take anywhere
                        from 3 to 6 months to see significant improvements in
                        rankings, depending on your industry and competition
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    Why is Webflow the right platform for UI/UX design?
                    <div class="accordion-arrow">
                      <i class="fa-regular fa-angle-down"></i>
                    </div>
                  </div>
                  <div class="accordion-content">
                    <div class="accordion-inner text__sm">
                      <p>
                        SEO is a long-term strategy, and it can take anywhere
                        from 3 to 6 months to see significant improvements in
                        rankings, depending on your industry and competition
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  BLOGS           : START      │
  └─────────────────────────────────────────────┘
  -->

    <section class="section-blogs mt-[8rem] max-[670px]:mt-[5rem]">
      <div class="blogs">
        <div class="container-auto">
          <div class="services__head-container">
            <div class="services__title">
              <div class="heading--tertiary">
                <h3>latest blog</h3>
              </div>
              <div class="heading--secondary">
                <h2>
                  Showcase of my latest projects and
                  <span class="cl-gradient">creative work</span>
                </h2>
              </div>
            </div>
            <div class="services__text">
              <p>
                As a skilled Product Designer, I offer a range of services
                tailored to help you create exceptional digital products and
                experiences.
              </p>
              <a href="#" class="btn btn--primary">view all blog</a>
            </div>
          </div>
          <div class="blogs__container">
            <a href="#" class="blogs__item">
              <div class="blogs__img shine-glass-effect">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post-1.jpg" alt="blog post 1" />
              </div>
              <div class="heading--secondary-sm">
                <h2>Wireframing Like a Pro Best Practices and Tools</h2>
              </div>
              <div class="blog__btn">
                <button class="cl-gradient text-cp">read more</button>
              </div>
            </a>
            <a href="#" class="blogs__item">
              <div class="blogs__img shine-glass-effect">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post-1.jpg" alt="blog post 1" />
              </div>
              <div class="heading--secondary-sm">
                <h2>Wireframing Like a Pro Best Practices and Tools</h2>
              </div>
              <div class="blog__btn">
                <button class="cl-gradient text-cp">read more</button>
              </div>
            </a>
            <a href="#" class="blogs__item">
              <div class="blogs__img shine-glass-effect">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/images/post-1.jpg" alt="blog post 1" />
              </div>
              <div class="heading--secondary-sm">
                <h2>Wireframing Like a Pro Best Practices and Tools</h2>
              </div>
              <div class="blog__btn">
                <button class="cl-gradient text-cp">read more</button>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--
  ┌─────────────────────────────────────────────┐
  │       SECTION  CONTACT    : START           │
  └─────────────────────────────────────────────┘
  -->

    <section class="section--contact">
      <div class="container-auto">
        <div class="contact cl-white">
          <div class="container-sm">
            <div class="contact__headings">
              <div class="heading--tertiary justify-center">
                <h3>contact us</h3>
              </div>
              <div class="heading--secondary">
                <h2>
                  Get in touch to discuss your
                  <span class="cl-gradient">next project</span>
                </h2>
              </div>
              <div class="text mt-[2rem]">
                <p>
                  Have a project in mind? Contact us for expert design and
                  development solutions. Let's discuss how we can help grow your
                  business.
                </p>
              </div>
            </div>
            <div class="contact__container">
              <div class="contact__col">
                <div class="contact__img shine-glass-effect">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/asset/images/person__img.jpg"
                    alt="a professional img of person"
                  />
                  <div class="contact__icons">
                    <a
                      href="#"
                      class="icon cl-gradient"
                      data-tooltip="LinkedIn"
                    >
                      <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a
                      href="#"
                      class="icon cl-gradient"
                      data-tooltip="Instagram"
                    >
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="icon cl-gradient" data-tooltip="X">
                      <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="#" class="icon cl-gradient" data-tooltip="Drible">
                      <i class="fa-light fa-basketball"></i>
                    </a>
                    <a href="#" class="icon cl-gradient" data-tooltip="Behance">
                      <i class="fa-brands fa-behance"></i>
                    </a>
                  </div>
                </div>
                <div class="text__sm mt-20">
                  <p>
                    Hi, <strong>I’m Divyansh - Founder at Webyansh</strong>.
                    <a href="# " class="cl-gradient">Schedule a call with me</a>
                    to discuss in detail about your project and how we can help
                    your business. You can also
                    <strong>request for free custom quote</strong> if the scope
                    of work is clear.
                  </p>
                </div>
              </div>

              <div class="contact__form">
                <form class="form">
                  <!-- First Row - Name and Email -->
                  <div class="form-row">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Tony Stark"
                        required
                      />
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="tony@starkindustries.com"
                        required
                      />
                    </div>
                  </div>

                  <!-- Second Row - Help and Budget -->
                  <div class="form-row">
                    <div class="form-group">
                      <label for="help">How we can help? *</label>
                      <select id="help" name="help" required>
                        <option value="">Select</option>
                        <option value="web-development">Web Development</option>
                        <option value="mobile-app">Mobile App</option>
                        <option value="consulting">Consulting</option>
                        <option value="design">Design</option>
                        <option value="marketing">Marketing</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="budget">what's your budget ? *</label>
                      <select id="budget" name="budget">
                        <option value="$2k - $5k">$2k - $5k</option>
                        <option value="$5k - $10k">$5k - $10k</option>
                        <option value="$10k - $20k">$10k - $20k</option>
                        <option value="$20k - $50k">$20k - $50k</option>
                        <option value="$50k+">$50k+</option>
                      </select>
                    </div>
                  </div>

                  <!-- Third Row - Deadline and Source -->
                  <div class="form-row">
                    <div class="form-group">
                      <label for="deadline"
                        >what yours project deadline ? *</label
                      >
                      <select id="deadline" name="deadline" required>
                        <option value="Less than 4 weeks">
                          Less than 4 weeks
                        </option>
                        <option value="4 to 10 weeks">4 to 10 weeks</option>
                        <option value="more than 10 weeks">
                          More than 10 weeks
                        </option>
                        <option value="hard deadline">Hard Deadline</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="hear from"
                        >How did you hear about us ? *</label
                      >
                      <select id="hear from" name="hear from" required>
                        <option value="Google">Google</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="LinkedIn">LinkedIn</option>
                        <option value="Referral">Referral</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>

                  <!-- Message Field -->
                  <div class="form-group full-width">
                    <label for="message">Message</label>
                    <textarea
                      id="message"
                      name="message"
                      placeholder="Your Message"
                    ></textarea>
                  </div>
                  <div class="form-group">
                    <div class="form__btn">
                      <button type="submit" class="btn btn--primary">
                        submitt and book a call
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>