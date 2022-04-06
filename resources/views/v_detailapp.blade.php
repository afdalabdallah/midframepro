@extends('layout.v_template')
@section('title','Details')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Message</th>
                <th>Department</th>
                <th>Doctor</th>
                <th>Date</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($app as $data)
        <tr>
            <td>{{ $data->message }}</td>
            <td>{{ $data->s_name}}</td>
            <td>{{ $data->d_name }}</td>
            <td>{{ $data->date }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection