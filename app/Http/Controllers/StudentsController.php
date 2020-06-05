<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as db;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        // return $students;
        // compact() use to create an array from variable
        return view('students/index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* cara pertama untuk menginsert data
         instansiasi model student
        $student = new Student;
        $student->nama = $request->nama;
        $student->npm = $request->npm;
        $student->email = $request->email;
        $student->no_tlpn = $request->no_tlpn;
        $student->alamat = $request->alamat;
        // untuk menyimpan data
        $student->save(); */

        // cara kedua dengan menggunakan mass assignment harus menambahkan property didalam model protected $fillable
        // Student::create(
        //     [
        //         'nama' => $request->nama,
        //         'npm' => $request->npm,
        //         'email' => $request->email,
        //         'no_tlpn' => $request->no_tlpn,
        //         'alamat' => $request->alamat
        //     ]
        // );

        // customize error message
        $messages =  [
            'nama.required' => 'Nama Mahasiswa harus diisi',
            'npm.required'  => 'Nomor Pokok Mahasiswa harus diisi',
            'email.required' => 'Email harus diisi',
            'no_tlpn.required' => 'Nomor Telepon harus diisi',
            'alamat.required' => 'Alamat harus diisi'
        ];

        

        // validasi
        // unique:tbl_name
        $request->validate([
            'nama' => 'required',
            'npm' => 'required|unique:students|size:12',
            'email' => 'required|unique:students',
            'no_tlpn' => 'required|unique:students|size:12',
            'alamat' => 'required|max:255'
        ], $messages);

        // bisa digunakan jika hanya menggunakan mass assignment
        Student::create($request->all());

        // meridirect ke halaman students
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        /* cara yang pertama menggunakan query builder
        db::table('students')->where('id', $student->id)->delete();
        */

        // menggunakan cara eloquent ORM
        /*
            cara yang pertama
            $delete = Student::find($student->id);
            $delete->delete();
        */

        /* cara yang kedua

        */
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus');
    }
}
