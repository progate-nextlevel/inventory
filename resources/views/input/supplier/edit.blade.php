@extends('layouts.main')

@section('main')
<div class="container m-0">
    <div class="row">
        <div class="col-6">
            <form class="shadow-sm rounded-2 px-3 py-2" action="{{ route('supplier.update',$supplier->id_supplier) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="company_name" class="form-label text-me">Company Name</label>
                    <input type="text"
                        class="form-control shadow-sm text-me  @error('company_name') is-invalid @enderror"
                        id="company_name" name="company_name" value="{{ $supplier->company_name }}">

                    @error('company_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label text-me">Address</label>
                    <input type="text" class="form-control shadow-sm text-me @error('address') is-invalid @enderror"
                        id="address" name="address" value="{{ $supplier->address }}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label text-me">Contact</label>
                    <input type="text" class="form-control shadow-sm text-me @error('contact') is-invalid @enderror"
                        id="contact" name="contact" value="{{ $supplier->contact }}">
                    @error('contact')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-me">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
