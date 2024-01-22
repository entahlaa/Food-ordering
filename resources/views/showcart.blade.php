<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public";

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>OmNom's Cafe</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/redirects" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/redirects" class="active">Home</a></li> 
                            
                            @auth    
                            <li><a href="{{url('/showcart',Auth::user()->id)}}">
                            Cart({{$count}})
                            </a></li>
                            @endauth
                            @guest
                            Cart[0]

                            @endguest
                           
                            

                            <li>
                            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <li>
                            <x-app-layout>
    
                            </x-app-layout>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                            
                        
                            </li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="top">
        <table align="center" bgcolor="skyblue" >
            <tr>
                <th style="padding: 30px;">Food Name</th>
                <th style="padding: 30px;">Price</th>
                <th style="padding: 30px;">Quantity</th>
                <th style="padding: 30px;">Action</th>
            </tr>
    <form action="{{url('orderconfirm')}}" method="post">
    @csrf
            @foreach ($data as $data)
            <tr align="center">
                <td style="padding:10px;"><input type="text" name="foodname[]" value="{{$data->title}}" hidden="">{{$data->title}}</td>
                <td style="padding:10px;"><input type="text" name="price[]" value="{{$data->price}}" hidden="">{{$data->price}}</td>
                <td style="padding:10px;"><input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">{{$data->quantity}}</td>
            <td style="padding:4px;"><a href="{{url('/remove',$data->id)}}" class="btn btn-warning">Remove</a></td>
            </tr>
            @endforeach

        </table>

        <div id="appear" align="center" style="padding: 10px;">
            <div style="padding: 10px;">
                <label>Name</label>
                <input type="text"name="name" placeholder="Name" id="name">
            </div>
            <div style="padding: 10px;">
                <label>Phone</label>
                <input type="number"name="phone" placeholder="Phone Number" id="phone">
            </div>
            <div style="padding: 10px;">
                <label>Address</label>
                <input type="text"name="address" placeholder="Address" id="address">
            </div>
            <div style="padding: 10px;">
            <input class="btn btn-danger" style="background-color:#C41E3A;" onmouseout="this.style.backgroundColor='#AA4A44'" onmouseover="this.style.backgroundColor='red'" type="reset" id="reset" value="Order Cancel">
            <input class="btn btn-success" style="background-color:#228B22;" onmouseout="this.style.backgroundColor='#228B22'" onmouseover="this.style.backgroundColor='green'" id="success" type="submit" value="Order Confirm" onclick="showOrderReceivedMessage()">
            </div>
        </div>
    </form>
    </div>

    <!-- ***** Header Area End ***** -->
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

        function showOrderReceivedMessage() {
            alert("Order Received!");
        }

    </script>
  </body>
</html>