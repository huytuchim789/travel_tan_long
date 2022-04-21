@extends('admin.layouts.app')


@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tạo Danh mục blogs</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('category.index') }}">Tất cả danh mục</a></li>
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
			<form action="{{ route('category.store') }}" method="POST">
				@csrf
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title">
							Tạo mới danh mục
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
							<input type="text" name="name" class="form-control" id="tag" placeholder="Tên danh mục">
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
