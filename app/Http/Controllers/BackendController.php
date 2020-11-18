<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Pagoda;
use App\Hotel;
use App\Article;
use App\Contact;

class BackendController extends Controller
{

    //for article
    public function createArticle(Request $request)
    {
        $first_photo = $request->file('first_photo');
        $first_photo_name = uniqid() . "_" . $first_photo->getClientOriginalName();
        $first_photo->move(public_path() . "/photos/articles/", $first_photo_name);

        $second_photo = $request->file('second_photo');
        $second_photo_name = uniqid() . "_" . $second_photo->getClientOriginalName();
        $second_photo->move(public_path() . "/photos/articles", $second_photo_name);

        $third_photo = $request->file('third_photo');
        $third_photo_name = uniqid() . "_" . $third_photo->getClientOriginalName();
        $third_photo->move(public_path() . "/photos/articles", $third_photo_name);

        $background_photo = $request->file('background_photo');
        $background_photo_name = uniqid() . "_" . $background_photo->getClientOriginalName();
        $background_photo->move(public_path() . "/photos/articles", $background_photo_name);

        $data = new Article;
        $data->first_part = $request->first_part;
        $data->second_part = $request->second_part;
        $data->first_photo = $first_photo_name;
        $data->second_photo = $second_photo_name;
        $data->third_photo = $third_photo_name;
        $data->background_photo = $background_photo_name;
        $data->date = $request->datepicker;
        $data->article_title = $request->article_title;
        $data->popular = $request->popular;
        $data->local = $request->local;
        $data->global = $request->global;
        $data->environmental = $request->environmental;
        // dd($data->date);
        $data->save();
        return back();
    }
    public function articles()
    {
        $popin = Article::where('popular', '=', '1')->paginate(6);
        $data = Article::paginate(9);
        return view('frontend.article', ['data' => $data, 'popin' => $popin]);
    }
    public function articles_category($id)
    {
        $popin = Article::where('popular', '=', '1')->paginate(6);
        if ($id == 1) {
            $data = Article::orderBy('date', 'desc')->paginate(6);
        } elseif ($id == 2) {
            $data = Article::where('popular', '=', '1')->paginate(6);
            // dd("hello");
        } elseif ($id == 3) {
            $data = Article::where('local', '=', '1')->paginate(6);
        } elseif ($id == 4) {
            $data = Article::where('global', '=', '1')->paginate(6);
        } else {
            $data = Article::where('environmental', '=', '1')->paginate(6);
        }
        return view('frontend.article', ['data' => $data, 'popin' => $popin]);
    }
    public function articles_archive($id)
    {
        $popin = Article::where('popular', '=', '1')->paginate(6);
        $start_date = '2020-'.$id.'-1';
        $end_date = '2020-'.$id.'-31';
        $data = Article::orderBy('date', 'desc')->whereBetween('date', [$start_date, $end_date])->paginate(6);
        // dd($data);
        return view('frontend.article', ['data' => $data, 'popin' => $popin]);
    }
    public function show_articleSolo($id)
    {
        $data = Article::findOrFail($id);
        return view('frontend.articleSolo', ['data'=>$data]);
    }
    public function add_article()
    {
        return view('backend.articles.addarticle');
    }

