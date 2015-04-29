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
								<button id="sample_editable_1_new" class="btn green-meadow">
								Add New <i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Parking Spot</th>
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
								<td>
									@if ($user->has_spot == 1)
										Yes
									@else
										No
									@endif
								</td>
								<td>
									<a class="edit" href="javascript:;">
									Edit </a>
								</td>
								<td>
									<a class="delete" href="javascript:;">
									Delete </a>
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