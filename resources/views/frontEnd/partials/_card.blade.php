<div class="card" style="width: 20rem;">
    <a href="{{ route('frontEnd.video.show', ['id'=>$item->id]) }}">
        <img class="card-img-top" src="{{ url( $item->image) }}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{{ $item->name }}</p>
          <small>{{ $item->created_at->diffForHumans() }}</small>
        </div>
    </a>
</div>
