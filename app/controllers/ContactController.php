<?php

class ContactController extends BaseController{

	public function getContact()
	{
		return View::make('pages.contact');
	}


	public function getContactUsForm()
	{
		//Get all the data and store it inside Store Variable
		$data = Input::all();

		//Validation rules
		$rules = array (
		'first_name' => 'required|alpha',
		'last_name' => 'required|alpha',
		'phone_number'=>'numeric|min:8',
		'email' => 'required|email',
		'message' => 'required|min:25'
		);

		//Validate data
		$validator = Validator::make ($data, $rules);

		if ($validator -> passes()){

			//Send email using Laravel send function
			Mail::send('emails.welcome', $data, function($message) use ($data)
			{
				//email 'From' field: Get users email add and name
				$message->from($data['email'] , $data['first_name']);
				//email 'To' field: cahnge this to emails that you want to be notified.
				$message->to('zhangkan111@hotmail.com', 'Laravel Blade')->cc('ken@pkfurniture.co.nz')->subject('Welcome');
			});	
			return View::make('pages.contact');
			}else{
				//return contact form with errors
				return Redirect::route('contact')->withErrors($validator);
			}
		}

}