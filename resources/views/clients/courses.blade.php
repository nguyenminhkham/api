@extends('layouts.client')
@section('navbar')
    <x-package-navbar/>
@endsection
@section('courses')
    <h1>Tất cả khóa học</h1>
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
