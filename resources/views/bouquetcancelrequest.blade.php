

<?php
	if (isset($_GET['subid'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['subid'])
                    ->update(['cancel_request' => 1])
				
                    ;
					} 
/*
		
					                 
while (current($_GET['dayid'])) {
    if (current($_GET['fromhour']) >= 0) {
        
 if (current($_GET['tohour']) > 0 )         {

    DB::table('appointments')->where('id', current($_GET['dayid']))
                ->update(['fromhour' => current($_GET['fromhour']), 'tohour' => current($_GET['tohour'])]);
                  //  ->update(['fromhour' => 0])
    
    
    }




    next($_GET['dayid']);
    next($_GET['fromhour']);
    next($_GET['tohour']);

} 

 

}
if (isset($_GET['cityid'])){
	//echo $cityidd === $_GET['cityid'];
}
*/
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
        <h1 class="text-white text-center my-5 py-5">تم إرسال طلب إيقاف الباقه</h1>
        <div class="loader m-auto"></div>
    </body>

</html>

<?php  header("refresh: 1; sub_appointments?subid=$_GET[subid]"); ?>