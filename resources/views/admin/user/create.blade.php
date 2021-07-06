@extends('layouts.master')
@section('title', 'SOJU')
@section('title-content', 'Tambah Anggota')
<x-navbar></x-navbar>

<x-sidebar-admin></x-sidebar-admin>
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Tambah Data Anggota</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createUser.create') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Nama Lengkap') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ntag">{{ __('NTAG') }}</label>
                            <input id="ntag" type="text" class="form-control @error('ntag') is-invalid @enderror" name="ntag" value="{{ old('ntag') }}" required autocomplete="off" autofocus>
                            @error('ntag')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="password" class="d-block">{{ __('Password') }}</label>
                                <input id="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password') <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="password2" class="d-block">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="simple-footer">
                Copyright &copy; Stisla 2018
            </div>
        </div>
    </div>
</div>
@endsection