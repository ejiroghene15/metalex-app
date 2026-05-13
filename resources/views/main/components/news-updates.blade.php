<div class="row">
  <section class="col-md-8 flex-grow-1">
    <div class="d-lg-none mb-3 d-flex justify-content-between align-items-center position-relative">
      <div class="dropdown w-100">
        <button class="btn btn-primary btn-sm w-100 d-flex justify-content-between align-items-center" type="button"
                data-bs-toggle="collapse" data-bs-target="#mobileFilterCollapse" aria-expanded="false"
                aria-controls="mobileFilterCollapse" style="font-size: 0.8rem; padding: 0.5rem 1rem;">
          <span><i class="bi bi-funnel me-1"></i> Filter By</span>
          <i class="bi bi-chevron-down"></i>
        </button>
        <div class="collapse mt-2 position-absolute w-100" id="mobileFilterCollapse" style="z-index: 1000;">
          <div class="card card-body shadow-lg bg-colors-gradient border-0">
            @include('main.components.filter-sidebar-content', ['id' => 'mobile'])
          </div>
        </div>
      </div>
    </div>

    <div class="position-relative">
      <span class="position-absolute search-icon" style="top: 50%; left: 10px; transform: translateY(-50%)">
        <i class="bi bi-search"></i>
      </span>
      <input type="search" placeholder="Search for articles..." wire:model.live="search"
             class="form-control ps-5">
    </div>

    <div class="row justify-content-between mt-5 gap-6">
      @foreach($this->posts as $_)
        <a class="article px-0"
           href="{{route('full-article', ["article"=> $_->slug, "id" => $_->id])}}">
          <figure>
            <img src="{{$_->thumbnail}}" class="" alt="">
          </figure>

            <div class="article-title justify-content-center d-flex flex-column">
              <p class="category">{{$_->b_category->name}}</p>
              <h4>{{$_->title}}</h4>
            </div>


            <div class="d-flex pe-3 gap-3 align-items-center author-container">
              <img src="{{$_->author->avatar}}" alt="" class="rounded-circle avatar-lg me-1">
              <div>
                <p class="mb-1 text-dark name">{{$_->authorName}}</p>
                <span class="d-flex align-items-center date">
                    <span class="time">{{date('M d, Y', strtotime($_->created_at))}}</span>
                    <i class="fa-solid fa-circle text-dark" style="font-size: 5px"></i>
                    <span class="text-dark">{{$_->readTime()}}</span>
                  </span>
              </div>
            </div>
        </a>
      @endforeach
    </div>
  </section>

  <aside class="col-md-4 d-none d-lg-block">
    <div class="card shadow-sm border-0 bg-colors-gradient" id="category-list-container">
      <div class="card-body p-4">
        @include('main.components.filter-sidebar-content', ['id' => 'desktop'])
      </div>
    </div>
  </aside>

</div>


@if($this->posts->count())
  <footer class="mt-5 d-flex justify-content-center">
    {{$this->posts->onEachSide(1)->links()}}
  </footer>
@endif