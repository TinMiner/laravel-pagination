<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Items</title>
	
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>

<div class="container">
	@foreach(array_chunk($items->all(),3) as $row)
	<div class="row">
		@foreach($row as $item)
		<article class="col-md-4">
			<h2>{{ $item->title }}</h2>
			<img src="{{ $item->image }}" alt="{{ $item->image }}">
			<div class="body">
			
			{{ $item->description }}
			
			</div>
		</article>
		
		@endforeach
	</div>
	@endforeach
	
	{{ $items->links() }}
</div>

</body>
</html>

<!--

<article class="col-md-4">
			<h2>{{ $item->title }}</h2>
			<img src="{{ $item->image }}" alt="{{ $item->image }}">
			<div class="body">
			
			{{ $item->description }}
			
			</div>
		</article>
-->