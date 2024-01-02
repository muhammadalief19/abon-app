<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Absen";
        $nav = "absen";
        return view('pages.absen.create-absen', compact([
            'title','nav'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $curl = curl_init();
        $token = "0ZMmvdPhLfGt@t44fF_R";

        // set default timezone
        date_default_timezone_set('Asia/Jakarta');

        // get user by nik
        $user = User::with(["absen"])->where('nik', $request->nik)->first();
        
        if(date('H:i:s') <= "12:00:00"){
            $status = "hadir";
        } else { 
            $status = "terlambat";
        }

        // check apakah user sudah absen hari ini
        $existingAbsen = Absen::where('user_id', $user->id)
        ->where('record', date('Y-m-d'))
        ->first();

        if ($existingAbsen) {
            $curl = curl_init();
            $token = "0ZMmvdPhLfGt@t44fF_R";
            $url = "https://api.fonnte.com/send";
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'target' => $user->no_hp,
                    'message' => 'Absen telah tercatat'
                ),
                CURLOPT_HTTPHEADER => array(
                  "Authorization: $token"
                ),
              ));
        return response()->json([
            'message' => 'Anda sudah absen hari ini',
            'absen' => $existingAbsen
        ]);
        }
            // create absen
            $createAbsen = Absen::create([
                'user_id' => $user->id,
                'uuid' => uniqid(),
                'record' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'status' => $status
            ]);
            
            // return json
            if($createAbsen) {
            return response()->json([
                'message' => 'Absen telah berhasil',
                'absen' => $createAbsen,
                'no_hp' => $user->no_hp
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with(["absen"])->where('nik', $id)->first();
        $absen = Absen::with(["user"])->where('user_id', $user->id)->paginate(3);
        $title = "History";
        $nav = "history";

        return view('pages.absen.absen',compact([
            'absen','title','nav'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function whatsappNotification(Request $request) {
        $curl = curl_init();
        $token = "0ZMmvdPhLfGt@t44fF_R";
        $url = "https://api.fonnte.com/send";

        $sendWa = curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $request->target,
                'message' => 'Absen telah tercatat'
            ),
            CURLOPT_HTTPHEADER => array(
              "Authorization: $token"
            ),
          ));
          curl_exec($curl);
          if($sendWa) { 
              return response()->json([
                "message" => "Pesan telah dikirim ke nomer wa",
                "no_hp" => $request->target
              ]);
          }
    }
}
