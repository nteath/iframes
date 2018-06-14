@extends('layouts.master')

@section('content')
    <p>I am the child</p>
@endsection

@section('footer.js')
    @parent

    <script>
        console.log(document.referrer);
        console.log("I am the child without parent footer.");
    </script>
@endsection