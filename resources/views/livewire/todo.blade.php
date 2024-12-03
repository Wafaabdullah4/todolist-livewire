<div>
    {{-- Do your work, then step back. --}}
    <h3 class="mb-5">Todo List</h3>

    <form action="" class="mb-4" wire:submit="save">
        <div class="mb-2">
            <label for="title">Judul Todo</label>
            <input type="text" class="form-control shadow-none" wire:model="title" id="title">
        </div>
        <button type="submit" class="btn btn-primary">{{ $isEdit == true ? 'Edit Todo' : 'Buat' }}</button>
    </form>


    <hr class="mb-4">

    <table class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Todo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{$item->title }}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <button type="button" wire:click="edit({{ $item->id }})" class="btn btn-warning btn-sm">Edit</button>
                            <button type="button" wire:click="delete({{ $item->id }})" wire:confirm="Apakah anda yakin akan menghapus data ini??" class="btn btn-danger btn-sm">Hapus</button>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </table>
</div>
