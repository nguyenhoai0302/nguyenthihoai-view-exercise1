<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/ecommerces/header.css') }}">

<header>
    <div class="header">
        <img src="https://www.imprima.com/wp-content/uploads/2021/05/imprima-logo-new.svg" class="img">
        <div class="search">
            <input type="text" class="form-control" placeholder="Search product"> 
            <i class="fa fa-search" aria-hidden="true"></i>
        </div> 
        <div class="profile">
            <img src="assets/images/client.png" alt="Profile">
            <div class="content">
                <p class="">Deego Morata</p>
                <p class="">Chart</p>
                <p class="">Orders</p>
            </div>
        </div>
    </div>
    <hr>
</header>
@include('ecommerces.product');