@extends('layouts.app')

@section('content')

    <div class='container'>
    <h1>Contact Page</h1>
    <p class="lead">Please use this form to contact the site owner.</p>

    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

        </div>
    </form>
    </div>
@endsection



