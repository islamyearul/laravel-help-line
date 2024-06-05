
    <!-- Footer Link -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- This script for delete confirm item -->
    <script>
        $(document).ready(function() {
            $('.delete').click(function(e) {
                e.preventDefault();

                var link = $(this).attr('href');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })

            });
        });
    </script>


<!-- New system Edited by Yearul -->
{{-- Sweet Alert  --}}

cdn this cdn for old j query version
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
// for j query 3 
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>   
<script type="text/javascript">
 
        $('.show_confirm').click(function(event) {
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                 title: `Are you sure you want to delete this record?`,
                 text: "If you delete this, it will be gone forever.",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                 form.submit();
               }
             });
         });
     
   </script>

===================
 <script type="text/javascript">
        $('#receive_amount').on('blur', function() {
            var form = $(this).closest("form");
            var total_premium = $('#total_premium').val();
            var receive_amount = $('#receive_amount').val();
            if (receive_amount < total_premium) {
                swal.fire({
                    title: "Are you sure?",
                    text: "You input less amount than total premium!",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Yes, I Submit it!",
                    cancelButtonText: "No, cancel!",
                    confirmButtonClass: "btn btn-success mt-2",
                    cancelButtonClass: "btn btn-danger ms-2 mt-2",
                    buttonsStyling: !1,
                }).then(function(t) {
                    if (t.value) {
                        form.submit();
                    } else {
                        t.dismiss === swal.DismissReason.cancel && swal.fire({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            icon: "error",
                            confirmButtonClass: "btn btn-success",
                        });
                    }
                });
            }
        });
    </script>
