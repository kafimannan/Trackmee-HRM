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
        <a class="btn btn-primary" style="float: right;padding: 3px 3px;margin-top: -3px;" href="{{route('admin.tracker.add')}}"> <i class="glyphicon glyphicon-plus"></i> Add</a>

    </div>
    <div class="panel-body">
        @if(session('errMsg')!=null)
        <div class="alert-danger">
            <strong>
                {{session('errMsg')}}
            </strong>
        </div>
        @endif
        @if(session('successMsg')!=null)
        <div class="alert-success">
            <strong>
                {{session('successMsg')}}
            </strong>
        </div>
        @endif
        <table class="table">
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Email 
                </th>
                <th>
                    Address
                </th>
                <th>
                    Type
                </th>
                <th>
                    option
                </th>
            </tr>
            @foreach($users as $user)
            <tr>
                
                <td>
                    {{$user->fullName}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    {{$user->address}}
                </td>
                <td>
                    {{$user->type}}
                </td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{route('admin.tracker.edit',['id'=>$user->userId])}}">Edit</a>
                    <a class="btn btn-sm btn-danger" href="#delete_{{$user->userId}}" data-toggle="modal" data-terget="#delete_{{$user->userId}}">Delete</a>
                    <div id="delete_{{$user->userId}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #c9302c;color: white">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Tracker</h4>
                                </div>
                                <div class="modal-body" style="color: blueviolet">
                                    
                                    <form method="post">
                                        {{csrf_field()}}
                                        <p>Are You Sure You Want to remove this tracker?</p>
                                        <input type="hidden" name="userId" value="{{$user->userId}}" style="float: right">
                                         
                                        <button  type="submit" class="btn btn-danger" formaction="{{route('admin.tracker.delete',['id'=>$user->userId])}}">Yes</button>
                                    </form>
                                </div>
                                <div class="modal-footer" style="background-color: #c9302c">

                                </div>
                            </div>

                        </div>
                    </div>
                </td>
                
            </tr>
            @endforeach
            <tfoot>
                <tr>
                    <td colspan="5" style="text-align: right">
                        {{$users->links()}}
                    </td> 
                </tr>
            </tfoot>
        </table>

    </div>

</div>
@endsection