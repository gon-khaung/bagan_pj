<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Hotel;
use App\Contact;
use App\Pagoda;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function articles()
    {
        $data = Article::all();
        return response()->json($data);
    }
    public function hotels()
    {
        $data = Hotel::all();
        return response()->json($data);
    }
    public function pagodas()
    {
        $data = Pagoda::all();
        return response()->json($data);
    }
    public function article_detail($id){
        $data = Article::findOrFail($id);
        return response()->json($data);
    }
    public function article_detail_background($id)
    {
        $data = Article::findOrFail($id);
        $background = 'public/photos/articles/' . $data->background_photo;
        return response()->json($background);
    }
    public function article_detail_content_photos($id)
    {
        $data = Article::findOrFail($id);
        $content_photos = [
            $first = 'public/photos/articles/'.$data->first_photo,
            $second = 'public/photos/articles/'.$data->second_photo,
            $third = 'public/photos/articles/'.$data->third_photo,
        ];
        return response()->json([$content_photos]);
    }
    public function article_popular_articles(){
        $data = Article::where('popular', '=', '1')->get();
        return response()->json($data);
    }
    public function article_local_articles(){
        $data = Article::where('local', '=', '1')->get();
        return response()->json($data);
    }
    public function article_global_articles(){
        $data = Article::where('global', '=', '1')->get();
        return response()->json($data);
    }
    public function article_environmental_articles(){
        $data = Article::where('environmental', '=', '1')->get();
        return response()->json($data);
    }
    public function pagoda_detail($id){
        $data = Pagoda::findOrFail($id);
        return response()->json($data);
    }
    public function pagoda_detail_background($id){
        $data = Pagoda::findOrFail($id);
        $background = 'public/photos/pagodas/'.$data->background_photo;
        return response()->json($background);
    }
    public function pagoda_detail_content_photos($id){
        $data = Pagoda::findOrFail($id);
        $content_photos = [
            $first = 'public/photos/pagodas/'.$data->first_photo,
            $second = 'public/photos/pagodas/'.$data->second_photo,
            $third = 'public/photos/pagodas/'.$data->third_photo,
        ];
        return response()->json([$content_photos]);
    }
    public function pagoda_near_hotels($id){
        $data = Pagoda::findOrFail($id);
        $near_pagoda = [
            $first = $data->near_pagoda_1,
            $second = $data->near_pagoda_2,
            $third = $data->near_pagoda_3,
        ];
        return response()->json($near_pagoda);
    }

    public function hotel_detail($id){
        $data = Hotel::findOrFail($id);
        return response()->json($data);
    }
    public function hotel_detail_background($id){
        $data = Hotel::findOrFail($id);
        $background = 'public/photos/hotels/'.$data->background_photo;
        return response()->json($background);
    }
    public function hotel_detail_content_photos($id){
        $data = Hotel::findOrFail($id);
        $content_photos = [
            $first = 'public/photos/hotels/'.$data->first_photo,
            $second = 'public/photos/hotels/'.$data->second_photo,
            $third = 'public/photos/hotels/'.$data->third_photo,
        ];
        return response()->json([$content_photos]);
    }
    public function hotel_five_star(){
        $data = Hotel::where('rating_star', '=', '5')->get();
        return response()->json($data);
    }
    public function hotel_four_star(){
        $data = Hotel::where('rating_star', '=', '4')->get();
        return response()->json($data);
    }
    public function hotel_three_star(){
        $data = Hotel::where('rating_star', '=', '3')->get();
        return response()->json($data);
    }
    public function hotel_near_pagodas($id){
        $data = Hotel::findOrFail($id);
        $near_hotel = [
            $first = $data->near_hotel_1,
            $second = $data->near_hotel_2,
            $third = $data->near_hotel_3,
        ];
        return response()->json($near_hotel);
    }
    public function sunset(){
        $data = [
            $sunset_1 = '/public/images/frontend/sunset1.jpg',
            $sunset_2 = '/public/images/frontend/sunset2.jpg',
            $sunset_3 = '/public/images/frontend/sunset3.jpg',
            $sunset_4 = '/public/images/frontend/sunset4.jpg',
            $sunset_5 = '/public/images/frontend/sunset5.jpg',
            $sunset_6 = '/public/images/frontend/sunset6.jpg',
        ];
        return response()->json($data);
    }
    
    public function contact(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'telephone' => 'required',
        'address' => 'required',
        'message' => 'required',
    ]);

    if ($validator->fails()) {
        return back()
                    ->withErrors($validator)
                    ->withInput();
    }

    $data = new Contact;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->telephone = $request->telephone;
    $data->address = $request->address;
    $data->message = $request->message;
    // dd($data);
    $data->save();
    return back();
    }
}
