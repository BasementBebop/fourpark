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
				{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update'], 'class' => 'form-horizontal']) !!}
					<div class="form-body">
						<div class="form-group" data-toggle="buttons">
							<label class="col-md-4 control-label">Alert Settings</label>
							<div class="col-md-8">



								<div class="btn-group" data-toggle="buttons">
									@if ($user->alert_setting == 'email')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
											{!! Form::radio('alert_setting', 'email', null, ['class' => 'toggle']) !!}
											Email
										</label>
									@if ($user->alert_setting == 'sms')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
											{!! Form::radio('alert_setting', 'sms', null, ['class' => 'toggle']) !!}
											SMS
										</label>
									@if ($user->alert_setting == 'both')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
											{!! Form::radio('alert_setting', 'both', null, ['class' => 'toggle']) !!}
											Both
										</label>
									@if ($user->alert_setting == 'none')
										<label class="btn btn-default active">
									@else
										<label class="btn btn-default">
									@endif
											{!! Form::radio('alert_setting', 'none', null, ['class' => 'toggle']) !!}
											None
										</label>
								</div>							
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('phone_number', 'Phone Number', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('email', 'Email Address', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::text('email', null, ['class' => 'form-control']) !!}
							</div>
						</div>
{{-- 						<div class="form-group">
							{!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-8">
								<div class="input-group">
									{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required']) !!}
									<span class="input-group-addon">
									<i class="fa fa-user"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
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
 --}}					</div>
					<div class="form-actions">
						<div class="row">
							<div class="col-md-offset-3 col-md-9">
								{!! Form::submit('Submit', ['class' => 'btn blue']) !!}
								{!! Form::submit('Cancel', ['class' => 'btn default']) !!}
							</div>
						</div>
					</div>
				{!! Form::close() !!}

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