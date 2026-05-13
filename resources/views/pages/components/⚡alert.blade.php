<?php

use Livewire\Component;

new class extends Component {
  //
};
?>

<div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  Livewire.on('success-alert', ({title, message}) => {
    Swal.fire({
      title: `${title}`,
      text: `${message}`,
      icon: "success",
    });
  })

  Livewire.on('error-alert', ({title, message}) => {
    toastr.error(message, title);
  })

  toastr.options.timeOut = 0;
  toastr.options.extendedTimeOut = 0;
</script>

