@extends('layouts.master')
@section('title', 'SOJU')
@section('title-content', 'Tambah Poin SKU')
<x-navbar></x-navbar>

<x-sidebar-admin></x-sidebar-admin>
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Masukkan data</h4>
            </div>
            <div class="card-body">
                <form action="{{route('poin.create')}}" method="POST">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Poin</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="name">
                                <option></option>
                                @for ($i =1; $i <= 24; $i++) <option>{{ $i }}</option>
                                    @endfor
                            </select>
                            @error('name')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control" rows="5" name="desc"></textarea>
                            @error('desc')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{route('admin')}}" class="btn btn-warning my-3">Kembali</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection