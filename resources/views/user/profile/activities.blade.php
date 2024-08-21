<div class="card mb-4">
  <div class="card-body px-2">
    <section id="user-activities">
      <div class="table-card">
        <table class="table table-hover dt" style="width:100%">
          <thead class="table-light">
          <tr>
            <th hidden></th>
            <th>Activity</th>
            <th>Date</th>
          </tr>
          </thead>
          <tbody>
          @foreach($user->activity as $_)
            <tr>
              <td hidden>{{$_->id}}</td>
              <td>{!! $_->activity !!}</td>
              <td>{{$_->created_at->isoFormat('Do, MMMM YYYY')}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>
