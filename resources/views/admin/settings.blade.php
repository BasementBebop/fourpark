@extends('layouts.master')

@section('content')

	<div class="portlet box green col-md-6">
		<div class="portlet-title">
			<div class="caption">
				Edit Your Info
			</div>
		</div>

		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="#" class="form-horizontal">
				<div class="form-body">
					<div class="form-group">
						<label class="col-md-4 control-label">First Name</label>
						<div class="col-md-8">
							<input type="text" class="form-control" placeholder="Enter first name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Last Name</label>
						<div class="col-md-8">
							<input type="text" class="form-control" placeholder="Enter last name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Phone number</label>
						<div class="col-md-8">
							<input type="text" class="form-control" placeholder="Phone number">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Email Address</label>
						<div class="col-md-8">
							<div class="input-group">
								<span class="input-group-addon">
								<i class="fa fa-envelope"></i>
								</span>
								<input type="email" class="form-control" placeholder="Email Address">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Old Password</label>
						<div class="col-md-8">
							<div class="input-group">
								<input type="password" class="form-control" placeholder="Password">
								<span class="input-group-addon">
								<i class="fa fa-user"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">New Password</label>
						<div class="col-md-8">
							<div class="input-group">
								<input type="password" class="form-control" placeholder="Password">
								<span class="input-group-addon">
								<i class="fa fa-user"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Confirm Password</label>
						<div class="col-md-8">
							<div class="input-group">
								<input type="password" class="form-control" placeholder="Password">
								<span class="input-group-addon">
								<i class="fa fa-user"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn blue">Submit</button>
							<button type="button" class="btn default">Cancel</button>
						</div>
					</div>
				</div>
			</form>
			<!-- END FORM-->
		</div>

	</div>

@stop