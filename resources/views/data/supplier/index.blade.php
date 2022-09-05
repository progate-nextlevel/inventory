@extends('layouts.main')


@section('main')

<div class="col-lg-8 table-responsive-sm">
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="text-center">
                <th scope="col" width="4%">No</th>
                <th scope="col">Company Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody> @php
            $no =1
            @endphp
            @foreach ($supplier as $key=>$data)
            <tr>
                <th scope="row" class="text-center">{{ $no++ }}</th>
                <td>{{ $data->company_name }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->contact }}</td>
                <td>
                    <form action="{{ route('supplier.edit',$data->id_supplier) }}" method="GET" class="d-inline">
                        @csrf
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </form>
                    {{-- <a href="{{ route('supplier.edit',$data->id_supplier) }}">Edit</a> --}}
                    <form action="{{ route('supplier.destroy',$data->id_supplier) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
