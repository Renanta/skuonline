@extends('layouts.master')
@section('title', 'SOJU')
@section('title-content', 'Detail Poin SKU')
<x-navbar></x-navbar>

<x-sidebar-user></x-sidebar-user>
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Detail Poin SKU Nomor {{$poin -> name}} </h4>
            </div>
            <div>
                <a href="{{route('user')}}" class="btn btn-warning my-3 mx-3">Kembali</a>
            </div>

            <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
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
                                        <tr>
                                            <th>No</th>
                                            <th>Sub Poin</th>
                                            <th>Desc</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            @foreach($subPoin as $sp)
                                            <td>{{ $subPoin->count() * ($subPoin->currentPage() - 1) + $loop ->  iteration }}</td>
                                            <td>Sub Poin {{ $sp -> subPoin}}</td>
                                            <td>{{ $sp -> desc}}</td>
                                            <td>
                                                <a href="{{route('proof.create', $sp->id)}}" class="btn btn-info">Tambah Bukti</a>
                                                <a href="{{route('proof.show', $sp->id)}}" class="btn btn-success">Detail Bukti</a>
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
</div>
@endsection