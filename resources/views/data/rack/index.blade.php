@extends('layouts.main')


@section('main')

<div class="col-lg-8 table-responsive-sm">
    @if (Session::has('success'))
    <script type="text/javascript">
        Swal.fire({
            title: 'Berhasil',
            text: "{{Session::get('success')}}",
            icon: 'success',
        })

    </script>
    @endif
    @if (Session::has('delete'))
    <script type="text/javascript">
        Swal.fire({
            title: 'Berhasil',
            text: "{{Session::get('delete')}}",
            icon: 'info',
        })

    </script>
    @endif
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="text-center">
                <th scope="col" width="4%">No</th>
                <th scope="col">Size</th>
            </tr>
        </thead>
        <tbody> @php
            $no =1
            @endphp
            @foreach ($rack as $key=>$data)
            <tr>
                <th scope="row" class="text-center">{{ $no++ }}</th>
                <td>{{ $data->size }}</td>
                <td>
                    <form action="{{ route('rack.edit',$data->id_rack) }}" method="GET" class="d-inline">
                        @csrf
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </form>
                    {{-- <a href="{{ route('supplier.edit',$data->id_supplier) }}">Edit</a> --}}
                    <form action="{{ route('rack.destroy',$data->id_rack) }}" method="POST" class="d-inline">
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
