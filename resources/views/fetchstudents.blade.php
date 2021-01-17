@extends('layouts.masterlayout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>School Management</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Home</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">


            <div class="col-lg-3">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Menu</h3>
              <div class="sidebar-item categories">
                <ul>
                 <li><a href="{{ url('home') }}">Edit Student</a></li>
                  <li><a href="{{ url('viewstudent') }}">View Student</a></li>
                 
                </ul>

              </div><!-- End sidebar categories-->

           

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->


          <div class="col-lg-9 entries">
  

            <article class="entry" data-aos="fade-up">

              <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
@if(Session::has('msg'))
      <div class="alert alert-success">
       {!! Session::get('msg') !!}
      </div>
@endif
            <div class="card">
                <div class="card-header">View Student</div>

                <div class="card-body">
                  <table width="100%">

                    <tr>
                      <td><b>Photo</b></td>
                      <td><b>Name</b></td>
                      <td><b>Email</b></td>
                      <td><b>Phone</b></td>
                      <td><b>Class</b></td>
                      <td><b>Action</b></td>
                    </tr>

                    @foreach($student_records as $rows)

                    <tr>    
                     <td>                    
          <img src="{{ url('storage/profilephoto')."/".$rows->photo }}" width="100" height="100"/>
                     </td> 
                      <td>{{ $rows->name }}</td>
                      <td>{{ $rows->email }}</td>
                      <td>{{ $rows->phone }}</td>
                      <td>{{ $rows->class }}</td>
                      <td>
                      <a href="editstudent/{{ $rows->id }}"><i class="fas fa-edit"></i></a>
                      <a href="deletestudent/{{ $rows->id }}" onclick="return confirm('Are you sure you want to delete record')"><i class='far fa-trash-alt'></i></a>
                    </td>
                    </tr>

                    @endforeach
                  </table>
         {{ $student_records->links() }}

                </div>
            </div>
        </div>
    </div>
</div>

            </article><!-- End blog entry -->

         

          </div><!-- End blog entries list -->

        
        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->  
@endsection