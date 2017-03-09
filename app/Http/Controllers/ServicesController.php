<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Services;

class ServicesController extends Controller
{
    public function index(){
        
        $allServices = Services::where('state_id', 1)->get();
        
        return view('services', compact("allServices"));
        
    }
    
    public function editService($service_id){
        
        $service = Services::find($service_id);
        
        return view('servicesEdit', compact("service"));
        
    }
    
    public function newService(Request $request){
        
        Services::create([
           "name" => $request->input('name'),
            "description" => $request->input('description'),
            "state_id" => $request->input('state')
        ]);
        
        
        return redirect()->back();
    }
    
    public function edit($service_id, Request $request){
        
        Services::find($service_id)->update([
           "name" => $request->input('name'),
            "description" => $request->input('description'),
            "state_id" => $request->input('state')
        ]);
        
        
        return redirect('services');
    }
    
    public function inactiveService($service_id){
        
        $service = Services::find($service_id);
        
        $service->update([
            "state_id" => 2 
        ]);
        
        return redirect()->back();
        
    }
}
