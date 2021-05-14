<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    /**
     * Show all users stored in database.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => 200,
            'data' => User::orderBy('points', 'desc')->get(),
            'message' => 'List Of Users'
        ]);
    }

    /**
     * Store a newly created user in database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_R($request->all());exit;
        $users = User::create($request->all());

        return response()->json([
            'status' => 201,
            'data' => $users,
            'message' => 'Created'
        ]);
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (! empty($user)) {
            return response()->json([
                'status' => 200,
                'data' => $user,
                'message' => 'User Found'
            ]);
        }
        return response()->json([
            'error' => 'No User found',
            'status' => 404
        ]);
    }

    /**
     * Update the specified user points in database.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (! empty($user)) {
            if ($request->get('is_increment') == 1) {
                $user->increment('points');
            } else {
                if ($user->points > 0) {
                    $user->decrement('points');
                }
            }
            return response()->json([
                'status' => 200,
                'data' => User::orderBy('points', 'desc')->get(),
                'message' => 'Value Updated'
            ]);
        }
        return response()->json([
            'error' => 'No student found',
            'status' => 404
        ]);
    }

    /**
     * Soft Delete the specified user from database.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (! empty($user)) {
            $user->delete();
            return response()->json([
                'status' => 200,
                'message' => 'deleted'
            ]);
        }
        return response()->json([
            'error' => 'No User found',
            'status' => 404
        ]);
    }
}
