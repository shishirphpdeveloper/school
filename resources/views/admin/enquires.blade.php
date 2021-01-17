@extends('layouts.adminmasterlayout')

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

             
             

              <div class="sidebar-item categories">
                <ul>
                  <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                  <li><a href="{{ route('admin.schools') }}">Schools</a></li>
                  <li><a href="{{ route('admin.banners') }}">Banners</a></li>
                  <li><a href="{{ route('admin.enquires') }}">Enquires</a></li>
                  <li><a href="{{ route('changepassword') }}">Change Password</a></li>
                 
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
                <div class="card-header">Enquires</div>

                <div class="card-body">
                   
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