@section('title')
Orbiter - Datatable
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
  <div class="row align-items-center">
    <div class="col-md-8 col-lg-8">
      <h4 class="page-title">Data Pegawai</h4>
      <div class="breadcrumb-list">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
        </ol>
      </div>
      <!-- MODAL ADD -->
      <!-- Modal EDIT -->
      <div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="{{route('add')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">

                <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="text" id="data-nip" class="form-control" id="data-nip" name="nip">
                </div>

                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="data-nama" name="nama">
                </div>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="data-username" name="username">
                </div>

                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" id="data-jabatan" name="jabatan">
                </div>
                <div class="form-group">
                  <label for="goldarah">Golongan Darah</label>
                  <input type="text" class="form-control" id="data-goldarah" name="goldarah">
                </div>

                <div class="form-group">
                  <label for="alamatkantor">Alamat Kantor</label>
                  <input type="text" class="form-control" id="data-alamatkantor" name="alamatkantor">
                </div>
                <div class="form-group">
                  <label for="kdlokasi">Kode Lokasi</label>
                  <input type="text" class="form-control" id="data-kdlokasi" name="kdlokasi">
                </div>

                <div class="form-group">
                  <label for="username">Lokasi</label>
                  <input type="text" class="form-control" id="data-lokasi" name="lokasi">
                </div>
                <div class="form-group">
                  <label for="username">Lokasi 2</label>
                  <input type="text" class="form-control" id="data-lokasi2" name="lokasi2">
                </div>
                <div class="form-group">
                  <label for="username">Kode Cetak</label>
                  <input type="text" class="form-control" id="data-kdcetak" name="kdcetak">
                </div>

                <div class="form-group">
                  <label for="username">Foto</label>
                  <input type="file" class="form-control" id="data-foto" name="foto">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-4 col-lg-4">
      <div class="widgetbar">
        <button class="btn btn-primary-rgba" data-toggle="modal" data-target="#modal-add"><i class="feather icon-plus mr-2"></i>Tambah Pegawai</button>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
  <!-- Start row -->
  <div class="row">
    <!-- Start col -->
    <div class="col-lg-12">
      <div class="card m-b-30">
        <div class="card-header">
          <h5 class="card-title">Data Pegawai</h5>
        </div>
        <div class="card-body">
          <!-- <h6 class="card-subtitle">With DataTables you can alter the ordering characteristics of the table at initialisation time.</h6> -->
          <form action="{{route('search')}}" method="post">
            @csrf
            <div class="container form-group">
              <div class="row">
                <input type="text" class=" col-md-4" name="nip" placeholder="Cari NIP">
                <button type='submit' class='btn btn-primary col-md-1'><i class='fa fa-search'></i></button>
              </div>
            </div>
          </form>
          <div class="table-responsive">
            <table class="display table table-striped table-bordered" style="font-size:smaller;">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Instansi</th>
                  <th>Unit Kerja</th>
                  <th>Kode Cetak</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pegs as $peg)
                <tr>
                  <td>{{$peg->nip}}</td>
                  <td>{{$peg->nama}}</td>
                  <td>{{$peg->jabatan}}</td>
                  <td>{{$peg->lokasi}}</td>
                  <td>{{$peg->lokasi2}}</td>
                  <td>{{$peg->kdcetak}}</td>
                  <td><img src="assets/img/images/{{$peg->foto}}" alt="" width="75"></td>
                  <td>
                    <a type="button" class="btn btn-outline-warning btn-xs" data-toggle="modal" data-target="#modal-edit{{$peg->id}}" id="setedit">
                      <i class="fa fa-edit text-warning"></i>

                    </a>
                    <!-- Modal EDIT -->
                    <div class="modal fade" id="modal-edit{{$peg->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5><br>
                            @php
                            $nip = str_replace(' ', '', $peg->nip);
                            @endphp
                            {{-- @php
                            $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                            @endphp --}}


                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form action="/dashboard/{{$peg->id}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="modal-body">
                              <!--  -->
                              <div class="form-group">
                                {{$nip}}
                              </div>
                              <div class="form-group">
                                {{--  --}}
                              </div>
                              <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" id="data-nip" class="form-control" id="data-nip" name="nip" value="{{$peg->nip}}">
                              </div>

                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="data-nama" name="nama" value="{{$peg->nama}}">
                              </div>

                              <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="data-username" name="username" value="{{$peg->username}}">
                              </div>

                              <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="data-jabatan" name="jabatan" value="{{$peg->jabatan}}">
                              </div>

                              <div class="form-group">
                                <label for="alamatkantor">Alamat Kantor</label>
                                <input type="text" class="form-control" id="data-alamatkantor" name="alamatkantor" value="{{$peg->alamatkantor}}">
                              </div>

                              <div class="form-group">
                                <label for="username">Lokasi</label>
                                <input type="text" class="form-control" id="data-lokasi" name="lokasi" value="{{$peg->lokasi}}">
                              </div>
                              <div class="form-group">
                                <label for="username">Lokasi 2</label>
                                <input type="text" class="form-control" id="data-lokasi2" name="lokasi2" value="{{$peg->lokasi2}}">
                              </div>
                              <div class="form-group">
                                <label for="username">Kode Cetak</label>
                                <input type="text" class="form-control" id="data-kdcetak" name="kdcetak" value="{{$peg->kdcetak}}">
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                  <input type="hidden" name="foto" class="custom-control-input" value="{{$peg->foto}}" id="pol">
                                  <input type="checkbox" name="foto" class="form-check-input" value="" id="a">
                                  <label class="form-check-label" for="a">
                                    Centang bila ingin mengganti foto
                                  </label>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="username">Foto</label>
                                <input type="file" class="form-control" id="data-foto" name="foto">
                              </div>
                              <img src="assets/img/images/{{$peg->foto}}" alt="" width="75">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- <a href="/dashboard/{{$peg->id}}/edit" class='btn btn-outline-success btn-xs'><i class='fa fa-edit'></i></a> -->
                    <form action="/dashboard/{{$peg->id}}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <input type="hidden" name="_method" value="delete">
                      <button type='submit' class='btn btn-outline-danger btn-xs'><i class='fa fa-trash'></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{ $pegs->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End col -->
  </div>
  <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')



<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-table-datatable.js') }}"></script>
@endsection