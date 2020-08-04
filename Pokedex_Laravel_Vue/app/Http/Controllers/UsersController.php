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
		$idme =  Auth::user()->id;
        $users = DB::table('users')->select('id','username', 'icon_id')->where('users.id','!=',$idme)->get();

    	return view('pokedex.userslist',compact(["users"]));
	}

	public function getTeamTrade($id){

		$idme =  Auth::user()->id;
		$userme = DB::table('users')->select('users.id','users.icon_id','users.username')->where('users.id', '=', $idme)->first();
		$teamme = DB::table('team')->select('team.pok_id','pokedex.nom_pok','types.type1','types.type2')
								  ->join('pokedex','team.pok_id','=','pokedex.id_pok')
								  ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
								  ->where('team.user_id', '=', $idme)->get();

		$userid = DB::table('users')->select('users.id','users.icon_id','users.username')->where('users.id', '=', $id)->first();

		$nUser = DB::table('users')->where('users.id', '=', $id)->count();
		if($nUser>0){
			return view('pokedex.trade',compact(["userme","teamme","userid"]));
		}else{
			return redirect('users')->with('success','User not found');
		}
		

	}

	public function getUserMe(){

		$id =  Auth::user()->id;
        $user = DB::table('users')->select('username','id','icon_id')->where('users.id', '=', $id)->first();

    	return view('pokedex.userme',compact(["user",'id']));
	
	}

	public function updateUser(Request $request){


			$nUser = DB::table('users')->where('users.username', '=', $request->input("username"))->count();
				if($nUser == 0){					
					$id =  Auth::user()->id;
					$user = User::where('id',$id)->first();
					$user->username = $request->input("username");
					$user->icon_id = $request->input("icon_id");
					$user->save();

					return redirect('home')->with('success','Modification Successfull');

				}else{
					return redirect('home')->with('success','User already exist');
				}
	}

	public function getUserTeam($id){
		$user = DB::table('users')->select('users.id','users.icon_id','users.username')->where('users.id', '=', $id)->first();
		$team = DB::table('team')->select('team.pok_id','pokedex.nom_pok','types.type1','types.type2')
								  ->join('pokedex','team.pok_id','=','pokedex.id_pok')
								  ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
								  ->where('team.user_id', '=', $id)->get();

		$nUser = DB::table('users')->where('users.id', '=', $id)->count();
		if($nUser>0){
			return view('pokedex.teamme',compact(["team","user"]));
		}else{
			return redirect('users')->with('success','User not found');
			
		}
									
	
	}

	public function getUserId($id){
		$user = DB::table('users')->select('users.id','users.username','users.icon_id')
				->where('users.id', '=', $id)->first();

		$nUser = DB::table('users')->where('users.id', '=', $id)->count();
		if($nUser>0){
			return view('pokedex.userid',compact(["user"]));
		}else{
			return redirect('users')->with('success', 'User not found');
		};
		
	}


	public function getMeTeam(){
		$id =  Auth::user()->id;
		$user = DB::table('users')->select('users.id','users.icon_id','users.username')->where('users.id', '=', $id)->first();
		$team = DB::table('team')->select('team.pok_id','pokedex.nom_pok','types.type1','types.type2')
								  ->join('pokedex','team.pok_id','=','pokedex.id_pok')
								  ->join('types', 'types.id_pok', '=', 'pokedex.id_pok')
								  ->where('team.user_id', '=', $id)->get();
									
		return view('pokedex.teamme',compact(["team","user"]));
	}

	public function getSearchUser(Request $request)
	{
		$users =  DB::table('users')->select('id','username', 'icon_id')
							->where('username', 'LIKE', '%'.$request->input('search').'%')->get();
		
		return view('pokedex.userslist',compact(["users"]));
	}

	public function getSendTeam($id, Request $request){
		$idSend =  Auth::user()->id;

		var_dump($request->input("pok_id"));
		$nTeam = DB::table('team')
		->join('users', 'users.id','=','team.user_id')
		->where('users.id', '=', $id)
		->count();

		$pokExist = DB::table('team')
					->join('users', 'users.id','=','team.user_id')
					->where('users.id', '=', $idSend)
					->where('team.pok_id','=',  $request->input("pok_id"));
		if(!empty($pokExist)){			
			if($nTeam < 6){
				$team = DB::table('team')->insert(
					['user_id' => $id,
					'pok_id' => $request->input("pok_id")]
				);

			$teamSend = DB::table('team')
							->where('user_id','=',$idSend)
							->where('pok_id','=', $request->input("pok_id"))
							->delete();

			}
			return redirect()->back()->with('success', "Trade is ok !");
		}else{
			$error = "Could not create ressource" ;
			return redirect()->back()->with('success', $error);
		}
		
	}

}