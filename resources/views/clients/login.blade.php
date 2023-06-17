@extends('layouts.client')
@section('navbar')
    <x-package-navbar/>
@endsection
@section('name')
    <h1>Login Page</h1>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.dropdown').click(function() {
            $(this).children('.dropdown-content').toggleClass('active');
            });
        });
    </script>
@endsection
