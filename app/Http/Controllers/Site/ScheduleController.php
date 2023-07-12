<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\ScheduleIndustrialization;

class ScheduleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* programs & activities */
      /* programs & activities */
      $response['schedulesI'] = Schedule::where('day', 'I')->get();
      $response['schedulesII'] = Schedule::where('day', 'II')->get();
      $response['schedulesIII'] = Schedule::where('day', 'III')->get();
      $response['schedulesIV'] = Schedule::where('day', 'IV')->get();
      $response['schedulesV'] = Schedule::where('day', 'V')->get();
      
      $response['schedulesVI'] = Schedule::where('day', 'VI')->get();
      $response['schedulesVII'] = Schedule::where('day', 'VII')->get();
      $response['schedulesVIII'] = Schedule::where('day','VIII')->get();
      $response['schedulesIX'] = Schedule::where('day', 'IX')->get();
      $response['schedulesX'] = Schedule::where('day', 'X')->get();
      $response['schedulesXI'] = Schedule::where('day', 'XI')->get();

        /* Industrialização */

        $response['ScheduleIndustrializationI'] = ScheduleIndustrialization::where('day', 'I')->get();
        $response['ScheduleIndustrializationII'] = ScheduleIndustrialization::where('day', 'II')->get();
        $response['ScheduleIndustrializationIII'] = ScheduleIndustrialization::where('day', 'III')->get();
        $response['ScheduleIndustrializationIV'] = ScheduleIndustrialization::where('day', 'IV')->get();
        $response['ScheduleIndustrializationV'] = ScheduleIndustrialization::where('day', 'V')->get();
        $response['ScheduleIndustrializationVII'] = ScheduleIndustrialization::where('day', 'VII')->get();
        return view('site.schedule.index', $response);
    }


}
