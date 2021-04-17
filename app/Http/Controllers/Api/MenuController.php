<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{

    public $menus = [];

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
    public function index(Request $request)
    {
        $menusResponse = nova_get_menus();
        if ($menusResponse):
            foreach ($menusResponse as $menu):
                $this->menus[$menu['slug']] = $menu['menuItems'];
            endforeach;
        endif;
        return (response()->json($this->menus));
    }

}
