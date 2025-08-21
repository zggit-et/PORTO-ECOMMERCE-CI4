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
                'button_text' => 'Shop Now',
                
            ],
            [
                'image' => 'public/assets/images/slider/slide-2.jpg',
                
                'subtitle' => 'OVER <span>200+</span>',
                'title' => 'GREAT DEALS',
                'description' => 'While they last!',
                'button_text' => 'Shop Now',
                
            ],
             [
                'image' => 'public/assets/images/slider/slide-2.jpg',
                
                'subtitle' => 'OVER <span>200+</span>',
                'title' => 'GREAT DEALS',
                'description' => 'While they last!',
                'button_text' => 'Shop Now',
                
            ],
            // Add more slides as needed
        ];

        // Pass data to the view
        $data = [
            'sliderData' => $sliderData,
            'pageTitle' => 'Home Page' // You can pass other data too
        ];

        return view('index_view', $data);
    }
}