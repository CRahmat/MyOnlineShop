@extends('layout.admin.admin')
@section('content')
<link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Kategori Produk</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Produk</a>
                                </li>
                                <li class="breadcrumb-item active">Kategori Produk
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="ajax-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="content-header row">
                                <div class="content-header-left col-md-9 col-12 mb-2">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Daftar Kategori Produk</h4>
                                    </div>
                                </div>
                                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none p-2 pr-3">
                                    <a href="javascript:void(0)" class="btn btn-gradient-success">
                                        <i data-feather="plus" class="mr-25"></i><span>Buat Baru</span>
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover-animation">
                                    <thead>
                                        <tr>
                                            <th>Nama Kategori</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $item)
                                        <tr>
                                            <td>{{ $item->category_name }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-gradient-danger">
                                                    Hapus
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-gradient-primary">
                                                    Detail
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-gradient-success">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
<script src="assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
<script src="assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
<script src="assets/js/scripts/tables/table-datatables-advanced.js"></script>
@stop
