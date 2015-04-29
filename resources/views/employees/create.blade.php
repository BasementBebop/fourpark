@extends('layouts.master')

@section('content')

	{{-- BEGIN EDIT SETTINGS PORTLET --}}
	<div class="col-md-6">
		<div class="portlet box green-meadow">
			<div class="portlet-title">
				<div class="caption">
					Add New User
				</div>
			</div>

			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				{!! Form::open(['action' => ['UsersController@store'], 'class' => 'form-horizontal']) !!}
					<div class="form-body">
						<div class="form-group" data-toggle="buttons">
							<label class="col-md-4 control-label">Alert Settings</label>
							<div class="col-md-8">
								<div class="btn-group" data-toggle="buttons">
										<label class="btn btn-default active">
											{!! Form::radio('alert_setting', 'email', null, ['class' => 'toggle']) !!}
											Email
										</label>
										<label class="btn btn-default">
											{!! Form::radio('alert_setting', 'sms', null, ['class' => 'toggle']) !!}
											SMS
										</label>
										<label class="btn btn-default">
											{!! Form::radio('alert_setting', 'both', null, ['class' => 'toggle']) !!}
											Both
										</label>
										<label class="btn btn-default">
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
						<div class="form-group">
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
{{-- 						<div class="form-group">
							{!! Form::label('password_confirmation', 'Password confirmation', ['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-8">
								<div class="input-group">
									{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password confirmation', 'required']) !!}
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


@stop