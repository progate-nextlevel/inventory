@extends('layouts.main')

@section('main')
<div class="container m-0">
    <div class="row">
        <div class="col-6">
            <form class="shadow-sm rounded-2 px-3 py-2" action="{{ route('rack.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="size" class="form-label text-me">Size</label>
                    <input type="text" class="form-control shadow-sm text-me  @error('size') is-invalid @enderror"
                        id="size" name="size" value="{{ old('size') }}">

                    @error('size')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-me">Tambah</button>
                <a href="{{route('rack.index')}}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
