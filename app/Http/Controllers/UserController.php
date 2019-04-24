<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Address;

class UserController extends Controller
{
    /*
		Default method to load login page
	*/
	public function index(){
		return view('login');
	}	
	
	/*
		Function to check the login user
	*/
	
	public function checkuser(Request $request){
		$username = $request->input('username');
		$password = $request->input('password');
	
		$request->validate([
			'username'=>'required',
			'password'=>'required'
		]);
		
		//After validation 
		$result = DB::table('users')
				->select('id','username','password','usertype')
				->where('username', '=', $username)
				->where('password', '=', md5($password))
				->get();
				
		if(count($result)>0){			
			session(['username'   => $username]);
			if($result[0]->usertype == 2){
				return redirect('user/adminaddress');
			}			
			return redirect('user/dashboard');
		}
		else{
			return redirect('user/')->with('invalid_login', 'Invalid Credentials !');
		}
	
	}
	
	/* To load the user dashboard */
	public function dashboard(){
		
		//Check if the user session is created, if yes load dashboard else redirect to login
		if(!empty(session('username'))){
			
			$id =  DB::table('users')->where('username',session('username'))->value('id');
			
			session(['user_id'=>$id]);
			
			//Load the blog posts
			$posts = DB::table('posts')
					->get();
			
			return view('userdashboard')->with('postdata',$posts);
		}
		return redirect('user/');		
	}
	
	/*	To logout the user */
	public function logout(Request $request){
		$request->session()->forget('username');
		return redirect('user/');			
	}
	
	/* To load the admin dashboard */
	public function loadadmin(){
		if(!empty(session('username'))){
			
			//Load the blog posts
			$users = DB::table('users')
					->get();
			
			return view('admindash')->with('userdata',$users);
		}
		return redirect('user/');
		
	}


	/*To load admin address */
	public function loadaddress(){
		if(!empty(session('username'))){
			
			//Load the blog posts
			$addresses = \App\Address::all();
			
			//return view('admindash')->with('userdata',$users);
			return view('adminaddress')->with('addressdata',$addresses);
		}
		return redirect('user/');
		
	}
	
	/* To load the user posts */
	public function loadposts(){
		if(!empty(session('username'))){
			
			//Load the blog posts
			$posts = DB::table('posts')
					->get();
			
			return view('adminposts')->with('postdata',$posts);
		}
		return redirect('user/');
		
	}


		/* To load the user profile */
		public function loadprofile(){
			if(!empty(session('username'))){
				
				//Load the blog posts
				$posts = DB::table('posts')
						->get();
				
				return view('adminprofile')->with('postdata',$posts);
			}
			return redirect('user/');
			
		}
	
	/*To load add address form */
	public function addaddress(){
		return view('addnewaddress');
	}
	
	/* Insert a new address in the system */
	public function insertaddress(Request $request){

		$address      = new Address();
		
		$address->address_title = $request->input('addresstitle');
		$address->contact_name  = $request->input('contactname');
		$address->contact_number  = $request->input('contactnum');
		$address->address_1   = $request->input('addressone');
		$address->address_2   = $request->input('addresstwo');
		$address->address_3 = $request->input('addressthree');
		$address->pincode  		 = $request->input('pincode');
		$address->city  			 = $request->input('city');
		$address->state  			 = $request->input('state');
		$address->country  		 = $request->input('country');
		
		$request->validate([
			'addresstitle'=>'required',
			'contactname'=>'required',
			'contactnum'=>'required',
			'addressone'=>'required',
			'addresstwo'=>'required',
			'addressthree'=>'required',
			'pincode'=>'required',
			'city'=>'required',
			'state'=>'required',
			'country'=>'required'
		]);
		
		$address->save();
		
		return redirect('/user/adminaddress')->with('status', 'Address Added Successfully !');
	}


	public function editaddress($addressid){
		$address = \App\Address::find($addressid);
		
		return view('editaddress')->with('addressdata',$address);
	}
	
	/* Method to update the post	*/
	public function updateaddress(Request $request){
		$address      = new Address();
	
		$address->address_title = $request->input('addresstitle');
		$address->contact_name  = $request->input('contactname');
		$address->contact_number  = $request->input('contactnum');
		$address->address_1   = $request->input('addressone');
		$address->address_2   = $request->input('addresstwo');
		$address->address_3 = $request->input('addressthree');
		$address->pincode  		 = $request->input('pincode');
		$address->city  			 = $request->input('city');
		$address->state  			 = $request->input('state');
		$address->country  		 = $request->input('country');
		
		$request->validate([
			'addresstitle'=>'required',
			'contactname'=>'required',
			'contactnum'=>'required',
			'addressone'=>'required',
			'addresstwo'=>'required',
			'addressthree'=>'required',
			'pincode'=>'required',
			'city'=>'required',
			'state'=>'required',
			'country'=>'required'
		]);
		
		$address->save();
		
		return redirect('/user/adminaddress')->with('status', 'Address Updated Successfully !');
		
	}
	
	/*	Function to delete post */
	public function deletepost($postid){		
		DB::table('posts')->where('post_id', '=', $postid)->delete();
		return redirect('user/adminposts')->with('adminupdatestatus', 'Post Deleted Successfully !');
	}
	
	/* Function to view post */
	public function viewpost($postid){
		$posts = DB::table('posts')
					->where('post_id','=',$postid)
					->get();
		
		return view('viewpost')->with('postdata',$posts);
	}
	
	/* Function to view post from admin */
	public function viewpostadmin($postid){
		$posts = DB::table('posts')
					->where('post_id','=',$postid)
					->get();
		
		return view('viewpostadmin')->with('postdata',$posts);
	}
	
}
