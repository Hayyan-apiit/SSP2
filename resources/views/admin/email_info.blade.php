<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    <!-- Required meta tags -->
    
    @include('admin.css')
    <style type="text/css">
         /* Apply black color to all text elements */
    body {
        color: black;
    }

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .font_size{
            font-size: 40px;
            color: black;
            padding-bottom: 40px;
 
        }

        .text_color
        {
            width: 400px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_design
        {
            padding-bottom: 15px;
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



<!--
            <div class="div_center">
                <h1 class="font_size">Send Email</h1>

                <div class="table-container">


                <form>

         
  <table>
    <tr>
      <td>
        <div class="div_design">
          <label for="title">Product title</label>
          <input class="text_color" type="text" name="title" id="title" placeholder="Write a title" required>
        </div>
      </td>
      <td>
        <div class="div_design">
          <label for="description">Product Description</label>
          <input class="text_color" type="text" name="description" id="description" placeholder="Write a description" required>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="div_design">
          <label for="price">Product Price</label>
          <input class="text_color" type="number" name="price" id="price" placeholder="Input price" required>
        </div>
      </td>
      <td>
        <div class="div_design">
          <label for="dis_price">Discount price</label>
          <input class="text_color" type="number" name="dis_price" id="dis_price" placeholder="Write a title">
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="div_design">
          <label for="quantity">Product Quantity</label>
          <input class="text_color" type="number" min="0" name="quantity" id="quantity" placeholder="Input Quantity" required>
        </div>
      </td>
      <td>
        <div class="div_design">
          <label for="category">Product Category</label>
          <select class="text_color" name="category" id="category" required>
            <option value="" selected="">Add a category here</option>

        
            <option value=""></option>  
 
          </select>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <br><br>
        <div class="div_design">
          <label for="image">Product Image Here</label>
          <input type="file" name="image" required="">
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div class="div_design">
          <input type="submit" value="Add Product" class="btn btn-primary" style="background-color: black;">
        </div>
      </td>
    </tr>
  </table>
</form>

      -->




<div class="container mt- mb-20">
<h1 class="font_size">Send Email to |<span style="font-weight: bold; color: blue;"> {{$order->email}}</span></h1>

<form action="{{ url('/send_user_email', $order->id) }}" method="POST">
    @csrf


  <div class="form-group">
    <label for="exampleFormControlInput1" style="font-size: 16px;">Email Hellow </label>
    <input type="text" class="form-control" name="greeting" placeholder="name@example.com" style="background-color: white; color: black; font-size: 16px;">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput2" style="font-size: 16px;">Email Heading</label>
    <input type="text" class="form-control" name="heading" placeholder="name@example.com" style="background-color: white; color: black; font-size: 16px;">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-size: 16px;">Email Body</label>
    <textarea class="form-control" name="body" rows="3" style="background-color: white; color: black; font-size: 16px;"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput5" style="font-size: 16px;">Email Button</label>
    <input type="text" class="form-control" name="button" placeholder="name@example.com" style="background-color: white; color: black; font-size: 16px;">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput3" style="font-size: 16px;">Email Url</label>
    <input type="text" class="form-control" name="url" placeholder="name@example.com" style="background-color: white; color: black; font-size: 16px;">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput4" style="font-size: 16px;">Email complimentary close </label>
    <input type="text" class="form-control" name="close" placeholder="name@example.com" style="background-color: white; color: black; font-size: 16px;">
  </div>


  <div class="form-group">
  <input type="submit" value="send email" class="btn btn-primary">

  </div>
</form>

</div>


</div>

               
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>