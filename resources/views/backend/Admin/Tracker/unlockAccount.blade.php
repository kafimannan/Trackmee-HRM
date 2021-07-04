<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@extends('Layout.Admin')

@section('content')
<div class="panel-default">
    <div class="panel-heading">
        Unlock Trackers
    </div>
    <div class="panel-body">
        @if(session('successMsg')!=null)
        <div class="alert-success">
            {{session('successMsg')}}
        </div>
        @endif
        @if(session('errMsg')!=null)
        <div class="alert-danger">
            {{session('errMsg')}}
        </div>
        @endif
        <form method="post" action="{{route('admin.tracker.send')}}">
            {{csrf_field()}}
            <div class="form-group ">
                <label class="control-label" for="t_name">
                    Email Address <span class="mark">*</span>
                </label>
                <input type="email" name="email" id="email" class="form-control" value="{!!old('email')!!}">

            </div>
            <button type="submit" class="btn btn-danger">Unlock</button>

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
