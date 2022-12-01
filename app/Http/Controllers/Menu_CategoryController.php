<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu_Category;
use App\Models\Menu;

class Menu_CategoryController extends Controller
{

    public function addCat(){
        
        $cat = new Menu_Category();

        $cat->category_name = "Category3";
        $cat->save();
        return "category inserted Successfully";
    }

    public function addMenu($category_id){
        $cat = Menu_Category::find($category_id);
        
        $menu = new Menu();
        $menu->item_name = "Item1";
        $menu->item_type = "Type1";
        $menu->price = 2322;
        $menu->image = "23453454.jpg";
        $menu->description = "This is Description";
        $cat->menus()->save($menu);
        return "Menu added";
    }
}
