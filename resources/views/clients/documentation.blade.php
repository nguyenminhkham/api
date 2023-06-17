@extends('layouts.client')
@section('navbar')
    <x-package-navbar/>
@endsection
@section('name')
    <h1>Documentation Page</h1>
@endsection
@section('courses')
    <h1>Tất cả khóa học</h1>
    <x-package-courses :courses="$courses"/>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
