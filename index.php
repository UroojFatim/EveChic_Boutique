<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>EveChic Boutique</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <style>
        /* Styling for the slides */
        .slides {
            position: relative;
            height: 200px;
            display: flex;
        }

        /* Styling for each slide */
        .slide {
            flex: 1 0 100%;
            display: none;
            justify-content: center;
            align-items: center;
            height: 100%;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        /* Animation keyframes */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Styling for the navigation bullets */
        .bullets {
            margin-top: 20px;
        }

        .bullet {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: #333;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }
    </style>
</head>


<body>


    <!-- ##### header ##### -->
    <?php include 'header.php' ?>


    <!-- ##### Right Side Cart Area ##### -->
    <?php include 'right_side_cart.php' ?>



    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="shop.php" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->



    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Formal Wear Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                        <div class="catagory-content">
                            <a href="formal.php">Formal Wear</a>
                        </div>
                    </div>
                </div>
                <!-- Casual Wear Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="casual.php">Casual Wear</a>
                        </div>
                    </div>
                </div>
                <!-- Abaya Wear Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="abaya.php">Abaya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->



    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-end justify-content-start" style="position: relative;">
                            <div class="cta--text" style="position: absolute; bottom: 10%; left: 8%;">
                                <a href="shop.php" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->



    <!-- Images from Rafia / luxuary brand -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-2.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.php">
                                    <h6>EMBROIDERY VISCOSE</h6>
                                </a>
                                <p class="product-price">Rs.10,350.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-3.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-4.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.php">
                                    <h6>WOMEN'S-3 PIECE EMBROIDERY VISCOSE</h6>
                                </a>
                                <p class="product-price">Rs.12,591.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-5.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-6.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.php">
                                    <h6>3 PIECE LAWN CHIKAN KARI</h6>
                                </a>
                                <p class="product-price"><span class="old-price">Rs.11,500.00</span> Rs.10,350.00 </p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="img/product-img/product-7.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="img/product-img/product-8.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>New</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.php">
                                    <h6>WOMEN'S-3 PIECE FANCY JACQUARD</h6>
                                </a>
                                <p class="product-price">Rs.10,791.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->



    <!-- ##### Slider Start ##### -->
    <hr>
    <div class="container" style="margin-top: 4%; margin-bottom: 4%;  width: 80%; text-align: center; overflow: hidden;">
        <h3>WHAT OUR CUSTOMERS SAY</h3>
        <div class="slides">
            <div class="slide" style="display: flex;">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, magni. Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Rerum harum perferendis inventore et, eos eveniet deserunt dolore
                    voluptatem consectetur labore nulla quia quae fuga accusantium error. Dolorum laboriosam eos nihil
                    possimus numquam accusantium libero?</p>
            </div>
            <div class="slide">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dolor ipsum delectus earum dignissimos
                    laboriosam nesciunt a, sint pariatur consequuntur perspiciatis odio saepe voluptate aperiam autem
                    esse? Odit dolor libero eaque perferendis aliquam obcaecati!</p>
            </div>
            <div class="slide">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quod ex rem aliquam praesentium
                    saepe! Reprehenderit facilis consequatur eum voluptates?</p>
            </div>
        </div>
        <div class="bullets">
            <span class="bullet" onclick="currentSlide(0)"></span>
            <span class="bullet" onclick="currentSlide(1)"></span>
            <span class="bullet" onclick="currentSlide(2)"></span>
        </div>
    </div>
    <hr>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            const slides = document.querySelectorAll('.slide');
            const bullets = document.querySelectorAll('.bullet');

            // Hide all slides
            slides.forEach(slide => slide.style.display = 'none');

            // Increment slideIndex and show next slide
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = 'flex';
            setTimeout(showSlides, 2000); // Change slide every 2 seconds
        }

        function currentSlide(index) {
            slideIndex = index;
            showSlides();
        }
    </script>
    <!-- ##### Slider End ##### -->



    <!-- ##### Breadcumb Area Start ##### -->
    <div style="background-image: url('img/bg-img/bg-10.jpg'); height: 100vh; background-size: cover; position: relative;">
    </div>
    <!-- ##### Breadcumb Area End ##### -->



    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand1.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand2.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand3.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand4.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand5.png" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand6.png" alt="">
        </div>
    </div>
    <!-- ##### Brands Area End ##### -->

    <?php include 'footer.php' ?>


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>