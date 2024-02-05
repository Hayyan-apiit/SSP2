<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
    <style type="text/css">
         /* Apply black color to all text elements */
    body {
        color: black;
    }

    .center {
    margin-left: 10px;
    margin-right: 10px;
    width: 100%;
    border: 4px solid green;
    border-radius: 15px; /* Set the desired border radius */
    text-align: center;
    margin-top: 40px;
    font-size: 20px;
}

    table,tr,th
    {
        border:4px solid green ;
        border-radius: 15px; 
    }

    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .img_size
    {
        width: 250px;
        height: 250px;
    }
 


    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('message') }}
    </div>
@endif

          <h2 class="font_size">Garment Update Display</h2>


          <table class="center" >
          <tr >
            <th style="margin:0;">Product title</th>
            <th style="width: 400px;">Description</th>
           
            <th>Category/Quanitity</th>
           
            <th>Discount Price/Price</th>
            <th>Product Image</th>
            <th>Delete</th>
            <th>Edit</th>

          </tr>
  
          @foreach($store as $store)

          <tr>
            <td>{{$store->title}}</td>
            <td style="width: 400px;">{{$store->description}}</td>
      
            <td><span style="color: blue !important;"> {{$store->catagory}} <br>Quanitity: {{$store->quantity}}</td>
            
            <td> <span style="color: red !important;">  Discount:{{$store->discount_price}}</span> <br>
    Price: {{$store->price}}
</td>
            <td>
                <img class="img_size" src="/add_garment/{{$store->image}}">
            </td>

            <td>
    <a class="btn btn-primary btn-sm" onclick="return confirm('Are You Sure to delete this Garment')" href="{{url('delete_store' ,$store->id)}}" style="font-size: 30px;">X</a>
</td>

<td>
    <a class="btn btn-success" href="{{url('update_store',$store->id)}}" style="font-size: 30px;">Edit</a>
</td>


          </tr>
          @endforeach
     



          </table>


          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>