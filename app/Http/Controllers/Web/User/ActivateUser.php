<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Http\Response;

class ActivateUser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, User $user)
    {
        if ($request->ajax()) {

            $user->status = 'active';
            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'User Activated',
            ], Response::HTTP_OK);
        }
    }
}
