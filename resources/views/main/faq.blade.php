@extends('layout.master')

@section('title', 'News & Updates')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@php
  $faq = [
"General" => [
      [
          "q" => "What is the Metalex?",
          "a" =>"The Metalex is a global online platform that connects legal professionals and individuals interested in legal matters. It's a space for knowledge sharing, discussions, and accessing legal services and resources."
      ],
      [
          "q" => "How do I join Metalex?",
          "a" =>"Joining Metalex is easy. Click on the <b>Sign Up</b> button, provide the necessary information, and confirm your email address. You will then have full access to the community."
      ],
      [
          "q" => "Can I create my own forum or discussion on Metalex?",
          "a" => "Yes, you can create personalized forums and discussions based on your interests. Customize your forums, ask questions, and start conversations within the community."
      ],
      [
          "q" => "Are there any rules for participating in discussions?",
          "a" => "Yes, we have forum rules and guidelines in place to ensure respectful and productive discussions. Please review and follow these rules when engaging in conversations."
      ],
      [
          "q" => "Is Metalex free to use?",
          "a" => "Yes, Metalex offers free access to its community and resources. We may offer premium features in the future, but the core functionality will remain accessible to all users."
      ]
      ],
      "Services" =>[
      [
          "q" => "How can I connect with legal professionals on Metalex?",
          "a" => "You can connect with legal professionals by following their profiles, participating in their forums, and sending private messages. Building connections is encouraged."
      ],
      [
          "q" => "Is Metalex a platform for seeking legal advice or representation?",
          "a" => "While the Metalex is a place for legal discussions and connection, currently any one interested in employing or retaining the service of an attorney will have to do so through Metalex Legal; which currently provides and serves as the E-Law firm for interested legal practitioners."
      ]
      ],
      "Careers" => [
      [
          "q" => "Can I share my legal blog or content on the Metalex?",
          "a" => "Yes, we have a category for legal resources and learning. You can share your legal blog, articles, or other content that can benefit the community."
      ],
      [
          "q" => "How do I report inappropriate content or behavior?",
          "a" => "If you come across any content or behavior that violates the Metalex rules, contact us directly and we will address the issue."
      ]
      ],
      "Partnership" => [
      [
          "q" => "Can I use Metalex on my mobile device?",
          "a" => "Yes, the Metalex is designed to be mobile-friendly. You can access and use the platform on your mobile device through a web browser."
      ],
      [
          "q" => "How can I get in touch with the Metalex support team?",
          "a" => "If  you have specific questions or need assistance, you can reach out to our support team through the contact information provided on the platform."
      ]
      ],
      "Contact Information" => [
      [
          "q" => "Do I need to be a legal professional or law student to use and be on the Metalex?",
          "a" => "No, Metalex is open to anyone interested in legal matters or in need of legal services, whether you are a legal professional, a law student, or simply someone curious about legal topics. The platform is designed to accommodate a diverse range of users."
      ]
      ]
]
@endphp

@section('body')
  @include('main.partials.navbar')

  {{--  Jumbotron --}}
  <section class="pt-3" id="faq-jumbotron">
    <div class="col-lg-8 mx-auto px-3 text-center">
      <h2 class="text-white" id="heading">Frequently Asked Questions (FAQ)</h2>
      <p class="text-white pt-3 px-xl-15">
        Find answers to common questions about Metalex Group Limited, our services, and how we operate. If you need
        further assistance, feel free to reach out!
      </p>
    </div>
  </section>

  <section class="col-lg-9 mx-auto py-10 px-3">
    <div class="accordion accordion-flush" id="faqs">
      @foreach($faq as $k => $v)
        @php($id = uniqid())
        <h3 class="title">
          <span class="color">{{$k}}</span>
          <span>FAQ</span>
        </h3>
        @foreach($v as $_)
          <div class="border p-3 rounded-3 mb-10" id="heading_{{$loop->index}}_{{$id}}">
            <h3 class="mb-0 fs-3 py-1">
              <a href="#" class="d-flex align-items-center text-inherit
                    text-decoration-none active"
                 data-bs-toggle="collapse" data-bs-target="#a_{{$loop->index}}_{{$id}}"
                 aria-expanded="false" aria-controls="a_{{$loop->index}}_{{$id}}">
                    <span class="me-auto">
                      {{$_['q']}}
                    </span>
                <span class="collapse-toggle ms-4">
                      <i class="fe fe-chevron-down text-muted" style="font-size: 2em"></i>
                    </span>
              </a>
            </h3>

            <div id="a_{{$loop->index}}_{{$id}}" class="collapse"
                 aria-labelledby="heading_{{$loop->index}}_{{$id}}"
                 data-bs-parent="#faqs">
              <div class="pt-3">
                {!! $_['a'] !!}
              </div>
            </div>
          </div>
        @endforeach
      @endforeach

    </div>
  </section>


  {{--  Additional Info--}}
  <section id="before-footer" class="mt-5">
    @include('main.contact-info-footer')
  </section>

  @include('main.partials.footer')
@endsection