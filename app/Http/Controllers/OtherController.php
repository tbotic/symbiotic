<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Session;

class OtherController extends Controller
{

    // newsletter



    public function newsletterConfirm(Request $request)
    {

        if ($request->submitbutton == 'accept') {
            $this->validate($request, [
                'email'=>'required|email'
            ]);
            if (Promo::where('email', '=', $request->email)->doesntExist()) {
                $promo = Promo::create([
                    'email' => $request->email
                ]);
            }
        }

        $request->session()->put('newsletterPopup', '1');
        return redirect()->back(); 

    }

}