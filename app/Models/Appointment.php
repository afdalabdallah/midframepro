<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class Appointment extends Authenticatable
{

    protected $fillable = [
        'id',
        'name',
        'date',
        'email',
        'phoneNumber',
        'message',
        'p_id',
        'd_id'
    ];

    public function createData($data){
        DB::table('appointment')->insert($data);
    }

    public function detailData($id){
        $appointment =  DB::table('appointment')
                        ->join('doctor', 'appointment.d_id','=', 'doctor.id')
                        ->join('specialization', 'doctor.specialization_id','=','specialization.id')
                        ->select('doctor.name as d_name', 'specialization.s_name', 'appointment.*')
                        ->where('appointment.id',$id);
       return $appointment->get()->first();
    }

    public function deleteData($id){
        $deleted = DB::table('appointment')->where('id', '=', $id)->delete();
    }


    public function editData($id,$data){
        DB::table('appointment')->where('id', $id)->update($data);
        return redirect()->route('account');
    }


}
