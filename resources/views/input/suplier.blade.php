@extends('layouts.main')

@section('main')
<div class="container m-0">
    <div class="row">
        <div class="col-6">
            <form class="shadow-sm rounded-2 px-3 py-2" action="{{ url('/save_suplier') }}">
                <div class="mb-3">
                    <label for="company_name" class="form-label text-me">Company Name</label>
                    <input type="text" class="form-control shadow-sm border-0 text-me" id="company_name">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label text-me">Address</label>
                    <input type="text" class="form-control shadow-sm border-0 text-me" id="address">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label text-me">Contact</label>
                    <input type="text" class="form-control shadow-sm border-0 text-me" id="contact">
                </div>
                <button type="submit" class="btn btn-me">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
