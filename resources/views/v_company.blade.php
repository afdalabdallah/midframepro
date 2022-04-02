@extends('layout.v_template')
@section('title', 'Company')

@section('content')
<div style="width:80%; margin:auto">
    <div style="display:flex; margin:auto; width:500px; margin-bottom:50px">
        <img src="{{URL::asset('hat.png')}}" style="width:150px; height:100px"/>
        <h1 style="font-family:Helvetica, Arial, sans-serif; 
        text-align: center; 
        font-weight:bold; 
        color:red;
        margin-left: 6px;
        padding-top:25px;">Akhi's Gathering</h1>
    </div>
    <div style="text-align:center">
        <h3>About</h3>
        <p>Akhi's Gathering is a company that focuses on medical purpose. Akhi's Gathering
            founder, Muhammad Afdal Abdallah, is a software engineer. The purpose of the company 
            is to make every medical easier to access with the growth of technology. Akhi's gathering
            has made a clinic web-application for Medika clinic.  
        </p>
        <h3>Company Profile</h3>
        <div style="width:40%; margin:auto; text-align:left">
            <table style="width:100%">
                <tr>
                    <td>Name</td>
                    <td>: Akhi's Gathering</td>
                </tr>
                <tr>
                    <td>Established</td>
                    <td>: 2018</td>
                </tr>
                <tr>
                    <td>Founder</td>
                    <td>: Muhammad Afdal Abdallah</td>
                </tr>
                <tr>
                    <td>Purpose</td>
                    <td>: Making medical aspect easier with technology</td>
                </tr>
            </table>
            <img src="{{URL::asset('fotodiri.png')}}"  style="width:500px; height:600px"/>
        </div>
        
    </div>
</div>
@endsection

