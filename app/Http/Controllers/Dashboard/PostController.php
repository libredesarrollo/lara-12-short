<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Crear
        // Category::create(
        //     [
        //         'title' => 'titulo 3',
        //         'slug' => 'titulo 3'
        //     ]
        // );
        // ver
        // $category = Category::find(1);
        $category = Category::get();

        // update
        // $category->update(
        //     [
        //         'title' => 'titulo new',
        //         'slug' => 'titulo new'
        //     ]
        // );
        // $category->delete();
         dd($category);
        
        echo 'Hola Mundo';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
