@extends('admin.layouts.app')


@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tạo khách hàng</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('user.index') }}">Danh sách khách hàng</a></li>
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
			<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title">
							Tạo khách hàng ở đây
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
							<label for="tag">Tên</label>
							<input type="text" name="name" class="form-control" id="tag" placeholder="Tên">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="phone">SĐT</label>
							<input type="number" name="phone" class="form-control" id="phone" placeholder="SĐT">
						</div>					
						<div class="form-group">
							<label for="password">Mật khẩu</label>
							<input type="password" name="password" class="form-control" id="password" placeholder="Mật khẩu">
						</div>					
						<div class="form-group">
							<label for="confirm_password">Xác nhận mật khẩu</label>
							<input type="password" name="password_confirmation" class="form-control" id="confirm_password" placeholder="Xác nhận">
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label><input name="status" value="1" type="checkbox"> Tài khoản sẵn sàng</label>
							</div>
						</div>
						<div class="form-group row">
							<label for="confirm_password"> </label>
							@foreach ($roles as $role)
								<div class="col-lg-2">
									<div class="checkbox">
										<label><input name="role[]" value="{{ $role->id }}" type="checkbox">{{ $role->name }}</label>
									</div>
								</div>
							@endforeach													
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Lưu</button>
					</div>
				</div>
			</form>
		</div>
		<!-- /.col-->
	</div>
	<!-- ./row -->
</section>
@endsection

