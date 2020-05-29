@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h3 class="mt-3">
        Daftar Mahasiswa
    </h3>
    <div class="table-responsive-lg">
        <table class="table table-hover table-striped">
            <thead class="text-center" style="background-color:azure;color:#444">
                <tr>
                    <th scope="col">
                        No
                    </th>
                    <th scope="col">
                        Nama
                    </th>
                    <th scope="col">
                        NPM
                    </th>
                    <th scope="col">
                        Email
                    </th>
                    <th scope="col">
                        Nomor Telepon
                    </th>
                    <th scope="col">
                        Alamat
                    </th>
                    <th scope="col">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        1
                    </th>
                    <td>
                        Rahmatulah Sidik
                    </td>
                    <td>
                        201643500855
                    </td>
                    <td>
                        blcak.gun123@gmail.com
                    </td>
                    <td>
                        087885664813
                    </td>
                    <td>
                        Jl. Swadaya 3, rt.012/rw.06, Kel.Rawabunga, Kec.Jatinegara, Jakarta Timur
                    </td>
                    <td>
                        <a href="" class="badge badge-success">
                            EDIT
                        </a>
                        <a href="" class="badge badge-danger">
                            DELETE
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        2
                    </th>
                    <td>
                        Rahmatulah Sidik
                    </td>
                    <td>
                        201643500855
                    </td>
                    <td>
                        blcak.gun123@gmail.com
                    </td>
                    <td>
                        087885664813
                    </td>
                    <td>
                        Jl. Swadaya 3, rt.012/rw.06, Kel.Rawabunga, Kec.Jatinegara, Jakarta Timur
                    </td>
                    <td>
                        <a href="" class="badge badge-success">
                            EDIT
                        </a>
                        <a href="" class="badge badge-danger">
                            DELETE
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection