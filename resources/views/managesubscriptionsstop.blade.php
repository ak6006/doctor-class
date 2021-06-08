
			
<?php
 	if (isset($_GET['subid'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['subid'])
                    ->update(['stoped' => 1])
					
                    ;
					}
					 	if (isset($_GET['subid'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['subid'])
                    ->update(['cancel' => 1])
					
                    ;
						}
					if (isset($_GET['subid'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['subid'])
                    ->update(['active' => 1])
					
                    ;
						}
					if (isset($_GET['subid'])){
                    DB::table('appointments_details')
                    ->where('appointments_id', $_GET['subid'])
                    ->update(['cancel' => 1])
					
                    ;
					}

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
        <h1 class="text-white text-center my-5 py-5">تم إيقاف الباقة بنجاح</h1>
 <?php    $subscriptions = DB::table('subscriptions')->where('id', $_GET['subid'])->get();

									foreach ($subscriptions as $subscription)
									{ ?>
									
									<?php    $company = DB::table('students')->where('cancel', 0)->where('user_id', $subscription->user_create_id)->get();

									foreach ($company as $compan) { ?>
						<h1 class="text-center my-5 py-5"><a target="_new" href="companyview?coid=<?=$compan->id?>" class="btn btn-danger m-auto" title="ترحيل المبلغ المتبقى">ترحيل المبلغ المتبقى</a>	</h1>
									<?php	}	} ?>
    </body>

</html>

