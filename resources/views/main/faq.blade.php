@extends('layout.master')

@section('title', 'Frequently Asked Questions')

@section('style')
  @parent
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection

@php
  $faq = [
"General" => [
      [
          "q" => "What is the Metalex?",
          "a" =>"Metalex Group is a diversified company operating across multiple industries, including legal services, technology, publishing, business development, and entertainment. Our goal is to provide innovative solutions that create value for businesses, professionals, and creatives."
      ],
      [
          "q" => "What companies operate under Metalex Group?",
          "a" => "
                <p>Metalex Group consists of: </p>
                <p>Metalex Legal – Legal services, corporate advisory, and compliance.</p>
                <p>Metalex Technologies – Tech-driven business solutions, including the development of the Metalex App and third-party tech services.</p>
                <p>Metalex Publications – Legal and business publications, including magazines, journals, and books.</p>
                <p>Metalex Academy – Professional training programs.</p>
                <p>Metalex Entertainment Hub – Music and entertainment management, content creation, and promotions.</p>"
      ],

      ],
      "Metalex Legal" =>[
      [
          "q" => "What legal services does Metalex Legal provide?",
          "a" => "We offer corporate and commercial law services, contract drafting, regulatory compliance, intellectual property protection, dispute resolution, and more."
      ],
      [
          "q" => "Does Metalex Legal provide legal support for startups?",
          "a" => "Yes! We assist startups with company registration, business structuring, legal compliance, and drafting essential agreements."
      ],
      [
          "q" => " How can I book a consultation with Metalex Legal?",
            "a" => "Yes! We assist startups with company registration, business structuring, legal compliance, and drafting essential agreements."
       ]
      ],
      "Metalex Technologies" => [
      [
          "q" => "Does Metalex Technologies offer tech solutions for businesses?",
          "a" => "Yes! We provide custom software development, tech advisory, and digital solutions for businesses looking to scale."
      ],

      ],
      "Metalex Publications" => [
      [
          "q" => "What publications does Metalex produce?",
          "a" => "We publish a series of specialized magazines, journals, and books covering corporate law, entertainment law, intellectual property law, human rights law, and technology law."
      ],
      [
          "q" => "Can I contribute to Metalex Publications?",
          "a" => "Yes! We welcome contributions from legal professionals, researchers, and industry experts. Contact us for submission guidelines."
      ]
      ],
      "Metalex Academy" => [
      [
          "q" => " What courses does Metalex Academy offer?",
          "a" => "Our academy provides skills development training, legal education, and business development programs. More specialized courses will be introduced soon."
      ]
      ],
      "Metalex Entertainment Hub" => [
      [
          "q" => "What services does Metalex Entertainment Hub offer?",
          "a" => "We focus on artist management, music promotion, content creation, and entertainment consulting."
      ],
      [
          "q" => " Does Metalex Entertainment sign artists?",
          "a" => "Yes! We are establishing a record label to sign and manage artists while providing them with legal and business support."
      ]
      ],
      "Others" => [
      [
          "q" => "How can I partner or collaborate with Metalex Group?",
          "a" => "We welcome partnerships in various capacities! Whether you're an investor, content creator, or business owner, reach out to us to explore opportunities"
      ],
      [
          "q" => " How do I stay updated on Metalex Group’s activities?",
          "a" => "Follow us on social media, subscribe to our newsletters, and check our website regularly for updates on our projects and events."
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
{{--          <span>FAQ</span>--}}
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