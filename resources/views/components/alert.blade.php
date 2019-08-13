<div class="alert alert-{{ $type ?? 'success' }} alert-dismissible fade show" role="alert">
  <strong>{{ $title ?? 'title' }}</strong> {{ $description ?? 'description' }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>