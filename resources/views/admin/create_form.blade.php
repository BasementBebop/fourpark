{{-- BEGIN CREATE USER FORM (ADMIN ONLY) --}}
{!! Form::open(['action' => ['UsersController@store'], 'class' => 'form-horizontal']) !!}
	<div class="form-body">
		{{-- BEGIN ALERT SETTINGS --}}
		<div class="form-group" data-toggle="buttons">
			<label class="col-md-4 control-label">Alert Settings</label>
			<div class="col-md-8">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						{!! Form::radio('alert_setting', 'email', null, ['class' => 'toggle', 'required']) !!}
						Email
					</label>
					<label class="btn btn-default">
						{!! Form::radio('alert_setting', 'sms', null, ['class' => 'toggle', 'required']) !!}
						SMS
					</label>
					<label class="btn btn-default">
						{!! Form::radio('alert_setting', 'both', null, ['class' => 'toggle', 'required']) !!}
						Both
					</label>
					<label class="btn btn-default">
						{!! Form::radio('alert_setting', 'none', null, ['class' => 'toggle', 'required']) !!}
						None
					</label>
				</div>							
			</div>
		</div>
		{{-- END ALERT SETTINGS --}}
		{{-- BEGIN SPOT STATUS --}}
		<div class="form-group" data-toggle="buttons">
			<label class="col-md-4 control-label">Spot Status</label>
			<div class="col-md-8">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						{!! Form::radio('has_spot', 1, null, ['class' => 'toggle', 'required']) !!}
						Has Spot
					</label>
					<label class="btn btn-default">
						{!! Form::radio('has_spot', 0, null, ['class' => 'toggle', 'required']) !!}
						Doesn't Have Spot
					</label>
				</div>							
			</div>
		</div>
		{{-- END SPOT STATUS --}}
		{{-- BEGIN SPOT OPTIONS --}}
		<div class="form-group" data-toggle="buttons">
			<label class="col-md-4 control-label">Spot Options</label>
			<div class="col-md-8">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						{!! Form::radio('wants_spot', 1, null, ['class' => 'toggle', 'required']) !!}
						Want Spot
					</label>
					<label class="btn btn-default">
						{!! Form::radio('wants_spot', 0, null, ['class' => 'toggle', 'required']) !!}
						Don't Want Spot
					</label>
				</div>							
			</div>
		</div>
		{{-- END SPOT OPTIONS --}}
		{{-- BEGIN ADMIN --}}
		<div class="form-group" data-toggle="buttons">
			<label class="col-md-4 control-label">Admin</label>
			<div class="col-md-8">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						{!! Form::radio('admin', 1, null, ['class' => 'toggle', 'required']) !!}
						Admin
					</label>
					<label class="btn btn-default">
						{!! Form::radio('admin', 0, null, ['class' => 'toggle', 'required']) !!}
						Not Admin
					</label>
				</div>							
			</div>
		</div>
		{{-- END ADMIN --}}
		{{-- BEGIN ACTIVE --}}
		<div class="form-group" data-toggle="buttons">
			<label class="col-md-4 control-label">Active</label>
			<div class="col-md-8">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default">
						{!! Form::radio('active', 1, null, ['class' => 'toggle', 'required']) !!}
						Active
					</label>
					<label class="btn btn-default">
						{!! Form::radio('active', 0, null, ['class' => 'toggle', 'required']) !!}
						Not Active
					</label>
				</div>							
			</div>
		</div>
		{{-- END ACTIVE --}}
		{{-- BEGIN OTHER USER INFO --}}
		<div class="form-group">
			{!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('phone_number', 'Phone Number', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('phone_number', null, ['class' => 'form-control', 'required']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Email Address', ['class' => 'col-md-4 control-label']) !!}
			<div class="col-md-8">
				{!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
			</div>
		</div>
		{{-- END OTHER USER INFO --}}
		{{-- BEGIN PASSWORD --}}
{{--  		<div class="form-group">
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
	</div> --}}
	{{-- END PASSWORD --}}
	<div class="form-actions">
		<div class="row">
			<div class="col-md-offset-3 col-md-9">
				{!! Form::submit('Submit', ['class' => 'btn blue']) !!}
				{!! Form::submit('Cancel', ['class' => 'btn default']) !!}
			</div>
		</div>
	</div>
{!! Form::close() !!}
{{-- END CREATE USER FORM (ADMIN ONLY) --}}