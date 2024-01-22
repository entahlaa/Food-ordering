<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")

  <div style="position: relative; top: 60px; right: -150px;">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: center;">

        @csrf

        <div style="margin-bottom: 10px; text-align: center;">
            <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Title</label>
            <input style="width: 100%; padding: 8px; box-sizing: border-box;color:black;" type="text" name="title" value="{{$data->title}}" required>
        </div>
        <div style="margin-bottom: 10px; text-align: center;">
            <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Price</label>
            <input style="width: 100%; padding: 8px; box-sizing: border-box;color:black;" type="number" name="price" value="{{$data->price}}" required>
        </div>
        
        <div style="margin-bottom: 10px; text-align: center;">
            <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Description</label>
            <input style="width: 100%; padding: 8px; box-sizing: border-box;color:black;" type="text" name="description" value="{{$data->description}}" required>
        </div>
        <div style="margin-bottom: 10px; text-align: center;">
            <label style="display: inline-block; width: 100px; margin-bottom: 5px;">Old Image</label>
            <img height="200" width="200" src="/foodimage/{{$data->image}}">
        </div>
        <div style="margin-bottom: 10px; text-align: center;">
            <label style="display: inline-block; width: 100px; margin-bottom: 5px;">New Image</label>
            <input type="file" name="image" placeholder="Image" required style="width: 100%; padding: 8px; box-sizing: border-box;position: relative; left: 120px;">
        </div>
        <div style="margin-bottom: 10px; text-align: center;">
        <input class="btn btn-success" style="background-color:#228B22;" type="submit" value="Save" onmouseout="this.style.backgroundColor='#228B22'" onmouseover="this.style.backgroundColor='green'">
        </div>
    </form>

    <div>
  
</div>
  @include("admin.adminscript")
  </body>
</html>