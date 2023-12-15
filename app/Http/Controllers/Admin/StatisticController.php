<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticController extends Controller
{
    public function dataForGraph()
    {
        $ownerId = Auth::user()->id;
        $allApartment = Apartment::where('owner_id',$ownerId)->get();

        $allReviewForApartment=[];
        foreach ($allApartment as $apartment) {
            $voteList=[];
            foreach ($apartment->review as $element) {
                array_push($voteList, $element['vote']);
           }
           array_push($allReviewForApartment, $voteList);
        }
        dd($allReviewForApartment);

        return view('admin.statistics.index', compact('allReviewForApartment'));
    }
}
