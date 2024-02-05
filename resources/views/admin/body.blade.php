
<div class="main-panel">
          <div class="content-wrapper">

          <div class="container-fluid">

          <h1 class="mt-4 mb-4 text-dark text-center font-weight-bold display-2">SriLux Fashion </h1>



            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>TOTAL PRODUCTS</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0 display-1">{{$total_store}}</h2>
                          
                        </div>
                        <h6 class="text-muted font-weight-normal">Sum of available inventory items.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>

                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>TOTAL ORDER</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0 display-1">{{$total_order}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal"> Overall count of customer requests.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>TOTAL CUSTOMERS</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0 display-1">{{$total_user}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Number of client relationships.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>TOTAL COMPLAINS</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0 display-1">{{$total_complain}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Cumulative income generated.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>TOTAL REVENUE</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0 display-1">Rs:{{$total_revenue}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Cumulative income generated.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>TOTAL DELIVERY</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0 display-1">{{$total_delivered}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Aggregate completed shipments.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>TOTAL NOT DELIVERED</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0 display-1">{{$total_nodelivered}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Combined undelivered items pending.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>CANCELLED ORDERS</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h2 class="mb-0 display-1">{{$total_cancel}}</h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">Combined undelivered items pending.</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <i class="icon-lg mdi mdi-arrow-right-bold text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>


</div>
</div>
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
 
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>



