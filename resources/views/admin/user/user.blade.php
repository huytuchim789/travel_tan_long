@extends('admin.layouts.app')

@section('head')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Danh sách khách hàng</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('user.create') }}">Tạo khách hàng mới</a></li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
@endsection

@section('main-content')
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Tất cả khách hàng</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>Thứ tự</th>
								<th>Tên khách hàng</th>
								<th>Email khách hàng</th>
								<th>Hành Động </th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
								
									<td>
										<!-- <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit/Show</a> -->
										<form id="delete-tag-{{ $user->id }}" style="display: none;" method="POST" action="{{ route('user.destroy', $user->id) }}">
											@csrf
											@method('DELETE')
										</form>
										<a href="" onclick="if(confirm('Are you sure want to delete')){event.preventDefault();document.getElementById('delete-tag-{{ $user->id }}').submit();}else{event.preventDefault();}" class="btn btn-sm btn-danger">Xóa</a>
									</td>
								</tr>
							@endforeach
							
						</tbody>
						<tfoot>
							
						</tfoot>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
@endsection


@section('script')
<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
	$(function () {
		$("#example1").DataTable();
	});
</script>
@endsection

