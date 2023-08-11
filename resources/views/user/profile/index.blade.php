@extends('user.layout.master')

@section('title', '- Profile')

@section('body')
  <!-- Container fluid -->
  <section class="container-fluid p-4">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
          <div class="mb-3 mb-md-0">
            <h1 class="mb-1 h2 fw-bold">Profile</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                @include('user.component.breadcrumb')
                <li class="breadcrumb-item active" aria-current="page">
                  Profile
                </li>
              </ol>
            </nav>
          </div>

          @if (!$user->is_verified)
            <form action="{{ route('verification.send') }}" method="post">
              @csrf
              <button class="btn btn-sm btn-success">Resend Verification Link</button>
            </form>
          @else
            <div>
              @switch($current_route)
                @case('user.profile')
                  <a href="{{route('user.profile.edit')}}" class="btn btn-primary">Edit Profile</a>
                  @break
                @case('user.profile.edit')
                  <a href="{{route('user.profile')}}" class="btn btn-primary">View Profile</a>
              @endswitch
            </div>
          @endif

        </div>
      </div>
    </div>

    <div class="row">
      <!-- card -->
      @switch($current_route)
        @case('user.profile')
          @include('user.profile.display')
          @include('user.profile.activities')
          @break
        @case('user.profile.edit')
          @include('user.profile.edit')
      @endswitch

    </div>
  </section>
@endsection


{{--Scripts section--}}
@section('scripts')
  @parent

  {{-- SELECT PICKEER --}}
  <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
  <script src="{{ asset('assets/js/vendors/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

  {{--  DATATABLES--}}
  <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>

  <script>
    const CSC_TOKEN = "{{ env('CSC_API_TOKEN') }}"

    $('.dt').DataTable({
      "order": [
        [0, "desc"]
      ],
    });

  </script>
  <script src="{{ asset('assets/js/custom/app.js') }}"></script>
@endsection