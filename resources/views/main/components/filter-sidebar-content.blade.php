<div class="d-flex justify-content-between align-items-center mb-4">
  <h6 class="fw-bold mb-0">Categories</h6>
  @if(!empty($selectedCategories) || $dateRange || $sortBy !== 'recent' || $search)
    <button wire:click="clearFilters" class="btn btn-link btn-sm p-0 text-decoration-none text-danger fw-bold">
      Clear All
    </button>
  @endif
</div>
<div class="mb-4" id="category-list-{{$id ?? 'desktop'}}">
  <div class="category-items-container d-flex flex-column gap-2">
    <div class="form-check d-flex justify-content-between align-items-center">
      <div>
        <input class="form-check-input" type="checkbox" value="" id="all-categories-{{$id ?? 'desktop'}}"
               wire:click="$set('selectedCategories', [])"
               @if(empty($selectedCategories)) checked @endif>
        <label class="form-check-label ms-2" for="all-categories-{{$id ?? 'desktop'}}">
          All Categories
        </label>
      </div>
      <span class="badge bg-light text-dark border">{{\App\Models\Blog::count()}}</span>
    </div>

    @foreach($categories as $category)
      <div class="form-check d-flex justify-content-between align-items-center">
        <div>
          <input class="form-check-input" type="checkbox" value="{{$category->id}}"
                 id="cat-{{$category->id}}-{{$id ?? 'desktop'}}" wire:model.live="selectedCategories">
          <label class="form-check-label ms-2" for="cat-{{$category->id}}-{{$id ?? 'desktop'}}">
            <small class="fw-bold">{{$category->name}}</small>
          </label>
        </div>
        <span class="badge bg-light text-dark border">{{$category->blog_post->count()}}</span>
      </div>
    @endforeach
  </div>
</div>

<div class="mb-4" wire:ignore>
  <h6 class="fw-bold mb-3">Date</h6>
  <div class="position-relative">
    <input type="date" class="form-control date-filter" wire:model.live="dateRange" placeholder="Select Date Range">
  </div>
</div>


<div class="mb-2">
  <h6 class="fw-bold mb-3">Sort By</h6>
  <select class="form-select" wire:model.live="sortBy">
    <option value="recent">Recent</option>
    <option value="month">A month ago</option>
    <option value="3months">3 months ago</option>
    <option value="year">1 year</option>
  </select>
</div>
