<?php


namespace Paulayuk\Contactform\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Paulayuk\Contactform\Models\ContactForm;


class ContactFormController extends Controller {

    public function index()
    {
       return view('contactform::contact');
    }
	
	public function sendMail(Request $request)
	{
	    ContactForm::create($request->all());

	    return redirect(route('mail'))->with('status', 'Message Sent Successfully!');
	}


}