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
        width: 40px;
        height: 40px;
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


          <h2 class="font_size">show order</h2>

          

          <div style="padding-left:450px; padding-bottom: 30px">
            <form action="{{url('search')}}" method="get">

            @csrf 
            

            <input type="text" name="search" placeholder="Search for something" style="width: 700px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">



            <input type="submit" value="Search" class="btn btn-outline-primary" style="padding: 10px; font-size: 16px;">

  </form>
          </div>


          <table class="center" >
          <tr >
            <th>Name</th>
            <th>Email</th>
            <th>Adresss</th>
            <th>Phone</th>
            <th>Store Title</th>
            <th>quantity</th>
            <th>Price</th>
            <th>Payment Status</th>
            <th>Delivery Status</th>
            <th>Image</th>
            <th>Delivered</th>
            <th>Send Email</th>

          </tr>
  
          @forelse($order as $order)
       

          <tr>

            <td>{{$order->name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->store_title}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->delivery_status}}</td>
            <td>
            <img class="img_size" src="/add_garment/{{$order->image}}">
            </td>

            <td>
                @if($order->delivery_status=='processing')
    <a href="{{ url('delivered', $order->id) }}" onclick="return confirm('are you sure is the order delivered!')" class="btn btn-primary">Delivered</a>

    @else

    <p class="btn btn-success">Delivered</p>

    @endif
           </td>
           <td>
    <a href="{{ url('send_email', $order->id) }}" class="btn btn-info">Send Email</a>
</td>



          </tr>
          @empty

          <tr>
        <td>
          <div class="alert alert-warning custom-warning" role="alert">
            <h4 class="alert-heading">NO DATA FOUND</h4>
            <p class="mb-0">Sorry, there is no data available at the moment.</p>
          </div>
        </td>
      </tr>
          @endforelse


          </table>

  


          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>