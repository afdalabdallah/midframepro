@extends('layout.v_template')
@section('title','Details')

@section('content')
<div style="padding: 15px">
    <h2>Appointment Details</h2>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Name</th>
            <td>{{$app->name}}</th>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{$app->date}}</th>
        </tr>
        <tr>
            <th>Department</th>
            <td>{{ $app->s_name}}</th>
        </tr>
        <tr>
            <th>Doctor</th>
            <td>{{ $app->d_name }}</th>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $app->message }}</th>
        </tr>
    </table>
    <a href="/account" class="btn btn-primary">Back</a>
</div>
    
@endsection