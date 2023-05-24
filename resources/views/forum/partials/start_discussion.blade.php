<div class="modal fade" id="new-discussion" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Discussion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @auth
          <form action="{{ route('forum.create.topic', ['forum' => $forum->id]) }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">
                <span>Subject</span>
                <span data-bs-toggle="tooltip" data-placement="right"
                      title="The subject of your discussion should be short and precise. ">
              <i class="fe fe-help-circle"></i>
            </span>
              </label>
              <input class="form-control" name="subject" type="text"/>
            </div>

            <div class="mb-3">
              <label class="form-label">
                <span>Body</span>
                <span data-bs-toggle="tooltip" data-placement="right"
                      title="Here, you can expatiate on your subject of discussion">
              <i class="fe fe-help-circle"></i>
            </span>
              </label>
              <textarea name="body" class="editor"></textarea>
            </div>

            <button class="btn btn-primary">Submit</button>
          </form>
        @else
          <a href="{{route('auth.login')}}" class="btn btn-primary">Login to start a discussion</a>
        @endauth
      </div>
    </div>
  </div>
</div>
