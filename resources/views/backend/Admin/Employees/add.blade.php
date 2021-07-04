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
        ADD Tracker
        
    </div>
    <div class="panel panel-body">
        <form method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Name<span class="mark" style="color: red; font-size: 16px">*</span></label>
                <input class="form-control" type="text" name="e_name" id="t_name" value="" placeholder="Enter Employee Name" value="{!!old('e_name')!!}"/>
            </div>
            <div class="form-group">
                <label for="email">Email<span class="mark" style="color: red; font-size: 16px">*</span></label>
                <input class="form-control" type="email" name="e_email" id="t_email" value="" placeholder="Enter Employee Email" value="{!!old('e_email')!!}"/>
            </div>
            <button type="submit" class="btn btn-danger" style="width: 100px">ADD</button>
            
        </form>
        @if(count($errors)>0)
        
        @foreach($errors as $e)
        <div class="alert-danger">
            <strong>
                <span class="glyphicon glyphicon-warning-sign"></span> {{$e}}
            </strong>
            
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
