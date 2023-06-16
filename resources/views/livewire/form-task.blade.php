<div>
    <form wire:submit.prevent="simpan">
    <div class="form-group">
            <label>Nama</label>
            <input wire:model="nama" name="" class="form-control" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label>Judul Task</label>
            <input wire:model="judul_task" name="" class="form-control" placeholder="Masukkan Judul">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea  wire:model="deskripsi_task" name="" id="" 
            cols="30" rows="10" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>