<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
    
    public function generate($uid)
    {
        $path_codeqr = 'codes-qr/'. $uid . '.svg';

        QrCode::size(200)->generate(route('badged', $uid), public_path($path_codeqr));
        
        return back()->with('status', 'Le Code QR a bien été créé.');
    }

}
