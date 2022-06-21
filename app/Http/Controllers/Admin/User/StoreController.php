<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if ($data['password'] == $data['password1']) {
            $data['password'] = Hash::make($data['password']);
            unset($data['password1']);
            User::firstOrCreate($data);
            return redirect()->route('admin.user.index');
        }
        return redirect()->route('admin.user.create')->withErrors('Паролі не співпадають!');
    }
}
