@extends('admin.layouts.app')


@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Create Role</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('role.index') }}">All Role</a></li>
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
			<form action="{{ route('role.store') }}" method="POST">
				@csrf
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title">
							Create Your Role Here
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
							<label for="role">Role name</label>
							<input type="text" name="name" class="form-control" id="role" placeholder="Role name">
						</div>
						<div class="row">
							<div class="col-md-2">
								<label for="role">Tour Permissions</label>
								@foreach ($permissions as $permission)
									@if ($permission->for == 'tour')	
										<div class="checkbox">
											<label><input name="permission[]" value="{{ $permission->id }}" type="checkbox"> {{ $permission->name }}</label>
										</div>
									@endif
								@endforeach
							</div>
							<div class="col-md-3">
								<label for="role">Special Tour</label>
								@foreach ($permissions as $permission)
									@if ($permission->for == 's_tour')	
										<div class="checkbox">
											<label><input name="permission[]" value="{{ $permission->id }}" type="checkbox"> {{ $permission->name }}</label>
										</div>
									@endif
								@endforeach
							</div>
							<div class="col-md-3">
								<label for="role">Blog Permissions</label>
								@foreach ($permissions as $permission)
									@if ($permission->for == 'blog')	
										<div class="checkbox">
											<label><input name="permission[]" value="{{ $permission->id }}" type="checkbox"> {{ $permission->name }}</label>
										</div>
									@endif
								@endforeach
							</div>
							<div class="col-md-2">
								<label for="role">User Permissions</label>
								@foreach ($permissions as $permission)
									@if ($permission->for == 'user')	
										<div class="checkbox">
											<label><input name="permission[]" value="{{ $permission->id }}" type="checkbox"> {{ $permission->name }}</label>
										</div>
									@endif
								@endforeach

							</div>
							<div class="col-md-2">
								<label for="role">Others</label>
								@foreach ($permissions as $permission)
									@if ($permission->for == 'others')	
										<div class="checkbox">
											<label><input name="permission[]" value="{{ $permission->id }}" type="checkbox"> {{ $permission->name }}</label>
										</div>
									@endif
								@endforeach

							</div>
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

