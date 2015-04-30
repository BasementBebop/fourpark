{{-- BEGIN EDIT USER FORM (ADMIN ONLY) --}}
{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id], 'class' => 'form-horizontal']) !!}
	<div class="form-body">
		{{-- BEGIN ALERT SETTINGS --}}
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
		{{-- END ALERT SETTINGS --}}
		{{-- BEGIN SPOT STATUS --}}
		<div class="form-group" data-toggle="buttons">
			<label class="col-md-4 control-label">Spot Status</label>
			<div class="col-md-8">
				<div class="btn-group" data-toggle="buttons">
					@if ($user->has_spot == 1)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('has_spot', 1, null, ['class' => 'toggle']) !!}
							Has Spot
						</label>
					@if ($user->has_spot == 0)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('has_spot', 0, null, ['class' => 'toggle']) !!}
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
					@if ($user->wants_spot == 1)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('wants_spot', 1, null, ['class' => 'toggle']) !!}
							Want Spot
						</label>
					@if ($user->wants_spot == 0)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('wants_spot', 0, null, ['class' => 'toggle']) !!}
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
					@if ($user->admin == 1)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('admin', 1, null, ['class' => 'toggle']) !!}
							Admin
						</label>
					@if ($user->admin == 0)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('admin', 0, null, ['class' => 'toggle']) !!}
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
					@if ($user->active == 1)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('active', 1, null, ['class' => 'toggle']) !!}
							Active
						</label>
					@if ($user->active == 0)
						<label class="btn btn-default active">
					@else
						<label class="btn btn-default">
					@endif
							{!! Form::radio('active', 0, null, ['class' => 'toggle']) !!}
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
		{{-- END OTHER USER INFO --}}
		{{-- BEGIN PASSWORD --}}
 		{{-- <div class="form-group">
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
{{-- END EDIT USER FORM (ADMIN ONLY) --}}