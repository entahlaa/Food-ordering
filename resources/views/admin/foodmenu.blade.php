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
  <h1>Food Menu</h1>
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: center;" id="menu">

        @csrf

        <div style="margin-bottom: 10px; text-align: center;">
        <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Title</label>
        <input style="width: 100%; padding: 8px; box-sizing: border-box;color:black;" type="text" name="title" placeholder="Write the food name" required>
    </div>
    <div style="margin-bottom: 10px; text-align: center;">
        <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Price</label>
        <input style="width: 100%; padding: 8px; box-sizing: border-box;color:black;" type="number" name="price" placeholder="Write the price" required>
    </div>
    <div style="margin-bottom: 10px; text-align: center;">
        <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Image</label>
        <input style="width: 100%; padding: 8px; box-sizing: border-box;position: relative; left: 120px;" type="file" name="image" placeholder="Image" required>
    </div>
    <div style="margin-bottom: 10px; text-align: center;">
        <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Description</label>
        <input style="width: 100%; padding: 8px; box-sizing: border-box;color:black;" type="text" name="description" placeholder="Description" required>
    </div>
        <div style="margin-bottom: 30px; margin-top: 30px; text-align: center;">
            <input class="btn btn-success" style="background-color:#228B22;" type="submit" value="Save" onmouseout="this.style.backgroundColor='#228B22'" onmouseover="this.style.backgroundColor='green'">
        </div>
    </form>

    <div>
            <table style="background-color:#6082B6;margin-bottom: 150px;">

            <tr>
                <th style="padding:30px">Food Name</th>
                <th style="padding:30px;">Price</th>
                <th style="padding:30px">Description</th>
                <th style="padding:30px">Image</th>
                <th style="padding:30px">Action</th>
                <th style="padding:30px">Update</th>
            </tr>

            @foreach($data as $data)
            <tr style="text-align:left">
                <td style="padding-left:30px;">{{$data->title}}</td>
                <td style="text-align:center">{{$data->price}}</td>
                <td style="padding-right:50px;">{{$data->description}}</td>
                <td><img src="/foodimage/{{$data->image}}" width="200" height="150"></td>
                <td style="text-align:center"><a href="{{url('/deletemenu',$data->id)}}" style="color:red;">Delete</a></td>
                <td style="text-align:center"><a href="{{url('/updateview',$data->id)}}" style="color:yellow;">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>
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