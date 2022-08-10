<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- header link -->






<!-- footer link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))

            var type = ("{{ Session::get('alert-type') }}");

            var message = ("{{ Session::get('message') }}");
            switch (type) {
            case 'success':
            toastr.success(message);
            break;
            case 'warning':
            toastr.warning(message);
            break;
            case 'error':
            toastr.error(message);
            break;
            case 'info':
            toastr.info(message);
            break;
            }

        @endif
    </script>

$notification = array(
    'message' => 'Post created successfully!',
    'alert-type' => 'success'
);

return Redirect::to('/')->with($notification);


