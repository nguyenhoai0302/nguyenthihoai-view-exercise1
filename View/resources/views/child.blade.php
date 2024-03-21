{{-- Xây dựng layout bằng tính kế thừa --}}

@extends('components.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent 
    <p>This is appended to the sidebar.</p>
@endsection

@section('content')
    <p>This is my content.</p>
@endsection
