<x-app-layout>


       <!-- begin app-main -->
       <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row">
                <div class="col-md-12 m-b-30">
                    <!-- begin page title -->
                    <div class="d-block d-sm-flex flex-nowrap align-items-center">
                        <div class="page-title mb-2 mb-sm-0">
                            <h1>Admin Dashboard</h1>
                        </div>
                        <div class="ml-auto d-flex align-items-center">
                            <nav>
                                <ol class="breadcrumb p-0 m-b-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"><i class="ti ti-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        Dashboard
                                    </li>
                                    <li class="breadcrumb-item active text-primary" aria-current="page">
                                        Movie
                                        Portal</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
            </div>
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header">
                            <h4 class="card-title">Movies/Views</h4>
                        </div>
                        <div class="card-body pt-0">
                            <div class="apexchart-wrapper">
                                <div id="jobportaldemo3"></div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col ml-3">
                                    <h4 class="mb-0">45%</h4>
                                    <span> <i class="fa fa-square pr-1 text-primary"></i> Movies
                                    </span>
                                </div>
                                <div class="col">
                                    <h4 class="mb-0">55%</h4>
                                    <span> <i class="fa fa-square pr-1 text-info"></i> Views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 m-b-30">
                    <div class="card card-statistics h-100 mb-0 widget-income-list">
                        <div class="card-body d-flex align-itemes-center">
                            <div class="media align-items-center w-100">
                                <div class="text-left">
                                    <h3 class="mb-0">45.8k </h3>
                                    <span>Pending Users</span>
                                </div>
                                <div class="img-icon bg-pink ml-auto">
                                    <i class="ti ti-user text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex align-itemes-center">
                            <div class="media align-items-center w-100">
                                <div class="text-left">
                                    <h3 class="mb-0">65.4k </h3>
                                    <span>New Users</span>
                                </div>
                                <div class="img-icon bg-primary ml-auto">
                                    <i class="ti ti-tag text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex align-itemes-center">
                            <div class="media align-items-center w-100">
                                <div class="text-left">
                                    <h3 class="mb-0">78.2k </h3>
                                    <span>Deleted Users</span>
                                </div>
                                <div class="img-icon bg-orange ml-auto">
                                    <i class="ti ti-wallet text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex align-itemes-center">
                            <div class="media align-items-center w-100">
                                <div class="text-left">
                                    <h3 class="mb-0">65.3k </h3>
                                    <span>Active Users</span>
                                </div>
                                <div class="img-icon bg-info ml-auto">
                                    <i class="ti ti-slice text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Latest Movie Addition</h4>
                            </div>
                            <div class="dropdown">
                                <a class="p-2 export-btn" href="#!" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Export
                                </a>
                                <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                    <h6 class="mb-1">Action</h6>
                                    <a class="dropdown-item" href="#!"><i
                                            class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                    <a class="dropdown-item" href="#!"><i
                                            class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="latestjobs"
                                    class="table table-borderless table-striped jobportal-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>User Name</th>
                                            <th>Position</th>
                                            <th>Department</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-muted">
                                        <tr>
                                            <td>#00001</td>
                                            <td>
                                                <p>Brian Joedro</p>
                                            </td>
                                            <td>Sale associate</td>
                                            <td>Marketing</td>
                                            <td>
                                                Los Angeles
                                            </td>
                                            <td>
                                                <label
                                                    class="badge badge-success-inverse mb-0">Applied</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#00002</td>
                                            <td>
                                                <p>Smithdro</p>
                                            </td>
                                            <td>Product designer</td>
                                            <td>Graphics</td>
                                            <td>
                                                Menlo Park, CA
                                            </td>
                                            <td>
                                                <label
                                                    class="badge badge-warning-inverse mb-0">Pending</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#00003</td>
                                            <td>
                                                <p>Adrian Demiandro</p>
                                            </td>
                                            <td>Python engineer</td>
                                            <td>Development</td>
                                            <td>
                                                Dallas
                                            </td>
                                            <td>
                                                <label
                                                    class="badge badge-danger-inverse mb-0">Cancelled</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#00004</td>
                                            <td>
                                                <p>Sandradro Garett</p>
                                            </td>
                                            <td>Account executive</td>
                                            <td>Account</td>
                                            <td>
                                                New york
                                            </td>
                                            <td>
                                                <label class="badge badge-info-inverse mb-0">On
                                                    Hold</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#00005</td>
                                            <td>
                                                <p>Garydro</p>
                                            </td>
                                            <td>Front-end developer</td>
                                            <td>Developer</td>
                                            <td>
                                                Los Angeles
                                            </td>
                                            <td>
                                                <label
                                                    class="badge badge-success-inverse mb-0">Applied</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#00003</td>
                                            <td>
                                                <p>Demiandro</p>
                                            </td>
                                            <td>Python engineer</td>
                                            <td>Development</td>
                                            <td>
                                                Dallas
                                            </td>
                                            <td>
                                                <label
                                                    class="badge badge-danger-inverse mb-0">Cancelled</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end app-main -->

</x-app-layout>
