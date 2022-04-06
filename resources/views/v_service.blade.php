@extends('layout.v_template')
@section('title', 'Service')

@section('content')
<div style="width:80%; margin:auto">
    <h1 style="font-family:Helvetica, Arial, sans-serif; 
        text-align: center; 
        font-weight:bold; 
        color:salmon;
        margin-bottom:40px">
        Service
    </h1>
    
          <div class="service-container" style="display:flex;width:80%; margin: auto">
                <div class=" service-card" style="width:300px; height:300px; ">
                    <div class="service-img">
                        <img src="{{URL::asset('appoint.jpg')}}" style="height:150px; width:100%"/>
                    </div>
                    <div style="padding:10px">
                        <p style="font-weight:bold"><a href="/appointment">Appointment</a></p>
                        <p>Make an appointmen with the specialist</p>
                    </div>
                </div>
                <div class=" service-card" style="width:300px; height:300px;">
                    <div class="service-img">
                        <img src="{{URL::asset('checkup.png')}}" style="height:150px; width:100%"/>
                    </div>
                    <div style="padding:10px">
                        <p style="font-weight:bold">Check Up</p>
                        <p>Medical check up to monitor health</p>
                    </div>
                </div>
                <div class="service-card" style="width:300px; height:300px; ">
                    <div class="service-img">
                        <img src="{{URL::asset('lab.png')}}" style="height:150px; width:100%"/>
                    </div>
                    <div style="padding:10px">
                        <p style="font-weight:bold">Laboratory</p>
                        <p>Laboratory to check for any symptons</p>
                    </div>
                </div>
                <div class="service-card" style="width:300px; height:300px; ">
                    <div class="service-img">
                        <img src="{{URL::asset('medicine.png')}}" style="height:150px; width:100%"/>
                    </div>
                    <div style="padding:10px">
                        <p style="font-weight:bold">Medicine</p>
                        <p>Buy medicine with doctor's prescription or individual needs</p>
                    </div>
                </div>
        </div>
    
  
</div>
@endsection

