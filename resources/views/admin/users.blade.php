@extends('layouts.master')

@section('content')

	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
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
								<button id="sample_editable_1_new" class="btn green">
								Add New <i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
				<thead>
				<tr>
					<th>
						 First Name
					</th>
					<th>
						 Last Name
					</th>
					<th>
						 Email
					</th>
					<th>
						 Parking Spot
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
						Laura
					</td>
					<td>
						Atwell
					</td>
					<td>
						test@adpearance.com
					</td>
					<td class="center">
						Yes
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
				<tr>
					<td>
						Aaron
					</td>
					<td>
						James
					</td>
					<td>
						test@adpearance.com
					</td>
					<td class="center">
						Yes
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
				<tr>
					<td>
						Anne
					</td>
					<td>
						Jansa
					</td>
					<td>
						test@adpearance.com
					</td>
					<td class="center">
						No
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
				<tr>
					<td>
						Calvin
					</td>
					<td>
						Mesman
					</td>
					<td>
						test@adpearance.com
					</td>
					<td class="center">
						Yes
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
				<tr>
					<td>
						Jeff
					</td>
					<td>
						Otis
					</td>
					<td>
						test@adpearance.com
					</td>
					<td class="center">
						No
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
				<tr>
					<td>
						Geoff
					</td>
					<td>
						Shaugher
					</td>
					<td>
						test@adpearance.com
					</td>
					<td class="center">
						No
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
				</tbody>
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>




@stop