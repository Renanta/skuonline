@extends('layouts.master')
@section('title', 'SOJU')
@section('title-content', 'Tambah Bukti Penempuhan SKU')
<x-navbar></x-navbar>

<x-sidebar-user></x-sidebar-user>
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Masukkan data</h4>
            </div>
            <div class="card-body">
                <form action="{{route('proof.edit', $proof -> id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="message" id="message" value="Belum ada pesan dari verifikator, Silahkan isi poin SKU yang lain. Terima Kasih">
                    <input type="hidden" name="verification" id="verification" value="Belum Terverifikasi">
                    <input type="hidden" name="subpoin_id" id="subpoin_id" value="{{ $subpoin -> id}}">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Poin</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" placeholder="{{ $subpoin -> subPoin}} {{ $subpoin -> desc}}" disabled>
                            @error('subpoin_id')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Penempuhan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="date" class="form-control" name="date" value="{{ $proof -> date}}">
                            @error('date')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Bukti</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control" rows="5" name="desc">{{ $proof -> desc}}</textarea>
                            @error('desc')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File Bukti</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="file" class="form-control" name="file">
                            @if(pathinfo($proof->proof, PATHINFO_EXTENSION) == 'pdf')
                            <object data="{{asset('storage/file_bukti/'.$proof->proof)}}" type="application/pdf" width="400" height="300">
                                <a href="{{asset('storage/file_bukti/'.$proof->proof)}}">test.pdf</a>
                            </object>
                            @else
                            <img class="img-fluid" src="{{asset('storage/file_bukti/'.$proof->proof)}}" alt="" style="height: 100px; widht: 100px;">

                            @endif <p><span style="color:red;font-weight:bold">*file pdf, jpg, jpeg, png</span></p>
                            @error('file')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{route('user')}}" class="btn btn-warning">Kembali</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection