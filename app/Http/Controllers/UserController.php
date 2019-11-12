<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($user){
		$usr = User::find($user);
		$usr_all = User::all();

	$ur = DB::table('users')->where('id','1')->pluck('id', 'name');
	//dd($ur);

		//dd($usr_all);

		// $Planes1 = array('10' 	=> 'Plan 1',
		// 				'11'	=> 'Plan 2',
		// 				'12'	=> 'Plan 3');


		// $Planes = array(array(	'id' => '1',
		//  						'name' =>'Plan 1',
		//  						'price' => '10'),
		// 				array(	'id' => '2',
		//  						'name' =>'Plan 2',
		//  						'price' => '20')
		//			);
		
		return view('user', compact('usr','usr_all'));
	}

}