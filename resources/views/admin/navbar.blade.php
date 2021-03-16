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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Header & Footer</li>
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
                <h3 class="card-title">Add Here To Header/Footer Content :=></h3>

                <div class="card-tools">
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal">Add Navbar/Footer</a>
</div>
              </div>

              <div class="card-body">
                   
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Phone No </th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Discription</th>
                  <th>Image</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>


                    @foreach($display as $n)
            <tr>
              <td>{{$n->phone_no}}</td>
              <td>{{$n->email}}</td>
              <td>{{$n->address}}</td>
              <td>{{$n->discription}}</td>
              <td><img src="{{ url('/upload/'.$n->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>

  <td>
    <a href="{{url('admin/navbar_edit/'.$n->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <br><br>
    <a href="{{url('admin/navbar_delete/'.$n->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
  </td>
</tr>

  @endforeach
                 
                  
</tbody>
                
              </table>
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
   <!DOCTYPE html>
   <html>
   <head>
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   </head>
   <body>
   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Add Course</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form  method="post" action="{{url('admin/navbar_save')}}" enctype="multipart/form-data">

           @csrf
    
                 Phone Number: <input class="form-control" type="text" name="phone_no" placeholder="Enter Phone Number"><br>

                 

                 Email: <input class="form-control" type="text" name="email" placeholder="Enter Email"><br>

                 Address: <textarea class="form-control" type="text" name="address" placeholder="Enter Address"></textarea>
                 <br>

                 Discription: <input class="form-control" type="text" name="discription" placeholder="Enter Discription"><br>

                 

                 Image: <input class="form-control" type="file" name="image">
                 <br>
                 <br>

                 <input class="form-control btn btn-success" type="submit" name="submit">

        </form> 
      </div>
    </div>
  </div>
</div>

<!-- ------End Data Table------- -->

  </div>

  <!-- /.content-wrapper -->
 
  </body>
  </html>

@endsection