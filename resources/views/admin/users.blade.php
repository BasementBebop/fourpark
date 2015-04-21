@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN SAMPLE TABLE PORTLET-->
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						Users
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-toolbar">
						<div class="row">
							<div class="col-md-6">
								<div class="btn-group">
									<a href="new_user" class="btn green">
										Add New <i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="table-scrollable">
						<table class="table table-hover">
						<thead>
						<tr>
							<th>
								 Full Name
							</th>
							<th>
								 Email
							</th>
							<th>
								 Parking Space
							</th>
							<th>
								Edit
							</th>
							<th>
								Delete
							</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								Laura Atwell
							</td>
							<td>
								 test@adpearance.com
							</td>
							<td>
								 No
							</td>
							<td>
								<a href="edit_user" class="btn default btn-sm purple">
								<i class="fa fa-edit"></i> Edit </a>
							</td>
							<td>
								<a href="javascript:;" class="btn default btn-sm red">
								<i class="fa fa-trash-o"></i> Delete </a>
							</td>
						</tr>
						<tr>
							<td>
								Aaron James
							</td>
							<td>
								 test@adpearance.com
							</td>
							<td>
								 Yes
							</td>
							<td>
								<a href="edit_user" class="btn default btn-sm purple">
								<i class="fa fa-edit"></i> Edit </a>
							</td>
							<td>
								<a href="javascript:;" class="btn default btn-sm red">
								<i class="fa fa-trash-o"></i> Delete </a>
							</td>
						</tr>
						<tr>
							<td>
								Anne Jansa
							</td>
							<td>
								 test@adpearance.com
							</td>
							<td>
								 Yes
							</td>
							<td>
								<a href="edit_user" class="btn default btn-sm purple">
								<i class="fa fa-edit"></i> Edit </a>
							</td>
							<td>
								<a href="javascript:;" class="btn default btn-sm red">
								<i class="fa fa-trash-o"></i> Delete </a>
							</td>
						</tr>
						<tr>
							<td>
								Calvin Mesman
							</td>
							<td>
								 test@adpearance.com
							</td>
							<td>
								 No
							</td>
							<td>
								<a href="edit_user" class="btn default btn-sm purple">
								<i class="fa fa-edit"></i> Edit </a>
							</td>
							<td>
								<a href="javascript:;" class="btn default btn-sm red">
								<i class="fa fa-trash-o"></i> Delete </a>
							</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END SAMPLE TABLE PORTLET-->
		</div>


@stop