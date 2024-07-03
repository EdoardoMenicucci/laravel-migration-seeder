@extends('layouts.app')

@section('content')
	@foreach ($trains as $train)
		@if (str_contains($train->arrival_time, '2024-07-03'))
			<div>
				<h1>Il Treno {{ $train->train_code }} sta per lasciare {{ $train->departure_station }} alle
					{{ $train->departure_time }}.
			</div>
		@endif
	@endforeach
@endsection
