<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no" />    
<link rel="shortcut icon" href="favicon.ico"/>
<link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('user/css/jquery-ui.structure.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('user/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('user/css/DateTimePicker.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('user/../../../maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}">        
<link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css"/>   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css"/>
{{-- <script type="text/javascript" src={{asset('user/js/jquery-2.1.4.js')}}></script>
<script type="text/javascript" src={{asset('user/js/jquery-ui.min.js')}}></script>
<script type="text/javascript" src={{asset('user/js/DateTimePicker.min.js')}}></script> --}}
<title>@yield('title', 'Traveler\'s bd - Journy with enjoy')</title>
<style>
	input {
		color: #212121 !important;
	}
</style>
@section('head')
	@show

<script>
    (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
        t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
    })(window, document, '_gscq','script','{{ asset('user/../../../widgets.getsitecontrol.com/81599/script.js') }}');
</script>

{{-- <script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker();
});
</script> --}}