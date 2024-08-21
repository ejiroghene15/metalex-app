<div class="modal fade" id="delete-forum-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Forum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="delete-forum" method="post" action="{{route('forum.delete')}}">
          @csrf
          <h5>Kindly note that this action is irreversible</h5>
          <input type="hidden" name="forum_id" id="forum_id">
          <button class="btn btn-sm btn-danger">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>
