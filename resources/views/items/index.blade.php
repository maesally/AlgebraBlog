<!DOCTYPE html>
<html lang="hr">
    <head>
	<meta charset="utf-8">
		<title>AlgebraBlog</title>
	</head>
	<body>
		@foreach ($items as $item)
		<h2><a href="{{ $item->id }}">{{ $item->title }}</a></h2>
		<div>{{ $item->Content }}</div>
		@endforeach
	</body>
</html>