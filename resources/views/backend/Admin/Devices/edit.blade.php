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
        ADD Device
        
    </div>
    <div class="panel-body">
        <form method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="d_ename" >Employee Name</label>
                <input type="text" name="d_ename" placeholder="enter employee name" class="form-control">
                
            </div>
            <div class="form-group">
                <label for="d_serial" >Device serial no</label>
                <input type="text" name="d_serial" placeholder="enter device serial no" class="form-control">
                
            </div>
            <div>
                <input type="submit" class="btn btn-danger" value="Add">
            </div>
            
        </form>
        
    </div>
</div>

@endsection