@extends('layouts.master')

@section('feedbackResults')
    <h1>Your feedback has been submitted.</h1>

    <p>{{ $email }}, thank you for the following feedback:</p>
    <p>{{ $feedback }}</p>

    @if(isset($contact))
        <p>Someone will contact you soon at the following e-mail address: {{ $email }}</p>
    @else
        <p>No additional action is required.</p>
    @endif

@endsection
