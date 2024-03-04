<?php include('header.php')?>
  <section class="hotel">
    <div class="container">
      <div class="hotel-info">
        <div class="hotel-info__text">
          <div class="hotel-wrapper">
            <div class="stars">
              <img src="img/star.svg" alt="star">
              <img src="img/star.svg" alt="star">
              <img src="img/star.svg" alt="star">
              <img src="img/star.svg" alt="star">
              <img src="img/star.svg" alt="star">
            </div>
            <!-- /.stars -->
            <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
            <span class="offer hotel-info__offer">Flash Offer</span>
          </div>
          <!-- /.hotel-wrapper -->
          <p class="hotel-description hotel-info__description">Half-Board/ All Inclusive + Complimentary Activities + Child Stays Free</p>
        </div>
        <!-- /.hotel-info__text -->
        <div class="rating hotel-info__rating">
          <span class="rating__text">User Ratings</span>
          <span class="rating__counter">4.5/5</span>
        </div>
        <!-- /.hotel-info__right -->
      </div>
      <!-- /.hotel-info -->
      <div class="hotel-grid">
          <!-- Slider main container -->
          <div class="swiper hotel-slider hotel__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__item">
                <img class="swiper-slide__image" src="img/slide.jpg" alt="slide">
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img class="swiper-slide__image" src="img/slide.jpg" alt="slide">
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img class="swiper-slide__image" src="img/slide.jpg" alt="slide">
              </div>
            </div>

            <!-- If we need navigation buttons -->
            <button class="hotel-slider__button hotel-slider__button--prev"></button>
            <button class="hotel-slider__button hotel-slider__button--next"></button>
          </div>
          <!-- /.swiper -->
        <div class="hotel-right">
          <div class="booking">
            <div class="booking__info">
              <div class="booking__price">
                <span class="booking__start">price start as</span>
                <strong class="booking__pricetag">$ 8,500</strong>
                <span class="booking__per-room">per room / night</span>
              </div>
              <!-- /.booking__price -->
              <div class="booking__room">
                <div class="booking__text">
                  <img src="img/user.svg" alt="Icon: user" class="booking__icon">
                  <span class="booking__description">2 x Guests</span>
                </div>
                <!-- /.booking__text -->
                <div class="booking__text">
                  <img src="img/home.svg" alt="Icon: home" class="booking__icon">
                  <span class="booking__description">1 x Room</span>
                </div>
                <!-- /.booking__text -->
              </div>
              <!-- /.booking__room -->
            </div>
            <!-- /.booking__info -->
            <div class="booking__call-center">
              <span class="booking__heading">Quick Booking</span>
              <a class="booking__number" href="tel:12100">
                <img src="img/phone-call.svg" alt="Icon: phone">
                <span class="booking__num">12100</span>
              </a>
            </div>
            <!-- /.booking__call-center -->
            <button data-toggle="modal" class="button booking__button">View Other Options</button>
          </div>
          <!-- /.booking -->
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.6813010694273!2d98.29626658573635!3d7.837835800547265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025650c33dbab%3A0xa67a542329d011e1!2z0J_RhdGD0LrQtdGCLCDQmtCw0YDQvtC9LCDQntGC0LXQu9GMINCl0LjQu9GC0L7QvQ!5e0!3m2!1sru!2sru!4v1709027025861!5m2!1sru!2sru"
              width="100%" height="213" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
          <!-- /.map -->
        </div>
        <!-- /.hotel-right -->
      </div>
      <!-- /.hotel-grid -->
    </div>
    <!-- /.container -->
  </section>
  <section class="newsletter">
    <div class="newsletter-wrapper">
      <h2 class="newsletter-title newsletter__title">
        subscribe to our
        <span class="newsletter-title__strong">Newsletter</span>
      </h2>
      <form action="#" class="subscribe newsletter__subscribe">
        <input 
          type="text" 
          class="subscribe__input" 
          placeholder="Your email address"
        >
        <button class="subscribe__button">
          Send
        </button>
      </form>
    </div>
    <!-- /.newsletter-wrapper -->
  </section>
  <section class="reviews">
    <div class="container">
      <h2 class="reviews__title">What people think about us</h2>
      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img 
                  src="/img/reviews-avatar.jpg" 
                  alt="Photo: Megan Fox" 
                  class="reviews-slider__avatar"
                >
                <h3 class="reviews-slider__username">Megan Fox</h3>
                <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                <div class="reviews-slider__rating">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                </div>
                <!-- /.reviews-slider__rating -->
              </div>
              <!-- /.reviews-slider__profile -->
              <p class="reviews-slider__text">
                It was very nice hotel with cleanliness. Staff behavior was good and polite. They welcome us very well. Issue was only that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of gallery which were giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is not good as per atmosphere, it is very nearby most of the popular places but self location in a narrow street is not good. Overall it was a good experience and could recommend. 
              </p>
            </div>
            <!-- /.reviews-slider__item -->
          </div>
          <!-- /.swiper-slide -->
          <div class="swiper-slide">
            <div class="reviews-slider__item">
              <div class="reviews-slider__profile">
                <img src="/img/reviews-avatar-2.jpg" alt="Photo: Lora Krow" class="reviews-slider__avatar">
                <h3 class="reviews-slider__username">Lora Krow</h3>
                <span class="reviews-slider__date">Stayed 20 Dec, 2021</span>
                <div class="reviews-slider__rating">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                  <img src="img/star.svg" alt="star">
                </div>
                <!-- /.reviews-slider__rating -->
              </div>
              <!-- /.reviews-slider__profile -->
              <p class="reviews-slider__text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque consequatur quisquam voluptas consequuntur deleniti! Quibusdam reprehenderit dolore ullam praesentium mollitia in eum soluta, pariatur deleniti. Optio, ea. Perspiciatis, a optio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum deserunt itaque doloribus, tempora fuga, quis nemo maxime dolorem commodi dicta odio eum? Eos nulla dolor porro tempore pariatur quasi ducimus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas placeat nulla quam labore distinctio voluptatum, odio qui quod blanditiis explicabo, aliquam dicta ullam maiores quia dolorem tenetur a vitae amet?
              </p>
            </div>
            <!-- /.reviews-slider__item -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!-- /.swiper-wrapper -->

        <button class="reviews-slider__button reviews-slider__button--prev"></button>
        <button class="reviews-slider__button reviews-slider__button--next"></button>
      </div>
      <!-- /.reviews-slider -->
    </div>
    <!-- /.container -->
  </section>
  <section class="activities">
    <div class="container">
      <h2 class="activities__title">Other Activities</h2>
      <div class="activities-wrapper">
        <div class="card activities__card">
          <img 
            src="img/activity-1.jpg" 
            alt="The curious corner of chamarel" 
            class="card__image"
          >
          <h3 class="card__title">The curious corner
          of chamarel</h3>
          <button class="card__button">Book Now</button>
        </div>
        <!-- /.card -->
        <div class="card activities__card">
          <img 
            src="img/activity-2.jpg" 
            alt="Gymkhana club golf course" 
            class="card__image"
          >
          <h3 class="card__title">Gymkhana club golf
          course</h3>
          <button class="card__button">Book Now</button>
        </div>
        <!-- /.card -->
        <div class="card activities__card">
          <img 
            src="img/activity-3.jpg" 
            alt="Tamarind falls hiking trip - full day" 
            class="card__image"
          >
          <h3 class="card__title">Tamarind falls hiking
          trip - full day</h3>
          <button class="card__button">Book Now</button>
        </div>
        <!-- /.card -->
        <div class="card activities__card">
          <img 
            src="img/activity-4.jpg" 
            alt="The blue marine discovery quest" 
            class="card__image"
          >
          <h3 class="card__title">The blue marine discovery
          quest</h3>
          <button class="card__button">Book Now</button>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.activities-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <div class="modal">
    <div class="modal__overlay"></div>
    <!-- /.modal__overlay -->
    <div class="modal__dialog">
      <a href="#" class="modal__close">
        <img src="img/close.svg" alt="Image: Close">
      </a>
      <h3 class="modal__title">Booking</h3>
      <form action="send.php" method="POST" class="modal__form">
        <input 
          type="text" 
          class="input modal__input" 
          placeholder="Your Full Name*"
          name="name"
        >
        <input 
          type="text" 
          class="input modal__input" 
          placeholder="Phone Number*"
          name="phone"
        >
        <textarea 
          class="message modal__message" 
          placeholder="Message"
          name="message"
        ></textarea>
        <button class="button modal__button" type="submit">Send</button>
        <span class="modal__info">* Required Fields</span>
      </form>
    </div>
    <!-- /.modal__dialog -->
  </div>
  <!-- /.modal -->
  <?php include('footer.php')?>