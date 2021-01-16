<?php

namespace App\Http\Controllers\SocialUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteThisUser extends Controller
{
    public function delete()
    {
        $user = Auth::user();
        $user->delete();

        return 'user deleted';
    }
}
