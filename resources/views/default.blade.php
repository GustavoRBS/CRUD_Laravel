<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		@yield('content')
	</div>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	@include('sweetalert::alert')

</body>

</html>