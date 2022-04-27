@extends('master.main')
@section('content')
    {{$country->id}}
    {{$country->name}}
        @foreach($country-> owner as $owner)
            {{$owner->name}}
        @endforeach
    {{$country->created_at}}
    {{$country->updated_at}}
@endsection
