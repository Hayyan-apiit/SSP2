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




          <section style="background-color: #eee; color: white; font-size: 30px;">
  <div class="container my-1 py-1">
    @foreach($comment as $comment)
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-10 col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-start align-items-center">
                <div>
                  <h6 class="fw-bold text-primary mb-1">{{$comment->name}} </h6>
                  <!-- Assuming there's a 'user' relationship in your Comment model -->
                  <p class="text-muted small mb-0">
                  {{$comment->subject}} | {{$comment->email}}
                  </p>
                </div>
              </div>

              <p class="mt-3 mb-4 pb-2" style="font-size: 20px;">
              {{$comment->complain}}
              </p>

              <div class="float-end mt-1 pt-0">
             

                <a href="" class="btn btn-info">Send Email</a>
              </div>
            </div>
            <br><br>
          </div>
        </div>
      </div>
      <br>
    @endforeach
  </div>
</section>








          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>