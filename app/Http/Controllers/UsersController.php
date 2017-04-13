<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdatePreferencesFormRequest;
use App\Http\Requests\UserStoreFormRequest;

class UsersController extends Controller
{
    public function store(UserStoreFormRequest $request)
    {
    	$email = $request->input('email');

    	if (User::whereEmail($email)->first() == null) {
    		User::create(['email' => $email]);
    	}

    	return json_encode(['success' => 'true']);
    }

    public function updatePreferences(UpdatePreferencesFormRequest $request)
    {
    	$user = User::whereEmail($request->input('email'))->firstOrFail();

    	$user->updatePreferences($request);

    	return json_encode(['success' => 'true']);
    }
}
