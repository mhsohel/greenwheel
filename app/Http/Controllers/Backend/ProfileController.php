<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Models\User;

class ProfileController extends Controller
{
    public function index ()
    {


        Gate::authorize('access_profile');
        return view('backend.profile.index');
    }

    public function update(Request $request)
    {
    //    dd($request);



        if($request->hasfile('avatar')) {
            $user = Auth::user();
            $deleteoldphoto = User::find($user->avatar);
            if ($deleteoldphoto) {
                $path = public_path('images/backend/') . $deleteoldphoto;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
        if($request->hasfile('avatar')){
            $photo_upload = $request->avatar;
            $filename = time() . '.' . $photo_upload->getClientOriginalExtension();
            Image::make($photo_upload)->resize(400, 400)->save(public_path('images/backend/' . $filename));


                // Get logged in user
        $user = Auth::user();
        // Update user info
        $user->update([
            'avatar' => $filename,
        ]);

        // return with success msg
        notify()->success('Profile Successfully Updated.', 'Updated');
        return redirect()->back();
    }
    }
    public function changePassword()
    {
        Gate::authorize('update_password');
        return view('backend.profile.security');
    }

//    public function updatePassword(UpdatePasswordRequest $request)
    public function updatePassword(Request $request)
    {
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                Auth::user()->update([
                    'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('login');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
        return redirect()->back();
    }

    public function updatefromfrontendPassword(Request $request)
    {
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                Auth::user()->update([
                    'password' => Hash::make($request->password)
                ]);
                Auth::logout();
                notify()->success('Password Successfully Changed.', 'Success');
                return redirect()->route('index');
            } else {
                notify()->warning('New password cannot be the same as old password.', 'Warning');
            }
        } else {
            notify()->error('Current password not match.', 'Error');
        }
        return redirect()->back();
    }


    public function fromfrontendupdate(Request $request)
    {
    //    dd($request);



        if($request->hasfile('avatar')) {
            $user = Auth::user();
            $deleteoldphoto = User::find($user->avatar);
            if ($deleteoldphoto) {
                $path = public_path('images/backend/') . $deleteoldphoto;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
        if($request->hasfile('avatar')){
            $photo_upload = $request->avatar;
            $filename = time() . '.' . $photo_upload->getClientOriginalExtension();
            Image::make($photo_upload)->resize(400, 400)->save(public_path('images/backend/' . $filename));


                // Get logged in user
        $user = Auth::user();
        // Update user info
        $user->update([
            'avatar' => $filename,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address

        ]);

            // return with success msg
            notify()->success('Profile Successfully Updated.', 'Updated');
            return view('frontend.pages.userdashboard',compact('user'));
        }else{
            $user = Auth::user();

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,

            ]);
            return view('frontend.pages.userdashboard',compact('user'));
        }
    }
}
