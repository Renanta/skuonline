@extends('layouts.master')
@section('title', 'SOJU')
@section('title-content', 'Detail Bukti Penempuhan SKU')
<x-navbar></x-navbar>

<x-sidebar-user></x-sidebar-user>
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Detail Penempuhan sub poin SKU Nomor {{$subpoin -> name}} </h4>
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
                                <a href="{{route('user')}}" class="btn btn-warning">Kembali</a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
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

                                            @if(pathinfo($proof->proof, PATHINFO_EXTENSION) == 'pdf')
                                            <td class="col-2"><object data="{{asset('storage/file_bukti/'.$proof->proof)}}" type="application/pdf" width="400" height="300">
                                                    <a href="{{asset('storage/file_bukti/'.$proof->proof)}}">test.pdf</a>
                                                </object></td>
                                            @else
                                            <td> <img class="img-fluid" src="{{asset('storage/file_bukti/'.$proof->proof)}}" alt="" style="height: 100px; widht: 100px;">
                                            </td>
                                            @endif


                                            @if($proof -> verification == 'Terverifikasi')
                                            <td class="col-2"><span class="badge badge-success">{{$proof -> verification}}</span></td>
                                            @elseif($proof -> verification == 'Ditolak')
                                            <td class="col-2"><span class="badge badge-danger">{{$proof -> verification}}</span></td>
                                            @else
                                            <td class="col-2"><span class="badge badge-light">Belum diverifikasi</span></td>
                                            @endif

                                            <td class="col-3">{{ $proof -> message}}</td>
                                            <td class="col-3">
                                                @if($proof -> verification != 'Terverifikasi')
                                                <a href="{{ route('proof.edit', $proof -> id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route ('proof.destroy', $proof -> id)}}" class="btn delete-confirm btn-danger">Delete</a>
                                                @else
                                                <a href="#" class="btn btn-info disabled" role="button" aria-disabled="true">Edit</a>
                                                <a href="#" class="btn btn-danger disabled" role="button" aria-disabled="true">Delete</a>
                                                @endif
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