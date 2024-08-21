<div class="modal fade" id="create-forum" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Forum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form class="modal-body" action="{{ route('forum.create') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Category</label>
          <select name="category_id" class="form-control">
            @foreach ($category as $_)
              <option value="{{ $_->id }}">{{ $_->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">
            <span>Forum Name</span>
            <span data-bs-toggle="tooltip" data-placement="right"
                  title="The name of your forum, E.g: Legal Analytics, Cyber Security & Data Privacy">
              <i class="fe fe-help-circle"></i>
            </span>
          </label>
          <input class="form-control" name="name" type="text"/>
        </div>

        <div class="mb-3">
          <label class="form-label">
            <span>Description</span>
            <span data-bs-toggle="tooltip" data-placement="right"
                  title="This should be a short description about your forum">
              <i class="fe fe-help-circle"></i>
            </span>
          </label>
          <input class="form-control" name="description" maxlength="100" type="text"/>
        </div>

        <button class="btn btn-primary">Save</button>
      </form>

    </div>
  </div>
</div>
