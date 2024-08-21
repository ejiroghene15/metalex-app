<div class="modal fade" id="report-comment" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Report Comment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @auth
          <form id="report-content">
            @csrf
            <article class="mb-3">
              @foreach($flags as $_)
                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" name="flag" value="{{$_->name}}">
                  <label class="form-check-label" for="spam">
                    {{$_->name}}
                  </label>
                  <p>
                    <small>{{$_->description}}</small>
                  </p>
                </div>
              @endforeach
            </article>
            <input type="hidden" name="thread_id" id="thread_id">
            <input type="hidden" name="topic" value="{{base64_encode($topic->id)}}">
            <button class="btn btn-sm btn-primary">Submit</button>
          </form>
        @else
          <a href="{{route('login')}}" class="btn btn-primary">You need to be logged in to continue</a>
        @endauth
      </div>
    </div>
  </div>
</div>
