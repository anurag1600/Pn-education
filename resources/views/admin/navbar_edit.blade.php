@extends("admin.master")

@section("content")

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ALL Navbar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Navbar</a></li>
              <li class="breadcrumb-item active">Edit Navbar</li>
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
               <form  method="post" action="{{url('admin/navbar_update')}}" enctype="multipart/form-data">

           @csrf

           		<input type="hidden" name="id" value="{{$edit->id}}">
    
                 Phone Number: <input class="form-control" type="text" name="phone_no" placeholder="Enter Phone Number" value="{{$edit->phone_no}}"><br>

                 

                 Email: <input class="form-control" type="text" name="email" placeholder="Enter Email" value="{{$edit->email}}"><br>

                 Address: <textarea class="form-control" type="text" name="address" placeholder="Enter Address">{{$edit->address}}</textarea>
                 <br>

                 Discription: <input class="form-control" type="text" name="discription" placeholder="Enter Discription" value="{{$edit->discription}}"><br>

                 

                 <img src="{{ url('/upload/'.$edit->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
                 Image: <input class="form-control" type="file" name="image" value="{{$edit->image}}"><br>
                 <br>
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