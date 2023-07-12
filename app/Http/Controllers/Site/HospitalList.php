<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\HospitalDocument;
use Illuminate\Http\Request;

class HospitalList extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['Hospitais']= Hospital::get();
        $response['hospitalDocument'] = HospitalDocument::first();
       return view('site.hospital.list.index',$response);
    }
    public function show($title)
    {

        try {
            $response['Hospitalist'] = Hospital::where('hospitalName', urldecode($title))->first();
            $response['hostelListGallarlery'] = Hospital::with('images')->find($response['Hospitalist']->id);
          
            return view('site.hospital.detalis.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.hospital');
        }

    
    }

}
