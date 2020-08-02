<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoriesController extends Controller {


    use GeneralTrait;

    public function index() {

        $categories = Category::select('id', 'name_'.app()->getLocale() . ' as name')->get();

        return response()->json($categories);

    }

    public function getCategoryById(Request $request){

        $id = $request->id;

        $category = Category::selection()->find($id);

        return response()->json($category);


    }


}
