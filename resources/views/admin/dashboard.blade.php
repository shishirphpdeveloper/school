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


           


          <div class="col-lg-12 entries">
  

            <article class="entry" data-aos="fade-up">

              <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
@if(Session::has('msg'))
      <div class="alert alert-success">
       {!! Session::get('msg') !!}
      </div>
@endif
            <div class="col-lg-12" style="font-size: 18px;">

              <div class="col-sm-4">
                <div class="panel panel-info">
                <div class="panel-heading">Schools</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;">
                <a href="{{ route('admin.schools') }}">500</a>
              </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-success">
                <div class="panel-heading">Banners</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;"><a href="{{ route('admin.banners') }}">500</a></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-warning">
                <div class="panel-heading">Enquires</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;"><a href="{{ route('admin.enquires') }}">500</a></div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-info">
                <div class="panel-heading">Enquires</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;">300</div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-success">
                <div class="panel-heading">Enquires</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;">300</div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-warning">
                <div class="panel-heading">Enquires</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;">300</div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-info">
                <div class="panel-heading">Enquires</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;">300</div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-success">
                <div class="panel-heading">Enquires</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;">300</div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="panel panel-warning">
                <div class="panel-heading">Enquires</div>
                <div class="panel-body" style="font-size: 24px; font-weight: bold;">300</div>
                </div>
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