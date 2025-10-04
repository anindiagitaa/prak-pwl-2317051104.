<?php

namespace App\Http\Controllers;


use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    /**
     * Tampilkan daftar user
     */
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUsers(), 
        ];

        return view('list_user', $data);
    }

    /**
     * Tampilkan form create user
     */
    public function create()
    {
        $kelas = $this->kelasModel->getKelas(); 
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    /**
     * Simpan user baru ke database
     */
    public function store(Request $request)
    {
    $this->userModel->create([
        'nama'     => $request->input('nama'),
        'nim'      => $request->input('npm'), 
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user');
    }

}
