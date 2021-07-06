@extends('layouts.master')
@section('title', 'SOJU - Dashboard')
@section('title-content', 'Daftar Bukti Anggota')
<x-navbar></x-navbar>

<x-sidebar-admin></x-sidebar-admin>
@section('content')

<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4></h4>
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible show fade">

                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                {{ session ('success')}}
                            </div>
                        </div>
                        @endif
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr style="background-color: #495057">
                                        <th>No</th>
                                        <th>Desc</th>
                                        <th>Bukti</th>
                                        <th>Verification</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        @foreach($proofs as $index => $proof)
                                        <td>{{ $index + 1}}</td>
                                        <td class="col-2">{{ $proof -> desc}}</td>
                                        <td class="col-2"><img class="img-fluid" src="{{asset('storage/file_bukti/'.$proof->proof)}}" alt="" style="height: 100px; widht: 100px;"></td>
                                        <td class="col-2">{{$proof -> verification}}</td>
                                        <td class="col-3">{{ $proof -> message}}</td>
                                        <td class="col-3">
                                            <a href="{{ route('proofAdmin.edit', $proof -> id)}}" class="btn btn-primary">Verifikasi</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection