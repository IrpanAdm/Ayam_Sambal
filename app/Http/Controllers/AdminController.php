<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\storage;
class AdminController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = admin::all();
        return view('admins.admin', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                
                'nama_admin' => 'required',
                'jk_admin' => 'required',
                'email_admin' => 'required|unique:admins',
                'password_admin' => 'required|min:6',
                'alamat_admin' => 'required',
                'foto_admin' => 'required|mimes:jpg,png,gif,jpeg|image|max:5049',
                'jabatan_admin' => 'required',
                'nohp_admin' => 'required',
            ],
            [
                'nama_admin.required' => 'nama admin tidak boleh kosong',
                'jk_admin.required' => 'mohon pilih jenis admin',
                'email_admin.required' => 'email tidak boleh kosong',
                'email_admin.unique' => 'emael sudah terdaftar',
                'password_admin.max' => 'password tidak boleh kosong',
                'password_admin.min' => 'password min 5 digit',
                'alamat_admin.required' => 'isi alamat anda',
                'foto_admin.max' => 'foto tidak boleh kosong',
                'foto_admin.mimes' => 'extension foto hanya jpg, png jpeg, or gif',
                'nohp_admin.required' => ' Isi No Hendphone Anda Terlebih Dahulu '
                
            ]
        );

        $path=$request->file('foto_admin')->store('public/uploads');

        $admin = new Admin();
        $admin->jabatan_admin = $request[ 'jabatan_admin'];
        $admin->nama_admin = $request[ 'nama_admin'];
        $admin->pasword_admin = Hash::make($request['password_admin']);
        $admin->foto_admin = basename($path);
        $admin->email_admin = $request['email_admin'];
        $admin->jk_admin= $request ['jk_admin'];
        $admin->alamat_admin = $request['alamat_admin'];
        $admin->nohp_admin = $request[ 'nohp_admin'];
        $admin->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = admin::find($id);
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                
                'nama_admin' => 'required',
                'jk_admin' => 'required',
                'email_admin' => 'required',
                'alamat_admin' => 'required',
                'foto_admin' => 'mimes:jpg,png,gif,jpeg|image|max:5049',
                'jabatan_admin' => 'required',
                'nohp_admin' => 'required',
            ],
            [
                'nama_admin.required' => 'nama admin tidak boleh kosong',
                'jk_admin.required' => 'mohon pilih jenis admin',
                'email_admin.required' => 'email tidak boleh kosong',
                'email_admin.unique' => 'emael sudah terdaftar',
                'password_admin.max' => 'password tidak boleh kosong',
                'password_admin.min' => 'password min 5 digit',
                'alamat_admin.required' => 'isi alamat anda',
                'foto_admin.max' => 'foto tidak boleh kosong',
                'foto_admin.mimes' => 'extension foto hanya jpg, png jpeg, or gif',
                'nohp_admin.required' => ' Isi No Hendphone Anda Terlebih Dahulu '
                
            ]
        );

        if($request->foto_admin) {
            if($request->foto_lama){
               Storage::delete($request->foto_lama);
            }
            $path = $request->file('foto_admin')->store('public/uploads');
            } else {
                $path = $request->foto_lama;
            }
        $path=$request->file('foto_admin')->store('public/uploads');

        $admin = Admin::find($id);
        $admin->jabatan_admin = $request[ 'jabatan_admin'];
        $admin->nama_admin = $request[ 'nama_admin'];
        $admin->pasword_admin = Hash::make($request['password_admin']);
        $admin->foto_admin = basename($path);
        $admin->email_admin = $request['email_admin'];
        $admin->jk_admin= $request ['jk_admin'];
        $admin->alamat_admin = $request['alamat_admin'];
        $admin->nohp_admin = $request[ 'nohp_admin'];
        $admin->save();

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::destroy('id',$id);
        return redirect ('/admin');
    }
}
