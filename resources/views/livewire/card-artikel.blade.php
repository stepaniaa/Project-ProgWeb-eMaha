<div>
  @foreach($art as $a)
    <div class="card border-info">
        <div class="card-header bg-info text light justify-content-center d-flex">
            <strong>New Content</strong>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $a->judul }}</h5>
          <p class="card-text">{{ $a->deskripsi }}</p>
        </div>
      </div>
    </div>
    @endforeach
</div>