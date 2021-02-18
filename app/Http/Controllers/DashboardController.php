<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\tb_entry;

class DashboardController extends Controller
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

    public function dashboard()
    {
        $user = Auth::user();
        $isadmin = $user->isadm;
        if($isadmin){
            return view('admindashboard');
        }
        $userid = $user->id;
        $entry =  tb_entry::where('user_id',$userid)->first();
        if($entry == null){
            $entrypendaftar = false;
        }
        else{
            $entrypendaftar = true;
        }
        return view('dashboard')->with('sudahdaftar',$entrypendaftar);
    }

    public function lihatEntry($id)
    {
        $user = Auth::user();
        $isadmin = $user->isadm;
        $entry = tb_entry::where('id', $id)->first();

        if(!$isadmin){
            $ent =  tb_entry::where('user_id',$userid)->first();
            return view('dashboard');
            if($ent == null){
                $ent2 = false;
            }
            else{
                $ent2 = true;
            }
            return view('dashboard')->with('sudahdaftar',$ent2);

        }


        return view('view.entry')->with('entrydata',$entry);
    }

    public function daftar()
    {
        $user = Auth::user();
        
        if(!$user){
            Response::json(array(
                'code'      =>  404,
                'message'   =>  "page not found"
            ), 404);  
        }
        else{
            return view('daftar');
        }
        // dd($entrypendaftar);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validator
        $this->validate($request, [
            'posisi'   => 'required',
            //...
        ]);
        $entry = new tb_entry();
        $entry->posisi = $request->posisi;
        //..
        $entry->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
