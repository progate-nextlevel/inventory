@extends('layouts.main')
@section('main')
<div class="container m-0">
    <div class="row">
        <div class="col-6">
            <form class="shadow-sm rounded-2 px-3 py-2" action="{{ route('warehouse.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="address" class="form-label text-me">Address</label>
                    <input type="text" class="form-control shadow-sm text-me  @error('address') is-invalid @enderror"
                        id="address" name="address" value="{{ old('address') }}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-me">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
