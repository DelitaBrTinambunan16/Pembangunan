@csrf

<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $item->nama ?? '') }}">
    @error('nama')<small class="text-danger">{{ $message }}</small>@enderror
</div>

<div class="form-group">
    <label for="nik">NIK</label>
    <input type="text" name="nik" id="nik" class="form-control" value="{{ old('nik', $item->nik ?? '') }}">
    @error('nik')<small class="text-danger">{{ $message }}</small>@enderror
</div>

<div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat', $item->alamat ?? '') }}</textarea>
    @error('alamat')<small class="text-danger">{{ $message }}</small>@enderror
</div>

<div class="form-group">
    <label for="telepon">Telepon</label>
    <input type="text" name="telepon" id="telepon" class="form-control" value="{{ old('telepon', $item->telepon ?? '') }}">
    @error('telepon')<small class="text-danger">{{ $message }}</small>@enderror
</div>

<div class="form-group">
    <label for="umur">Umur</label>
    <input type="number" name="umur" id="umur" class="form-control" value="{{ old('umur', $item->umur ?? '') }}">
    @error('umur')<small class="text-danger">{{ $message }}</small>@enderror
</div>
