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
               <form  method="post" action="{{url('admin/workshop_update')}}" enctype="multipart/form-data">

           @csrf
                    <input type="hidden" name="id" value="{{$edit->id}}">

                 Workshop Title<select class="form-control" name="workshop_title" value="{{$edit->workshop_title}}">
              
                    <option value="select">Select</option>
                  <option value="rjit"
                  @if($edit->workshop_title=='Rjit College')selected @endif>Rjit College</option>
                  <option value="mpct"
                  @if($edit->workshop_title=='Mpct College')selected @endif>Mpct College</option>
                  <option value="bentchair"
                  @if($edit->workshop_title=='Bentchair Company')selected @endif>Bentchair Company</option>
                  <option value="mi"
                  @if($edit->workshop_title=='Xiaomi MI Company')selected @endif>Xiaomi MI Company</option>
                  
                 </select>
                 <br>

                

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