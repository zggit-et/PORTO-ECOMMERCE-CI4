<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto/demo-6/category-horizontal-filter2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Feb 2019 14:53:51 GMT -->
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
            <div class="banner banner-cat" style="background-image: url('<?= base_url(); ?>/public/assets/images/banners/banner-top.jpg');">
                <div class="banner-content container">
                    <h2 class="banner-subtitle">check out over <span>200+</span></h2>
                    <h1 class="banner-title">
                        INCREDIBLE deals
                    </h1>
                    <a href="#" class="btn btn-dark">Shop Now</a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner -->

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php
                        "><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Electronics</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Headsets</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container products-body">
                <nav class="toolbox horizontal-filter filter-sorts">
                    <div class="filter-toggle">
                        <span>Filters:</span>
                        <a href=#>&nbsp;</a>
                    </div>

                    <div class="sidebar-overlay"></div>
                    <aside class="toolbox-left sidebar-shop mobile-sidebar">
                        <div class="toolbox-item toolbox-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Size</a>
                            <ul class="sort-list">
                                <li>Extra Large</li>
                                <li>Large</li>
                                <li>Medium</li>
                                <li>Small</li>
                            </ul>
                        </div><!-- End .toolbox-item -->

                        <div class="toolbox-item toolbox-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Color</a>
                            <ul class="sort-list">
                                <li>Black</li>
                                <li>Blue</li>
                                <li>Brown</li>
                                <li>Green</li>
                                <li>Indigo</li>
                                <li>Light Blue</li>
                                <li>Red</li>
                                <li>Yellow</li>
                            </ul>
                        </div><!-- End .toolbox-item -->

                        <div class="toolbox-item toolbox-sort price-sort select-custom">
                            <a class="sort-menu-trigger" href="#">Price</a>
                            <form class="filter-price-form">
                                <div>Price: <span>$55.00</span> — <span>$111.00</span></div>
                                <label>Min price</label>
                                <input class="input-price" name="min_price"/>
                                <label>Max price</label>
                                <input class="input-price" name="max_price"/>
                                <div class="filter-price-action mt-0">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </form>
                        </div><!-- End .toolbox-item -->

                    </aside><!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-sort">
                        <div class="select-custom">
                            <select name="orderby" class="form-control">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .toolbox-item -->

                    <div class="toolbox-item">
                        <div class="toolbox-item toolbox-show show-count">
                            <label>Showing 1–9 of 60 results</label>
                        </div><!-- End .toolbox-item -->

                        <div class="layout-modes">
                            <a href="category.php
                            " class="layout-btn btn-grid active" title="Grid">
                                <i class="icon-mode-grid"></i>
                            </a>
                            <a href="category-list.php
                            " class="layout-btn btn-list" title="List">
                                <i class="icon-mode-list"></i>
                            </a>
                        </div><!-- End .layout-modes -->
                    </div>
                </nav>

                <div class="row row-sm">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-1.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Headphone</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$28.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-2.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                                <span class="product-label label-sale">-20%</span>
                                <span class="product-label label-hot">New</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Computer Mouse</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$60.00</span>
                                    <span class="product-price">$48.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-3.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Laptop</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$850.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-4.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Camera</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-5.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Shoes</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$79.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-6.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                                <span class="product-label label-hot">Hot</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Sunglasses</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$19.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-7.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                                <span class="product-label label-hot">Hot</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Jackets</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-8.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Hat</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-9.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:70%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Pants</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$59.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-10.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Shoes</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$63.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-11.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Necklace</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$13.99</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.php
                                " class="product-image">
                                    <img src="<?= base_url(); ?>/public/assets/images/products/product-12.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.php
                                " class="btn-quickview">Quick View</a>
                                <span class="product-label label-hot">Hot</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.php
                                    ">Socks</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$4.99</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    
                                    <a href="product.php
                                    " class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Showing 1–9 of 60 results</label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->

    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="index.php
                    ">Home</a></li>
                    <li>
                        <a href="category.php
                        ">Categories</a>
                        <ul>
                            <li><a href="category.php
                            ">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.php
                            ">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.php
                            ">Boxed Image Banner</a></li>
                            <li><a href="category.php
                            ">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.php
                            ">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.php
                            ">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.php
                            ">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.php
                            ">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.php
                            ">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category.php
                            ">3 Columns Products</a></li>
                            <li><a href="category-4col.php
                            ">4 Columns Products</a></li>
                            <li><a href="category-5col.php
                            ">5 Columns Products</a></li>
                            <li><a href="category-6col.php
                            ">6 Columns Products</a></li>
                            <li><a href="category-7col.php
                            ">7 Columns Products</a></li>
                            <li><a href="category-8col.php
                            ">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.php
                        ">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.php
                                    ">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.php
                                    ">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.php
                                    ">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.php
                                    ">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.php
                                    ">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.php
                                    ">Sticky Tabs</a></li>
                                    <li><a href="product-simple.php
                                    ">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.php
                                    ">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.php
                                    ">Default Layout</a></li>
                                    <li><a href="product-extended-layout.php
                                    ">Extended Layout</a></li>
                                    <li><a href="product-full-width.php
                                    ">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.php
                                    ">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.php
                                    ">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.php
                                    ">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.php
                            ">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.php
                                    ">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.php
                                    ">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.php
                                    ">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php
                            ">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.php
                            ">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.php
                    ">Blog</a>
                        <ul>
                            <li><a href="single.php
                            ">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php
                    ">Contact Us</a></li>
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

    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
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
    <script src="<?= base_url(); ?>/public/assets/js/nouislider.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= base_url(); ?>/public/assets/js/main.min.js"></script>
</body>

<!-- Mirrored from portotheme.com/php
 /porto/demo-6/category-horizontal-filter2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Feb 2019 14:53:51 GMT -->
</html>