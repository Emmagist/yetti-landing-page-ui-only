<?php require_once "process.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Yetti | Your business, our priority</title>
  </head>
  <body>
    <div class="menu menu--hidden">
      <div class="menu__body">
        <div class="menu__header">
          <div class="menu__close">
            <button class="menu__btn">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x"
              >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
    <header class="header">
      <div class="container">
        <nav class="navigation">
          <div class="logo-box">
            <a href="#" class="logo-link">
              <img src="assets/svgs/logo.svg" alt="Yetti Logo" class="logo" />
            </a>
          </div>
          <ul class="navigation__list">
            <li class="navigation__item">
              <a href="#" class="navigation__link" name="Home"> Home </a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link" name="About"> About </a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link" name="Plans"> Plans </a>
            </li>
            <li class="navigation__item">
              <a href="#" class="navigation__link" name="Help center">
                Help center
              </a>
            </li>
          </ul>
          <div class="navigation__authentication">
            <a href="#" class="btn btn--auth btn--sign-up" name="Sign up">
              Sign up
            </a>
            <a href="#" class="btn btn--auth btn--login" name="Login">
              Login
            </a>
          </div>
          <div class="navigation__toggle">
            <svg
              width="34"
              height="20"
              viewBox="0 0 34 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M2 10H32"
                stroke="#828282"
                stroke-width="3.33333"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M17 2L32 2"
                stroke="#828282"
                stroke-width="3.33333"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M2 18H17"
                stroke="#828282"
                stroke-width="3.33333"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
        </nav>
      </div>
      <div class="header__overlay header__overlay--left">&nbsp;</div>
      <div class="header__overlay header__overlay--right">&nbsp;</div>
    </header>
    <section class="section-intro">
      <div class="container">
        <div class="intro">
          <div class="intro__content">
            <h1 class="heading heading--intro">
              <span> Your business, </span>
              <span> our priority. </span>
            </h1>
            <p class="paragraph paragraph--intro">
              Let us help your business get the recognition it deserves. We want
              to help build a collaborative business enviroment where businesses
              can grow, patner and interact with their users
            </p>
            <a
              href="#"
              class="btn btn--onboarding btn--orange"
              name="Get started"
            >
              Get started
            </a>
          </div>
          <div class="intro__image-box">
            <img
              src="assets/svgs/intro-image.svg"
              alt="intro"
              class="intro__image"
            />
          </div>
        </div>
      </div>
    </section>
    <section class="section-mission">
      <div class="container">
        <div class="mission">
          <div class="mission__image-box">
            <img
              src="assets/svgs/intro-image.svg"
              alt="mission"
              class="mission__image mission__image--1"
            />
            <img
              src="assets/svgs/armour.svg"
              alt="mission"
              class="mission__image mission__image--2"
            />
          </div>
          <div class="mission__content">
            <h1 class="heading heading--mission">Our mission</h1>
            <hr class="heading__underline heading__underline--left" />
            <p class="paragraph paragraph--mission">
              At yetti, we’re commited to making your business known and helping
              you connect to your customers, no matter the size your business.
              We want to help build a collaborative business enviroment where
              businesses can grow, patner and interact with their users.
            </p>
            <a
              href="#"
              class="btn btn--onboarding btn--blue"
              name="Get started"
            >
              Get started
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="section-about">
      <div class="container">
        <div class="about">
          <h1 class="heading heading--about">How it works</h1>
          <hr class="heading__underline heading__underline--center" />
          <div class="about__wrapper">
            <div class="card card--about card--active">
              <div class="card__index card__index--1">
                <span> 1 </span>
              </div>
              <h1 class="card__header">Create an account</h1>
              <p class="card__paragraph">Open an account with us</p>
              <div class="card__footer">
                <a href="" class="card__link" name="Learn more">
                  <span> Learn more </span>
                  <span> > </span>
                </a>
              </div>
            </div>
            <div class="card card--about">
              <div class="card__index card__index--2">
                <span> 2 </span>
              </div>
              <h1 class="card__header">choose a plan</h1>
              <p class="card__paragraph">
                Select any of our plans that come with unique benefits Open an
                account with us
              </p>
              <div class="card__footer">
                <a href="" class="card__link" name="Learn more">
                  <span> Learn more </span>
                  <span> > </span>
                </a>
              </div>
            </div>
            <div class="card card--about">
              <div class="card__index card__index--3">
                <span> 3 </span>
              </div>
              <h1 class="card__header">something else</h1>
              <p class="card__paragraph">
                Select any of our plans that come with unique benefits
              </p>
              <div class="card__footer">
                <a href="" class="card__link" name="Learn more">
                  <span> Learn more </span>
                  <span> > </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-offers">
      <div class="container">
        <div class="offers">
          <h1 class="heading heading--offers">what we offer</h1>
          <hr class="heading__underline heading__underline--center" />
          <div class="offers__list">
            <div class="offers__card offers__card--1">
              <div class="offers__image-box offers__image-box--1">
                <img
                  src="assets/svgs/offers-card-illustration--1.svg"
                  alt="1"
                  class="offers__image"
                />
              </div>
              <div class="offers__content">
                <h1 class="heading heading--offers-title">Easy monitoring</h1>
                <p class="paragraph paragraph--offers paragraph--offers--1">
                  we offer a platform where you can easily monitor your ads and
                  your customers with ease
                </p>
                <a href="#" class="btn btn--offers" name="Sign up now">
                  Sign up now
                </a>
              </div>
            </div>
            <div class="offers__card offers__card--2">
              <div class="offers__content">
                <h1 class="heading heading--offers-title">
                  <span> Collaborate with </span>
                  <span> other businesses </span>
                </h1>
                <p class="paragraph paragraph--offers paragraph--offers--2">
                  Meet other businesses and form patnerships to meet certain
                  goals.
                </p>
                <a href="#" class="btn btn--offers" name="Get an account">
                  Get an account
                </a>
              </div>
              <div class="offers__image-box offers__image-box--2">
                <img
                  src="assets/svgs/offers-card-illustration--2.svg"
                  alt="2"
                  class="offers__image"
                />
              </div>
            </div>
            <div class="offers__card offers__card--3">
              <div class="offers__image-box offers__image-box--3">
                <img
                  src="assets/svgs/offers-card-illustration--3.svg"
                  alt="3"
                  class="offers__image"
                />
              </div>
              <div class="offers__content">
                <h1 class="heading heading--offers-title">
                  <span> Connect to your </span>
                  <span> customers through ads </span>
                </h1>
                <p class="paragraph paragraph--offers paragraph--offers--1">
                  We help customers or potential customers get in touch with you
                  easily after seeing your ad
                </p>
                <a href="#" class="btn btn--offers" name="Sign up now">
                  Try for free
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-plans">
      <div class="container">
        <div class="plans">
          <h1 class="heading heading--plans">Choose one of our plans today</h1>
          <hr class="heading__underline heading__underline--center" />
          <div class="plans__wrapper">
            <div class="card card--plan" data-label="basic">
              <div class="plan__header">
                <h1 class="heading heading--plan">Basic customer</h1>
                <p class="plan__price">
                  <span class="plan__tag"> $0 </span>
                  <span class="plan__date"> /mo </span>
                </p>
              </div>
              <div class="plans__body">
                <h3 class="heading heading--features">features</h3>
                <ul class="plans__list">
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                </ul>
                <div class="plans__action">
                  <a href="#" class="btn btn--onboard" name="get started">
                    Get started
                  </a>
                </div>
              </div>
            </div>
            <div class="card card--plan" data-label="basic">
              <div class="plan__header">
                <h1 class="heading heading--plan">Basic Seller</h1>
                <p class="plan__price">
                  <span class="plan__tag"> $1.25 </span>
                  <span class="plan__date"> /mo </span>
                </p>
              </div>
              <div class="plans__body">
                <h3 class="heading heading--features">features</h3>
                <ul class="plans__list">
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                </ul>
                <div class="plans__action">
                  <a href="#" class="btn btn--onboard" name="get started">
                    Get started
                  </a>
                </div>
              </div>
            </div>
            <div class="card card--plan" data-label="advanced">
              <div class="plan__header">
                <h1 class="heading heading--plan">Advanced Seller</h1>
                <p class="plan__price">
                  <span class="plan__tag"> $12.45 </span>
                  <span class="plan__date"> /mo </span>
                </p>
              </div>
              <div class="plans__body">
                <h3 class="heading heading--features">features</h3>
                <ul class="plans__list">
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                </ul>
                <div class="plans__action">
                  <a href="#" class="btn btn--onboard" name="get started">
                    Get started
                  </a>
                </div>
              </div>
            </div>
            <div class="card card--plan" data-label="organization">
              <div class="plan__header">
                <h1 class="heading heading--plan">Organisation</h1>
                <p class="plan__price">
                  <span class="plan__tag"> $50.49 </span>
                  <span class="plan__date"> /mo </span>
                </p>
              </div>
              <div class="plans__body">
                <h3 class="heading heading--features">features</h3>
                <ul class="plans__list">
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#0DE0B1"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-check"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <span class="plans__text">
                      Secure purchase of services
                    </span>
                  </li>
                  <li class="plans__item">
                    <span class="plans__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="#E07B02"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-x"
                      >
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </span>
                    <span class="plans__text"> No Ads in your feeds </span>
                  </li>
                </ul>
                <div class="plans__action">
                  <a href="#" class="btn btn--onboard" name="get started">
                    Get started
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-coming-soon">
      <div class="container">
        <div class="coming-soon">
          <div class="coming-soon__content">
            <h1 class="heading heading--coming-soon">Coming soon</h1>
            <p class="paragraph paragraph--coming-soon">
              We are working to make a better experience for you and your
              customers Lorem, ipsum dolor sit amet consectetur adipisicing
              elit. Nemo perspiciatis architecto odit accusamus hic cumque
              cupiditate quidem, eveniet vero natus ab sapiente molestiae ut
              veniam sequi modi dolor incidunt? Quae?
            </p>
            <a href="#" class="btn btn--more-info" name="more info">
              More info
            </a>
          </div>
          <div class="coming-soon__image-box">
            <img
              src="assets/images/yetti-phone-illustration.png"
              alt="illustration"
              class="coming-soon__image"
            />
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <!-- Desktop View Starts-->
        <div class="footer__wrapper">
          <div class="footer__left">
            <form action="" method="post" class="form" id="letterForm">
              <h1 class="form__header">Subscribe to our Newsletter</h1>
              <?php if(! empty($error)): echo "<li style='background:lightpink;color:#fff;padding:15px;margin-top:5px;text-align:center;list-style:none;font-size:18px'>".$error."</li>"; endif ?>
              <?php if(! empty($success)): echo "<li style='background:lightgreen;color:#fff;padding:15px;margin-top:5px;text-align:center;list-style:none;font-size:18px'>".$success."</li>"; endif ?>
              <div class="form__group">
                <input
                  type="email"
                  class="form__input"
                  placeholder="Enter your Email"
                  name="email"
                />
                <button type="submit" class="form__btn" name="subscribe">Subscribe</button>
              </div>
            </form>
            <div class="footer__logo-box">
              <a href="#" class="footer__logo-link">
                <img
                  src="assets/svgs/yetti-logo-footer.svg"
                  alt="Yetti"
                  class="footer__logo"
                />
              </a>
            </div>
            <div class="footer__contact">
              <div class="footer__box">
                <a
                  href="tel:+2349073767709"
                  class="footer__link"
                  name="contact number"
                >
                  Phone : <span> +2349073767709 </span>
                </a>
              </div>
              <div class="footer__box">
                <a
                  href="mailto:info@yetti.yettiservice.com"
                  class="footer__link"
                  name="contact email"
                >
                  Email : <span> info@yetti.yettiservice.com </span>
                </a>
              </div>
            </div>
          </div>
          <div class="footer__right">
            <h1 class="footer__header">Company</h1>
            <div class="footer-navigation">
              <ul class="footer-navigation__list">
                <li class="footer-navigation__item">
                  <a
                    href="#"
                    class="footer-navigation__link"
                    name="Help center"
                  >
                    Help center
                  </a>
                </li>
                <li class="footer-navigation__item">
                  <a href="#" class="footer-navigation__link" name="About">
                    About
                  </a>
                </li>
                <li class="footer-navigation__item">
                  <a
                    href="#"
                    class="footer-navigation__link"
                    name="Privacy policy"
                  >
                    Privacy policy
                  </a>
                </li>
                <li class="footer-navigation__item">
                  <a href="#" class="footer-navigation__link" name="Contact us">
                    Contact us
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-socials">
              <ul class="footer-socials__list">
                <li class="footer-socials__item">
                  <a href="#" class="footer-socials__link" name="instagram">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-instagram"
                    >
                      <rect
                        x="2"
                        y="2"
                        width="20"
                        height="20"
                        rx="5"
                        ry="5"
                      ></rect>
                      <path
                        d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                      ></path>
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                  </a>
                </li>
                <li class="footer-socials__item">
                  <a href="#" class="footer-socials__link" name="twitter">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-twitter"
                    >
                      <path
                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                      ></path>
                    </svg>
                  </a>
                </li>
                <li class="footer-socials__item">
                  <a href="#" class="footer-socials__link" name="facebook">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-facebook"
                    >
                      <path
                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                      ></path>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Desktop View ends -->

        <!-- Mobile View Starts -->
        <div class="footer__container">
          <form action="" class="form" method="post" id="newsForm">
            <h1 class="form__header">Subscribe to our Newsletter</h1>
            <?php if(! empty($error)): echo "<li style='background:lightpink;color:#fff;padding:15px;margin-top:5px;text-align:center;list-style:none;font-size:18px'>".$error."</li>"; endif ?>
            <?php if(isset($success)): echo "<li style='background:lightgreen;color:#fff;padding:15px;margin-top:5px;text-align:center;list-style:none;font-size:18px'>".$success."</li>"; endif ?>
            <div class="form__group">
              <input
                type="email"
                class="form__input"
                placeholder="Enter your Email"
                name="email"
              />
              <button type="submit" class="form__btn" name="subscribe_button">
                <span class="text"> Subscribe </span>
                <span class="icon">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-send"
                  >
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
                </span>
              </button>
            </div>
          </form>
          <div class="footer__extras">
            <div class="footer__left footer__left--mobile">
              <h1 class="footer__header">Company</h1>
              <div class="footer-navigation">
                <ul class="footer-navigation__list">
                  <li class="footer-navigation__item">
                    <a
                      href="#"
                      class="footer-navigation__link"
                      name="Help center"
                    >
                      Help center
                    </a>
                  </li>
                  <li class="footer-navigation__item">
                    <a href="#" class="footer-navigation__link" name="About">
                      About
                    </a>
                  </li>
                  <li class="footer-navigation__item">
                    <a
                      href="#"
                      class="footer-navigation__link"
                      name="Privacy policy"
                    >
                      Privacy policy
                    </a>
                  </li>
                  <li class="footer-navigation__item">
                    <a
                      href="#"
                      class="footer-navigation__link"
                      name="Contact us"
                    >
                      Contact us
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer__right footer__right--mobile">
              <div class="footer__logo-box">
                <a href="#" class="footer__logo-link">
                  <img
                    src="assets/svgs/yetti-logo-footer.svg"
                    alt="Yetti"
                    class="footer__logo"
                  />
                </a>
              </div>
              <div class="footer__contact">
                <div class="footer__box">
                  <a
                    href="tel:+2349073767709"
                    class="footer__link"
                    name="contact number"
                  >
                    Phone : <span> +2349073767709 </span>
                  </a>
                </div>
                <div class="footer__box">
                  <a
                    href="mailto:info@yetti.yettiservice.com"
                    class="footer__link"
                    name="contact email"
                  >
                    Email : <span> info@yetti.yettiservice.com </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Mobile View Ends -->
        <p class="paragraph paragraph--copyright">
          &copy; Yetti technologies 2022 All rights reserved.
        </p>
      </div>
      <div class="footer__overlay">
        <img
          src="assets/svgs/overlay-illustration.svg"
          alt=""
          class="footer__overlay-image"
        />
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/5711bd297beea77303803f144/ff5546529e08203798e17ace4.js");</script>
    <script src="js/app.js"></script>

    <!-- <script>
      $('#letterForm').submit(function () {
        var formData = new FormData(); alert(formData)
        $.ajax({
          url: 'process.php',
          method: 'post',
          data: formData,
          processData: false,
          dataType: 'JSON',
          success: function (params) {
            
          }
        })
        return false;
      })
      $('#newsForm').submit(function () {
        var formData = new FormData();//alert(formData)
        $.ajax({
          url: 'process.php',
          method: 'post',
          data: formData,
          processData: false,
          dataType: 'JSON',
          success: function (params) {
            
          }
        })
        return false;
      })
    </script> -->
  </body>
</html>
