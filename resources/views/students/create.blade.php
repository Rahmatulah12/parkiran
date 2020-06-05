@extends('layout.main')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-7">
            <h4>
                Form Tambah Data Mahasiswa
            </h4>
            <hr>
            <form action="{{url('/students')}}" method="post">
                {{-- untuk validasi csrf --}}
                @csrf
                <div class="form-group">
                    <label for="nama">
                        Nama Mahasiswa
                    </label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="masukan nama lengkap mahasiswa" autocomplete="off" autofocus value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="npm">
                        Nomor Pokok Mahasiswa
                    </label>
                    <input type="number" min="0" class="form-control only-number @error('npm') is-invalid @enderror" id="npm" name="npm" placeholder="masukan nomor pokok mahasiswa" autocomplete="off" value="{{old('npm')}}">
                    @error('npm')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">
                        Email
                    </label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@domain.com" autocomplete="off" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_tlpn">
                        Nomor Telepon
                    </label>
                    <input type="number" min="0" class="form-control @error('no_tlpn') is-invalid @enderror" id="no_tlpn" name="no_tlpn" placeholder="masukan nomor telepon" autocomplete="off" value="{{old('no_tlpn')}}">
                    @error('no_tlpn')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control @error('no_tlpn') is-invalid @enderror" id="alamat" rows="3" placeholder="masukan alamat lengkap" name="alamat" autocomplete="off" value="{{old('alamat')}}"></textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group float-right">
                    <button type="submit" name="btnSave" class="btn btn-primary">
                        Tambah Data
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection