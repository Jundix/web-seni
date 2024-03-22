@extends('layout.dashboard.dashboard')
@section('content')
<div class="layout-page">
    <!-- Navbar -->
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <h3 style="margin-top:15px">Chat</h3>
                </div>
            </div>
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar">
                            @foreach($users as $s)
                            <img src="/storage/upload/profile/{{$s->foto}}" alt class="w-px-40 h-auto rounded-circle" />
                            @endforeach
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar">
                                            @foreach($users as $s)
                                            <img src="/storage/upload/profile/{{$s->foto}}" alt
                                                class="w-px-40 h-auto rounded-circle" />
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">{{Session::get('nama')}}</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('profile')}}">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            @foreach($users as $s)
                            <a class="dropdown-item" href="/editprofile/{{ $s->id }}">
                                @endforeach
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Edit Profile</span>
                            </a>
                        </li>
                </li>

                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                    </a>
                </li>
            </ul>
            </li>
            </ul>
        </div>
    </nav>
    <!-- / Navbar -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col">
                                <div class="card-body">
                                <div class="row">
                                <div class="col-lg-12">
                                @foreach($chat as $k)
                                    @if($k->sender == Session::get('nama'))
                                    <div class="card mb-5">
                                        <div class="card-body">
                                        <a class="text-dark mt-2 stretched-link" href="chat/{{$k->reciever_id}}" style="font-size:15px"></a>
                                            <h5 class="card-title">{{$k->reciever}}</h5>
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>{{$k->pesan}}</th>
                                                    <tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @elseif($k->sender != Session::get('nama'))
                                    <div class="card mb-5">
                                        <div class="card-body">
                                        <a class="text-dark mt-2 stretched-link" href="chat/{{$k->sender_id}}" style="font-size:15px"></a>
                                            <h5 class="card-title">{{$k->sender}}</h5>
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>{{$k->pesan}}</th>
                                                    <tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
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
