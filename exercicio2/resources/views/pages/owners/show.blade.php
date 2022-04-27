@extends('master.main')
@section('content')

    {{$owner->id}}
    {{$owner->name}}
    {{$owner->birth_date}}
    {{$owner->country->name}}
    {{$owner->wallet_money}}
        @foreach($owner-> cars as $car)
            {{$car->registration}}
        @endforeach
    {{$owner->created_at}}
    {{$owner->updated_at}}
@endsection
