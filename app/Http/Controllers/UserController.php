<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;

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
				return redirect('user/adminposts');
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
	
	/* To load the add new post form */
	public function addnewpost(){
		return view('addnewpost');
	}
	
	/* Insert a new post in the system */
	public function insertpost(Request $request){
		
		$title = $request->input('posttitle');
		$body  = $request->input('content');
		
		$request->validate([
			'posttitle'=>'required',
			'content'=>'required'
		]);
		
		// Fetch the current user id from the session username
		
		$id =  DB::table('users')->where('username',session('username'))->value('id');
		
		DB::table('posts')->insert(
			[
				'user_id'=>$id,
				'postdata'=>$body,
				'posttitle'=>$title,
				'created_at'=>now()				
			]
		);
		
		return redirect('user/dashboard')->with('status', 'Post Added Successfully !');
	}
	
	/* Function to edit a post by user */
	public function editpost($postid){
		$posts = DB::table('posts')
					->where('post_id','=',$postid)
					->get();
		
		return view('editpost')->with('postdata',$posts);
	}
	
	/* Method to update the post	*/
	public function updatepost(Request $request){
		$title  = $request->input('posttitle');
		$body   = $request->input('content');	
		$postid = $request->input('postid');
		
		$request->validate([
			'posttitle'=>'required',
			'content'=>'required'
		]);
		
		DB::table('posts')
            ->where('post_id', $postid)
            ->update(['posttitle' => $title,'postdata'=>$body]);
			
		
		return redirect('user/dashboard')->with('status', 'Post Updated Successfully !');
		
	}
	
	/*	Edit form for the Admin	*/
	public function editpostadmin($postid){
		$posts = DB::table('posts')
					->where('post_id','=',$postid)
					->get();
		
		return view('editpostadmin')->with('postdata',$posts);
	}
	
	/* Function to update the post by admin	*/
	public function updatepostadmin(Request $request){
		$title  = $request->input('posttitle');
		$body   = $request->input('content');	
		$postid = $request->input('postid');
		
		$request->validate([
			'posttitle'=>'required',
			'content'=>'required'
		]);
		
		DB::table('posts')
            ->where('post_id', $postid)
            ->update(['posttitle' => $title,'postdata'=>$body]);
			
		
		return redirect('user/adminposts')->with('adminupdatestatus', 'Post Updated Successfully !');
		
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
