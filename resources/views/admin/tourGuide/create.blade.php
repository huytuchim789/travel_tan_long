@extends('admin.layouts.app')

@section('head')
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- summernote -->
	<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
@endsection

@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tạo mới HDV</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('tour-guide.index') }}">Tất cả HDV</a></li>
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
			<form action="{{ route('tour-guide.store') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="card card-outline card-info">
					<div class="card-header">
						<h3 class="card-title">
							Thêm mới HDV
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
							<label for="name">Tên</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên HDV">
						</div>
						<div class="form-group">
							<label for="name">Tuổi</label>
							<input type="number" name="age" class="form-control" id="name" placeholder="Tuổi HDV">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Ảnh</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" name="image" class="custom-file-input" id="exampleInputFile">
									<label class="custom-file-label" for="exampleInputFile">Chọn file</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text" id="">Tải lên</span>
								</div>
							</div>
						</div>
						<div class="form-check">
							<input type="checkbox" value="1" name="status" class="form-check-input" id="publish">
							<label class="form-check-label" for="publish">Sức khỏe ổn định</label>
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


@section('script')
	<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
	<!-- Summernote -->
	<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
	<script>
		$(function () {
			// Summernote
			$('.textarea').summernote()
			$('.select2').select2()
		})
	</script>
@endsection

