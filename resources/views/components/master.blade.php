<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{url('CSS/style.css')}}">
    <script src="{{url('JS/script.js')}}"></script>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        <form action="/search" class="d-flex justify-content-end ">
            <input type="text" name="search_query" placeholder="search produce" class="form-control " id="">
            <button class="btn btn-warning">Search</button>
        </form>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <div class="nav_list"> 
                    <a href="/index" class="nav_link active"> 
                        <i class=' bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="/view" class="nav_link"> 
                        <i class='bx bx-street-view' ></i>
                        <span class="nav_name">View Product</span> 
                    </a> 
                    <a href="/addProduct" class="nav_link">
                        <i class='bx bx-cart-add'></i>
                        <span class="nav_name">Add Product</span>
                    </a> 
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Main Components</h4>
        {{$slot}}
    </div>
    <!--Container Main end-->

</html>