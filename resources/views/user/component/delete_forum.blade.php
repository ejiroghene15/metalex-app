<div class="modal fade" id="delete-forum-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Forum - {{$_->name}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="delete-forum" method="post" action="{{route('forum.delete')}}">
          @method('DELETE')
          @csrf
          <h5>Kindly note that this action is irreversible</h5>
          <input type="hidden" name="id" id="forum_id">
          <input type="hidden" name="name" id="{{$_->name}}">
          <button class="btn btn-sm btn-danger mt-2">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>
