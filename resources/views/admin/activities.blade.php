@extends('admin.layout.master')

@section('title', 'Activities')

@section('body')

  <section class="container-fluid p-4">
    <div class="row">
      <!-- Page Header -->
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Recent Activities</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{route('view-activities')}}">Activities</a></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4">
          <div class="card-body">
            <section id="user-activities">
              <div class="table-card">
                <table class="table table-hover dt" style="width:100%">
                  <thead class="table-light">
                  <tr>
                    <th hidden></th>
                    <th>User</th>
                    <th>Activity</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($activity as $_)
                    <tr>
                      <td hidden>{{$_->id}}</td>
                      <td>{{$_->user->fullName()}}</td>
                      <td>{!! $_->activity !!}</td>
                      <td>{{$_->created_at->isoFormat('Do, MMMM YYYY')}}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection



{{--Scripts section--}}
@section('scripts')
  @parent
  {{--  DATATABLES--}}
  <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>

  <script>

    $('.dt').DataTable({
      "order": [
        [0, "desc"]
      ],
    });

  </script>
@endsection