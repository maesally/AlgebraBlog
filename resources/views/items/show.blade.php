@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		
		<h2>{{ $item->title }}</h2>
		<h3>{{ $item->created_at }}</h3>
		<div>{{ $item->Content }}</div>
		
		<!-- Provjera da li je user vlasnik itema -->
		
		@if ( auth()->id() == $item->user_id )
		
		<br><a href="{{ url('/item/'.$item->id.'/del') }}" class="btn btn-danger">Obriši</a>
		
		@endif
		
		</div>
    </div>
</div>
@endsection