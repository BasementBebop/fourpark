@extends('layouts.master')

@section('content')

	<div class="col-md-12">
		<!-- BEGIN EMPLOYEES TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					Employees
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<a href="/employees/create" class="btn green-meadow">New User <i class="fa fa-plus"></i></a>

							</div>
						</div>
					</div>
				</div>
				<table class="table table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Parking Spot</th>
							<th>Wants Spot</th>
							<th>Active</th>
							<th>Admin</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td> {{ $user->first_name }} </td>
								<td> {{ $user->last_name }} </td>
								<td> {{ $user->email }} </td>
								<td> {{ $user->phone_number }} </td>
								<td>
									@if ($user->has_spot == 1)
										Yes
									@else
										No
									@endif
								</td>	
								<td>
									@if ($user->wants_spot == 1)
										Yes
									@else
										No
									@endif
								</td>	
								<td>
									@if ($user->active == 1)
										Yes
									@else
										No
									@endif
								</td>

								<td>
									@if ($user->isAdmin())
										Yes
									@else
										No
									@endif
								</td>
								<td><a href="/employees/{{ $user->id }}/edit" class="btn btn-sm bg-green-meadow">Edit</a></td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'action' => ['UsersController@destroy', $user->id]]) !!}

										{!! Form::submit('Delete', ['class' => 'btn btn-sm bg-red-intense']) !!}
									{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- END EMPLOYEES TABLE PORTLET-->
	</div>
@stop