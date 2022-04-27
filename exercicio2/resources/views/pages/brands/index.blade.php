@extends('master.main')

@section('content')

    @component('components.tables.tableBrands', ['brands'=>$brands])
    @endcomponent


@endsection
