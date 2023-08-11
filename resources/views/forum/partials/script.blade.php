@section('scripts')
  @parent
  {{--  <script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key={{env('IFRAMELY_EMBED_KEY')}}"></script>--}}
  @auth
    <script src="{{asset('assets/js/vendors/ckeditor-ballon.js')}}"></script>
    <script src="{{asset('assets/js/custom/content.js')}}"></script>
    <script>const APP_URL = "{{env('APP_URL')}}"</script>
  @endauth

@endsection

