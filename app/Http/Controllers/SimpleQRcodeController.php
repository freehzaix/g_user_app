<?php

namespace App\Http\Controllers;

use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
    
    public static function generate($uid)
    {
        $path_codeqr = 'codes-qr/'. $uid . '.svg';

        QrCode::size(300)->generate(route('badged', $uid), public_path($path_codeqr));

        $user = User::find($uid);
        $user->qrcode = $path_codeqr;
        $user->update();
        
        return redirect()->route('users')->with('status', 'Le QR Code a été généré pour l\'utilisateur.');
    }

    // public function codeQRCustom()
    // {
    //     # On génère un QR code de taille 200 x 200 px
    // 	$qrcode = Qrcode::encoding("UTF-8")
    //     ->color(20, 11, 44)
    //     ->backgroundColor(240, 245, 255)
    //     ->size(300)
    //     ->geo(5.306390, -4.003341);
    	
    // 	# On envoie le QR code généré à la vue "simple-qrcode"
    // 	return view("simple-qrcode", compact('qrcode'));
    // }

    public function delete($id)
    {
        $user = User::find($id);
        $user->qrcode = null;
        $user->save();

        return redirect()->route('users')->with('status', 'Le QR Code a été supprimé pour l\'utilisateur.');
    }

}
