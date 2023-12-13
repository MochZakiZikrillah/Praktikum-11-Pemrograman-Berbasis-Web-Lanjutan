<form action="{{ url('pelanggan/edit/' . $row->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDIT DATA PELANGGAN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" id="pel_nama" name="pel_nama"
                            value="{{ $row->pel_nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="golongan" class="form-label">GOLONGAN</label>
                        <select name="pel_id_gol" id="gol" class="form-select">
                            <option value="{{ $row->pel_id_gol }}">{{ $row->golongan->gol_nama }}</option>
                            @foreach ($golongan as $data)
                                <option value="{{ $data->id }}">{{ $data->gol_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" id="pel_alamat" name="pel_alamat"
                            value="{{ $row->pel_alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">NO. HP</label>
                        <input type="text" class="form-control" id="pel_hp" name="pel_hp"
                            value="{{ $row->pel_hp }}">
                    </div>
                    <div class="mb-3">
                        <label for="aktif" class="form-label">STATUS</label>
                        <select name="pel_aktif" id="aktif" class="form-select">
                            <option value="Y">AKTIF</option>
                            <option value="N">NONAKTIF</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BATAL</button>
                    <button type="submit" class="btn btn-primary">SIMPAN PERUBAHAN</button>
                </div>
            </div>
        </div>
    </div>
</form>