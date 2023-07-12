<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\HostelList;
use App\Models\HotelDocument;
use Illuminate\Http\Request;

class HotelListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['hotelLists']= HostelList::get();
        $response['hotelDocument'] = HotelDocument::first();
       return view('site.hotelList.list.index',$response);
    }
    public function show($title)
    {

        try {
            $response['hostelList'] = HostelList::where('hotelname', urldecode($title))->first();
            $response['hostelListGallarlery'] = HostelList::with('images')->find($response['hostelList']->id);
          
            return view('site.hotelList.detalis.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.hotelList');
        }

    
    }

  

    
}
