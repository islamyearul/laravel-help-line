multiple modal not showing 
use this way 
  $(document.body).on('click', '#add_stock_form',function() {
                event.preventDefault();
                var stock_id = $(this).data('id');
                $('#add_stock_id').val(stock_id);
                $('#addModel').modal('show');
            });
