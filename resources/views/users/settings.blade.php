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
				<div class="scroller" style="height:300px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
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
	</div>
	{{-- END INSTRUCTIONS PORTLET --}}
@stop