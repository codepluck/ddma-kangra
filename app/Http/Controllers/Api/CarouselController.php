<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Resources\CarouselResource;
use App\Models\Carousel;

use App\Http\Controllers\Controller;

class CarouselController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Main Page
     *
     */
    public function index()
    {
        $slides = Carousel::all();
        return response()->json($slides);
//        $slidesData = new CarouselResource($slides);
//        return $slidesData;
    }

}
