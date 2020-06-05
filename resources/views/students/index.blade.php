{{-- extends main layout --}}
@extends('layout/main')
@section('title', "Daftar Mahasiswa")

@section('content')
    @if (session('status'))
    <div class="row">
        <div class="col-lg-8 mt-2">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif
    <div class="row my-3">
        <div class="col-lg-6">
            <a href="{{url('/students/create')}}" class="btn btn-primary">
                Tambah Data Mahasiswa
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-6">
            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                <a href="{{url('/students')}}/{{$student->id}}" class="badge badge-info">
                        DETAIL
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection