<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class postcontroller extends Controller
{
    public function index(){

        $posts = Post::all();
        
        return response()->json(
            [
                'message' => 'Posts fetched successfully',
                'posts' => $posts
            ],
            200
        );
    }

    public function create(){
        return view('post.create');
    }



    public function store(Request $request){
        $post = Post::create([
            'company_name'=>$request->company_name,
            'website'=>$request->website,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'location'=>$request->location,
            'company_dec'=>$request->company_dec
        ]);
        
            $user = Auth::user();
            // $token = $user->createToken('api-token')->plainTextToken;
            return response()->json([
                'message' => 'Post created successfully',
                'company_name'=>$request->company_name,
                'website'=>$request->website,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'location'=>$request->location,
                'company_dec'=>$request->company_dec,
               
            ], 201);
       
    }

    public function show($id){
        $post = Post::find($id);
        return response()->json([
            'message' => 'Post fetched successfully',
            'post' => $post
        ], 200);
    }
    public function edit($id){
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }
    

}
