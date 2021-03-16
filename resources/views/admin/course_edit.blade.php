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

                
              </div>
              <div class="card-body">
               <form  method="post" action="{{url('admin/course_update')}}" enctype="multipart/form-data">

           @csrf
                    <input type="hidden" name="id" value="{{$edit->id}}">

                  Course Name: <input class="form-control" type="text" name="course_name"
                  value="{{$edit->course_name}}" placeholder="Enter Course Name"><br>

                 Category<select class="form-control" name="category" value="{{$edit->category}}">
                 	
                 	
                  
                  <option>Select</option>
                  @foreach($cate as $c)
                  <option>{{$c->name}}</option>
                  @endforeach
                 </select>
                 <br>

                 Discription: <input class="form-control" type="text" name="discription"
                 value="{{$edit->discription}}" placeholder="Enter Discription"><br>

                 Price: <input class="form-control" type="text" name="price" value="{{$edit->price}}" placeholder="Enter Price"><br>

                 Detail: <input class="form-control" type="text" name="detail" value="{{$edit->detail}}" placeholder="Enter Detail"><br>

                 Course Include: <input class="form-control" type="text" name="course_include" value="{{$edit->course_include}}" placeholder="Enter Course Include"><br>

                 Course Content: <input class="form-control" type="text" name="course_content" value="{{$edit->course_content}}" placeholder="Enter Course Content"><br>

                 <img src="{{ url('/upload/'.$edit->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
                 Image: <input class="form-control" type="file" name="image" value="{{$edit->image}}"><br>

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