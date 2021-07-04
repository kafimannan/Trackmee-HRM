<!DOCTYPE html>
@extends('Layout.Admin')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Edit Tracker Profile

    </div >
    <div class="panel-body">
        <form method="POST">
            {{csrf_field()}}
            <input type="hidden" name="userId" value="{{$users->id}}">
            <table class="table table-responsive table-striped">

                <tr>
                    <td>
                        Name
                    </td>
                    <td>
                        {{$users->employee_name}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        {{$users->email}}
                    </td>
                </tr>
                
                <tr>
                    <td><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-edit"></span> Update</button></td>
                </tr>
            </table>

        </form>

    </div>
</div>
@endsection