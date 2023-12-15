<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviewForHome(String $id){
        $reviews = Review::where('apartment_id',$id)->get();
        return view('admin.reviews.index',compact('reviews'));
    }
}
