@extends('layout.v_template')
@section('title','Account')
@section('content')
<div style="padding: 15px">
    <h4>Your Appointment</h4>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr >
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Appointment Date</th>
                <th style="text-align: center">Department</th>
                <th style="text-align: center">Doctor</th>
                <th style="text-align: center">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($app as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->s_name }}</td>
                    <td>{{ $data->d_name }}</td>
                    <td>
                        <div style="display: flex;justify-content:space-between; width:100%;">
                            <button class="btn btn-info" onclick="window.location.href='/account/detail/{{$data->id}}'">Detail</button>
                            <button class="btn btn-warning" onclick="window.location.href='/account/detail/edit/{{$data->id}}'">Edit</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$data->id}}">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
    <hr>
    
    @foreach ($app as $data)
        <div class="modal fade" id="{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                Appointment <br>
                {{$data->date}} with {{$data->d_name}}<br>
                Do you want to delete this appointment?
                </div>
                <div class="modal-footer">
                    <a href="/account/delete/{{$data->id}}" class="btn btn-danger">Yes</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
            </div>
        </div>
    @endforeach
    
</div>
    
@endsection
