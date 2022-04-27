@extends('master.main')

@section('content')

    @component('components.tables.tableCountries', ['countries'=>$countries])
    @endcomponent


@endsection
