<div class="row justify-content-between mt-5 gap-6">
  @foreach($post as $_)
    <article class="col-md-4 p-4 article">
      <figure>
        <img src="{{$_->thumbnail}}" class="" alt="">
      </figure>

      <p class="category">{{$_->b_category->name}}</p>

      <h4>{{$_->title}}</h4>


      <div class="d-flex pt-3 gap-3 align-items-center author-container mt-auto">
        <img src="{{$_->author->avatar}}" alt="" class="rounded-circle avatar-lg me-1">
        <div>
          <p class="mb-1 text-dark name">{{$_->author->fullName()}}</p>
          <span class="d-flex align-items-center date">
                    <span class="time">{{date('M d, Y', strtotime($_->created_at))}}</span>
                    <i class="fa-solid fa-circle text-dark" style="font-size: 5px"></i>
                    <span class="text-dark">{{$_->readTime()}}</span>
                  </span>
        </div>
      </div>
    </article>

  @endforeach
</div>