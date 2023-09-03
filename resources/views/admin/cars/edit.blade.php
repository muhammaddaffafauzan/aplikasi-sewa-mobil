@extends('layouts.admin')

@section('content')
 <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                form Edit Data
            </div>
            <div class="card-body">
                <form action="{{ route('admin.cars.update', $car->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="nama_mobil">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil', $car->nama_mobil) }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga sewa</label>
                        <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa', $car->harga_sewa) }}">
                    </div>
                    <div class="form-group">
                        <label for="bahan_bakar">Bahan Bakar</label>
                        <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar', $car->bahan_bakar) }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kursi">Jumlah kursi</label>
                        <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi', $car->jumlah_kursi) }}">
                    </div>
                    <div class="form-group">
                        <label for="transmisi">Transmisi</label>
                        <select name="transmisi" id="transmisi" class="form-control">
                        <option {{ $car->transmisi == 'manual' ? 'selected' : null}} value="manual">Manual</option>
                        <option {{ $car->transmisi == 'otomatis' ? 'selected' : null}} value="otomatis">Otomatis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                        <option {{ $car->status == 'tersedia' ? 'selected' : null}} value="tersedia">tersedia</option>
                        <option {{ $car->status == 'tidak tersedia' ? 'selected' : null}} value="tidak tersedia">Tidak tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5">{{ old('deskrpsi', $car->deskripsi) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="p3k">P3k</label>
                        <select name="p3k" id="p3k" class="form-control">
                        <option {{ $car->p3k === 1 ? 'selected' : null }} value="1">tersedia</option>
                        <option {{ $car->p3k === 0 ? 'selected' : null }} value="0">Tidak tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="audio">Audio</label>
                        <select name="audio" id="audio" class="form-control">
                        <option {{ $car->audio === 1 ? 'selected' : null }} value="1">tersedia</option>
                        <option {{ $car->audio === 0 ? 'selected' : null }} value="0">Tidak tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="charger">Charger</label>
                        <select name="charger" id="charger" class="form-control">
                        <option {{ $car->charger === 1 ? 'selected' : null }} value="1">tersedia</option>
                        <option {{ $car->charger === 0 ? 'selected' : null }} value="0">Tidak tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ac">Ac</label>
                        <select name="ac" id="ac" class="form-control">
                        <option {{ $car->ac === 1 ? 'selected' : null }} value="1">tersedia</option>
                        <option {{ $car->ac === 0 ? 'selected' : null }} value="0">Tidak tersedia</option>
                        </select>
                    </div>
                    <div class="form-grup p-3">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
         </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                form Edit Gambar
            </div>
        <div class="card-body">
            <form action="{{ route('admin.cars.updateImage', $car->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <img src="{{ Storage::url($car->gambar) }}" class="img-fluid" alt="">
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
     </div>
    </div>
</div>
    </div>
 </div>
@endsection