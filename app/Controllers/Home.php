<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Prepare your slider data
        $sliderData = [
            [
                'image' => 'public/assets/images/slider/slide-1.jpg',
                'subtitle' => 'Get up to <span>60%</span> off',
                'title' => 'Summer Sale',
                'description' => 'Limited items available at this price.',
            ],
            [
                'image' => 'public/assets/images/slider/slide-2.jpg',
                'subtitle' => 'OVER <span>200+</span>',
                'title' => 'GREAT DEALS',
                'description' => 'While they last!',
            ],
            [
                'image' => 'public/assets/images/slider/slide-2.jpg',
                'subtitle' => 'OVER <span>200+</span>',
                'title' => 'GREAT DEALS',
                'description' => 'While they last!',
            ],
            // Add more slides as needed
        ];

         $bannerimg=[
            ['image' => 'public/assets/images/banners/banner-1.jpg',
            'alternative_text' => 'Banner Image 1',
            ],
            ['image' => 'public/assets/images/banners/banner-2.jpg',
            'alternative_text' => 'Banner Image 2',
            ],
            ['image' => 'public/assets/images/banners/banner-3.jpg',
            'alternative_text' => 'Banner Image 3',
            ],

         ];

     $featured_products = [
    [
        'image' => 'public/assets/images/banners/banner-1.jpg',
        'alternative_text' => 'Banner Image 1',
        'product_name' => 'Product Name 1',
        'price' => '$49.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-2.jpg',
        'alternative_text' => 'Banner Image 2',
        'product_name' => 'Product Name 2',
        'price' => '$79.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-3.jpg',
        'alternative_text' => 'Banner Image 3',
        'product_name' => 'Product Name 3',
        'price' => '$29.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-3.jpg',
        'alternative_text' => 'Banner Image 3',
        'product_name' => 'Product Name 3',
        'price' => '$29.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-3.jpg',
        'alternative_text' => 'Banner Image 3',
        'product_name' => 'Product Name 3',
        'price' => '$29.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-3.jpg',
        'alternative_text' => 'Banner Image 3',
        'product_name' => 'Product Name 3',
        'price' => '$29.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-3.jpg',
        'alternative_text' => 'Banner Image 3',
        'product_name' => 'Product Name 3',
        'price' => '$29.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-3.jpg',
        'alternative_text' => 'Banner Image 3',
        'product_name' => 'Product Name 3',
        'price' => '$29.99'
    ],
];
  $new_products = [
    [
        'image' => 'public/assets/images/banners/banner-1.jpg',
        'alternative_text' => 'Banner Image 1',
        'product_name' => 'Product Name 1',
        'price' => '$49.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-2.jpg',
        'alternative_text' => 'Banner Image 2',
        'product_name' => 'Product Name 2',
        'price' => '$79.99'
    ],
    [
        'image' => 'public/assets/images/banners/banner-3.jpg',
        'alternative_text' => 'Banner Image 3',
        'product_name' => 'Product Name 3',
        'price' => '$29.99'
    ],
   
   
];
$porto_info =[
    [
    'icon'=>"icon-star",
    'title'=>"Dedicated Service",
    'description'=>"We are here to help you with any questions or concerns you may have. Our dedicated team is ready to assist you.",
    'link_text'=>"Get in touch",
    'link_url'=>"#",
    ],
    [
    'icon'=>"icon-reply",
    'title'=>"Free Returns",
    'description'=>"Enjoy free shipping on all orders over $50. Shop now and take advantage of this great offer!",
    'link_text'=>"Return Policy",
    'link_url'=>"#",
    ],
    [
    'icon'=>"icon-paper-plane",
    'title'=>"Money Back Guarantee",
    'description'=>"Shop with confidence! We offer a 30-day money back guarantee on all purchases. If you're not satisfied, we'll refund your money.",
    'link_text'=>"Lear More",
    'link_url'=>"#",
    ],
];

        // Correct way to pass data to view
       return view("index_view", [
    'sliderData' => $sliderData,
    'bannerimg' => $bannerimg,
    'featured_products' => $featured_products, // Pass featured products data
    
    'new_products' => $new_products, // Pass new products data
    'porto_info' => $porto_info, // Pass porto info data
    ]);
    }
}