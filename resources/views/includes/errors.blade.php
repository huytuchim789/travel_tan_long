@if (count($errors) > 0)
	@foreach ($errors->all() as $error)
		<p class="alert alert-danger mt-4">{{ $error }}</p>
	@endforeach
@endif

@if (session()->has('message'))
	<p class="alert alert-success">{{ session('message') }}</p>
@endif