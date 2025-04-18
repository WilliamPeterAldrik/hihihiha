@extends('layouts/index')
@section('content')
<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div>
            </div>
            <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-body">
                            <form method="POST" action="{{ route('dosenStore')}}">
                              @csrf
                              <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" id="nik" name="nik" placeholder="e.g. 7200001" class="form-control" maxlength="7" required autofocus/>
                              </div>
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="e.g. JohnDoe" class="form-control" maxlength="100" required/>
                              </div>
                              <div class="form-group">
                                <label for="tanggal_lahir">Birth Date</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required/>
                              </div>
                              <div class="form-group">
                                <label for="email">Email </label>
                                <input type="text" id="email" name="email" placeholder="e.g. john.doe@gmail.com" class="form-control" maxlength="100" required/>
                              </div>
                              <button tpye="submit">Submit</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('ExtraCSS')

@endsection

@section('ExtraJS')
  <script>
    $("#table-lecturer").DataTable({
      pageLength: 25,
    });
  </script>
@endsection