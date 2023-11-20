@extends('layout.master')

@section('title', 'Terms')

@section('body')
  @include('partials.navbar')

  <!-- Page Content -->
  <main class="bg-white">
    <section class="py-8 bg-light">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-12">
            <!-- caption-->
            <h1 class="fw-bold mb-1 display-5">Terms Of Use Agreement</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- container  -->
    <section class="pt-3">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-12">
            <div>
              <!-- breadcrumb  -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Help Center</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Terms</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-10">
      <div class="container">
        <div class="row">

          <div class="offset-md-2 col-md-8 col-12">
            <div class="mb-10">
              <h5 class="fs-3"></h5>
              <p>
                <b>Effective Date: 26 November 2023,</b> This Terms of Use Agreement (the "Agreement") is a legal
                contract
                between you ("you" or "user") and Metalex Technologies Ltd ("we," "us," or "our") concerning your use of
                the Metalex web application (the "Platform"). By accessing and using the Platform, you agree to comply
                with and be bound by the terms and conditions outlined in this Agreement. If you do not agree with the
                terms and conditions, please do not use the Platform.
              </p>
            </div>

            <article class="mb-8">
              <h5 class="fs-3">Use of the Platform</h5>
              <p>
                Eligibility: You must be at least 13 years old to use the Platform. If you are under 18, you
                must have parental or guardian consent.
              </p>
              <p>
                User Accounts: You are responsible for maintaining the confidentiality of your account
                credentials and for all activities associated with your account.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">User Content</h5>
              <p>
                Responsibility: You are solely responsible for any content you post, submit, or share on the Platform.
                This includes text, images, videos, and other materials.
              </p>
              <p>
                Rights: By posting content on the Platform, you grant us a non-exclusive, worldwide, royalty-free,
                perpetual, irrevocable, and sub-licensable license to use, reproduce, modify, distribute, and display
                the content.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Prohibited Activities</h5>
              <p>
                You agree not to engage in any activities that are illegal or violate this Agreement, including but not
                limited to:
              </p>

              <div>
                <p class="fw-bold">Harassment or threatening behavior.</p>
                <p class="fw-bold">Impersonation of others.</p>
                <p class="fw-bold">Posting spam, advertising, or unsolicited content.</p>
                <p class="fw-bold">Violation of intellectual property rights.</p>
              </div>


            </article>

            <article class="mb-8">
              <h5 class="fs-3">Privacy and Security</h5>
              <p>
                Privacy Policy: Your use of the Platform is also governed by our Privacy Policy. Please review the
                Privacy Policy for details on how we collect, use, and protect your personal information.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Termination</h5>
              <p>
                We reserve the right to terminate or suspend your account and access to the Platform at our discretion,
                without notice, for any violation of this Agreement or any other reason.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Limitation of Liability</h5>
              <p>
                We make no warranties, representations, or guarantees regarding the availability, accuracy, or
                reliability of the Platform. We are not liable for any damages or losses arising from your use of the
                Platform.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Changes to the Agreement</h5>
              <p>
                We may update this Agreement periodically. Your continued use of the Platform constitutes your
                acceptance of the updated Terms of Use Agreement.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Contact Us</h5>
              <p>
                If you have any questions or concerns about this Agreement or the use of the Metalex web application,
                please contact us at directly through any of our virtual support channels.
              </p>
            </article>

          </div>

        </div>
      </div>
    </section>
  </main>

  @include('partials.footer')
@endsection
