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
			<form action="{{route('save.client')}}" method="post" class="form-horizontal">
				@csrf
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-3 control-label">Name</label>
						<div class="col-md-4">
							<input type="text" name="name"  class="form-control input-circle" placeholder="Enter text">
							<div>{{$errors->first('name')}}</div>

						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Email Address</label>
						<div class="col-md-4">
							<div class="input-group">
								<span class="input-group-addon input-circle-left">
									<i class="fa fa-envelope"></i>
								</span>
								<input type="email" name="email" class="form-control input-circle-right" placeholder="Email Address"> </div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">phone number</label>
							<div class="col-md-4">
								<div class="input-group">
									<input type="number" name="number" class="form-control input-circle-left" placeholder="phone number">
									<span class="input-group-addon input-circle-right">
										<i class="fa fa-user"></i>
									</span>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-3 control-label">location</label>
							<div class="col-md-4">
								<input type="text" name="location" class="form-control spinner input-circle" placeholder="location"> </div>
							</div>

						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" class="btn btn-circle green">Submit</button>

								</div>
							</div>
						</div>
					</form>
					<!-- END FORM-->
				</div>
			</div>                                
			
			
			@endsection