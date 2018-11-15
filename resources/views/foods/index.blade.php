@extends('layouts.master')

@section('blankForm')


<p>This is a proof of concept for a future project that may have a place to submit feedback regarding a product or service.</p>

<p>* indicates required field</p>
<form method="GET" action="/results">
    {{ csrf_field() }}
    <fieldset class="outsideBorder">
        <fieldset class="insideBorder">
            @include('foods.field-validation', ['field' => 'email'])
            <label> * E-mail address
                <input type="text" name="email" id="email" value="{{ old('email') }}">
            </label>
        </fieldset>
        <fieldset class="insideBorder">
            @include('foods.field-validation', ['field' => 'feedback'])
            <label>* Please provide feedback in the area below.</label><br />
            <input type="textarea" name="feedback" value="{{ old('feedback') }}">
        </fieldset>
        <fieldset class="insideBorder">
            <input type="checkbox" name="contact"><label>Yes, I want to be contacted regarding my feedback.</label>
        </fieldset>
        <input type="submit" value="Submit feedback" name="button">
    </fieldset>
</form>


@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection


