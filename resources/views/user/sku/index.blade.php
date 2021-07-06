@extends('layouts.master')
@section('title', 'SOJU - Dashboard')
@section('title-content', 'Dashboard SKU')
<x-navbar></x-navbar>

<x-sidebar-user></x-sidebar-user>
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                @foreach($poins as $index => $poin)
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header py-4" role="button" data-toggle="collapse" data-target="#panel-body-{{$index}}" href="#{{$index}}" aria-expanded="false">
                            <h3>Poin {{ $poin -> name}}</h3>
                            <h4>{{ $poin -> desc}}</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-{{$index}}" data-parent="#accordion">
                            <div class="table-responsive">
                                <table class="table table-striped table-md mb-0">
                                    @foreach ($subPoin as $key => $sp)
                                    @if($sp -> poin_id == $poin -> id)
                                    <tbody>
                                        <tr>
                                            <td class="col-8">{{ $sp -> desc}}</td>
                                            <td class="col-4">
                                                <a href="{{route('proof.create', $sp->id)}}" class="btn btn-info">Tambah Bukti</a>
                                                <a href="{{route('proof.show', $sp->id)}}" class="btn btn-success">Detail Bukti</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endif
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</div>

@endsection