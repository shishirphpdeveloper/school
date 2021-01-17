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
            <li>Change password</li>
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
                  <li><a href="{{ url('home') }}">Add Student</a></li>
                  <li><a href="{{ url('viewstudent') }}">View Student</a></li>
                  <li><a href="{{ url('changepassword') }}">Change Password</a></li>
                 
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
                <div class="card-header">Change password</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updatepassword') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Old Password</label>

                            <div class="col-md-6">
                                <input id="oldpassword" type="password" class="form-control @error('name') is-invalid @enderror" name="oldpassword" value="{{ old('name') }}"  autocomplete="name" autofocus>

                               <div style="color:red">{{ $errors->first('oldpassword') }}</div>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">New Password</label>

                            <div class="col-md-6">
                                <input id="newpassword" type="password" class="form-control @error('name') is-invalid @enderror" name="newpassword" value="{{ old('name') }}"  autocomplete="name" autofocus>

                               <div style="color:red">{{ $errors->first('newpassword') }}</div>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="cannewpassword" type="password" class="form-control @error('name') is-invalid @enderror" name="cannewpassword" value="{{ old('name') }}"  autocomplete="name" autofocus>

                               <div style="color:red">{{ $errors->first('cannewpassword') }}</div>
                            </div>
                        </div>

                       <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>
                            </div>
                        </div>
                    </form>
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