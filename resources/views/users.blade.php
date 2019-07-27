<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
	
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	
<body style="padding:10em;">

	<ol>
	@foreach ($users as $user)
		<li>{{ $user->name }}</li>

	@endforeach
	</ol>
	
	{{ $users->links() }}
</body>
</html>