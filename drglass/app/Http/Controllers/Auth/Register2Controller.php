<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use File;
use Carbon\Carbon;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		
     $filename = public_path().'/thumbnail/';

        if (file_exists($filename)) {
           // echo "The file $filename exists";
        } else {
            File::makeDirectory(public_path().'/thumbnail/'.Auth::user()->id, 0777, true);
        }
 
$current_timestamp = Carbon::now()->timestamp; // Produces something like 1552296328
//      $target_dir = $filename."_".$current_timestamp."_";

$target_dir = $filename;
//// 3-10-2021 time().'_'.  to change pic   name in thumbnail//omar
$target_file = $target_dir .time().'_'. basename($_FILES["fileToUpload"]["name"]);
//$target_file_save = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 8000000) {
     return Redirect::back()->with('status','Sorry, your file is too large !');
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
    return Redirect::back()->with('status','Sorry, only JPG, JPEG, PNG & GIF files are allowed !');
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    return Redirect::back()->with('status','Sorry, your file was not uploaded !');
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        return Redirect::back()->with('status','Sorry!');
        echo "Sorry, there was an error uploading your file.";
    }
}  //// 3-10-2021 time().'_'.  to change pic   name in db//omar
		return User::create([
		
            'name' => $data['name'],
            'email' => $data['email'],
			'fileToUpload' => time().'_'.  basename( $_FILES["fileToUpload"]["name"]),
            'password' => Hash::make($data['password']),
           /* 'sex' => $data['gender'],
            'city' => $data['city'],
            'country' => $data['country'],*/
        ]);
    }
}
