<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function products(){
        echo '<a href="https://www.educastudio.com/category/marbel-edu-games">marbel-edu-games</a>';
        echo '<br>';
        echo '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a>';
        echo '<br>';
        echo '<a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a>';
        echo '<br>';
        echo '<a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a>';
    }
}
