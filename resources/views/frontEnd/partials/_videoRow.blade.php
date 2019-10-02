<h2>{{ $type->name }}</h2>
<br>
<div class="row">

        @foreach ($rows as $item)
            <div class="col-lg-4">
                    @include('frontEnd.partials._card')
            </div>
        @endforeach
        <div class="col-lg-12">
               {{  $rows->links() }}
        </div>
</div>
