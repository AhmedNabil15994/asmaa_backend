<?php

namespace Modules\Authentication\Foundation;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;

trait Authentication
{
    public static function authentication($credentials)
    {
        // LOGIN BY : Mobile & Password
        $attempts=['password'=>$credentials->password];
        if (is_numeric($credentials->email)) {
            $attempts['mobile']=$credentials->mobile;
        // LOGIN BY : Email & Password
        } elseif (filter_var($credentials->email, FILTER_VALIDATE_EMAIL)) {
            $attempts['email']=$credentials->email;
        }

        return  Auth::attempt($attempts, $credentials->has('remember'));
    }

    public function login($credentials)
    {
        try {
            if (self::authentication($credentials)) {
                return false;
            }

            $errors = new MessageBag([
            'password' => __('authentication::dashboard.login.validations.failed')
          ]);

            return $errors;
        } catch (Exception $e) {
            return $e;
        }
    }

    public function loginAfterRegister($credentials)
    {
        // try {
        self::authentication($credentials);
        // } catch (Exception $e) {
            // return $e;
        // }
    }

    public function generateToken($user)
    {
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;

        $token->save();

        return $tokenResult;
    }

    public function tokenExpiresAt($token)
    {
        return Carbon::parse($token->token->expires_at)->toDateTimeString();
    }
}
