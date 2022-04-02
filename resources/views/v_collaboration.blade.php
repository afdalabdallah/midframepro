@extends('layout.v_template')
@section('title', 'Collaboration')

@section('content')
<div style="width:80%; margin:auto">
    <h1 style="font-family:Helvetica, Arial, sans-serif; 
        text-align: center; 
        font-weight:bold; 
        color:salmon;
        margin-bottom:40px">
        Partners
    </h1>
    <div >
        <div style="width:100px; margin:auto; margin-bottom:15px">
            <img src="{{URL::asset('logo1.png')}}" style="width:100px; height:100px"/>
        </div>
        
        <p style="font-family:Helvetica, Arial, sans-serif; 
        text-align: center; 
        font-weight:bold; 
        color:red;
        margin-bottom:28px">MEDIKA</p>
    </div>
</div>
@endsection
