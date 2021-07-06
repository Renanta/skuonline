@extends('layouts.master')
@section('title', 'SOJU')
@section('title-content', 'Edit Sub Poin SKU')
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
                <form action="{{route('subPoin.edit', $subPoin)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Poin</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="subPoin">
                                <option>{{ $subPoin -> subPoin}}</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            @error('name')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="form-control" rows="5" name="desc">{{ $subPoin -> desc}}</textarea>
                            @error('desc')
                            <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <a href="{{route('admin')}}" class="btn btn-warning my-3">Kembali</a>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection