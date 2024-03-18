<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeactivateUser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, User $user)
    {
        if ($request->ajax()){

            $user->status = 'inactive';
            $user->save();

            return response()->json([
				'success' => true,
				'message' => 'User Deactivated',

		  ], Response::HTTP_OK);
        }
    }
}
