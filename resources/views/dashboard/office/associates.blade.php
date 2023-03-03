@extends('layout.master')

@section('title', 'My Associates')

@section('body')
<!-- Navbar -->
@include('partials.navbar')

<main>
  <section class="pt-5 pb-5">
    <div class="container">
      <!-- User info -->
      @include('dashboard.partials.user_info')

      {{-- alert display section --}}
      @if (session('message'))
      <x-alert :status="session('status')" :message="session('message')" : />
      @endif

      <!-- Content -->
      <div class="row mt-0 mt-md-4">
        {{-- Column #1 --}}
        @include('dashboard.partials.sidebar')

        {{-- Column #2 --}}

        <div class="col-lg-9 col-md-8 col-12">
          <!-- Card -->
          <div class="card mb-4">
            <!-- Card body -->
            <div class="p-4 d-flex justify-content-between align-items-center">
              <div>
                <h3 class="mb-0">Associates</h3>
                <p class="mb-0">
                  Add lawyers that belong to your firm as associates with their email address
                  <span data-bs-toggle="tooltip" data-placement="right"
                    title="Lawyers added as associates to your firm must already have an account on Metalex which has been verified">
                    <i class="fe fe-help-circle"></i></span>
                </p>
              </div>

              <!-- Nav -->
              <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                data-bs-target="#add-associate">Add Associate</a>
            </div>
          </div>

          <!-- Tab content -->
          <div class="tab-content">
            <div class="tab-pane fade show active pb-4" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
              <div class="row">

                <div class="col-xl-12 col-lg-12 col-12 mb-3">

                  <!-- Content -->
                  <div class="row d-none">
                    <div class="col pe-0">
                      <!-- Form -->
                      <form>
                        <input type="search" class="form-control" placeholder="Search by Name">
                      </form>
                    </div>
                    <!-- Button -->
                    <div class="col-auto">
                      <a href="#" class="btn btn-secondary">Export CSV</a>
                    </div>
                  </div>
                </div>

                @forelse ($associates as $associate)

                <div class="col-lg-4 col-md-6 col-12">
                  <!-- Card -->
                  <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="text-center">
                        <img src="{{ $associate->avatar }}" class="rounded-circle avatar-xl mb-3" alt="">
                        <h4 class="mb-0">{{ $associate->first_name . ' '. $associate->last_name }}</h4>
                        <p class="mb-0">
                          <small>{{ $associate->email }}</small>
                        </p>
                        <a href="#" class="btn btn-sm btn-info mt-3"><i class="fe fe-message-square"></i> Message</a>
                      </div>
                      <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">
                        <span>Date Registered</span>
                        <span class="text-dark"> {{ date('dS M, Y', strtotime($associate->created_at)) }}</span>
                      </div>
                      <div class="d-flex justify-content-between pt-2 fs-6">
                        <span>Verified</span>
                        <span class="text-success fe fe-user-check" style="font-size: 16px"></span>
                      </div>
                    </div>

                    <button class="btn btn-outline-danger" data-bs-toggle="modal"
                      data-bs-target="#remove-associate-{{ $associate->id }}"> <i class="fe fe-trash-2"></i> Remove
                      as associate</button>
                  </div>
                </div>

                <!-- Remove Modal -->
                <div class="modal fade" id="remove-associate-{{ $associate->id }}" tabindex="-1" role="dialog"
                  aria-labelledby="addSectionModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Remove Associate</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <form class="modal-body" method="POST"
                        action="{{ route('office.remove-associate', ['office' => $user->virtual_office->id]) }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ base64_encode($associate->id) }}">
                        <p>Please confirm you want to remove
                          <b>{{ $associate->first_name . ' '. $associate->last_name}}</b>
                          as an associate from your firm
                        </p>
                        <button class="btn btn-success">Yes!! Confirm</button>
                      </form>

                    </div>
                  </div>
                </div>

                @empty
                <div class="col">
                  <x-alert status="info"
                    message="To add your lawyers as associates to the firm, they need to be registered on Metalex Legal"
                    : />
                </div>
                @endforelse

                {{-- Pagination --}}
                @if ($associates->count())
                <section class="col-lg-12 col-md-12 col-12">
                  <!-- Pagination -->
                  <nav>
                    <ul class="pagination justify-content-center mb-0">
                      <li class="page-item disabled">
                        <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-left"></i></a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link mx-1 rounded" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link mx-1 rounded" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link mx-1 rounded" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link mx-1 rounded" href="#"><i class="mdi mdi-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
                </section>
                @endif

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- Modal -->
  <div class="modal fade" id="add-associate" tabindex="-1" role="dialog" aria-labelledby="addSectionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Associate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form class="modal-body" method="POST"
          action="{{ route('office.add-associate', ['office' => $user->virtual_office->id]) }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Associates Email Address</label>
            <input class="form-control mb-3" name="email" type="text" placeholder="johndoe@email.com" />
          </div>
          <button class="btn btn-primary">Save</button>
        </form>

      </div>
    </div>
  </div>
</main>

<!-- footer -->
@include('dashboard.partials.footer')
@endsection
