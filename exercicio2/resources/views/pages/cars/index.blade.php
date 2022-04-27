@extends('master.main')

@section('content')

    @component('components.tables.tableCars', ['cars'=>$cars])
    @endcomponent


@endsection
