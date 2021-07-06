@extends('layouts.master')
@section('title', 'SOJU')
@section('title-content', 'Verifikasi SKU Anggota')
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
                <form action="{{route('proofAdmin.edit', $proof)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Verifikasi</label>
                        <div class="selectgroup selectgroup-pills col-form-label  col-12 col-md-3 col-lg-3">
                            <label class="selectgroup-item ">
                                <input type="radio" name="verification" value="Terverifikasi" class="selectgroup-input">
                                <span class="selectgroup-button">Terverifikasi</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="verification" value="Ditolak" class="selectgroup-input">
                                <span class="selectgroup-button">Ditolak</span>
                            </label>
                        </div>
                        @error('verification')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pesan</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control" rows="5" name="message">{{ $proof -> message}}</textarea>
                            @error('message')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{route('proofAdmin.index')}}" class="btn btn-warning my-3">Kembali</a>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection