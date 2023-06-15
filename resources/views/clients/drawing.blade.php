@extends('layouts.client')
@section('navbar')
    <x-package-navbar/>
@endsection
@section('name')
    <h1>Drawing page</h1>
@endsection
@section('courses')
    <div>Tất cả khóa học</div>
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
