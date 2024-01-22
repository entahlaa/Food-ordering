<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
    <style>
    #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #ff8c00;
  cursor: pointer;
  padding: 15px;
  border-radius: 20%;
  background-size: contain;
  background-repeat: no-repeat;
}

#myBtn:hover {
  background-color: #555;
}
  </style>
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")
  
    <div style="position: relative; top: 70px; right: -60px;">
    <h1>Customer Reservations</h1>
        <table bgcolor="grey" border="1px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Phone</th>
                <th style="padding: 30px">Quantity</th>
                <th style="padding: 30px">Date</th>
                <th style="padding: 30px">Time</th>
                <th style="padding: 30px">Message</th>
            </tr>
            @foreach($data as $data)
            <tr style="background-color:black;text-align:center;">
                <td style="padding:30px 50px 30px 30px;">{{$data->name}}</td>
                <td style="padding:30px 50px 30px 30px;">{{$data->email}}</td>
                <td style="padding:30px 50px 30px 30px;">{{$data->phone}}</td>
                <td style="padding:30px 50px 30px 30px;">{{$data->guest}}</td>
                <td style="padding:30px 50px 30px 30px;">{{$data->date}}</td>
                <td style="padding:30px 50px 30px 30px;">{{$data->time}}</td>
                <td style="padding:30px 50px 30px 30px;">{{$data->message}}</td>
            </tr>
            @endforeach
        </table>
    </div>

</div>
  @include("admin.adminscript")
  <footer>    
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="assets/images/up-arrow.png" alt=""></button>
                        <a href=""><img src="assets/images/blank.png" alt="" id="backtop"></a>
                    </div>
                </div>
  </footer>
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>
  </body>
</html>