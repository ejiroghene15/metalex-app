@php
  $portfolios = [
  [
    'name' => 'Fast Buy',
    'thumbnail' => asset('assets/images/background/subsidiaries/fastbuy-thumbnail.svg'),
    'title' => 'Food & Groceries Delivery',
    'description' => 'A seamless platform connecting users with local food and grocery delivery
          services. Designed to make delivery fast and easy, helping local businesses thrive.',
    'status' => 'Active',
    'link' => 'https://myfastbuy.com/'
  ],
  [
    'name' => 'Cruz',
    'thumbnail' => asset('assets/images/portfolio/cruz.jpeg'),
    'title' => 'E-Hailing',
    'description' => 'Cruz is founded with a mission to empower individuals and communities by providing safe, reliable, and affordable transportation solutions. Cruz strives to revolutionize the way people move, making everyday travel convenient, efficient, and enjoyable. Through innovation, technology, and a commitment to excellence, Cruz aims to enhance the lives of passengers, drivers, and the cities served.',
    'status' => 'Active',
    'link' => 'https://www.ridewithcruz.com/'
  ],
  [
    'name' => 'MidasTouch',
    'thumbnail' => asset('assets/images/portfolio/midas-touch.jpeg'),
    'title' => 'Food & Groceries Delivery',
    'description' => 'A seamless platform connecting users with local food and grocery delivery
          services. Designed to make delivery fast and easy, helping local businesses thrive.',
    'status' => 'Active',
    'link' => 'https://midastouchbusinessinitiative.com/'
  ],
  ];
@endphp

@foreach($portfolios as $p)
  <article class="col-md-4 article">
    <div class="card">
      <div class="card-body">
        <figure>
          <img src="{{$p['thumbnail']}}" class="w-100" alt="">
        </figure>

        <div class="d-flex justify-content-between align-items-center">
          <h3 class="mb-0">{{$p['name']}}</h3>
          <button class="btn btn-sm btn-outline-info proj-status-btn">{{$p['status']}}</button>
        </div>
        <hr>
        <article>
          <h4>{{$p['title']}}</h4>
          <p class="text-dark">{{$p['description']}}</p>
          <a href="{{$p['link']}}" target="_blank" class="btn btn-sm btn-info explore-proj-btn">Explore Project</a>
        </article>
      </div>
    </div>
  </article>
@endforeach
