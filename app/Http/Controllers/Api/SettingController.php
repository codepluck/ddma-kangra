<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Get Settings
     */
    public function index(Request $request)
    {
        $stings = nova_get_settings();
        return (response()->json($stings));
    }
}
