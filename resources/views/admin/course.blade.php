@extends("admin.master")

@section("content")

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ALL Course</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Course</li>
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

                <div class="card-tools">
                  <a class="btn btn-info btn-sm" href="" data-toggle="modal" data-target="#exampleModal">Add Course</a>
</div>
              </div>

              <div class="card-body">
                   
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Course Name</th>
                  <th>Category</th>
                  <th>Discription</th>
                  <th>Price</th>
                  <th>Detail</th>
                  <th>Course Include</th>
                  <th>Course Contect</th>
                  <th>Image</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                    @foreach($display as $x)
            <tr>
              <td>{{$x->course_name}}</td>
              <td>{{$x->category}}</td>
              <td>{{$x->discription}}</td>
              <td>{{$x->price}}</td>
              <td>{{$x->detail}}</td>
              <td>{{$x->course_include}}</td>
              <td>{{$x->course_content}}</td>
              <td><img src="{{ url('/upload/'.$x->image) }}" style="height: 150px; width: 150px; border-radius: 100%;"></td>

  <td>
    <a href="{{url('admin/course_edit/'.$x->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <br><br>
    <a href="{{url('admin/delete/'.$x->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

        <form  method="post" action="{{url('admin/save')}}" enctype="multipart/form-data">

           @csrf
    
                 Course Name: <input class="form-control" type="text" name="course_name" placeholder="Enter Course Name"><br>

                 Category<select class="form-control" name="category">
                 	
                 	<option>Select</option>
                  @foreach($cate as $c)
                  <option>{{$c->name}}</option>
                  @endforeach
                 </select>
                 <br>

                 Discription: <input class="form-control" type="text" name="discription" placeholder="Enter Discription"><br>

                 Price: <input class="form-control" type="text" name="price" placeholder="Enter Price"><br>

                 Detail: <input class="form-control" type="text" name="detail" placeholder="Enter Detail"><br>

                 Course Include: <input class="form-control" type="text" name="course_include" placeholder="Enter Course Include"><br>

                 Course Content: <input class="form-control" type="text" name="course_content" placeholder="Enter Course Content"><br>

                 Image: <input class="form-control" type="file" name="image"><br>

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