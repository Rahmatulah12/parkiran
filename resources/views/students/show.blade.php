@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="row mt-3">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title text-dark">Detail Mahasiswa</h5>
            <h6 class="card-subtitle mb-2 text-dark">
                Nama: {{$student->nama}}
            </h6>
            <h6 class="card-text">
                NPM: {{$student->npm}}
            </h6>
            <h6 class="card-text">
                Email: {{$student->email}}
            </h6>
            <h6 class="card-text">
                Telepon: {{$student->no_tlpn}}
            </h6>
            <h6 class="card-text">
                Alamat: {{$student->alamat}}
            </h6>
            <a href="{{ url('/students') }}" class="card-link">
                &#60&#60 Back
            </a>
            <form action="{{$student->id}}" method="post" class="d-inline clear">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm float-right">
                    Delete
                </button>
            </form>
            <button type="submit" class="btn btn-success btn-sm float-right mr-2">
                Edit
            </button>
            </div>
        </div>
    </div>
</div>
@endsection