<div>
  <table class="table table-bordered mt-2">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Judul Task</th>
            <th scope="col">Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($task as $idx => $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->judul_task}}</td>
            <td>{{$data->deskripsi_task}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="alert alert-succes" role="alert">
    Jumlah Data : {{$task->count()}}

  </div>
</div>