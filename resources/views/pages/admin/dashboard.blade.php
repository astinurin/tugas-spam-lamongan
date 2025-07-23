@extends('layouts.admin.dashboard')

@section('title', 'Admin Dashboard')

@section('content')

    {{-- Statistics Cards Row --}}
    <div class="row g-6">
        <div class="col-lg-3 col-sm-6">
            <a href="{{ url('/admin/pelanggan') }}" class="text-decoration-none">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-primary"
                            ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg></span>
                        </div>
                        <h4 class="mb-0">{{ $totalPelanggan }}</h4>
                      </div>
                      <p class="mb-1">Total Pelanggan</p>
                      <p class="mb-0">
                        <span class="text-heading fw-medium me-2"></span>
                        {{-- <small class="text-body-secondary">than last week</small> --}}
                      </p>
                    </div>
                  </div>
            </a>         
        </div>

        <div class="col-lg-3 col-sm-6">
                  <div class="card card-border-shadow-warning h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-warning"
                            ><i class="icon-base ti tabler-alert-triangle icon-28px"></i
                          ></span>
                        </div>
                        <h4 class="mb-0">8</h4>
                      </div>
                      <p class="mb-1">Vehicles with errors</p>
                      <p class="mb-0">
                        <span class="text-heading fw-medium me-2">-8.7%</span>
                        <small class="text-body-secondary">than last week</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="card card-border-shadow-danger h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-danger"
                            ><i class="icon-base ti tabler-git-fork icon-28px"></i
                          ></span>
                        </div>
                        <h4 class="mb-0">27</h4>
                      </div>
                      <p class="mb-1">Deviated from route</p>
                      <p class="mb-0">
                        <span class="text-heading fw-medium me-2">+4.3%</span>
                        <small class="text-body-secondary">than last week</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="card card-border-shadow-info h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                          <span class="avatar-initial rounded bg-label-info"
                            ><i class="icon-base ti tabler-clock icon-28px"></i
                          ></span>
                        </div>
                        <h4 class="mb-0">13</h4>
                      </div>
                      <p class="mb-1">Late vehicles</p>
                      <p class="mb-0">
                        <span class="text-heading fw-medium me-2">-2.5%</span>
                        <small class="text-body-secondary">than last week</small>
                      </p>
                    </div>
                  </div>
                </div>
    </div>

@endsection