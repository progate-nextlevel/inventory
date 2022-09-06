@extends('layouts.main')

@section('main')
<div class="container m-0">
    <div class="row">
        <div class="col-6">
            <form class="shadow-sm rounded-2 px-3 py-2" action="{{ route('status.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="status" class="form-label text-me">Status</label>
                    <input type="text" class="form-control shadow-sm text-me  @error('status') is-invalid @enderror"
                        id="status" name="status" value="{{ old('status') }}">

                    @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-me">Tambah</button>
                <a href="{{route('status.index')}}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
