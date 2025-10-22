@extends('layouts.app')

@section('title', 'Dashboard - Pembangunan & Monitoring')

@section('content')
    <div class="container-fluid">
        <!-- top cards -->
        <div class="row g-3">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-dash p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <small class="text-muted">All Earnings</small>
                            <div class="h5 mt-1">$30,200</div>
                            <small class="text-success">10% changes on profit</small>
                        </div>
                        <div class="text-end">
                            <i class="material-icons text-primary" style="font-size:28px">paid</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-dash p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <small class="text-muted">Task</small>
                            <div class="h5 mt-1">145</div>
                            <small class="text-danger">28% task performance</small>
                        </div>
                        <div class="text-end">
                            <i class="material-icons text-danger" style="font-size:28px">assignment</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-dash p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <small class="text-muted">Page Views</small>
                            <div class="h5 mt-1">290+</div>
                            <small class="text-success">10k daily views</small>
                        </div>
                        <div class="text-end">
                            <i class="material-icons text-success" style="font-size:28px">bar_chart</i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card card-dash p-3">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <small class="text-muted">Downloads</small>
                            <div class="h5 mt-1">500</div>
                            <small class="text-primary">1k download in App store</small>
                        </div>
                        <div class="text-end">
                            <i class="material-icons text-info" style="font-size:28px">file_download</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main row: table + charts -->
        <div class="row mt-4">
            <div class="col-lg-8">
                <div class="card card-dash p-3 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mb-0">Sales Per Day</h6>
                        <small class="text-muted">3% increase</small>
                    </div>
                      <canvas id="salesChart" class="small-canvas" height="160"></canvas>
                </div>

                <div class="card card-dash p-3">
                    <h6 class="mb-3">Daftar Proyek</h6>
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Proyek</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pembangunan Jalan Desa A</td>
                                    <td>Desa A</td>
                                    <td><span class="badge bg-warning text-dark">Dalam Proses</span></td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rehabilitasi Posyandu Desa B</td>
                                    <td>Desa B</td>
                                    <td><span class="badge bg-success">Selesai</span></td>
                                    <td>100%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-dash p-3 mb-3">
                    <h6 class="mb-3">Total Revenue</h6>
                      <canvas id="revenueChart" class="small-canvas" height="160"></canvas>
                    <div class="d-flex justify-content-between mt-3">
                        <small>Youtube <span class="text-success">+16.85%</span></small>
                        <small>Facebook <span class="text-success">+45.36%</span></small>
                        <small>Twitter <span class="text-danger">-50.69%</span></small>
                    </div>
                </div>

                <div class="card card-dash p-3">
                    <h6 class="mb-3">Traffic Sources</h6>
                    <div class="mb-2 small">Direct <span class="float-end">80%</span></div>
                    <div class="progress mb-3" style="height:8px"><div class="progress-bar bg-primary" style="width:80%"></div></div>
                    <div class="mb-2 small">Social <span class="float-end">50%</span></div>
                    <div class="progress mb-3" style="height:8px"><div class="progress-bar bg-success" style="width:50%"></div></div>
                    <div class="mb-2 small">Referral <span class="float-end">20%</span></div>
                    <div class="progress mb-3" style="height:8px"><div class="progress-bar bg-warning" style="width:20%"></div></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // Sales line chart
        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
                datasets: [{
                    label: 'Sales',
                    data: [12,19,10,22,18,24,30],
                    borderColor: '#1976d2',
                    backgroundColor: 'rgba(25,118,210,0.08)',
                    tension: 0.3,
                    fill: true
                }]
            },
            options: { responsive:true, maintainAspectRatio:false, plugins:{legend:{display:false}} }
        });

        // Revenue donut chart
        const revCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revCtx, {
            type: 'doughnut',
            data: {
                labels: ['Youtube','Facebook','Twitter'],
                datasets: [{ data: [55,30,15], backgroundColor:['#ff6384','#36a2eb','#ffcd56'] }]
            },
            options: { responsive:true, maintainAspectRatio:false, plugins:{legend:{position:'bottom'}} }
        });
    </script>
@endpush