    //for pagoda
    public function pagodas()
    {
        $data = Pagoda::paginate(9);
        return view('frontend.pagoda', ['data' => $data]);
    }
    public function add_pagoda()
    {
        $data = Hotel::all();
        return view('backend.pagodas.addpagoda', ['data' => $data]);
    }
    public function createPagoda(Request $request)
    {

        $first_photo = $request->file('first_photo');
        $first_photo_name = uniqid() . "_" . $first_photo->getClientOriginalName();
        $first_photo->move(public_path() . "/photos/pagodas", $first_photo_name);

        $second_photo = $request->file('second_photo');
        $second_photo_name = uniqid() . "_" . $second_photo->getClientOriginalName();
        $second_photo->move(public_path() . "/photos/pagodas", $second_photo_name);

        $third_photo = $request->file('third_photo');
        $third_photo_name = uniqid() . "_" . $third_photo->getClientOriginalName();
        $third_photo->move(public_path() . "/photos/pagodas", $third_photo_name);

        $background_photo = $request->file('background_photo');
        $background_photo_name = uniqid() . "_" . $background_photo->getClientOriginalName();
        $background_photo->move(public_path() . "/photos/pagodas", $background_photo_name);

        $data = new Pagoda;
        $data->first_part = $request->first_part;
        $data->second_part = $request->second_part;
        $data->first_photo = $first_photo_name;
        $data->second_photo = $second_photo_name;
        $data->third_photo = $third_photo_name;
        $data->background_photo = $background_photo_name;
        $data->pagoda_name = $request->pagoda_name;
        $data->near_pagoda_1 = $request->near_pagoda_1;
        $data->near_pagoda_2 = $request->near_pagoda_2;
        $data->near_pagoda_3 = $request->near_pagoda_3;
        $data->save();
        return back();
    }
    public function show_pagodaSolo($id)
    {
        $data = Pagoda::findOrFail($id);
        $users = DB::table('pagodas')
            ->where('pagodas.id', '=', $id)
            ->rightjoin('hotels', function ($join) {
                $join->on('pagodas.id', '=', 'hotels.near_hotel_1'); // i want to join the users table with either of these columns
                $join->orOn('pagodas.id', '=', 'hotels.near_hotel_2');
                $join->orOn('pagodas.id', '=', 'hotels.near_hotel_3');
            })
            ->select('pagodas.*', 'hotels.*')
            ->paginate('3');
        return view('frontend.pagodaSolo', ['data' => $data, 'near_pagoda_data' => $users]);
    }
    public function search_pagodas(Request $request)
    {
        $search =  $request->search;
        if ($search != "") {
            $data = Pagoda::where(function ($query) use ($search) {
                $query->where('first_part', 'like', '%' . $search . '%')
                ->orWhere('pagoda_name', 'like', '%'.$search.'%');
            })->paginate(6);
        } else {
            $data = Pagoda::paginate(6);
        }
        // dd($data);
        return View('frontend.pagoda', ['data' => $data]);
        //
    }

    //for hotel
    public function hotels()
    {
        $data = Hotel::paginate(9);
        return view('frontend.hotel', ['data' => $data]);
    }
    public function add_hotel()
    {
        $data = Pagoda::all();
        return view('backend.hotels.addHotel', ['data' => $data]);
    }
    public function createHotel(Request $request)
    {

        $first_photo = $request->file('first_photo');
        $first_photo_name = uniqid() . "_" . $first_photo->getClientOriginalName();
        $first_photo->move(public_path() . "/photos/hotels/", $first_photo_name);

        $second_photo = $request->file('second_photo');
        $second_photo_name = uniqid() . "_" . $second_photo->getClientOriginalName();
        $second_photo->move(public_path() . "/photos/hotels", $second_photo_name);

        $third_photo = $request->file('third_photo');
        $third_photo_name = uniqid() . "_" . $third_photo->getClientOriginalName();
        $third_photo->move(public_path() . "/photos/hotels", $third_photo_name);

        $background_photo = $request->file('background_photo');
        $background_photo_name = uniqid() . "_" . $background_photo->getClientOriginalName();
        $background_photo->move(public_path() . "/photos/hotels", $background_photo_name);

        $test = new Hotel;
        $test->first_part = $request->first_part;
        $test->second_part = $request->second_part;
        $test->first_photo = $first_photo_name;
        $test->second_photo = $second_photo_name;
        $test->third_photo = $third_photo_name;
        $test->background_photo = $background_photo_name;
        $test->hotel_name = $request->hotel_name;
        $test->rating_star = $request->rating_star;
        $test->near_hotel_1 = $request->near_hotel_1;
        $test->near_hotel_2 = $request->near_hotel_2;
        $test->near_hotel_3 = $request->near_hotel_3;
        $test->save();
        return back();
    }
    public function show_hotelSolo($id)
    {
        $data = Hotel::findOrFail($id);
        $users = DB::table('hotels')
            ->where('hotels.id', '=', $id)
            ->rightjoin('pagodas', function ($join) {
                $join->on('hotels.id', '=', 'pagodas.near_pagoda_1'); // i want to join the users table with either of these columns
                $join->orOn('hotels.id', '=', 'pagodas.near_pagoda_2');
                $join->orOn('hotels.id', '=', 'pagodas.near_pagoda_3');
            })
            ->select('hotels.*', 'pagodas.*')
            ->paginate('3');
        return view('frontend.hotelSolo', ['data' => $data, 'near_hotel_data' => $users]);
    }
    public function show_ratingStar($id)
    {
        if($id==0)
        {
            $data = Hotel::paginate(9);
            
        }else
        {
            $data = Hotel::where('rating_star', '=', $id)->paginate(9);
        }
        // dd($data);
        return view('frontend.hotel', ['data' => $data]);
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact(Request $request)
    {

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
