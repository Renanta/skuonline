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
                                        <th>Nama User</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $users->count() * ($users->currentPage() - 1) + $loop ->  iteration }}</td>
                                        <td>{{ $user -> name}}</td>
                                        <td>
                                            <a href="{{ route('proofAdmin.show', $user -> id )}}" class="btn btn-primary">Lihat SKU</a>
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