@extends('layouts.app')

@section('content')
	@foreach ($trains as $train)
		<div>
			<h1>Il Treno {{ $train->train_code }} sta per lasciare {{ $train->departure_station }} alle
				{{ $train->departure_time }}.
		</div>
	@endforeach
@endsection
