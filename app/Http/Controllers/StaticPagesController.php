<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Member;
use App\GeneralSettings;
use App\SocialSettings;
use App\FoodCategory;
use App\FoodItem;

class StaticPagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('pages/about');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function reservations() {
        return view('pages/reservations');
    }

    public function saveReservation() {
        // return request()->all();
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'reservation_time' => ['required', 'string']
        ]);

        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->reservation_time = request('reservation_time');
        $reservation->save();

        return redirect('reservations/thank-you');
    }

    public function offers() {
        return view('pages/offers');
    }

    public function registerMember() {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);

        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('offers/thank-you');
    }

    public function thankYou() {
        return view('pages/thank-you');
    }

    public function menu() {
        $categories = FoodCategory::All();
        return view('/pages/menu/all-categories',  ['categories' => $categories]);
    }

    public function singleMenu($slug) {
        $food_category = FoodCategory::where('title', '=', $slug)->first();
        // dd(gettype($food_category->id));

        $food_items = FoodItem::where('category_id', '=', $food_category->id)->get();
        
        return view('/pages/menu/single-menu', ["food_category" => ucfirst($slug), 'food_items' => $food_items]);
    }
}
