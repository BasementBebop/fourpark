@extends('layouts.master')

@section('content')
	
	{{-- BEGIN EDIT SETTINGS PORTLET --}}
	<div class="col-md-6">
		<div class="portlet box green-meadow">
			<div class="portlet-title">
				<div class="caption">
					Edit Account Info
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->

				<form action="#" class="form-horizontal">
					<div class="form-body">
						<div class="form-group" data-toggle="buttons">
							<label class="col-md-4 control-label">Alert Settings</label>
							<div class="col-md-8">
								<div class="btn-group" data-toggle="buttons">
									@if (Auth::user()->alert_setting == 'email')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
									<input type="radio" class="toggle"> Email </label>
									@if (Auth::user()->alert_setting == 'sms')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
									<input type="radio" class="toggle"> SMS </label>
									@if (Auth::user()->alert_setting == 'both')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
									<input type="radio" class="toggle"> Both </label>
									@if (Auth::user()->alert_setting == 'none')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
									<input type="radio" class="toggle"> None </label>
								</div>							
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">First Name</label>
							<div class="col-md-8">
								<input type="text" class="form-control" value="{{ Auth::user()->first_name }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Last Name</label>
							<div class="col-md-8">
								<input type="text" class="form-control" value="{{ Auth::user()->last_name }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Phone number</label>
							<div class="col-md-8">
								<input type="text" class="form-control" value="{{ Auth::user()->phone_number }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Email Address</label>
							<div class="col-md-8">
								<input type="email" class="form-control" value="{{ Auth::user()->email }}">
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
	</div>
	{{-- END EDIT SETTINGS PORTLET --}}
	{{-- BEGIN INSTRUCTIONS PORTLET --}}
	<div class="col-md-6">
		<div class="portlet solid blue">
			<div class="portlet-title">
				<div class="caption">
					FourPark Instructions
				</div>
			</div>
			<div class="portlet-body">
				<p class="bold">Parking spots will be assigned randomly.</p>
				<p class="bold">I have a parking spot:</p>
				<ul>
					<li>You can give up your spot until 5pm the night before. After 5pm, no changes can be made until the next morning.</li>
					<li>You can reclaim your spot if it has not been assigned to another employee.</li>
				</ul>
				<p class="bold">I want a parking spot:</p>
				<ul>
					<li>If you are assigned a spot, you have:
						<ul>
							<li>
								30 minutes to accept at night
							</li>
							<li>
								10 minutes to accept in the morning
							</li>
						</ul>
					</li>
					<li>
						You can accept the spot, deny the spot, or do nothing.
					</li>
				</ul>
			</div>
		</div>
	</div>
	{{-- END INSTRUCTIONS PORTLET --}}
@stop