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
                <div class="card-header">Edit Student</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('updatestudent/'.$record->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $record->name }}"  autocomplete="name" autofocus>

                               <div style="color:red">{{ $errors->first('name') }}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $record->email }}" autocomplete="email">

                               <div style="color:red"> {{ $errors->first('email') }}</div>
                            </div>
                        </div>

                     

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                            Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text"  class="form-control @error('phone') is-invalid @enderror" name="phone" autocomplete="new-password" value="{{ $record->phone }}">
                               <div style="color:red">{{ $errors->first('phone') }}</div>
                            </div>

                           

                        </div>


                         <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                            Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text"  class="form-control" name="address" autocomplete="new-password" value="{{ $record->address }}">
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                            Class</label>

                            <div class="col-md-6">
                                <input id="class" type="text"  class="form-control" name="class" autocomplete="new-password" value="{{ $record->class }}">
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