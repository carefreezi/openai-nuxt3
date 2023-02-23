<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
class AuthorizationsController extends Controller {
    public function socialStore(Request $request) {
        return Socialite::driver('weixin')->redirect();
    }
    protected function respondWithToken($token) {
        return $this->success([
            'access_token' => 'Bearer ' . $token,
            'expires_in' => Auth::guard('api')->factory()->getTTL() ,
        ]);
    }

    public function weixin_callback()
    {
        $oauthUser = Socialite::with('weixin')->user();

        $data = [
            'nickname' => $oauthUser->getNickname(),
            'avatar'   => $oauthUser->getAvatar(),
            'open_id'  => $oauthUser->getId(),
            'sex'      => $oauthUser['sex'] == 1 ? '男' : '女',
        ];
        return $data;
    }
}
