<?php
			
			if (isset($_GET['name'])){
                    DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['name' => $_GET['name']])
                    ;
					}
			if (isset($_GET['email'])){
                    DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['email' => $_GET['email']])
                    ;
					}
			if (isset($_GET['mobile'])){
                    DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['mobile' => $_GET['mobile']])
                    ;
					header("refresh: 0; useredited");
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
        <h1 class="text-white text-center my-5 py-5">???? ?????????? ?????????????? ??????????</h1>
        <div class="loader m-auto"></div>
    </body>

</html>
<?php header("refresh: 1; useredit"); ?>