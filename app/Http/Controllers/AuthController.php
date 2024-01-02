<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Milon\Barcode\Facades\DNS1DFacade as DNS1D;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    // view login
    public function viewLogin() {
        return view('pages.auth.login');
    }

    // process login
    public function login(Request $request) {
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format email yang anda inputkan salah',
                'password.required' => 'Password wajib diisi'
            ]
        );
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/dashboard");
        }

        return back()->with(['error' => 'Password / email salah',])->onlyInput('email', 'password');
    }

    // view register
    public function viewRegister() {
        return view('pages.auth.register');
    }

    // process register
    public function register(Request $request) {
        $request->validate([
            'nik' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'foto_profile' => 'required|image|max:3072|mimes:jpeg,png,jpg,gif,svg,webp'
        ], [
            'nik.required' => 'NIK wajib diisi',
            'nik.unique' => 'NIK tidak tersedia',
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email salah',
            'email.unique' => 'Email tidak tersedia',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Panjang password minimal 8 karakter',
            'foto_profile.required' => 'Foto profile wajib diisi',
            'foto_profile.max' => 'Ukuran foto maximal 3 MB',
            'foto_profile.image' => 'File yang anda masukkan bukan gambar',
            'foto_profile.mimes' => 'Foto harus berformat jpeg,png,jpg,gif,svg,webp',
        ]);

        // upload foto profile
        $foto_profile = $request->file('foto_profile');
        $foto_profile->storeAs('public/foto-profile', $foto_profile->hashName());

        // generate barcode
        $nik = $request->nik;
        $barcode = DNS1D::getBarcodePNG($nik, 'C128');
        
        // upload barcode
        $fileName = "barcode_{$nik}.png";
        Storage::disk('public')->put("barcodes/{$fileName}", base64_decode($barcode));

        $createUser = User::create([
            'nik' => $nik,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'foto_profile' => $foto_profile->hashName()
        ]);

        if($createUser) {
            return redirect()->route('login')->with(["success" => "Registrasi berhasil, silahkan login"]);
        }
    }
    

    // logout
    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
