@extends('layouts.master')
@section('title', 'SOJU - Dashboard')
@section('title-content', 'Dashboard SKU')
<x-navbar></x-navbar>

<x-sidebar-admin></x-sidebar-admin>
@section('content')

<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tabel SKU</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills" id="myTab3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Poin SKU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Sub Poin SKU</a>
                    </li>
                </ul>
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
                                            <tr style="background-color: #495057">
                                                <th>No</th>
                                                <th>Poin</th>
                                                <th>Desc</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach($poins as $poin)
                                            <tr>
                                                <td>{{ $poins->count() * ($poins->currentPage() - 1) + $loop ->  iteration }}</td>
                                                <td class="col-2">Poin {{ $poin -> name}}</td>
                                                <td class="col-6">{{ $poin -> desc}}</td>
                                                <td class="col-3">
                                                    <a href="{{route('poin.show', $poin->id)}}" class="btn btn-success">Detail</a>
                                                    <a href="{{route('poin.edit', $poin->slug)}}" class="btn btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                        {{ $poins -> links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
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
                                                <th>Poin</th>
                                                <th>Sub Poin</th>
                                                <th>Desc</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach($subPoins as $subPoin)
                                            <tr>
                                                <td>{{ $subPoins->count() * ($subPoins->currentPage() - 1) + $loop ->  iteration }}</td>
                                                <td class="col-1">Poin {{ $subPoin -> poins -> name}}</td>
                                                <td class="col-2">Sub Poin {{ $subPoin -> subPoin}}</td>
                                                <td class="col-5">{{ $subPoin -> desc}}</td>
                                                <td class="col-4">
                                                    <a href="{{route('subPoin.edit', $subPoin->slug)}}" class="btn btn-primary">Edit</a>
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
</div>

@endsection