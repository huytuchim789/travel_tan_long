@extends('admin.layouts.app')


@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Create Permission</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('permission.index') }}">All Permission</a></li>
				</ol>
			</div>
		</div>
	</div>
</section>
@endsection


@section('main-content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('permission.store') }}" method="POST">
				@csrf
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title">
							Create Your Permission Here
						</h3>
						@include('includes.errors')
						<!-- tools box -->
						<div class="card-tools">
							<button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
							title="Collapse">
							<i class="fas fa-minus"></i></button>
						</div>
						<!-- /. tools -->
					</div>
					<!-- /.card-header -->
					<div class="card-body pad">
						<div class="form-group">
							<label for="permission">Permission name</label>
							<input type="text" name="name" class="form-control" id="permission" placeholder="Permission name">
						</div>
						<div class="form-group">
							<label for="id">Permission for</label>
							<select class="form-control" name="for" id="for">
								<option selected disable value="">Select permission for</option>
								<option value="user">User</option>
								<option value="blog">Blog</option>
								<option value="tour">Tour</option>
								<option value="s_tour">Special Tour</option>
								<option value="others">Others</option>
							</select>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /.col-->
	</div>
	<!-- ./row -->
</section>
@endsection

