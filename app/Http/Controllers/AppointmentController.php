<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function __construct(){
        $this->Appointment = new Appointment();
    }
    
    public function appointment()
    {
        $doctor =  DB::table('doctor');
        $doctor = $doctor->get();
        $department =  DB::table('specialization');
        $department = $department->get();
        return view('v_appointment', ['doctor'=>$doctor], ['department'=>$department]);
    }

    public function createData(){
        $id = IdGenerator::generate([
            'table' => 'appointment',
            'length' => 6,
            'prefix' => 'P'
        ]);
        $p_id = Auth::id();
        $doctor = Request()->doctor;
        $d_id = DB::table('doctor')->where('name', $doctor)->value('id');
        $data = [
            'id' => $id,
            'date' => Request()->date,
            'phoneNumber' => Request()->phoneNumber,
            'message' => Request()->message,
            'p_id' => $p_id,
            'd_id' => $d_id
        ];
        $this->Appointment->createData($data);
        $p_id = Auth::id();
        // $appointment =  DB::table('appointment')->where('p_id', $p_id);
        $appointment =  DB::table('appointment')
                        ->join('doctor', 'appointment.d_id','=', 'doctor.id')
                        ->join('specialization', 'doctor.specialization_id','=','specialization.id')
                        ->select('doctor.name', 'specialization.s_name', 'appointment.*')
                        ->where('appointment.p_id',$p_id);
        $appointment = $appointment->get();
        return view('v_account', ['app'=>$appointment]);
    }

}