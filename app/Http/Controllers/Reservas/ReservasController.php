<?php

namespace App\Http\Controllers\Reservas;

use App\Http\Controllers\Controller;
use App\Models\Reservas\Reservas;
use App\Models\Reservas\ReservasMotivo;
use App\Models\Reservas\ReservasSala;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class ReservasController extends Controller
{
    public function show($id){
        $reservas = Reservas::findOrFail($id);
        $reserva_sala = ReservasSala::all();
        $reserva_motivo = ReservasMotivo::all();
        $user = User::all();

        return view("reservas.show",compact('reservas','reserva_sala','reserva_motivo','user'));
    }


    public function index(){
        $reservas = DB::table('reservas as reserva')
            ->join('reserva_motivo as motivo', 'reserva.reserva_motivo_id', '=', 'motivo.id')
            ->join('reserva_sala as sala', 'reserva.reserva_sala_id', '=', 'sala.id')
            ->join('users as user', 'reserva.users_id', '=', 'user.id')
            ->select('reserva.id as reserva_id', 'motivo.id as motivo_id', 'sala.id as sala_id', 'user.id as user_id', 'reserva.*', 'motivo.*', 'sala.*', 'user.*')
            ->get();

        //dd($reservas);
        return view('reservas.index',compact('reservas'));
    }

    public function create(){

        $reserva_sala = ReservasSala::all();
        $reserva_motivo = ReservasMotivo::all();
        $user = User::all();


        return view('reservas.create',compact('reserva_sala','reserva_motivo','user'));
    }

    public function store(Request $request){

        $reservaSala = $request->input('reserva_sala_id');
        $DataHoraInicio = $request->input('data_hora_inicio');
        $DataHoraFim = $request->input('data_hora_fim');

        $reservaExistente = Reservas::where('reserva_sala_id', $reservaSala)
            ->where(function ($query) use ($DataHoraInicio, $DataHoraFim) {
                $query->where('data_hora_inicio', '<=', $DataHoraInicio)
                    ->where('data_hora_fim', '>=', $DataHoraInicio)
                    ->orWhere('data_hora_inicio', '<=', $DataHoraFim)
                    ->where('data_hora_fim', '>=', $DataHoraFim);
            })
            ->first();

        //dd($reservaExistente);

        if ($reservaExistente) {
            return redirect()->route('nova.reserva')->with('msg', 'Já existe reserva agendada para esse período.');
        }

        DB::beginTransaction();
        $reservas = Reservas::create($request->all());

        if (!$reservas) {
            DB::rollBack();
            return redirect()->route('inicioReserva')->with('msg', "Falha ao cadastrar a reserva.");
        }
        $reservas->save();
        DB::commit();

        return redirect()->route('inicioReserva')->with(
            'msg',
            "Reserva cadastrado com sucesso."
        );
    }
    public function edit($id){
        $reservas = Reservas::findOrFail($id);
        $reserva_sala = ReservasSala::all();
        $reserva_motivo = ReservasMotivo::all();
        $user = User::all();

        return view("reservas.edit",compact('reservas','reserva_sala','reserva_motivo','user'));
    }

    public function update(Request $request, $id){

        $reservas = Reservas::findOrFail($id);




        $reservaSala = $request->input('reserva_sala_id');
        $DataHoraInicio = $request->input('data_hora_inicio');
        $DataHoraFim = $request->input('data_hora_fim');

        $reservaExistente = Reservas::where('reserva_sala_id', $reservaSala)

            ->where(function ($query) use ($DataHoraInicio, $DataHoraFim) {
                $query->where('data_hora_inicio', '<=', $DataHoraInicio)
                    ->where('data_hora_fim', '>=', $DataHoraInicio)
                    ->orWhere('data_hora_inicio', '<=', $DataHoraFim)
                    ->where('data_hora_fim', '>=', $DataHoraFim);

            })
            ->first();

        if ($reservaExistente) {
            return redirect()->route('nova.reserva')->with('error', 'Essa reserva já está agendada para esse período.');
        }

        DB::beginTransaction();

        if (!$reservas->update($request->all())) {

            DB::rollBack();
            return redirect()->route('inicioReserva')->with('error', "Falha na alteração");
        }

        DB::commit();

        return redirect()->route('inicioReserva')->with(
            'success',
            "Alterado com sucesso."
        );
    }

    public function destroy($id)
    {
        $reservas = Reservas::findOrFail($id);

        $reservas->delete();

        return redirect()->route('inicioReserva')->with('msg', 'Reserva excluída com sucesso.');
    }
}
