@include('header_admin') 
@extends('layout')

@section('content')




<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/logo_100.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg-light">

        <!-- Main content -->
        <div class="container-fluid my-5 text-center text-blue">
            <h3><span class="pb-1 border-buttom" > تعديل المواعيد </span></h3>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                <table class="table table-striped table-bordered mx-auto shadow w-75" >
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th class="align-middle" colspan="3"> منطقة الرياض </th>                          
                        </tr>
                        <tr>
                            <th class="align-middle"> اليوم </th>
                            <th class="align-middle"> من الساعة </th>
                            <th class="align-middle"> الي الساعة </th>                          
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
							      <form method="get" action="appointmentsupdatedsuccess">
       
								 @csrf
								<input type="hidden" value="<?=$_GET['cityid']?>" name="cityid">

 <?php    
if (isset($_GET['cityid'])){
 //$cityy ==  $_GET['cityid'];
 }
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $_GET['cityid'])->get();			
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>

                        <tr>
				
						 <input type="hidden" name="dayid[]" value="<?=$appointment->id?>" class=" px-3 py-1 text-center shadow border-0 bg-white text-blue" style="border-radius: 20px;">
						 
					
                            <td class="align-middle"> <?=$appointment->day_name?>  </td>
                            <td>
                                <input type="time" name="fromhour[]" value="<?=$appointment->fromhour?>" class=" px-3 py-1 shadow border-0 bg-white text-blue" style="border-radius: 20px;">
                            </td>
                            <td>
                                <input type="time" name="tohour[]" value="<?=$appointment->tohour?>" class=" px-3 py-1 shadow border-0 bg-white text-blue" style="border-radius: 20px;">
                            </td>
                        </tr>
					<?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <input type="submit" class="btn bg-blue text-white px-5" value="حفظ">
                            </td>
                        </tr>
						</form>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
   <script>
       function openNav() {
           document.getElementById("mySidepanel").style.width = "300px";
       }
           function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
       }
   </script>
</html>
@endsection
 @include('footer_admin') 