@csrf

<div class="form-group">
    <label for="proyek_id">Proyek ID</label>
    <input type="number" name="proyek_id" id="proyek_id" class="form-control" value="{{ old('proyek_id', $item->proyek_id ?? '') }}">
    @error('proyek_id')<small class="text-danger">{{ $message }}</small>@enderror
</div>

<div class="form-group">
    <label for="lat">Latitude</label>
    <input type="text" name="lat" id="lat" class="form-control" value="{{ old('lat', $item->lat ?? '') }}">
    @error('lat')<small class="text-danger">{{ $message }}</small>@enderror
</div>

<div class="form-group">
    <label for="lng">Longitude</label>
    <input type="text" name="lng" id="lng" class="form-control" value="{{ old('lng', $item->lng ?? '') }}">
    @error('lng')<small class="text-danger">{{ $message }}</small>@enderror
</div>

<div class="form-group">
    <label for="geojson">GeoJSON</label>
    <textarea name="geojson" id="geojson" class="form-control">{{ old('geojson', $item->geojson ?? '') }}</textarea>
    @error('geojson')<small class="text-danger">{{ $message }}</small>@enderror
</div>
