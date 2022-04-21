@extends('admin.layouts.app')


@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Edit User</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('user.index') }}">All User</a></li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
@endsection


@section('main-content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title">
							Edit Your User Here
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
							<label for="tag">Name</label>
							<input type="text" name="name" class="form-control" id="tag" value="{{ $user->name }}">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
						</div>
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="number" name="phone" class="form-control" id="phone" value="{{ $user->phone }}">
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label><input name="status" value="1"
								@if ($user->status == 1)
									checked 
								@endif
								 type="checkbox"> Status</label>
							</div>
						</div>
						<div class="form-group row">
							<label for="confirm_password">Assign Role : </label>
							@foreach ($roles as $role)
								<div class="col-lg-2">
									<div class="checkbox">
										<label><input name="role[]" value="{{ $role->id }}"
										@foreach ($user->roles as $user_role)
											@if ($user_role->id == $role->id)
												checked 
											@endif
										@endforeach
										 type="checkbox">{{ $role->name }}</label>
									</div>
								</div>
							@endforeach													
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

