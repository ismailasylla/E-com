@extends('layout.main')

@section('content')

<div class="container" style="margin-top:100px ">


    <style>
        .my-input {
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>

    <form>
        <div>
            <label>Name</label>
            <input class="my-input">
        </div>
        <div>
            <label>Card</label>
            <!-- Using the same "my-input" class on the -->
            <!-- regular input above and on this container. -->
            <div class="my-input" id="card-element"></div>
        </div>
    </form>




</div>

@endsection