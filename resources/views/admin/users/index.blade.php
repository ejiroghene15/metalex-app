@extends('admin.layout.master')

@section('title', 'Users')

@section('body')

  @error('name')
  <x-alert status="danger" message="{{$message}}" :/>
  @enderror

  <section class="container-fluid p-4">
    <div class="row">
      <!-- Page Header -->
      <div class="col-lg-12 col-md-12 col-12">
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Users</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('view-users')}}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  All Users
                </li>
              </ol>
            </nav>
          </div>
          {{--          <div>--}}
          {{--            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Add New--}}
          {{--              Category</a>--}}
          {{--          </div>--}}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card mb-4 ">
          <div class="table-responsive border-0 overflow-y-hidden">
            <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox dt">
              <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Account Verified</th>
                <th>Date Registered</th>
                <th>Status</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              @foreach($users as $_)
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="{{$_->avatar}}" alt=""
                           class="rounded-circle avatar-xs me-2"/>
                      <h5 class="mb-0">{{$_->fullName()}}</h5>
                    </div>
                  </td>
                  <td>
                    <span class="badge bg-info-soft">{{$_->email}}</span>
                  </td>
                  <td>
                    <span class="badge bg-primary-soft">{{$_->user_type}}</span>
                  </td>
                  <td>
                    <span class="badge bg-{{$_->is_verified ? 'success' : 'danger'}}-soft">
                      {{$_->is_verified ? 'Verified' : 'Not Verified'}}
                    </span>
                  </td>

                  <td>{{$_->created_at}}</td>
                  <td>
                    <span class="badge bg-{{$_->account_status ? 'success' : 'danger'}}-soft">
                      {{$_->account_status ? 'Active' : 'Not Active'}}
                    </span>
                  </td>
                  <td>
                    <a class="btn-icon btn bg-danger-soft btn-sm rounded-circle" href="#" role="button"
                       id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                       aria-expanded="false">
                      <i class="fe fe-eye"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
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