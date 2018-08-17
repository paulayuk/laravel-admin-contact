<?php


namespace Paulayuk\Contactform\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ContactFormController extends Controller {

    public function index()
    {
       return view('contactform::contact');
    }
	
	public function sendMail(Request $request)
	{
	    //add logic to send mail here
	}


}