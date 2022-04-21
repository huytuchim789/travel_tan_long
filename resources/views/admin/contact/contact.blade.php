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
				<h1>Danh sách booking</h1>
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
					<h3 class="card-title">Toàn bộ lịch</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên</th>
								<th>Email</th>
								<th>Giá</th>
								<th>Thời gian đi</th>
								<th>Số ngày đi</th>
								<th>Số Người</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($bookings as $booking)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $booking->user->name }}</td>
									<td>{{ $booking->user->email }}</td>
									<td>{{ $booking->price }}</td>
									<td>{{ $booking->start_book }}</td>
									<td>{{ \Carbon\Carbon::parse($booking->start_book)->diffInDays(\Carbon\Carbon::parse($booking->end_book)) }}</td>
									<td>{{ $booking->people }}</td>
									<td>
										<!-- {{-- action="{{ route('message.update', $contact->id) }}" --}} -->
									 <form id="contact-{{ $booking->contact->id }}" style="display: none;" method="POST" 	action="{{ route('message.update', $booking->contact->id) }}"
 >
											@csrf
											@method('PUT')
										</form> 
										 <a href="{{ route('message.update', $booking->contact->id) }}" onclick="event.preventDefault();document.getElementById('contact-{{ $booking->contact->id }}').submit();" class="btn btn-sm btn-warning">
											@if ($booking->contact->seen == 0)
						                      Unseen
						                    @elseif ($booking->contact->seen == 1)
						                      Seen
						                    @endif
										</a> 
										<form id="delete-{{ $booking->id }}" style="display: none;" method="POST" action="{{ route('message.destroy', $booking->id) }}">
											@csrf
											@method('DELETE')
										</form>
										<a href="" onclick="if(confirm('Are you sure want to delete')){event.preventDefault();document.getElementById('delete-contact-{{ $booking->id }}').submit();}else{event.preventDefault();}" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
							@endforeach
							
						</tbody>
						<tfoot>
							{{-- <tr>
								<th>STT</th>
								<th>Tên</th>
								<th>Email</th>
								<th>Giá</th>
								<th>Thời gian đi</th>
								<th>Số ngày đi</th>
								<th>Số Người</th>
								<th>Hành động</th>
							</tr> --}}
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

