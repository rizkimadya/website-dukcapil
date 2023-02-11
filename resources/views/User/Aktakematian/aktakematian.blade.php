@extends('User.Layouts.app', ['title' => 'Akta Kematian'])

@section('content')
    <section id="kematian">
        <div class="row">
            <div class="col-12">
                <div class="card p-4">
                    <div class="d-flex">
                        <p class="fw-bold fs-5">Data Pelaporan Kematian</p>
                        <a href="/user/formulirkematian" class="btn btn-primary ms-auto pt-2"><i
                                class="bi bi-clipboard-plus"></i> Ajukan Pelaporan</a>
                    </div>

                    <div class="table-responsive table mt-4">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelapor</th>
                                    <th>Nama yang Meninggal</th>
                                    <th>Waktu Meninggal</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aa</td>
                                    <td>Bb</td>
                                    <td>20 Desember 2023</td>
                                    <td>
                                        <p class="text-success mb-0">Diterima</p>
                                        <p class="text-info mb-0">Diproses</p>
                                    </td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-primary">Lihat Data</button>
                                        <button class="btn btn-sm btn-info">Edit Data</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection