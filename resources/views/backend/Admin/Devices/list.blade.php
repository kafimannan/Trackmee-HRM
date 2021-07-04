<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('Layout.Admin')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Tracker List
        <a class="btn btn-primary" style="float: right;padding: 3px 3px;margin-top: -3px;" href="{{route('admin.device.add')}}"> <i class="glyphicon glyphicon-plus"></i> Add</a>
        
    </div>
    <div class="panel-body">
        <table class="table">
            <tr>
                <th>
                   Employee Name
                </th>
                <th>
                   Employee Device  
                </th>
                <th>
                   Device Type
                </th>
                
                <th>
                    option
                </th>
            </tr>
            @foreach($devices as $data)
            <tr>
                <td>
                   {{$data->employee_name}} 
                </td> 
                <td>
                  {{$data->device_serial_no}}  
                </td>
                <td>
                   {{$data->type}} 
                </td>
                <td>
                    <a class="btn btn-sm btn-success" href="#">Edit</a>
                </td>
                <td>
                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                </td>
            </tr>
            @endforeach
            
            
        </table>
        
    </div>
    
</div>
@endsection