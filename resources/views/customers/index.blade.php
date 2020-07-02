@extends('layout.main')
@section('title', "Customers")
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
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Konsumen</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">No Polisi</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>
                            {{$customer["name"]}}
                        </td>
                        <td>
                            {{$customer['type']}}
                        </td>
                        <td>
                            {{$customer['police_number']}}
                        </td>
                        <td>
                            {{$customer['birth_date']}}
                        </td>
                        <td>
                            {{$customer['gender']}}
                        </td>   
                        <td>
                            {{$customer['phone']}}
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
    </div>
</div>
@endsection