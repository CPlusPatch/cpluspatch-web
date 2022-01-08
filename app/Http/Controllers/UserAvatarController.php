<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserAvatarController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //$request->validate($request, ['file' => 'required']);
    
        $filename = Str::uuid();
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
    
        $path = $filepond->getPathFromServerId($request["file"]);
        $finalLocation = public_path("cdn/$filename.jpg");

        File::move($path, $finalLocation);

        //return response($path . " + " . $finalLocation); 
    
        $user = Auth::user();
        $user->profile_image = $filename;
        $user->save();

        return response($finalLocation);
    }
}
