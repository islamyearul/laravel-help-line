ref https://github.com/bKash-developer/pgw-merchant-backend-php/blob/master/php/
https://www.youtube.com/watch?v=dWUV5t38slU&ab_channel=CodeForYou
===================================
Step 1 ( add before body tag)
    <script id = "myScript" src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script>
   <script src="js/jquery-1.8.3.min.js"></script>
   
Step 2 Add csrf in meta and ajax

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
    });
</script>

Step 3 ( make controller and route for tocken)

Route::get('/token', [PaymentController::class, 'token'])->name('token');
add this in script 
 $.ajax({
            url: "token.php",
            type: 'POST',
            contentType: 'application/json',
            success: function (data) {
                console.log('got data from token  ..');
				console.log(JSON.stringify(data));
				
                accessToken=JSON.stringify(data);
            },
			error: function(){
						console.log('error');
                        
            }
        });
   incomplete
