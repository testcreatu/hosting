@extends('cd-admin.admin-master')
@section('content')

<div class="portlet box green">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-gift"></i>Form Actions On Bottom </div>
			<div class="tools">
				<a href="javascript:;" class="collapse"> </a>
				<a href="#portlet-config" data-toggle="modal" class="config"> </a>
				<a href="javascript:;" class="reload"> </a>
				<a href="javascript:;" class="remove"> </a>
			</div>
		</div>
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="{{route('update.domain',[$domain->uuid])}}" method="post" class="form-horizontal">
				@csrf
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Name</label>
						<div class="col-md-4">
							<input type="text" name="domainname"  class="form-control input-circle" value="{{$domain->domain_name}}">

						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Project Name</label>
						<div class="col-md-4">
							<input type="text" name="projectname"  class="form-control input-circle" value="{{$domain->project_name}}">

						</div>
					</div>
					<div class="form-group">
						
						<div class="form-group">
							<label class="col-md-3 control-label">purchasedate</label>
							<div class="col-md-4">
								<div class="input-group">
									<input type="date" name="purchasedate" class="form-control input-circle-left" value="{{$domain->purchase_date}}">
									<span class="input-group-addon input-circle-right">
										<i class="fa fa-user"></i>
									</span>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-3 control-label">price</label>
							<div class="col-md-4">
								<input type="number" name="price" class="form-control spinner input-circle" value="{{$domain->price}}"> </div>
							</div>

						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" class="btn btn-circle green">update</button>

								</div>
							</div>
						</div>
					</form>
					<!-- END FORM-->
				</div>
			</div>                                
			
			
			@endsection