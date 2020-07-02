@extends('layout.main')

@section('title', 'Add Customer')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-7">
            <h4>
                Add New Customer
            </h4>
            <hr>
            <form action="{{url('/create')}}" method="post">
                {{-- untuk validasi csrf --}}
                @csrf
                <div class="form-group">
                    <label for="name">
                        Nama Mahasiswa
                    </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="masukan nama lengkap" autocomplete="off" autofocus value="{{old('name')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tipe-kendaraan">
                        Tipe Kendaraan
                    </label>
                    <select class="form-control" id="tipe-kendaraan" name="type">
                        @foreach($type as $row)
                            <option value="{{$row['id']}}">
                                {{$row["type"]}}
                            </option>
                        @endforeach
                    </select>
                  </div>

                <div class="form-group">
                    <label for="no_pol">
                        Nomor Polisi
                    </label>
                    <input type="text" class="form-control @error('no_pol') is-invalid @enderror" id="no_pol" name="no_pol" placeholder="cth: B1234XYZ" autocomplete="off" value="{{old('no_pol')}}">
                    @error('no_pol')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">
                        Jenis Kelamin
                    </label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="L" id="L" name="kel">
                        <label class="form-check-label" for="L">
                          Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="P" id="P" name="kel">
                        <label class="form-check-label" for="P">
                          Perempuan
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tgl_lahir">
                        Tanggal Lahir
                    </label>
                    <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" placeholder="dd-mm-YYYY" autocomplete="off" value="{{old('tgl_lahir')}}">
                    @error('tgl_lahir')
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

                <div class="form-group float-right">
                    <button type="submit" name="btnSave" class="btn btn-primary">
                        Add Customer
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection