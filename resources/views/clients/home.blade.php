@extends('layouts.client')
@section('navbar')
    <x-package-navbar/>
@endsection
@section('courses')
    <x-package-courses :courses="$courses"/>
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
