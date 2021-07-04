<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\Employee;
use Illuminate\Support\Facades\DB;
class DeviceController extends Controller {

    public function show() {
        $devices= Device::join('employees','devices.employee_id','=','employees.id')->select('devices.*','employees.*')->paginate(5);
        return view('backend.Admin.Devices.list', compact('devices'));//->with('dataList',$dataLst);
    }

    public function add() {
        
        return view('backend.Admin.Devices.add');
    }
    public function store(Request $request){
        
    }

}
