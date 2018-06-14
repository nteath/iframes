@extends('layouts.master')

@section('content')

    <h1>I am the parent</h1>

    <iframe id="myIframe"  src="/child" frameborder="0"></iframe>
@endsection

@section('footer.js')
    @parent

    <script>
        window.iframeManager.iframeResizer({log:true}, '#myIframe');
    </script>
@endsection