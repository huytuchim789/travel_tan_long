@extends('admin.layouts.app')


@section('content-header')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tin nhắn người đặt hàng</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('message.index') }}">Danh sách đặt hàng</a></li>
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
			<div class="form-group">
				<label>Họ và tên người đặt hàng</label>
				<input type="text" value="{{ $contact->name }}" class="form-control" readonly="True">
			</div>
			<div class="form-group">
				<label>Tên thông tin đặt tour</label>
				<input type="text" value="{{ $contact->tour_title }}" class="form-control" readonly="True">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" value="{{ $contact->email }}" class="form-control" readonly="True">
			</div>
			<div class="form-group">
				<label>Tin nhắn</label>
				<textarea readonly="True" class="form-control">{{ $contact->message }}</textarea>
			</div>
		</div>
	</div>
</section>
@endsection

