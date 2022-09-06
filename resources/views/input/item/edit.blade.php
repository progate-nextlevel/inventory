@extends('layouts.main')
@section('main')
<div class="row">
    <div class="col-6">
        <form class="shadow-sm rounded-2 px-3 py-2" action="{{ route('item.update',$item->id_item) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="item_name" class="form-label text-me">Nama Item</label>
                <input type="text" class="form-control shadow-sm text-me  @error('item_name') is-invalid @enderror"
                    id="item_name" name="item_name" value="{{ $item->item_name }}">
                @error('item_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="id_supplier">Supplier</label>
                <select name="id_supplier" id="id_supplier" class="form-select text-me @error('id_supplier') is-invalid                   
                @enderror" value="{{old('supplier','')}}">

                </select>
                @error('id_supplier')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="id_warehouse">Warehouses</label>
                <select name="id_warehouse" id="id_warehouse" class="form-select text-me @error('id_warehouse') is-invalid                   
                @enderror">
                    <option value="">-- Pilih Warehouse --</option>
                    @foreach ($warehouse as $key=>$data)
                    <option value="{{$data->id_warehouse}}">{{$data->address}}</option>
                    @endforeach
                </select>
                @error('id_warehouse')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="id_rack">Racks</label>
                <select name="id_rack" id="id_rack" class="form-select text-me @error('id_rack') is-invalid                   
                @enderror">
                    <option value="">-- Pilih Racks --</option>
                    @foreach ($rack as $key=>$data)
                    <option value="{{$data->id_rack}}">{{$data->size}}</option>
                    @endforeach
                </select>
                @error('id_rack')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exp_date">Exp Date</label>
                <input type="date" class="form-control shadow-sm text-me  @error('exp_date') is-invalid @enderror"
                    id="exp_date" name="exp_date" value="{{ old('exp_date') }}">
                @error('exp_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="id_status">Status</label>
                <select name="id_status" id="id_status" class="form-select text-me @error('id_status') is-invalid                   
                @enderror">
                    @foreach ($status as $key=>$data)
                    <option value="{{$data->id_status}}">{{$data->status}}</option>
                    @endforeach
                </select>
                @error('id_status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="barcode">Barcode</label>
                <input type="text" class="form-control shadow-sm text-me  @error('barcode') is-invalid @enderror"
                    id="barcode" name="barcode" value="{{ old('barcode') }}">
                @error('barcode')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-me">Tambah</button>
                <a href="{{route('item.index')}}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
