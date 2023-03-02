<?php

namespace App\Http\Controllers;

use App\Models\TopRating_Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TopRatingReviewController extends Controller
{
    public function store(Request $request ){
        
        $validator = Validator::make($request->all(), [
            'product_id'    => 'required',
            'review' => 'required',
            'star'    => 'required',
    
        ]);
        if ($validator->fails()) {

            return response()->json($validator->errors(), 422);
        }
        $review= new TopRating_Review;
        $review->product_id = $request->product_id;
        $review->review = $request->review;
        $review->star = $request->star;
        
        $result= $review->save();

        return response($review,200,["add successfully"]);
    }
}
