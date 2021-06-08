 @include('header_admin') 
 <?php
			     use Illuminate\Support\Facades\Auth;
				 use Carbon\Carbon;

			if (isset($_GET['mision_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 2)
                    ->update(['desc_ar' => $_GET['mision_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_mision_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 2)
                    ->update(['title_ar' => $_GET['title_mision_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['mision_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 2)
                    ->update(['desc_en' => $_GET['mision_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_mision_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 2)
                    ->update(['title_en' => $_GET['title_mision_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}		
			if (isset($_GET['vision_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 1)
                    ->update(['desc_ar' => $_GET['vision_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_vision_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 1)
                    ->update(['title_ar' => $_GET['title_vision_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['vision_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 1)
                    ->update(['desc_en' => $_GET['vision_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_vision_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 1)
                    ->update(['title_en' => $_GET['title_vision_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['service_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 3)
                    ->update(['desc_ar' => $_GET['service_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_service_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 3)
                    ->update(['title_ar' => $_GET['title_service_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['service_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 3)
                    ->update(['desc_en' => $_GET['service_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_service_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 3)
                    ->update(['title_en' => $_GET['title_service_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['company_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 4)
                    ->update(['desc_ar' => $_GET['company_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_company_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 4)
                    ->update(['title_ar' => $_GET['title_company_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['company_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 4)
                    ->update(['desc_en' => $_GET['company_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['title_company_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 4)
                    ->update(['title_en' => $_GET['title_company_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['address_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 5)
                    ->update(['desc_ar' => $_GET['address_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['email_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 6)
                    ->update(['desc_ar' => $_GET['email_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['phone_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 7)
                    ->update(['desc_ar' => $_GET['phone_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['gmap_ar'])){
                    DB::table('publicwebcontents')
                    ->where('id', 11)
                    ->update(['desc_ar' => $_GET['gmap_ar'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
					
					if (isset($_GET['address_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 5)
                    ->update(['desc_en' => $_GET['address_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['email_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 6)
                    ->update(['desc_en' => $_GET['email_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['phone_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 7)
                    ->update(['desc_en' => $_GET['phone_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['gmap_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 11)
                    ->update(['desc_en' => $_GET['gmap_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
					
			if (isset($_GET['facebook_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 8)
                    ->update(['desc_en' => $_GET['facebook_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['whatsapp_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 9)
                    ->update(['desc_en' => $_GET['whatsapp_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
			if (isset($_GET['instgram_en'])){
                    DB::table('publicwebcontents')
                    ->where('id', 10)
                    ->update(['desc_en' => $_GET['instgram_en'], 'admin_id' => Auth::id(),  'update_date_time' => Carbon::now()])
                    ;
					}
					?>
					
					
					
					
					
				
        <style>
            .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }
        .active, .accordion:hover {
            background-color: #ccc;
        }
        .panel2 {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
        </style>
   

        <button onclick="topFunction()" id="topBtn" title="الي اعلي"><i class="fas fa-arrow-circle-up"></i></button>
        


        <nav class="tabbable container">
            <ul class="nav nav-pills mb-2 p-0">
                <li class="nav-item nav-item-category">
                    <a href="#mision" class="nav-link mb-sm-3 mb-md-0 btn shadow mx-2 text-blue font-weight-bolder bg-white">مهام الموقع</a>
                </li>
                <li class="nav-item nav-item-category">
                    <a href="#vision" class="nav-link mb-sm-3 mb-md-0 btn shadow mx-2 text-blue font-weight-bolder bg-white">رؤية الموقع</a>
                </li>
                <li class="nav-item nav-item-category">
                    <a href="#aboutservice" class="nav-link mb-sm-3 mb-md-0 btn shadow mx-2 text-blue font-weight-bolder bg-white">عن الخدمة</a>
                </li>
                <li class="nav-item nav-item-category">
                    <a href="#aboutcompany" class="nav-link mb-sm-3 mb-md-0 btn shadow mx-2 text-blue font-weight-bolder bg-white">عن الشركة</a>
                </li>
                <li class="nav-item nav-item-category">
                    <a href="#communication" class="nav-link mb-sm-3 mb-md-0 btn shadow mx-2 text-blue font-weight-bolder bg-white">معلومات الاتصال</a>
                </li>
                <li class="nav-item nav-item-category">
                    <a href="#social" class="nav-link mb-sm-3 mb-md-0 btn shadow mx-2 text-blue font-weight-bolder bg-white">وسائل التواصل الاجتماعي</a>
                </li>
            </ul>
        </nav>
        <!-- Main content -->
        <div class="container my-5 text-center text-blue">     
					<?php      
							
						$contents = DB::table('publicwebcontents')->where('id', 2)->get();

						foreach ($contents as $content)
					{ 
					?>		
            <div class="my-3" id="mision">
                <button class="accordion pl-0 pr-4 text-right font-weight-bolder rounded" style="font-size: 23px;"> مهام الموقع  <span class="float-left px-3">+</span></button>
                <div class="panel2 shadow">
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3"><span> عربي </span></h4>
                            <form>
                                <input type="text"  class="form-control" value="<?=$content->title_ar?>" name="title_mision_ar" placeholder="المهام...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="mision_ar"><?=$content->desc_ar?></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="حفظ">
                            </form>
                        </div>
                    </div>
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3 mt-5"><span> English </span></h4>
                            <form dir="ltr">
                                <input type="text"  class="form-control" name="title_mision_en" value="<?=$content->title_en?>" placeholder="mision...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"name="mision_en"><?=$content->desc_en?></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
				<?php } ?>
					
					<?php      
							
						$contents = DB::table('publicwebcontents')->where('id', 1)->get();

						foreach ($contents as $content)
					{ 
					?>
            <div class="my-3" id="vision">
                <button class="accordion pl-0 pr-4 text-right font-weight-bolder rounded" style="font-size: 23px;"> رؤية الموقع  <span class="float-left px-3">+</span></button>
                <div class="panel2 shadow">
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3"><span> عربي </span></h4>
                            <form>
                                <input type="text"  class="form-control" value="<?=$content->title_ar?>" name="title_vision_ar" placeholder="الرؤية...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"name="vision_ar"><?=$content->desc_ar?></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="حفظ">
                            </form>
                        </div>
                    </div>
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3 mt-5"><span> English </span></h4>
                            <form dir="ltr">
                                <input type="text"  class="form-control" value="<?=$content->title_en?>" name="title_vision_en" placeholder="Vision...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="vision_en"><?=$content->desc_en?></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
			<?php      
							
						$contents = DB::table('publicwebcontents')->where('id', 3)->get();

						foreach ($contents as $content)
					{ 
					?>
            <div class="my-3" id="aboutservice">
                <button class="accordion pl-0 pr-4 text-right font-weight-bolder rounded" style="font-size: 23px;">  عن الخدمة  <span class="float-left px-3">+</span></button>
                <div class="panel2 shadow">
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3"><span> عربي </span></h4>
                            <form>
                                <input type="text"  class="form-control" value="<?=$content->title_ar?>" name="title_service_ar" placeholder="عن الخدمة...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="service_ar"><?=$content->desc_ar?></textarea></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="حفظ">
                            </form>
                        </div>
                    </div>
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3 mt-5"><span> English </span></h4>
                            <form dir="ltr">
                                <input type="text"  class="form-control" value="<?=$content->title_en?>" name="title_service_en" placeholder="about service...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="service_en"><?=$content->desc_en?></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
			
			<?php      
							
						$contents = DB::table('publicwebcontents')->where('id', 4)->get();

						foreach ($contents as $content)
					{ 
			?>
            <div class="my-3" id="aboutcompany">
                <button class="accordion pl-0 pr-4 text-right font-weight-bolder rounded" style="font-size: 23px;">  عن الشركة  <span class="float-left px-3">+</span></button>
                <div class="panel2 shadow">
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3"><span> عربي </span></h4>
                            <form>
                                <input type="text"  class="form-control" value="<?=$content->title_ar?>" name="title_company_ar" placeholder="عن الشركة...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"name="company_ar"><?=$content->desc_ar?></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="حفظ">
                            </form>
                        </div>
                    </div>
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3 mt-5"><span> English </span></h4>
                            <form dir="ltr">
                                <input type="text"  class="form-control" value="<?=$content->title_en?>" name="title_company_en" placeholder="about company...">
                                <div class="form-group my-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="company_en"><?=$content->desc_en?></textarea>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
            <div class="my-3" id="communication">
                <button class="accordion pl-0 pr-4 text-right font-weight-bolder rounded" style="font-size: 23px;"> معلومات الاتصال  <span class="float-left px-3">+</span></button>
                <div class="panel2 shadow">
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3"><span> عربي </span></h4>
                            <form>
                                <div class="form-group">
                                    <label for="address" class="w-100 font-weight-bolder">العنوان</label>
					<?php      
						$contents = DB::table('publicwebcontents')->where('id', 5)->get();
						foreach ($contents as $content)
					{ 
					?>
                                    <input type="text" class="form-control" name="address_ar" value="<?=$content->desc_ar?>" id="address" placeholder="العنوان...">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="w-100 font-weight-bolder">البريد الالكتروني</label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 6)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input type="email" class="form-control" id="email" name="email_ar" value="<?=$content->desc_ar?>" placeholder="البريد الالكتروني...">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="w-100 font-weight-bolder"> الهاتف </label>
					<?php      
						$contents = DB::table('publicwebcontents')->where('id', 7)->get();
						foreach ($contents as $content)
					{ 
					?>
                                    <input type="text" name="phone_ar" value="<?=$content->desc_ar?>" class="form-control" id="phone" placeholder=" الهاتف...">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="map" class="w-100 font-weight-bolder"> الموقع </label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 11)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input type="text" name="gmap_ar" value="<?=$content->desc_ar?>" class="form-control"  placeholder=" الموقع علي خرائط جوجل... ">
					<?php } ?>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="حفظ">
                            </form>
                        </div>
                    </div>
                    <div class="my-3 ">
                        <div class="form-group" >
                            <h4 class="pb-3 mt-5"><span> English </span></h4>
                            <form dir="ltr">
                                <div class="form-group">
                                    <label for="addressen" class="w-100 font-weight-bolder">Address</label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 5)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input type="text" name="address_en" value="<?=$content->desc_en?>" class="form-control" id="addressen" placeholder="Address...">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="emailen" class="w-100 font-weight-bolder">E-mail</label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 6)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input name="email_en" value="<?=$content->desc_en?>"  type="email" class="form-control" id="emailen" placeholder="E-mail...">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="phoneen" class="w-100 font-weight-bolder"> Phone </label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 7)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input type="text" name="phone_en" value="<?=$content->desc_en?>" class="form-control" id="phoneen" placeholder=" Phone... ">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="mapen" class="w-100 font-weight-bolder"> Location (Google maps) </label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 11)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input type="text" name="gmap_en" value="<?=$content->desc_en?>" class="form-control" id="mapen" placeholder="Location (Google maps)...">
					<?php } ?>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3" id="social">
                <button class="accordion pl-0 pr-4 text-right font-weight-bolder rounded" style="font-size: 23px;">  وسائل التواصل الاجتماعي  <span class="float-left px-3">+</span></button>
                <div class="panel2 shadow">
                    <div class="my-3 ">
                        <div class="form-group" >
                            <form dir="ltr">
                                <div class="form-group">
                                    <label for="facebook" class="w-100 font-weight-bolder">Facebook URL</label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 8)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input type="text" name="facebook_en" value="<?=$content->desc_en?>"  class="form-control" id="facebook" placeholder="Facebook URL...">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp" class="w-100 font-weight-bolder">Whatsapp Number</label>
                    <?php      
						$contents = DB::table('publicwebcontents')->where('id', 9)->get();
						foreach ($contents as $content)
					{ 
					?>
									<input type="text" name="whatsapp_en" value="<?=$content->desc_en?>" class="form-control" id="whatsapp" placeholder="Whatsapp Number...">
					<?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="insta" class="w-100 font-weight-bolder">Instagram URL</label>
					<?php      
						$contents = DB::table('publicwebcontents')->where('id', 10)->get();
						foreach ($contents as $content)
					{ 
					?>                                   
								   <input name="instgram_en" value="<?=$content->desc_en?>" type="text" class="form-control" id="insta" placeholder="Instagram URL...">
					<?php } ?>
                                </div>
                                <input type="submit" class="btn bg-blue text-white px-5" value="save">
                            </form>
                        </div>
                    </div>
                </div>
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
    <script>
        var mybutton = document.getElementById("topBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>
    <script>
            var acc = document.getElementsByClassName("accordion");
            var i;
            for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel2 = this.nextElementSibling;
                if (panel2.style.maxHeight) {
                panel2.style.maxHeight = null;
                this.lastChild.innerHTML="+";
                this.style.color="#444"
                this.style.backgroundColor="#ccc";
                } else {
                panel2.style.maxHeight = panel2.scrollHeight + "px";
                this.style.color="white"
                this.style.backgroundColor="#2a56c6";
                this.lastChild.innerHTML="-";
                } 
            });
            }
        
    </script>
</html>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
			

					
 @include('footer_admin') 