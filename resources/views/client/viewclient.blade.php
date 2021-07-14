@extends('cd-admin.admin-master')
@section('content')


<div class="portlet light bordered">
	<div class="portlet-title">
		<div class="caption font-dark">
			<i class="icon-settings font-dark"></i>
			<span class="caption-subject bold uppercase"> Client Information</span>
		</div>
		<div class="actions">
			<div class="btn-group btn-group-devided" data-toggle="buttons">
				<!-- <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active"> -->
					<!-- <input type="radio" name="options" class="toggle" id="option1">Actions</label> -->
					<!-- <label class="btn btn-transparent dark btn-outline btn-circle btn-sm"> -->
						<!-- <input type="radio" name="options" class="toggle" id="option2">Settings</label> -->
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<button id="sample_editable_1_new" class="btn sbold green"><a href="{{url('addclient')}}" style="color: white; text-decoration: none">Add New</a> 
									<i class="fa fa-plus"></i>
								</button>
							</div>
						</div>

					</div>
				</div>
				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
					<thead>
						<tr>

							<th> Client Name </th>
							<th> Email </th>
							<th>Location</th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						@foreach($clients as $client)
						<tr class="odd gradeX">
							
							<td> {{$client->name}} </td>
							<td>
								{{$client->email}}
							</td>
							<td>{{$client->location}}</td>
							<td>
								<button type="button" class="btn btn-primary"><a href="{{route('edit.client',[$client->uuid])}}" style="color: white; text-decoration: none"><i class="fa fa-edit"></i> edit</a></button>
								<button type="button" class="btn btn-danger"><a onclick="return confirm('Are you sure ?')" href="{{route('delete.client',[$client->uuid])}}" style="color: white; text-decoration: none"><i class="fa fa-trash"></i> delete</a></button>
								<button type="button" class="btn btn-info"><a href="{{route('vieweach.client',[$client->uuid])}}" style="color: white; text-decoration: none"><i class="fa fa-eye"></i> view</a></button>
							</td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>
@endsection