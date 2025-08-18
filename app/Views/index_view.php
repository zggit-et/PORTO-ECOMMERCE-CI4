<?= $this->extend('Layouts/base'); ?>
<?= $this->section('content'); ?>

        
    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from portotheme.com/html/porto/demo-6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Feb 2019 14:52:35 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Porto - Bootstrap eCommerce Template</title>

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Bootstrap eCommerce Template">
        <meta name="author" content="SW-THEMES">
            
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/public/assets/images/icons/favicon.ico">

        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/bootstrap.min.css">

        <!-- Main CSS File -->
        <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/style.min.css">
    </head>
    <body>
        <div class="page-wrapper">


            <main class="main">
                <div class="info-boxes-container">
                    <div class="container">
                        <div class="info-box">
                            <i class="icon-shipping"></i>

                            <div class="info-box-content">
                                <h4>FREE SHIPPING & RETURN</h4>
                                <p>Free shipping on all orders over $99.</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->


                        <div class="info-box">
                            <i class="icon-us-dollar"></i>

                            <div class="info-box-content">
                                <h4>MONEY BACK GUARANTEE</h4>
                                <p>100% money back guarantee</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->

                        <div class="info-box">
                            <i class="icon-support"></i>

                            <div class="info-box-content">
                                <h4>ONLINE SUPPORT 24/7</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div><!-- End .info-box-content -->
                        </div><!-- End .info-box -->
                    </div><!-- End .container -->
                </div><!-- End .info-boxes-container -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="home-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">
                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="<?= base_url(); ?>/public/assets/images/slider/slide-1.jpg"></div>
                                    <div class="home-slide-content text-white">
                                        <h3>Get up to <span>60%</span> off</h3>
                                        <h1>Summer Sale</h1>
                                        <p>Limited items available at this price.</p>
                                        <a href="<?= base_url('category') ?>" class="btn btn-dark">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->

                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="<?= base_url(); ?>/public/assets/images/slider/slide-2.jpg"></div>
                                    <div class="home-slide-content">
                                        <h3>OVER <span>200+</span></h3>
                                        <h1>GREAT DEALS</h1>
                                        <p>While they last!</p>
                                        <a href="<?= base_url('category') ?>" class="btn btn-dark">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->

                                <div class="home-slide">
                                    <div class="owl-lazy slide-bg" data-src="<?= base_url(); ?>/public/assets/images/slider/slide-3.jpg"></div>
                                    <div class="home-slide-content">
                                        <h3>up to <span>40%</span> off</h3>
                                        <h1>NEW ARRIVALS</h1>
                                        <p>Starting at $9</p>
                                        <a href="<?= base_url('category') ?>" class="btn btn-dark">Shop Now</a>
                                    </div><!-- End .home-slide-content -->
                                </div><!-- End .home-slide -->
                            </div><!-- End .home-slider -->

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="<?= base_url(); ?>/public/assets/images/banners/banner-1.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-md-4">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="<?= base_url(); ?>/public/assets/images/banners/banner-2.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-md-4">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="<?= base_url(); ?>/public/assets/images/banners/banner-3.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->

                            <div class="mb-3"></div><!-- margin -->

                            <h2 class="carousel-title">Featured Products</h2>

                            <div class="home-featured-products owl-carousel owl-theme owl-dots-top">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-1.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Wireless Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$28.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>

                                            <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-2.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Bluetooth Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$28.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>

                                            <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-3.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">MSK02 Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$28.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>

                                            <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-4.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Noise CT</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$28.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>

                                            <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-5.jpg" alt="product">
                                        </a>
                                        <a href="ajax/product-quick-view.php" class="btn-quickview">Quick View</a>
                                    </figure>
                                    <div class="product-details">
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <h2 class="product-title">
                                            <a href="product.php">Stereo Headset</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="product-price">$28.00</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a>

                                            <a href="product.php" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>

                                            <a href="#" class="paction add-compare" title="Add to Compare">
                                                <span>Add to Compare</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .product -->
                            </div><!-- End .featured-proucts -->

                            <div class="mb-6"></div><!-- margin -->
                            
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="product-column">
                                        <h3 class="title">New</h3>

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-3.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Silver Porto Headset</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$45.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-4.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Headphone Black</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="old-price">$60.00</span>
                                                    <span class="product-price">$45.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/small/product-1.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Computer Mouse</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$50.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-6 col-md-4">
                                    <div class="product-column">
                                        <h3 class="title">Hot</h3>

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-1.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Porto Evolution Headset</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$13.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-2.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Audio Technicca</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="old-price">$42.00</span>
                                                    <span class="product-price">$27.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-5.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Senheisser</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$35.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-6 col-md-4">
                                    <div class="product-column">
                                        <h3 class="title">Sale</h3>

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-4.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Phillips</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:20%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$13.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/small/product-1.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Computer Mouse</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="old-price">$42.00</span>
                                                    <span class="product-price">$27.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->

                                        <div class="product product-sm">
                                            <figure class="product-image-container">
                                                <a href="product.php" class="product-image">
                                                    <img src="<?= base_url(); ?>/public/assets/images/products/home-featured-3.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h2 class="product-title">
                                                    <a href="product.php">Skullcanddy</a>
                                                </h2>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$35.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div><!-- End .product -->
                                    </div><!-- End .product-column -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->

                            <div class="mb-3"></div><!-- margin -->

                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="feature-box feature-box-simple text-center">
                                        <i class="icon-star"></i>

                                        <div class="feature-box-content">
                                            <h3>Dedicated Service</h3>
                                            <p>Consult our specialists for help with an order, customization, or design advice</p>
                                            <a href="#" class="btn btn-outline-dark">Get in touch</a>
                                        </div><!-- End .feature-box-content -->
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-md-4 -->
                                
                                <div class="col-sm-6 col-md-4">
                                    <div class="feature-box feature-box-simple text-center">
                                        <i class="icon-reply"></i>

                                        <div class="feature-box-content">
                                            <h3>Free Returns</h3>
                                            <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                                            <a href="#" class="btn btn-outline-dark">Return Policy</a>
                                        </div><!-- End .feature-box-content -->
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-sm-6 col-md-4">
                                    <div class="feature-box feature-box-simple text-center">
                                        <i class="icon-paper-plane"></i>

                                        <div class="feature-box-content">
                                            <h3>International Shipping</h3>
                                            <p>Currently over 50 countries qualify for express international shipping.</p>
                                            <a href="#" class="btn btn-outline-dark">Lear More</a>
                                        </div><!-- End .feature-box-content -->
                                    </div><!-- End .feature-box -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-9 -->

                        <aside class="sidebar-home col-lg-3 order-lg-first">
                            <div class="side-menu-container">
                                <h2>CATEGORIES</h2>

                                <nav class="side-nav">
                                    <ul class="menu menu-vertical sf-arrows">
                                        <li class="active"><a href="index.php"><i class="icon-home"></i>Home</a></li>
                                        <li>
                                            <a href="<?= base_url('category') ?>" class="sf-with-ul"><i class="icon-briefcase"></i>
                                            Categories</a>
                                            <div class="megamenu megamenu-fixed-width">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="menu-title">
                                                                    <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="<?= base_url('category') ?>">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Boxed Slider Banner</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Boxed Image Banner</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Left Sidebar</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Right Sidebar</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Product Flex Grid</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Horizontal Filter1</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Horizontal Filter2</a></li>
                                                                </ul>
                                                            </div><!-- End .col-lg-6 -->
                                                            <div class="col-lg-6">
                                                                <div class="menu-title">
                                                                    <a href="#">Variations 2</a>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="#">Product List Item Types</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">Ajax Infinite Scroll</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">3 Columns Products</a></li>
                                                                    <li><a href="<?= base_url('category') ?>"4 Columns Products <span class="tip tip-new">New</span></a></li>
                                                                    <li><a href="<?= base_url('category') ?>">5 Columns Products</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">6 Columns Products</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">7 Columns Products</a></li>
                                                                    <li><a href="<?= base_url('category') ?>">8 Columns Products</a></li>
                                                                </ul>
                                                            </div><!-- End .col-lg-6 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .col-lg-8 -->
                                                    <div class="col-lg-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="<?= base_url(); ?>/public/assets/images/menu-banner-2.jpg" alt="Menu banner">
                                                            </a>
                                                        </div><!-- End .banner -->
                                                    </div><!-- End .col-lg-4 -->
                                                </div>
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li class="megamenu-container">
                                            <a href="product.php" class="sf-with-ul"><i class="icon-video"></i>Products</a>
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="menu-title">
                                                                    <a href="#">Variations</a>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="product.php">Horizontal Thumbnails</a></li>
                                                                    <li><a href="product-full-width.php">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                                    <li><a href="product.php">Inner Zoom</a></li>
                                                                    <li><a href="product-addcart-sticky.php">Addtocart Sticky</a></li>
                                                                    <li><a href="product-sidebar-left.php">Accordion Tabs</a></li>
                                                                </ul>
                                                            </div><!-- End .col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="menu-title">
                                                                    <a href="#">Variations</a>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="product-sticky-tab.php">Sticky Tabs</a></li>
                                                                    <li><a href="product-simple.php">Simple Product</a></li>
                                                                    <li><a href="product-sidebar-left.php">With Left Sidebar</a></li>
                                                                </ul>
                                                            </div><!-- End .col-lg-4 -->
                                                            <div class="col-lg-4">
                                                                <div class="menu-title">
                                                                    <a href="#">Product Layout Types</a>
                                                                </div>
                                                                <ul>
                                                                    <li><a href="product.php">Default Layout</a></li>
                                                                    <li><a href="product-extended-layout.php">Extended Layout</a></li>
                                                                    <li><a href="product-full-width.php">Full Width Layout</a></li>
                                                                    <li><a href="product-grid-layout.php">Grid Images Layout</a></li>
                                                                    <li><a href="product-sticky-both.php">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                                    <li><a href="product-sticky-info.php">Sticky Right Side Info</a></li>
                                                                </ul>
                                                            </div><!-- End .col-lg-4 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .col-lg-8 -->
                                                    <div class="col-lg-4">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="<?= base_url(); ?>/public/assets/images/menu-banner.jpg" alt="Menu banner" class="product-promo">
                                                            </a>
                                                        </div><!-- End .banner -->
                                                    </div><!-- End .col-lg-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li>
                                            <a href="#" class="sf-with-ul"><i class="icon-docs-inv"></i>Pages</a>

                                            <ul>
                                                <li><a href="cart.php">Shopping Cart</a></li>
                                                <li><a href="#">Checkout</a>
                                                    <ul>
                                                        <li><a href="checkout-shipping.php">Checkout Shipping</a></li>
                                                        <li><a href="checkout-shipping-2.php">Checkout Shipping 2</a></li>
                                                        <li><a href="checkout-review.php">Checkout Review</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Dashboard</a>
                                                    <ul>
                                                        <li><a href="dashboard.php">Dashboard</a></li>
                                                        <li><a href="my-account.php">My Account</a></li>
                                                    </ul>
                                                </li>
                                                
                                                <li> <a href="<?= base_url('about/') ?>">About Us</a></li>

                                                <li><a href="<?= base_url() ?>/blog/index">Blog</a>
                                                    <ul>
                                                        <li><a href="<?= base_url(); ?>/blog/index">Blog</a></li>
                                                        <li><a href="single.php">Blog Post</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.php">Contact Us</a></li>
                                                <li><a href="#" class="login-link">Login</a></li>
                                                <li><a href="forgot-password.php">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="sf-with-ul"><i class="icon-sliders"></i>Features</a>
                                            <ul>
                                                <li><a href="#">Header Types</a></li>
                                                <li><a href="#">Footer Types</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="icon-cat-gift"></i>Special Offer!</a></li>
                                        <li><a href="#"><i class="icon-star-empty"></i>Buy Porto!</a></li>
                                    </ul>
                                </nav>
                            </div><!-- End .side-menu-container -->
                            <div class="widget widget-banners">
                                <div class="widget-banners-slider owl-carousel owl-theme">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-sidebar.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->

                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-sidebar-2.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .banner-slider -->
                            </div><!-- End .widget -->

                            <div class="widget widget-newsletters">
                                <h3 class="widget-title">Newsletter</h3>
                                <p>Get all the latest information on Events, Sales and Offers. </p>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="wemail">
                                        <label for="wemail"><i class="icon-envolope"></i>Email Address</label>
                                    </div><!-- Endd .form-group -->
                                    <input type="submit" class="btn btn-block" value="Subscribe Now">
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-testimonials">
                                <div class="widget-testimonials-slider owl-carousel owl-theme">
                                    <div class="testimonial">
                                        <div class="testimonial-owner">
                                            <figure>
                                                <img src="assets/images/clients/client1.png" alt="client">
                                            </figure>

                                            <div>
                                                <h4 class="testimonial-title">john Smith</h4>
                                                <span>CEO &amp; Founder</span>
                                            </div>
                                        </div><!-- End .testimonial-owner -->

                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                                        </blockquote>
                                    </div><!-- End .testimonial -->

                                    <div class="testimonial">
                                        <div class="testimonial-owner">
                                            <figure>
                                                <img src="assets/images/clients/client2.png" alt="client">
                                            </figure>

                                            <div>
                                                <h4 class="testimonial-title">Dae Smith</h4>
                                                <span>Co-founder</span>
                                            </div>
                                        </div><!-- End .testimonial-owner -->

                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi.</p>
                                        </blockquote>
                                    </div><!-- End .testimonial -->
                                </div><!-- End .testimonials-slider -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <div class="widget-posts-slider owl-carousel owl-theme">
                                    <div class="post">
                                        <span class="post-date">01- Jun -2018</span>
                                        <h4 class="post-title"><a href="#">Fashion News</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
                                    </div><!-- End .post -->

                                    <div class="post">
                                        <span class="post-date">22- May -2018</span>
                                        <h4 class="post-title"><a href="#">Shopping News</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non plasasyi. </p>
                                    </div><!-- End .post -->

                                    <div class="post">
                                        <span class="post-date">13- May -2018</span>
                                        <h4 class="post-title"><a href="#">Fashion News</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat. </p>
                                    </div><!-- End .post -->
                                </div><!-- End .posts-slider -->
                            </div><!-- End .widget -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb-4"></div><!-- margin -->
            </main><!-- End .main -->

            
        </div><!-- End .page-wrapper -->

        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

        <div class="mobile-menu-container">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li>
                            <a href="<?= base_url('category') ?>">Categories</a>
                            <ul>
                                <li><a href="<?= base_url('category') ?>"Full Width Banner</a></li>
                                <li><a href="<?= base_url('category') ?>">Boxed Slider Banner</a></li>
                                <li><a href="<?= base_url('category') ?>">Boxed Image Banner</a></li>
                                <li><a href="<?= base_url('category') ?>">Left Sidebar</a></li>
                                <li><a href="<?= base_url('category') ?>">Right Sidebar</a></li>
                                <li><a href="<?= base_url('category') ?>">Product Flex Grid</a></li>
                                <li><a href="<?= base_url('category') ?>">Horizontal Filter 1</a></li>
                                <li><a href="<?= base_url('category') ?>">Horizontal Filter 2</a></li>
                                <li><a href="#">Product List Item Types</a></li>
                                <li><a href="<?= base_url('category') ?>">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                                <li><a href="<?= base_url('category') ?>">3 Columns Products</a></li>
                                <li><a href="<?= base_url('category') ?>">4 Columns Products</a></li>
                                <li><a href="<?= base_url('category') ?>">5 Columns Products</a></li>
                                <li><a href="<?= base_url('category') ?>">6 Columns Products</a></li>
                                <li><a href="<?= base_url('category') ?>">7 Columns Products</a></li>
                                <li><a href="<?= base_url('category') ?>">8 Columns Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.php">Products</a>
                            <ul>
                                <li>
                                    <a href="#">Variations</a>
                                    <ul>
                                        <li><a href="product.php">Horizontal Thumbnails</a></li>
                                        <li><a href="product-full-width.php">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                        <li><a href="product.php">Inner Zoom</a></li>
                                        <li><a href="product-addcart-sticky.php">Addtocart Sticky</a></li>
                                        <li><a href="product-sidebar-left.php">Accordion Tabs</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Variations</a>
                                    <ul>
                                        <li><a href="product-sticky-tab.php">Sticky Tabs</a></li>
                                        <li><a href="product-simple.php">Simple Product</a></li>
                                        <li><a href="product-sidebar-left.php">With Left Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layout Types</a>
                                    <ul>
                                        <li><a href="product.php">Default Layout</a></li>
                                        <li><a href="product-extended-layout.php">Extended Layout</a></li>
                                        <li><a href="product-full-width.php">Full Width Layout</a></li>
                                        <li><a href="product-grid-layout.php">Grid Images Layout</a></li>
                                        <li><a href="product-sticky-both.php">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                        <li><a href="product-sticky-info.php">Sticky Right Side Info</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                            <ul>
                                <li><a href="cart.php">Shopping Cart</a></li>
                                <li>
                                    <a href="#">Checkout</a>
                                    <ul>
                                        <li><a href="checkout-shipping.php">Checkout Shipping</a></li>
                                        <li><a href="checkout-shipping-2.php">Checkout Shipping 2</a></li>
                                        <li><a href="checkout-review.php">Checkout Review</a></li>
                                    </ul>
                                </li>
                                <li> <a href="<?= base_url('about/') ?>">About</a></li>
                                <li><a href="#" class="login-link">Login</a></li>
                                <li><a href="forgot-password.php">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url(); ?>/blog/index">Blog</a>
                            <ul>
                                <li><a href="single.php">Blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                        <li><a href="#">Buy Porto!</a></li>
                    </ul>
                </nav><!-- End .mobile-nav -->

                <div class="social-icons">
                    <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                    <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->

        <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(<?= base_url(); ?>/public/assets/images/newsletter_popup_bg.jpg)">
            <div class="newsletter-popup-content">
                <img src="<?= base_url(); ?>/public/assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
                <h2>BE THE FIRST TO KNOW</h2>
                <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
                <form action="#">
                    <div class="input-group">
                        <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                        <input type="submit" class="btn" value="Go!">
                    </div><!-- End .from-group -->
                </form>
                <div class="newsletter-subscribe">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1">
                            Don't show this popup again
                        </label>
                    </div>
                </div>
            </div><!-- End .newsletter-popup-content -->
        </div><!-- End .newsletter-popup -->

        <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

        <!-- Plugins JS File -->
        <script src="<?= base_url(); ?>/public/assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/public/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url(); ?>/public/assets/js/plugins.min.js"></script>

        <!-- Main JS File -->
        <script src="<?= base_url(); ?>/public/assets/js/main.min.js"></script>
    </body>
    </html>
<?= $this->endSection(); ?>

