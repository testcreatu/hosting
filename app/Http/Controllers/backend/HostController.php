<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Host;
use  App\Http\Controllers\backend\CrudController;

class HostController extends CrudController
{
    public function addHost()
    {
    	return view('host.addhost');
    }

    public function saveHost(Request $request)
    {
    	$data = [
    		'domain_name' => $request['domain_name'],
    		'uuid' => $this->generateUniqueId(),
    		'space' => $request['space'],
    		'price' => $request['price'],
    		'purchase_date' => $request['purchasedate'],
    	];
    	$domain = $this->save($data,'hosts');
    	return redirect('viewhost');
    }

    public function viewHost()
    {
    	$hosts = $this->view('hosts');
    	return view('host.viewhost',compact('hosts'));
    }

    public function editHost($id)
    {
    	$host = $this->edit('hosts',$id);
    	return view('host.updatehost',compact('host'));
    }

    public function updateHost(Request $request,$id)
    {
    	$data = [
    		'domain_name' => $request['domain_name'],
    		'uuid' => $this->generateUniqueId(),
    		'space' => $request['space'],
    		'price' => $request['price'],
    		'purchase_date' => $request['purchasedate'],
    	];
    	$domain = $this->update($data,'hosts',$id);
    	return redirect('viewhost');
    }

    public function deleteHost($id)
    {
    	$host = $this->delete('hosts',$id);
    	return redirect('viewhost');
    }

    public function generateUniqueId()
    {
        $uuid = Str::uuid()->toString().mt_rand(5, 100000);
        $checkUUID = Host::where('uuid',$uuid)->get()->first();
        if(!empty($checkUUID))
        {
            $unique_id = $this->generateUniqueId();
        }
        else
        {
            return $uuid;
        }
    }


}
