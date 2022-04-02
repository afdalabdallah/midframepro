@extends('layout.v_template')

@section('title', 'Profile')

@section('content')
<div style="width:80%; margin:auto">
    <div style="display:flex; margin:auto; width:100px; margin-bottom:50px">
        <img src="/logo1.png" style="width:100px; height:100px"/>
        <h1 style="font-family:Helvetica, Arial, sans-serif; 
        text-align: center; 
        font-weight:bold; 
        color:red;
        margin-left: 6px;
        padding-top:25px;">Medika</h1>
    </div>
        
        <div style="display:flex">
            
            <div style="width:50%; text-align:justify">
                <h3>Profile</h3>
                <p>Medika clinic was established in 2008, with only orthopaedic as the only specialist
                    in the clinic. In 2011, ENT and Policlinic is introduced in Medica clinic. With the growth of
                    Medica clinic, in 2015, Onclogist is finally able open practice in Medica clinic. With four
                    major practice, Medica clinic is able to grow even further.
                </p>
                <h3>Today</h3>
                <p>
                    To this day, there are more than four specialist that practice for each major. Up to
                    ten specialist has already avhieved Doctorate in the major. 
                </p>
                <p>
                    The clinic offers two rooms for each speciality, and provided with the newest 
                    technology available, Medika clinic is nominated as the best clinic in the city.
                </p>
            </div>
            <div style="margin-left:32px; display:flex">
                <div class="profile-card border border-2 border-danger" style="width:300px; height:300px; ">
                    <div class="service-img">
                        <img src="/lab.png" style="height:150px; width:100%"/>
                    </div>
                    <div style="padding:10px">
                        <p style="font-weight:bold">Technology</p>
                        <p>Equipped with the most advance technology</p>
                    </div>
                </div>
                <div class="profile-card border border-2 border-danger" style="width:300px; height:300px;  margin-left:16px">
                    <div class="service-img">
                        <img src="/doctor.png" style="height:150px; width:100%"/>
                    </div>
                    <div style="padding:10px">
                        <p style="font-weight:bold">Doctors</p>
                        <p>Have a total of 14 doctors, with up to ten doctors have achieved Doctorate</p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection