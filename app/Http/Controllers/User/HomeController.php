<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\BookingEmail;
use App\Model\user\Booking;
use App\Model\user\Contact;
use App\Model\user\Guide;
use App\Model\user\Tour;
use App\Model\user\TourSpecial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Home page
     */
    public function constructor()
    {
        $this->middleware('auth')->only(['contact_page']);
        // $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $tours = Tour::where('status', 1)->orderBy('created_at', 'DESC')->take(6)->get();
        $specialTours = TourSpecial::where('status', 1)->orderBy('created_at', 'DESC')->take(6)->get();
        return view('user.home', compact('tours', 'specialTours'));
    }

    /**
     * All tours
     */
    public function allTour(Request $request)
    {   if($request->query('search')){
            $tours = Tour::where([['status',1],['slug', 'LIKE', '%'.$request->query('search').'%']])->orderBy('created_at', 'DESC')->paginate(18);
        }
        else 
            $tours = Tour::where('status', 1)->orderBy('created_at', 'DESC')->paginate(18);
        return view('user.pages.tour', compact('tours'));
    }

    /**
     * All tours special
     */
    public function specialTours(Request $request)
    {   if($request->query('search')){
            $specialTours = TourSpecial::where([['status',1],['slug', 'LIKE', '%'.$request->query('search').'%']])->orderBy('created_at', 'DESC')->paginate(18);
        }
        else 
            $specialTours = TourSpecial::where('status', 1)->orderBy('created_at', 'DESC')->paginate(18);
        return view('user.pages.tour_special', compact('specialTours'));
    }




    public function singleTours($slug)
    {
        $tour = Tour::where('slug', $slug)->first();
        return view('user.pages.tours_details', compact('tour'));
    }

    /**
     * Get single tour
     */
    public function singleTour(Tour $tour)
    {
        return view('user.pages.tour_details', compact('tour'));
    }

    /**
     * Get single special tour
     */
    public function singleSpecialTour($specialtour)
    {
        $specialTour = TourSpecial::where('slug', $specialtour)->first();
        return view('user.pages.special_tour_details', compact('specialTour'));
    }

    /**
     * Get contact page
     */
    public function contact_page($tour_id)
    {
        $tour = Tour::findOrFail($tour_id);
        return view('user.pages.contact', compact('tour'));
    }

    public function store_contact(Request $request)
    {
        $this->validate($request, [
            // 'name' => 'required',
            // 'email' => 'required|email',
            'message' => 'required',
            'people' => 'numeric|required|min:0',
            'start_date' => 'required',
            'date_total' => 'numeric|required|min:0',
            'price' => 'numeric|required|min:0',
        ]);

        // try {
            $contact = new Contact();
            $contact->name = auth()->user()->name;
            $contact->email = auth()->user()->email;
            $contact->tour_title = $request->tour_title;
            $contact->message = $request->message;

            $contact->save();
            $book = new Booking();
            $book->user_id = auth()->user()->id;
            $book->contact_id = $contact->id;
            $book->start_book = $request->start_date;
            $book->end_book = Carbon::parse($request->start_date)->addDays(3);
            $book->people = $request->people;
            $book->price = $request->price;
            $book->tour_id = $request->tour_id;
            $book->save();
            $book->user;
            $book->tour;
            // print($book);
            Mail::to($book->user->email)->send(new BookingEmail($book));
        // } catch (\Throwable $th) {
        //     return response()->json(["messsage"=>$th],500);
        // }
        return redirect()->route('home')->with('success', 'Gửi thành công');
    }

    public function privacy()
    {
        return view('user.pages.privacy');
    }

    public function about()
    {
        return view('user.pages.about');
    }

    public function guide($id)
    {
        $guide = Guide::findOrFail($id);
        return view('user.pages.single_guide', compact('guide'));
    }
}
