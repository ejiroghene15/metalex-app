<form id="reply_thread" method="POST" class="">
  @csrf
  <div class="mb-3 d-md-flex align-items-center position-relative gap-1 flex-wrap">
    <div class="editor border-0 border-bottom flex-grow-1 bg-gray-100 rounded-4"></div>
    <button class="btn btn-sm btn-success ms-auto rounded-4 float-end mt-md-0 mt-3">Post Reply</button>
    <input type="hidden" name="topic" value="{{base64_encode($topic->id)}}">
    <div class="clearfix"></div>
  </div>
</form>
