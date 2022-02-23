@extends('layouts.layout') @section('content')
<title>Edit Data Peminjaman</title>
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Edit Data</h6>
</div>
<div class="card-body">
    <div class="x_content">
        <form action="/keranjang_peminjaman/update" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Peminjam</label>
                <input type="hidden" name="id_peminjaman" value="{{$peminjaman2->id_peminjaman}}">
                <input type="text" name="nama_peminjaman" class="form-control" value="{{$peminjaman2->nama_peminjam}}" required placeholder="Masukan Nama">
            </div>
            <div class="form-group">
                <label for="status">Status Peminjam</label>
                <select class="form-control" name="status" id="status">
                    <option selected disabled>----- Pilih Status -----</option>
                    <option value="Siswa">Siswa</option>
                    <option value="Guru">Guru</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelasSiswa">Kelas</label>
                <select class="form-control" name="kelasSiswa" id="kelasSiswa">
                    <option selected disabled>----- Pilih Kelas -----</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                    <option value="XIII">XIII</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                    <option selected disabled>----- Pilih Jurusan -----</option>
                    @foreach ($jurusans as $j)
                        <option value="{{ $j->jurusan }}">{{ $j->jurusan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jurusanId">ID Jurusan</label>
                <select class="form-control" name="jurusanId" id="jurusanId">
                    <option selected disabled>----- Pilih ID Jurusan -----</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Barang</label>
                 <select name="id_barang" id="" class="form-control">
                 @foreach ($barang as $r)
                  @if ($peminjaman2->id_barang==$r->id_barang)
                  <option value="{{$r->id_barang}}" selected="selected">{{$r->nama_barang}}</option>
                  @else
                  <option value="{{$r->id_barang}}">{{$r->nama_barang}}</option>
                      @endif
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" value="{{$peminjaman2->jumlah_pinjam}}" required placeholder="Masukan Ruangan">
            </div>
            <div class="form-group">
                <label for="">Tanggal Peminjaman</label>
                <input type="date" name="tanggal_pinjam" class="form-control" value="{{$peminjaman2->tanggal_pinjam}}" required placeholder="Masukan Ruangan">
            </div>
            <div class="form-group">
                <label for="">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" class="form-control" value="{{$peminjaman2->tanggal_kembali}}" required placeholder="Masukan Ruangan">
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
