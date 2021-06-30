     @extends('layout.master')
     @section('konten')
     
     <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Authors</h4>
                </div>
                <div class="card-body">
                  <div class="row pb-2">
                    <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                      <div class="avatar-item mb-0">
                        <img alt="image" src="{{asset('img/avatar/avatar-5.png')}}" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                        <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i class="fas fa-wrench"></i></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                      <div class="avatar-item mb-0">
                        <img alt="image" src="{{asset('img/avatar/avatar-4.png')}}" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                        <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                      <div class="avatar-item mb-0">
                        <img alt="image" src="{{asset('img/avatar/a.png')}}" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                        <div class="avatar-badge" title="Author" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                      <div class="avatar-item mb-0">
                        <img alt="image" src="{{asset('img/avatar/avatar-2.png')}}" class="img-fluid" data-toggle="tooltip" title="Ryan">
                        <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Latest Posts</h4>
                    <div class="card-header-action">
                      <a href="#" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>
      @endsection