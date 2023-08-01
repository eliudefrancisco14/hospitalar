<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\{AngolaOnline, Partner, Province, ProvinceDocument, Service, Slide};

class HomeController extends Controller
{

    public function index()
    {
        $response['slideFirst'] = Slide::orderBy('id', 'desc')->first();
        if ($response['slideFirst']) {
            $response['slideshows'] = Slide::where('id', '!=', $response['slideFirst']->id)->orderBy('id', 'desc')->get();
        }
        $response['totalPoint'] = AngolaOnline::count();
        $response['totalGoodPoint'] = AngolaOnline::where('state', 'Activo')->count();

        $response['totalGoodPoints'] = AngolaOnline::where('state', 'Activo')->get();
        $response['totalBadPoints'] = AngolaOnline::where('state', 'Inactivo')->get();
        
        $response['totalBadPoint'] = AngolaOnline::where('state', 'Inactivo')->count();

        $response['partners'] = Partner::OrderBy('id', 'desc')->get();
        $response['services'] = Service::OrderBy('id', 'desc')->limit(6)->get();

        $response['provinceDocument'] = ProvinceDocument::first();

        // Pegar todos os pontos de cada provincia

        $province = Province::where('name', 'Bengo')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Bengo'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Benguela')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Benguela'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Bié')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Bie'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Cabinda')->first();
        $ProvincePointCa = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Cabinda'] = json_encode($ProvincePointCa);

        $province = Province::where('name', 'Cuando-Cubango')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['CuandoCubango'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Cunene')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Cunene'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Huambo')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Huambo'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Huíla')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Huila'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Kwanza Sul')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['KwanzaSul'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Kwanza Norte')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['KwanzaNorte'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Luanda')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Luanda'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Lunda Norte')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['LundaNorte'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Lunda Sul')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['LundaSul'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Malanje')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Malanje'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Moxico')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Moxico'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Namibe')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Namibe'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Uíge')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Uige'] = json_encode($ProvincePoint);

        $province = Province::where('name', 'Zaire')->first();
        $ProvincePoint = AngolaOnline::where('fk_idProvince', $province->id)->count();
        $response['Zaire'] = json_encode($ProvincePoint);




        return view('site.home.index', $response);
    }
}
