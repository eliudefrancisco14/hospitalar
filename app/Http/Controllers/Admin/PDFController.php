

<?php
/*
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Models\Bomba;
use App\Models\Empresas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use App\Models\History;


class PDFController extends Controller
{
    public function posto(Request $request)
    {
        if (is_numeric($request->empresa) && auth()->user()->empresas_id == $request->empresa ) {
            $response['empresa'] = Empresas::where('id',$request->empresa)->first()->nome;

            $response['postos'] = Bomba::join('empresas', 'bombas.empresas_id', '=', 'empresas.id')
            ->where('empresas.nome', $response['empresa'])
            ->whereNull('bombas.deleted_at')
            ->get();

        $pdf = PDF::loadview('pdf.posto.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);

        } elseif(!is_numeric($request->empresa)) {
            $data = $request->validate([
                'empresa' => 'required',
            ], [
                'empresa.required' => 'O campo Empresas é obrigatório.',
            ]);

            $response = [
                'empresa' => $request->empresa,
            ];

            $response['postos'] = Bomba::join('empresas', 'bombas.empresas_id', '=', 'empresas.id')
            ->where('empresas.nome', $request->empresa)
            ->whereNull('bombas.deleted_at')
            ->get();

            $pdf = PDF::loadview('pdf.posto.index', $response);
            return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
        }

        return redirect()->route('admin.posto.list');

    }

    public function log(Request $request) {

        $data = $request->validate([
            'start' => 'required|date',
            'end' => 'required|date',
        ], [
            'start.required' => 'O campo Data Início é obrigatório.',
            'start.date' => 'O campo Data Início deve ser data.',
            'end.required' => 'O campo Data Fim é obrigatório.',
            'end.date' => 'O campo Data Fim deve ser data.',
        ]);

        if($request->start < $request->end){
            $logs = Log::whereBetween('created_at', [$request->start, $request->end])
            ->orderBy('id', 'desc')
            ->get();

            $response['logs'] = $logs;
            $response['start'] = $request->start;
            $response['end'] = $request->end;

            $pdf = PDF::loadview('pdf.log.index', $response);
            return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
        }else{
            return redirect()->route('admin.log')->with('log', '1');
        }


    }

    public function history($id){

        $response['posto'] = Bomba::find($id);
        $postoId = $response['posto']->empresas_id;
        $response['empresa'] = Empresas::find($postoId);
        $userId = $response['posto']->user_id;
        $response['gestor'] = User::find($userId);

        $response['histories'] = History::Where('bombas_id', $id)->get();

        $pdf = PDF::loadview('pdf.history.index', $response);
        return $pdf->setPaper('a4', 'landscape')->stream('pdf', ['Attachment' => 0]);
    }
}
*/