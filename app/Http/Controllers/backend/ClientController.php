<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Client;

use  App\Http\Controllers\backend\CrudController;

class ClientController extends CrudController
{

    public function addClient()
    {
    	return view('client.addclient');
    }

    public function saveClient(Request $request)
    {
        
        $data = [
            'name' => $request['name'],
            'uuid' => $this->generateUniqueId(),
            'email' => $request['email'],
            'officenumber' => $request['number'],
            'location' => $request['location'],
            'created_at' => \Carbon\Carbon::now(),
        ];
        $response = $this->save($data,'clients');
    	return redirect('viewclient');
    }

    public function generateUniqueId()
    {
        $uuid = Str::uuid()->toString().mt_rand(5, 100000);
        $checkUUID = Client::where('uuid',$uuid)->get()->first();
        if(!empty($checkUUID))
        {
            $unique_id = $this->generateUniqueId();
        }
        else
        {
            return $uuid;
        }
    }

    public function viewClient()
    {
    	$clients = $this->view('clients');
    	return view('client/viewclient',compact('clients'));
    }

    public function editClient($id)
    {
        $client = $this->edit('clients',$id);
    	return view('client/updateclient',compact('client'));

    }

    public function updateClient(Request $request,$id)
    {

        $data = [
            'name' => $request['name'],
            'uuid' => $this->generateUniqueId(),
            'email' => $request['email'],
            'officenumber' => $request['number'],
            'location' => $request['location'],
            'updated_at' => \Carbon\Carbon::now(),
        ];

        $client = $this->update($data,'clients',$id);

    	return redirect('viewclient');
    }

    public function deleteClient($id)
    {
        $client = $this->delete('clients',$id);
        return redirect('viewclient');
    }

    public function vieweachClient($id)
    {
        $client = $this->vieweach('clients',$id);
        return view('client/eachclient',compact('client'));
    }
}
