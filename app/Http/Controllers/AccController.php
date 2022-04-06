<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Illuminate\Support\Facades\Auth;

class AccController extends Controller
{
    public function __construct(){
        $this->Appointment = new Appointment();
        $this->middleware('auth');
    }

    public function account(){
        $p_id = Auth::id();
        $appointment =  DB::table('appointment')
        ->join('doctor', 'appointment.d_id','=', 'doctor.id')
        ->join('specialization', 'doctor.specialization_id','=','specialization.id')
        ->select('doctor.name as d_name', 'specialization.s_name', 'appointment.*')
        ->where('appointment.p_id',$p_id);
        $appointment = $appointment->get();
        return view('v_account', ['app'=>$appointment]);
    }
    public function detail($id){
        return view('v_detailapp', ['app'=>$this->Appointment->detailData($id)]);
    }
    public function delete($id){
        $this->Appointment->deleteData($id);
        return redirect()->route('account');
    }

}