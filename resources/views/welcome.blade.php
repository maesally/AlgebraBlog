<!DOCTYPE html>
<html>
    <head>
        <title>Laravel projekt</title>
    </head>
    <body>
        <h2>Dobrodošli!</h2>
		@foreach ($items as $item)
			<a href="/item/{{ $item->id }}">
			{{ $item->title }}
			<br />
		@endforeach
    </body>
</html>
