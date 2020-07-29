<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Team;

class UsersController extends Controller
{
    public function __construct()
    {

	}

	public function index()
	{
	
        $users = DB::table('users')->select('id','username', 'icon_id')->distinct()->get();

    	return response()->json($users);
	}

	public function getUserMe(){

		$id =  Auth::user()->id;
        $users = DB::table('users')->select('username')->where('users.id', '=', $id)->get();

    	return response()->json($users);
	
	}

	public function updateUser(Request $request){
			$id =  Auth::user()->id;
			$user = User::where('id',$id)->first();
			$user->username = $request->input("username");
			$user->icon_id = $request->input("icon_id");
			$user->save();
	
			return response()->json($user);
	}

	public function getUserTeam($id){
		$team = DB::table('users')->select('team.pok_id')
									->join('team','team.user_id','=','users.id')
									->where('users.id', '=', $id)->get();

		return response()->json($team);
	}

	public function getUserId($id){
		$team = DB::table('users')->select('users.id','users.username','users.icon_id')
				->where('users.id', '=', $id)->get();

		return response()->json($team);
	}


	public function getMeTeam(){
		$id =  Auth::user()->id;
		$team = DB::table('users')->select('team.pok_id')
									->join('team','team.user_id','=','users.id')
									->where('users.id', '=', $id)->get();

		return response()->json($team);
	}

	public function getSearchUser(Request $request)
	{
		$search = DB::table('users')
							->select('username')
							->where('username', 'LIKE', '%'.$request->input('search').'%')->get();
		
		return response()->json($search);
	}

	public function getSendTeam($id, Request $request){
		$idSend =  Auth::user()->id;
		var_dump($id);

		$team = DB::table('team')->insert(
			['user_id' => $id,
			'pok_id' => $request->input("pok_id")]
		);

		//$teamSend = Team::where('user_id',$idSend, 'and', 'pok_id', $request->input("pok_id"))->delete();
		
		return response()->json($team);
	}

}