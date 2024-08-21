@extends('layout.master')

@section('title', 'Certifications & Degrees')

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
          <div class="card">
            <!-- Card body -->
            <div class="p-4 d-flex justify-content-between align-items-center">
              <div>
                <h3 class="mb-0">Certificates & Degrees</h3>
                <p class="mb-0">
                  Upload any relevant certification and degrees that have been awarded to you.
                  <span data-bs-toggle="tooltip" data-placement="right"
                    title="Certicates and Degrees uploaded here will be confirmed by the instituting body that awarded the cerficate or degree to prevent any form of falsification.">
                    <i class="fe fe-help-circle"></i></span>
                </p>
              </div>

              <!-- Nav -->
              <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                data-bs-target="#add-certificate">Add Certificate</a>
            </div>
          </div>

          <!-- Card -->
          <div class="card mb-4">
            <!-- Card body -->
            <!-- Table -->
            <div class="table-responsive overflow-y-hidden">
              <table class="table mb-0 text-nowrap table-hover table-centered">
                <thead class="table-light">
                  <tr>
                    <th scope="col">Certificate</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($certificates as $certificate)
                  <tr>
                    <td>
                      <div class="d-lg-flex align-items-center">
                        <div>
                          <a href="#">
                            <img src="{{ $certificate->certificate }}" alt="" class="rounded img-4by3-lg"></a>
                        </div>
                        <div class="ms-lg-3 mt-2 mt-lg-0">
                          <h4 class="mb-1 h5">
                            <a href="#" class="text-inherit">
                              @switch($certificate->type)
                              @case('degree')
                              School Degree
                              @break
                              @case('certificate')
                              Advanced Professional Course
                              @break
                              @endswitch
                            </a>
                          </h4>
                          <ul class="list-inline fs-6 mb-0">
                            <li class="list-inline-item">
                              <span class="font-weight-bold">{{ $certificate->institution }}</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>

                    <td>{{ $certificate->title }}</td>

                    <td>
                      <span @class(["badge", "bg-info"=> $certificate->confirmation_status === 0, "bg-success"=>
                        $certificate->confirmation_status === 1, "bg-danger" => $certificate->confirmation_status ===
                        2])>
                        @switch($certificate->confirmation_status)
                        @case(1)
                        Verified
                        @break
                        @case(2)
                        Not Verified
                        @break
                        @default
                        Pending
                        @endswitch
                      </span>
                    </td>

                    <td>
                      <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle " href="#" role="button"
                          id="courseDropdown" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                          <i class="fe fe-more-vertical"></i>
                        </a>
                        <span class="dropdown-menu" aria-labelledby="courseDropdown">
                          <span class="dropdown-header">Setting </span>
                          <a class="dropdown-item" href="#"><i class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                          <a class="dropdown-item" href="#"><i class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                        </span>
                      </span>
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


  <!-- Modal -->
  <div class="modal fade" id="add-certificate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Certificate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form class="modal-body" action="{{ route('office.upload-certificate') }}" method="POST"
          enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" class="form-control">
              <option value="degree">School Degree</option>
              <option value="certificate">Advanced Professional Course</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">
              <span>Name of instituting body issuing the certificate</span>
              <span data-bs-toggle="tooltip" data-placement="right"
                title="This can be the name of an higher institution or the organization that's issuing the certificate">
                <i class="fe fe-help-circle"></i></span>
            </label>
            <input class="form-control" name="institution" type="text" placeholder="Eg: Harvard" />
          </div>

          <div class="mb-3">
            <label class="form-label">Title</label>
            <input class="form-control" name="title" type="text"
              placeholder="Eg: University of Chicago - Degree Certificate" />
          </div>

          <div class="mb-3">
            <label class="form-label">
              <span>Choose File</span>
              <span data-bs-toggle="tooltip" data-placement="right"
                title="File format must be an image of Max size 1MB in any of the following extensions (jpg, jpeg, png)">
                <i class="fe fe-help-circle"></i></span>
            </label>
            <input class="form-control" name="certificate" type="file" />
          </div>

          <div class="mb-3">
            <label class="form-label">Additional Information <span data-bs-toggle="tooltip" data-placement="right"
                title="Any other information you'd like us to know about this certification.">
                <i class="fe fe-help-circle"></i></span></label>
            <textarea name="additional_info" class="form-control" rows="5"></textarea>
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