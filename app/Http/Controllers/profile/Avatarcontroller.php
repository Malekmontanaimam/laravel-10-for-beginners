<?php

namespace App\Http\Controllers\profile;
use APP\Http\Requests\UpdateAvatarRequest;
use App\Http\Controllers\Controller;


class Avatarcontroller extends Controller
{
     public function update(UpdateAvatarRequest  $request):Response  {
    dd($request->all());
return redirect(route('profile.edit'));
    }
}
