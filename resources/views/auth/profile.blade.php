@extends('auth.app')

@section('tittle', 'Profile')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-head">
                        <h2 class="fw-bold text-secondary">Profile</h2>
                        <a href="{{ route('auth.logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection