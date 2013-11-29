<?php
class AuthController extends BaseController {
    public function getLogin() {
        return View::make('auth.login');
    }
    public function postLogin() {
        $user_data = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'active' => true
        );
        if(Auth::attempt($user_data)){
            return Redirect::to('auth/welcome');
        }else{
            return $this->getLogin()->with('error', 'Usuario o contraseña incorrectos.');
        }
    }    
    public function getWelcome(){
        if(Auth::check()){
            $user = Auth::user();
            return View::make('auth.welcome')->with('user', $user);
        }else{
            return $this->getLogin();
        }
    }
    public function getLogout(){
        if(Auth::check()){
            Auth::logout();
        }
        return Redirect::to('auth/login');
    }
}
?>