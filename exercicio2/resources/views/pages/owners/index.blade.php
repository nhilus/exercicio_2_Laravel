@extends('master.main')

@section('content')

    @component('components.tables.tableOwners', ['owners'=>$owners])
    @endcomponent


@endsection
