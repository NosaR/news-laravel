@extends('dapur.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-sm-6">
                    <a href="buat-artikel" class="btn btn-primary">
                        Buat Artikel Baru</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-12 mt-2
            ">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Artikel</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Editor</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Judul Artikel Terbaru Dari Myway</td>
                                    <td>Kategori</td>
                                    <td>Penulis</td>
                                    <td>Editor</td>
                                    <td><span class="tag tag-success">Publish</span></td>
                                    <td>Senin, 6 Februari 2023 19:02:32</td>
                                    <td>
                                        <a href="#" class="badge bg-info"><i class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="badge bg-warning"><i class="fa-solid fa-edit"></i></a>
                                        <form action="#" method="post" class="d-inline">
                                            <button class="badge bg-danger border-0"
                                                onclick="return confirm('Yakin mau hapus artikel?')"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
