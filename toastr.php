<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- header link -->






<!-- footer link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))

            var type = ("{{ Session::get('type') }}");

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


return redirect()->route('your route name')->with('message','Data added Successfully');

return redirect()->route('your route name')->with('error','Data Deleted');

return redirect()->route('your route name')->with('Warning','Are you sure you want to delete? ');

return redirect()->route('your route name')->with('info','This is xyz information');




