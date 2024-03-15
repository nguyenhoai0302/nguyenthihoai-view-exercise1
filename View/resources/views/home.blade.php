<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Your Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    
</style>
<body>
    <!-- Your HTML Content Here -->
    @include('layouts.sidebar')
    @include('layouts.header')
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('/assets/css/js.js') }}"></script>
    {{-- <script src="{{ asset('/assets/css/chart.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


