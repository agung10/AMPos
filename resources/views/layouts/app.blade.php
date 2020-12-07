
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('layouts.component.head')
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
    
    <!-- [ navigation menu ] start -->
    @include('layouts.component.sidebar')
	<!-- [ navigation menu ] end -->
    
    <!-- [ Header ] start -->
	@include('layouts.component.header')
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
@yield('content')


<!-- Required Js -->
</body>
@include('layouts.component.script')

<script>
        setInterval(function(){
        $('#Info').css('background', '#2196f3').fadeIn("slow");
    }, 500);
    setInterval(function(){
        $('#Info').css('background', '#9ccc65').fadeIn("slow");
    }, 1000);
</script>

</html>
