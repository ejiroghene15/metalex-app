<!-- resources/views/emails/registered.blade.php -->
<x-mail::message>
  # Welcome to {{ config('app.name') }}

  Thank you for registering. Please click the button below to verify your email address.

  {{--  @component('mail::button', ['url' => ''])--}}
  {{--    Verify Email--}}
  {{--  @endcomponent--}}

  If you did not create an account, no further action is required.

  Thanks,<br>
  {{ config('app.name') }}
</x-mail::message>


