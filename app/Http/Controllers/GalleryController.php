<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $first_edition = [
            "mun1.jpeg", "mun2.jpeg", "mun3.jpeg", "mun4.jpeg", 
            "mun5.jpeg", "mun6.jpeg", "mun7.jpeg", "mun8.jpeg", 
            "mun9.jpeg", "mun10.jpeg", "mun11.jpeg", "mun12.jpeg", 
            "mun13.jpeg"
        ];
        
        $munners = [
            "cm1.jpg", "cm2.jpg", "cm3.jpg", "cm4.jpg", "cm5.jpg", "cm6.jpg", "cm7.jpeg"
        ];
        
        $last_year = [
            "al1.jpg", "al2.jpg", "al3.jpg", "car1.jpeg", "car2.jpeg", 
            "car3.jpeg", "cas1.jpg", "cas2.jpg", "cas3.jpeg", "new1.jpg",
            "new2.jpg", "new3.jpg", "new4.jpg", "nhs 4.jpeg", "nhs 5.jpeg", 
            "nhs1.png", "nhs2.jpeg", "nhs3.png", "rai1.jpeg", "rai2.jpeg", "rdm1.jpg"
        ];
    
        return view('gallery', compact('first_edition', 'munners', 'last_year'));
    }
    
}
