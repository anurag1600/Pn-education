@extends("admin.master")

@section("content")

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ALL Workshop</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Workshop</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!--data table-->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                
              </div>
              <div class="card-body">
               <form  method="post" action="{{url('admin/coupan_update')}}" enctype="multipart/form-data">

           @csrf
                    <input type="hidden" name="id" value="{{$edit->id}}">


                Coupan Code: <input class="form-control" type="text" name="coupan_code" placeholder="Enter coupan code" value="{{$edit->coupan_code}}"><br>

                
                 Amount: <input class="form-control" type="text" name="amount" placeholder="Enter Amount" value="{{$edit->amount}}"><br>

                 Amount Type:<select class="form-control" name="amount_type" value="{{$edit->amount_type}}">
                  
                  <option value="select">Select</option>
                  <option value="percentage" @if($edit->amount_type=='percentage')selected @endif>Percentage</option>
                  <option value="fixed" @if($edit->amount_type=='fixed')selected @endif>Fixed</option>
                 </select>


                 <br>

                 Status: <input class="form-control" type="text" name="status" placeholder="Enter Status" value="{{$edit->status}}"><br>

                 Expiry Date: <input class="form-control" type="date" name="expiry_date" value="{{$edit->expiry_date}}"><br>
                
                 <br>

                  <input class="form-control btn btn-success" type="submit" name="update" value="update">


                      

        </form>     
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  <!-- Modal Form -->
   

<!-- ------End Data Table------- -->

  </div>

  <!-- /.content-wrapper -->
 
  </body>
  </html>

@endsection