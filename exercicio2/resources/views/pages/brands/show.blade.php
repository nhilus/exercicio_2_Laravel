@extends('master.main')
@section('content')
    {{$brand->id}}
    {{$brand->brandName}}
    {{$brand->created_at}}
    {{$brand->updated_at}}
@endsection
