<?php

namespace App\Http\Controllers\Admin;

use App\Apis\Press;
use App\Classes\Logger;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;
use Intervention\Image\ImageManagerStatic as Image;

class PressController extends Controller
{
    private $Press;
    private $Logger;

    public function __construct()
    {
        $this->Press = new Press();
        $this->Logger = new Logger();
    }

    public function list()
    {
        $press = $this->Press->index();

        //Logger
        $this->Logger->log(
            'emergency',
            'Listou os Jornalistas cadastrados no CIAM'
        );
        return view('admin.press.list.index', compact('press'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $press = $this->Press->find($id);

        //Logger
        $this->Logger->log(
            'emergency',
            'Visualizou Jornalista cadastrado no CIAM com o identificador ' .
                $id
        );
        return view('admin.press.details.index', compact('press'));
    }

    /**
     * Print the Certified
     *
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {

        if ('USP' == Auth::user()->level) {
            
        $response['press'] = $this->Press->find($id);

            //RESIZE PHOTO
            $img = Image::make('https://ciam.gov.ao/storage/'. $response['press']['Foto'])->resize(428, 395);
  
            $nameFile = $response['press']['id'] . '.jpg';
            $img->save('../storage/app/public/' . $nameFile);

            //STYLE
            $response['background'] = '#000';
            $response['color'] = 'yellow';
            $response['category'] = 'IMPRENSA';

            $response['qrcode'] = QrCode::size(130)
                ->backgroundColor(0, 0, 0, 0)
                ->generate(route('admin.credencial.verify', $id));
            $pdf = PDF::loadView('pdf/credencial/press/index', $response);
            $pdf->setPaper('A6', 'portrait');

            //Logger
            $this->Logger->log(
                'emergency',
                'Imprimiu uma credencial de jornalista com o código: ' .
                    $response['press']['id']
            );

            return $pdf->stream(
                'credenciamento-de-jornalista-' .
                    $response['press']['id'] .
                    '.pdf'
            );
        } else {
            return redirect()
                ->route('login')
                ->with('NoAuth', '1');
        }
    }
}
