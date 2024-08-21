<li class="breadcrumb-item">
  <a href="{{route('user.dashboard', Str::slug($user->fullName()))}}">Dashboard</a>
</li>
<li class="breadcrumb-item">
  <a href="{{route('user.dashboard', Str::slug($user->fullName()))}}">{{$user->fullName()}}</a>
</li>