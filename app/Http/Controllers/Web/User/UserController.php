<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$users = User::all();

		return view('user.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('user.create');
	}

	public function table(Request $request)
	{

		if ($request->ajax()) {


			$users = User::select('id', 'first_name', 'last_name', 'email', 'role', 'status', 'created_at')->where('id', '!=', Auth::id());

			return DataTables::of($users)
				->addColumn('action', 'user.table-buttons')
				->editColumn('role', function ($user) {
					return ucwords($user->role);
				})
				->editColumn('status', function ($user) {
					if ($user->status == 'active') {
						return "<span class='badge bg-success px-4 py-2 rounded-pill'>Active</span>";
					} else {
						return "<span class='badge bg-danger px-4 py-2 rounded-pill'>Inactive</span>";
					}
				})
				->rawColumns(['status', 'action'])
				->editColumn('created_at', function ($user) {
					return $user->created_at->format('F jS \of Y'); // human readable format
				})
				->toJson();
		}
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreUserRequest $request)
	{

		$validated = $request->validated();

		$user = new User;
		$user->first_name = $validated['first_name'];
		$user->last_name = $validated['last_name'];
		$user->email = $validated['email'];
		$user->role = $validated['role'];
		$user->status = $validated['status'];
		$user->password = Hash::make($validated['password']);
		$user->save();

		Alert::toast('Successfully Added', 'success')->timerProgressbar(true)->autoClose(2000);

		return redirect()->route('users.index');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(User $user)
	{
		return view('user.edit', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		return view('user.edit');
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateUserRequest $request, User $user)
	{
		$validated = $request->validated();

		if (isset($validated['password'])) {
			$validated['password'] = Hash::make($validated['password']);
		} else {
			$validated['password'] = $user->password;
		}

		$user->update($validated);

		Alert::toast('Successfully Updated', 'success');

		return back();
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Request $request, User $user)
	{

		if ($request->ajax()) {
			$user->delete();
			return response()->json([
				'success' => true,
				'message' => 'User Successfully Deleted',

			], Response::HTTP_OK);
		}

		$user->delete();

		return redirect()->route('users.index');
	}
}
