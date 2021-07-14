<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Domain;
use App\Client;

use  App\Http\Controllers\backend\CrudController;

class DomainController extends CrudController
{
    public function addDomain()
    {
        $client = Client::all();
    	return view('domain/adddomain',compact('client'));
    }

    public function saveDomain(Request $request)
    {

    	$data = [
    		"domain_name" => $request['domainname'],
            "client_id"=> $request['client_id'],
    		"uuid" => $this->generateUniqueId(),
    		"project_name" => $request['projectname'],
    		"purchase_date" => $request['purchasedate'],
    		"price" => $request['price'],
    		'created_at' => \Carbon\Carbon::now(),
    	];
    	$response = $this->save($data,'domains');
    	return redirect('viewdomain');
    }

    public function viewDomain()
    {
    	$domains = $this->view('domains');
    	return view('domain/viewdomain',compact('domains'));
    }

    public function editDomain($id)
    {
    	$domain = $this->edit('domains',$id);
    	return view('domain/updatedomain',compact('domain'));
    }

    public function updateDomain(Request $request,$id)
    {

    	$data = [
    		"domain_name" => $request['domainname'],
            "client_id"=> $request['client_id'],
    		"uuid" => $this->generateUniqueId(),
    		"project_name" => $request['projectname'],
    		"purchase_date" => $request['purchasedate'],
    		"price" => $request['price'],
    		'updated_at' => \Carbon\Carbon::now(),
    	];
    	$domain = $this->update($data,'domains',$id);
    	return redirect('viewdomain');

    }

    public function deleteDomain($id)
    {
    	$domain = $this->delete('domains',$id);
    	return redirect('viewdomain');
    }

    public function vieweachDomain($id)
    {
    	$final = [];
    	$final['test'] = 'test';
    	$domain = $this->vieweach('domains',$id);
    	$final['domain'] = $domain;

    	return view('domain/vieweachdomain', $final);
    }

    public function generateUniqueId()
    {
        $uuid = Str::uuid()->toString().mt_rand(5, 100000);
        $checkUUID = Domain::where('uuid',$uuid)->get()->first();
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
