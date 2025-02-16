<!-- Hero Section -->
<section>
    <div class="container hero-section">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center order-lg-2">
                <img class="hero-image" src="./images/filipino-food.png" alt="tropical-treats-food">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center order-lg-1">
                <div>
                    <p class="hero-title">Taste of Paradise</p>
                    <p class="hero-texas">In West Texas</p>
                    <p class="hero-desc">Experience the vibrant taste of the Philippines with <span
                            class="treats">Tropical
                            Treats</span>. From savory
                        classics like adobo to
                        sweet delights like halo-halo, our dishes celebrate Filipino tradition, bold spices, and
                        tropical
                        flavors. Savor the warmth of Filipino hospitality in every bite!</p>
                    <a href="">
                        <div class="btn-best-seller">
                            Order Now
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="title-2">
            Best Selling <span class="green-span">Dishes</span>
        </h2>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <div class="swiper-card__img-div">
                            <img class="swiper-card__img" src="./images/chicken.png" alt="chicken">
                        </div>
                        <div class="swiper-card__content-div">
                            <p class="swiper-card__title">Crispy Pata</p>
                            <p class="swiper-card__description">Pepper Mayo Cruncher + Fries + Coleslaw + 1 Pc
                                Chicken + Drink</p>
                            <p class="swiper-card__price">$10.00</p>
                        </div>

                        <div class="swiper-card__overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <div class="swiper-card__img-div">
                            <img class="swiper-card__img" src="./images/chicken.png" alt="chicken">
                        </div>
                        <div class="swiper-card__content-div">
                            <p class="swiper-card__title">Crispy Pata</p>
                            <p class="swiper-card__description">Pepper Mayo Cruncher + Fries + Coleslaw + 1 Pc
                                Chicken + Drink</p>
                            <p class="swiper-card__price">$10.00</p>
                        </div>

                        <div class="swiper-card__overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <div class="swiper-card__img-div">
                            <img class="swiper-card__img" src="./images/chicken.png" alt="chicken">
                        </div>
                        <div class="swiper-card__content-div">
                            <p class="swiper-card__title">Crispy Pata</p>
                            <p class="swiper-card__description">Pepper Mayo Cruncher + Fries + Coleslaw + 1 Pc
                                Chicken + Drink</p>
                            <p class="swiper-card__price">$10.00</p>
                        </div>

                        <div class="swiper-card__overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-card">
                        <div class="swiper-card__img-div">
                            <img class="swiper-card__img" src="./images/chicken.png" alt="chicken">
                        </div>
                        <div class="swiper-card__content-div">
                            <p class="swiper-card__title">Crispy Pata</p>
                            <p class="swiper-card__description">Pepper Mayo Cruncher + Fries + Coleslaw + 1 Pc
                                Chicken + Drink</p>
                            <p class="swiper-card__price">$10.00</p>
                        </div>

                        <div class="swiper-card__overlay"></div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <div class="swiper-navigation-container">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next">
                </div>
            </div>

        </div>
</section>

<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<section class="section customer-say-section">
    <div class="container">
        <h2 class="title-2 customer-heading">
            Customers <span class="green-span">Say</span>
        </h2>

        <!-- Slider main container -->
        <div class="swiper swiper-customers-say">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-slide-customer">
                    <div class="swiper-card-2">
                        <p class="swiper-card-2__review">
                            “YumYum truly lives up to its name! Every bite is an explosion of flavor. Highly
                            recommend the pizza! Fresh ingredients, delicious toppings, and fast service in a long
                            time!”
                        </p>
                        <div class="swiper-card-2__customer">
                            <div class="swiper-card-2__details">
                                <p class="swiper-card-2__star-rating">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                </p>
                                <p class="swiper-card-2__customer-title">Perfect Space</p>
                                <p class="swiper-card-2__customer-name">Jon Snow</p>
                                <p class="swiper-card-2__customer-tag">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    Verified Buyer
                                </p>
                            </div>
                            <div class="swiper-card-2__customer-image">
                                <img src="./images/customer.png" alt="customer">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-customer">
                    <div class="swiper-card-2">
                        <p class="swiper-card-2__review">
                            “YumYum truly lives up to its name! Every bite is an explosion of flavor. Highly
                            recommend the pizza! Fresh ingredients, delicious toppings, and fast service in a long
                            time!”
                        </p>
                        <div class="swiper-card-2__customer">
                            <div class="swiper-card-2__details">
                                <p class="swiper-card-2__star-rating">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                </p>
                                <p class="swiper-card-2__customer-title">Perfect Space</p>
                                <p class="swiper-card-2__customer-name">Jon Snow</p>
                                <p class="swiper-card-2__customer-tag">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    Verified Buyer
                                </p>
                            </div>
                            <div class="swiper-card-2__customer-image">
                                <img src="./images/customer.png" alt="customer">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-customer">
                    <div class="swiper-card-2">
                        <p class="swiper-card-2__review">
                            “YumYum truly lives up to its name! Every bite is an explosion of flavor. Highly
                            recommend the pizza! Fresh ingredients, delicious toppings, and fast service in a long
                            time!”
                        </p>
                        <div class="swiper-card-2__customer">
                            <div class="swiper-card-2__details">
                                <p class="swiper-card-2__star-rating">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                </p>
                                <p class="swiper-card-2__customer-title">Perfect Space</p>
                                <p class="swiper-card-2__customer-name">Jon Snow</p>
                                <p class="swiper-card-2__customer-tag">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    Verified Buyer
                                </p>
                            </div>
                            <div class="swiper-card-2__customer-image">
                                <img src="./images/customer.png" alt="customer">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-customer">
                    <div class="swiper-card-2">
                        <p class="swiper-card-2__review">
                            “YumYum truly lives up to its name! Every bite is an explosion of flavor. Highly
                            recommend the pizza! Fresh ingredients, delicious toppings, and fast service in a long
                            time!”
                        </p>
                        <div class="swiper-card-2__customer">
                            <div class="swiper-card-2__details">
                                <p class="swiper-card-2__star-rating">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                    <img src="./images/star.svg" alt="">
                                </p>
                                <p class="swiper-card-2__customer-title">Perfect Space</p>
                                <p class="swiper-card-2__customer-name">Jon Snow</p>
                                <p class="swiper-card-2__customer-tag">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    Verified Buyer
                                </p>
                            </div>
                            <div class="swiper-card-2__customer-image">
                                <img src="./images/customer.png" alt="customer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-navigation-container">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next">
                </div>
            </div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar swiper-scrollbar-customer"></div>

        </div>
        <div class="customer-say-bg">
            <img class="customer-say-bg-img" src="./images/bg-leaves.png" alt="leaves">
        </div>

</section>

<script>
    const swiper2 = new Swiper('.swiper-customers-say', {
        slidesPerView: 1,
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: window.innerWidth > 768,
        },
        loop: true,
    });
</script>