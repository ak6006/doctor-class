

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
									<?php      
								/*	$students1 = DB::table('students')->where('user_id', Auth::id())->get();
									foreach ($students1 as $students3){
									$students2 = DB::table('branches')->where('co_id', $students3->id)->count();	
									?>
									<?php if (!$students2) { header("refresh: 0; branchs/create"); } }*/?>
<?php 
if ($_GET['subid']) {
//if (isset($_GET['subid'])) { $subidd == $_GET['subid'];
//DB::insert('insert into subscriptions (subscription_id) values ("$_GET[subid"])');  
DB::insert('insert into subscriptions (subscription_id, user_create_id) values (?, ?)', [$_GET['subid'],  Auth::id()]); }
$max = DB::table('subscriptions')->max('id');
header("refresh: 0; subscriptions?maxid=$max");
?>
