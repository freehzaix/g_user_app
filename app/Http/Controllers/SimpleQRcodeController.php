<?php

namespace App\Http\Controllers;

use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{

    public static function generate($uid)
    {
        $path_codeqr = 'codes-qr/' . $uid . '.svg';

        QrCode::size(300)->generate(route('badged', $uid), public_path($path_codeqr));

        $user = User::find($uid);
        $user->qrcode = $path_codeqr;
        $user->update();

        return redirect()->route('users')->with('status', 'Le QR Code a été généré pour l\'utilisateur.');
    }

    public function codeQRWifi()
    {
        // Générer le QR code pour le WiFi et spécifier le format SVG
        $path_codeqr = QrCode::size(300)->wiFi([
            'encryption' => 'WPA2', // Type de cryptage, WPA ou WEP
            'ssid' => 'LEGS-CI1', // Nom du réseau WiFi
            'password' => '78793300', // Mot de passe du WiFi
            'hidden' => false // Si le réseau WiFi est masqué ou non
        ]);

        // Envoyer le chemin du fichier QR code à la vue
        return view("codeQRWifi", compact('path_codeqr'));
    }

    public function codeQRCustom()
    {
        $path_codeqr = 'codes-qr/code.svg';

        # On génère un QR code de taille 200 x 200 px
        # 253, 3, 5
        # 48, 47, 190
        $qrcode = Qrcode::size(300)->color(252, 2, 0)->generate('https://www.facebook.com/excellencelogistics.net', public_path($path_codeqr));

        # On envoie le QR code généré à la vue "simple-qrcode"
        return view("codeQRCustom", compact('path_codeqr'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->qrcode = null;
        $user->save();

        $path_codeqr = 'codes-qr/' . $id . '.svg';

        if (file_exists($path_codeqr)) {
            unlink($path_codeqr);
        }

        return redirect()->route('users')->with('status', 'Le QR Code a été supprimé pour l\'utilisateur.');
    }
}
