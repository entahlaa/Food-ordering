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
  
</div>
  @include("admin.adminscript")
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
        <footer>
        <div class="col-lg-4">
                    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="assets/images/up-arrow.png" alt=""></button>
                </div>
        </footer>
  </body>
</html>