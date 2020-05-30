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
                @foreach($mahasiswa as $mhs)
                <tr>
                    <th scope="row">
                        {{$loop->iteration}}
                    </th>
                    <td>
                        {{$mhs->nama}}
                    </td>
                    <td>
                        {{$mhs->npm}}
                    </td>
                    <td>
                        {{$mhs->email}}
                    </td>
                    <td>
                        {{$mhs->no_tlpn}}
                    </td>
                    <td>
                        {{$mhs->alamat}}
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
                @endforeach
            </tbody>
        </table>
    </div>
@endsection