<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
        return 'username';
    }

    protected function authenticated(Request $request, $user)
    {   
       
        $idSend =  Auth::id();
        $dateNow = Carbon::now()->format('yy-m-d');
       
        $nTeam = DB::table('team')
                ->join('users', 'users.id','=','team.user_id')
                ->where('users.id', '=', $idSend)
                ->count();

        $dateUser = DB::table('users')->select('last_login')->get();

        if(strtotime($dateUser) < strtotime($dateNow)){
            if($nTeam < 6){
                $team = DB::table('team')->insert(
                    ['user_id' => $idSend,
                    'pok_id' => rand(1,151)]
                );
            }
        }

      $updateDate = DB::table('users')
                        ->where('id','=',$idSend)
                        ->update(['last_login' => $dateNow]);
        
    }
}
