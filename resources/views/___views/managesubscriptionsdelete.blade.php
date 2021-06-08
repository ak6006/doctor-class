

 <?php
                    use Illuminate\Support\Facades\Auth;

                    // Get the currently authenticated user...
                    //echo $user = Auth::user() . "<hr/>"; 
                    // Get the currently authenticated user's ID...
					
                    $id = Auth::id() ;
					
					if ($id) {
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
					$role = Auth::user()->role;
                    $verified = Auth::user()->email_verified_at ;
					}
                    $title = '';
                    ?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            .loader {
                border: 16px solid #f3f3f3;
                border-radius: 50%;
                border-top: 16px solid #0174CF;
                border-bottom: 16px solid #0174CF;
                width: 90px;
                height: 90px;
                -webkit-animation: spin 2s linear infinite;
                animation: spin 2s linear infinite;
            }
            @-webkit-keyframes spin {
                0% {
                    -webkit-transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                }
            }
            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
        </style>
    </head>

    <body class="bg-blue">
        <h1 class="text-white text-center my-5 py-5">تم مسح الإشتراك بنجاح </h1>
        <div class="loader m-auto"></div>
    </body>

</html>
<?php 
if (isset($_GET['subid'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['subid'])
                    ->update(['cancel' => 1])
                    ;
					}
					if (isset($_GET['subid'])){
                    DB::table('appointments_details')
                    ->where('appointments_id', $_GET['subid'])
                    ->update(['cancel' => 1])
                    ;
					}
					if(Auth::user()->role == "admin"){
header("refresh: 1; managesubscriptions");
					} else { 
header("refresh: 1; subscriptions_home");
					}
?>
