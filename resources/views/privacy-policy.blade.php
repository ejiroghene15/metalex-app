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
            <h1 class="fw-bold mb-1 display-5">Privacy Policy</h1>
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
                  <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
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
              <h5 class="fs-3">Introduction</h5>
              <p>
                This Privacy Policy outlines the practices and policies of Metalex Technologies Ltd ("we," "us," or
                "our") concerning the collection, use, and protection of personal information provided by users ("you"
                or "users") of the Legal Metalex web application (the "Platform"). We are committed to safeguarding your
                privacy and ensuring the security of your personal information.
              </p>

            </article>

            <article class="mb-8">
              <h5 class="fs-3">Information We Collect</h5>
              <p>
                User-Provided Information: We may collect personal information you voluntarily provide when using our
                Platform, including but not limited to your name, email address, username, and profile information.
              </p>
              <p>
                Automatically Collected Information: We may collect non-personal information automatically, such as your
                IP address, browser type, device information, and usage data.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3"> How We Use Your Information</h5>
              <p>
                We use the information you provide for the following purposes:
              </p>

              <div>
                <p class="fw-bold">To provide, personalize, and improve our Platform.</p>
                <p class="fw-bold">To communicate with you, including responding to inquiries and providing
                  support..</p>
                <p class="fw-bold">To analyze trends and track usage statistics.</p>
              </div>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Sharing Your Information</h5>
              <p>
                We do not share your personal information with third parties except in the following circumstances:
              </p>

              <div>
                <p class="fw-bold">With your explicit consent.</p>
                <p class="fw-bold">When required to do so by law or to protect our rights and safety.</p>
              </div>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Security</h5>
              <p>
                We take reasonable measures to protect your personal information from unauthorized access, use, or
                disclosure. However, no data transmission over the internet can be guaranteed to be 100% secure. We
                cannot guarantee the security of the information you transmit to us.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Cookies and Tracking Technologies</h5>
              <p>
                We may use cookies and similar tracking technologies to enhance your experience. You can adjust your
                browser settings to disable cookies but be aware that this may impact your ability to use certain
                features on our Platform.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Your Choices</h5>
              <p>
                You have the option to review, modify, or delete your account information at any time by logging into
                your account. You may also choose to unsubscribe from our email communications.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Children's Privacy</h5>
              <p>
                Our Platform is not intended for use by children under the age of 13. We do not knowingly collect or
                store personal information from children.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Changes to this Privacy Policy</h5>
              <p>
                We may update this Privacy Policy periodically. The revised policy will be posted on this page with the
                effective date. Your continued use of the Platform constitutes your acceptance of the updated Privacy
                Policy.
              </p>
            </article>

            <article class="mb-8">
              <h5 class="fs-3">Contact Us</h5>
              <p>
                If you have any questions or concerns about this Privacy Policy or the privacy practices of Legal Nexus,
                please contact us at through any of our support email address.
              </p>
            </article>

          </div>

        </div>
      </div>
    </section>
  </main>

  @include('partials.footer')
@endsection
