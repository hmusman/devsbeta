<?php

namespace App\Http\Controllers\Pages;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\message;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;
use App\Models\Service;
use App\Rules\Captcha;
use Illuminate\Support\Facades\Validator;

class contactusController extends Controller
{
    //
    public function index(){
        
         $services = Service::all();

         $contents=Contact::all();
         
    	return view('Pages.contactus',['contents'=>$contents,], compact('services'));
    }

    public function message(Request $request){
         
    	$contents=Contact::all();
    
      if($request->hasFile('uploadFile') && $request->uploadFile->isValid()){
   $extension= $request->uploadFile->extension();
     //to get extension of file
    $filename =time()."_.".$extension; 
    $request->uploadFile->move(public_path('images'), $filename);
     // to set the path for image, the specific folder where we want to save the files or images
   }else 
    {
     $filename= "no-image.png";
     }

     $rules = array(
          'g-recaptcha-response' => new Captcha(),
    );

     $this->validate($request, $rules);

        $inserted=message::create(['name'=>$request->name,'email'=>$request->email,'subject'=>$request->subject,'uploadFile'=>$filename,'description'=>$request->description]);
      
    	/*$name=$request->name;
    	$email=$request->email;
    	$subject=$request->subject;
    	$uploadFile=$request->uploadFile;
    	$description=$request->description;*/
    
    // dd([$name,$email,$subject,$uploadFile,$description]);
    	if($inserted){
    $comment = 'Your message is received, we will get back to you soon';
    $toEmail = $request->email ;
    Mail::to($toEmail)->send(new FeedbackMail($comment));
    $services = Service::all();
    return redirect()->back()->with('message','Your message is received, we will get back to you soon')->with(compact('contents', 'services'));
    	 }
    }
}
