<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use OpenAI;
use Illuminate\Http\Request;
use http\Env\Response;
use App\Models\Message;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(Request $request)
    {
        $info  = $request->input('info');
        // // $client = new GuzzleHttp\Client([
        // //     'timeout' => 60.0,
        // // ]);
        // $client = OpenAI::client('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');
        // $result = $client->completions()->create([
        //     'model' => 'text-davinci-003',
        //     'prompt' => $info,
        //     'max_tokens' => 4000,
        //     'temperature' => 0.5,
        // ]);
        $arr = array("这里填写key");
        $result = null;
        $keywords = ['黄色网站','黄色','色情','草','做爱','口交','肛交','hentai','你妈','日你吗','第一次性','第一次爱','第一次那个','操','艹','赌博','菠菜','博彩','肉搏','乳交','垃圾','谣言','傻逼','sb','牛马','牛头人','歧视','打钱','日了','抢劫','婊','淫','性爱','屌','碧池','碧莲','傻猫','傻吊','撸','三级','R级','伦理','r级','限制级','色站','成人','叁级','美腿','毒品','你懂得','见不得人',
            '政府','共产党','反动','资产阶级','革命','宪政','民主','独裁','暴政','腐败','极权','贪污','暴力'
        ];
        // 执行检测
        $is_filter = $this->filter_keywords($info, $keywords);

        if ($is_filter) {
            return Response()->json(['message'=>'禁止发送违规词','status'=>401],401);
        }
        foreach ($arr as $key) {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://api.openai.com/v1/completions',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT=>300,
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $key
                ],
                CURLOPT_POSTFIELDS => json_encode([
                    'prompt' => $info,
                    'model' => 'text-davinci-003',
                    'max_tokens' => 4000,
                    'temperature' => 0.5
                ])
            ]);

            // 请求结束
            $domain = curl_exec($curl);
            curl_close($curl);
            if ($domain != null) {
                break;
            }
        }
        $result =  json_decode($domain,true);
        $result = $result['choices'][0]['text'];
        return Response()->json(['data'=>$result,'status'=>200],200);

    }

    public function login(Request $request){
        $code = $request->input('code');
        $userinfo = $request->input('userInfo');
        return response()->json(['data'=>$code,'userInfo'=>$userinfo,'status'=>200],200);
    }

    public function web_login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], [
            'email.required' => '邮箱必须填写',
            'email.email' => '邮箱格式不正确',
            'email.exists' => '邮箱不存在',
            'password.required' => '密码必须填写',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(),'status'=>401], 401);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->accessToken;

            return response()->json(['token' => $token,'message'=>'登录成功','status'=>200], 200);
        }

        return response()->json(['message' => '账号或密码错误','status'=>401], 401);
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ], [
            'name.required' => '名字必须填写',
            'email.required' => '邮箱必须填写',
            'email.email' => '邮箱格式不正确',
            'email.unique' => '邮箱已经被注册',
            'password.required' => '密码必须填写',
            'password.min' => '密码不能少于6位',
        ]);


        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first(),'status'=>401], 401);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->accessToken;

        return response()->json(['token' => $token,'message'=>'注册成功！','status'=>200], 200);
    }

    public function send_bot(Request $request){
        $user_id =  auth()->guard('api')->user();
        if ($user_id == null){
            return response()->json(['message' => '请先登录','status'=>401], 401);
        }
        $user_id =  auth()->guard('api')->user()->id;
        $info  = $request->input('info');
        if ($info == null){
            return response()->json(['message' => '请输入内容','status'=>401], 401);
        }
        // // $client = new GuzzleHttp\Client([
        // //     'timeout' => 60.0,
        // // ]);
        // $client = OpenAI::client('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');
        // $result = $client->completions()->create([
        //     'model' => 'text-davinci-003',
        //     'prompt' => $info,
        //     'max_tokens' => 4000,
        //     'temperature' => 0.5,
        // ]);
        $arr = array("这里填写key");
        $result = null;
        $keywords = ['黄色网站','黄色','色情','草','做爱','口交','肛交','hentai','你妈','日你吗','第一次性','第一次爱','第一次那个','操','艹','赌博','菠菜','博彩','肉搏','乳交','垃圾','谣言','傻逼','sb','牛马','牛头人','歧视','打钱','日了','抢劫','婊','淫','性爱','屌','碧池','碧莲','傻猫','傻吊','撸','三级','R级','伦理','r级','限制级','色站','成人','叁级','美腿','毒品','你懂得','见不得人',
            '政府','共产党','反动','资产阶级','革命','宪政','民主','独裁','暴政','腐败','极权','贪污','暴力'
        ];
        // 执行检测
        $is_filter = $this->filter_keywords($info, $keywords);

        if ($is_filter) {
            return Response()->json(['message'=>'禁止发送违规词','status'=>401],401);
        }
        foreach ($arr as $key) {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://api.openai.com/v1/completions',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT=>3000,
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $key
                ],
                CURLOPT_POSTFIELDS => json_encode([
                    'prompt' => $info,
                    'model' => 'text-davinci-003',
                    'max_tokens' => 4000,
                    'temperature' => 0.5,
                ])
            ]);

            // 请求结束
            $domain = curl_exec($curl);
            curl_close($curl);
            if ($domain != null) {
                break;
            }
        }
        $result =  json_decode($domain,true);
        if ($result == null) {
            return response()->json(['data'=>'机器人不知道你在说什么','status'=>200],200);
        }
        $result = htmlspecialchars($result['choices'][0]['text']);
        $result =  str_replace('

', '', $result);
        $result = str_replace(' ','&nbsp;',$result);

        $mss = Message::orderBy('session_id', 'desc')->first();
        $ms = new Message();
        if ($request->input('session_id')) {
            $ms->session_id = $request->input('session_id');
        } else {
            $ms->session_id = $mss ? $mss->session_id + 1 : 1;
        }
        $ms->from_id = 1;
        $ms->user_id = $user_id;
        $ms->question = $info;
        $ms->message = $result;
        $ms->save();

        return response()->json(['data'=>$result,'status'=>200],200);
    }

    public function get_message(Request $request){
        $user_id =  auth()->guard('api')->user();
        if ($user_id == null){
            return response()->json(['message' => '请先登录','status'=>401], 401);
        }
        $user_id =  auth()->guard('api')->user()->id;
        $ms = Message::where('user_id',$user_id)->get()->groupBy('session_id');
        return response()->json(['data'=>$ms,'status'=>200],200);
    }

    public function c_message(Request $request)
    {
        $user_id = auth()->guard('api')->user();
        if ($user_id == null) {
            return response()->json(['message' => '请先登录', 'status' => 401], 401);
        }
        $user_id = auth()->guard('api')->user()->id;
        $session_id = $request->input('session_id');
        $ms = Message::where('session_id', $session_id)->where('user_id',$user_id)->orderBy('created_at','ASC')->get();
        return response()->json(['data' => $ms, 'status' => 200], 200);
    }

    public function searchs(Request $request){
        $search = $request->input('search');
        $user_id =  auth()->guard('api')->user()->id;
        if ($user_id == null){
            return response()->json(['message' => '请先登录','status'=>401], 401);
        }
        $ms = Message::where('user_id',$user_id)->where('question','like','%'.$search.'%')->get()->groupBy('session_id');
        return response()->json(['data'=>$ms,'status'=>200],200);
    }

    public function del_msg(Request $request){
        $user_id =  auth()->guard('api')->user()->id;
        if ($user_id == null){
            return response()->json(['message' => '请先登录','status'=>401], 401);
        }
        $session_id = $request->input('session_id');
        $ms = Message::where('session_id',$session_id)->where('user_id',$user_id)->delete();
        if ($ms){
            return response()->json(['data'=>'删除成功','status'=>200],200);
        }else{
            return response()->json(['data'=>'删除失败','status'=>200],200);
        }
    }

    public function filter_keywords($content, $keywords)
    {
        foreach ($keywords as $keyword) {
            if (strpos($content, $keyword) !== false) {
                return true;
            }
        }
        return false;
    }
}

