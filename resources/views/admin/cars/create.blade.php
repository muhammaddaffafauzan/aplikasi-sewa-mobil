@extends('layouts.admin')

@section('content')
 <div class="card">
    <div class="card-header">
        form Tambah Data
    </div>
    <div class="card-body">
        <form action="{{ route('admin.cars.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga sewa</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Bahan Bakar</label>
                <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}">
            </div>
            <div class="form-group">
                <label for="jumlah_kursi">Jumlah kursi</label>
                <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <select name="transmisi" id="transmisi" class="form-control">
                <option value="manual">Manual</option>
                <option value="otomatis">Otomatis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                <option value="tersedia">tersedia</option>
                <option value="tidak tersedia">Tidak tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5">{{ old('deskrpsi') }}</textarea>
            </div>
            <div class="form-group">
                <label for="p3k">P3k</label>
                <select name="p3k" id="p3k" class="form-control">
                <option value="1">tersedia</option>
                <option value="0">Tidak tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="audio">Audio</label>
                <select name="audio" id="audio" class="form-control">
                <option value="1">tersedia</option>
                <option value="0">Tidak tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="charger">Charger</label>
                <select name="charger" id="charger" class="form-control">
                <option value="1">tersedia</option>
                <option value="0">Tidak tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ac">Ac</label>
                <select name="ac" id="ac" class="form-control">
                <option value="1">tersedia</option>
                <option value="0">Tidak tersedia</option>
                </select>
            </div>
            <div class="form-grup">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="form-grup p-3">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
 </div>
@endsection