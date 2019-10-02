<div class="col-lg-12">
        <div class="card card-nav-tabs" style="width: 100%; margin-top: 50px">
                <div class="card-header card-header-danger">
                  Comments ({{ $row->comments->count() }})
                </div>
                <ul class="list-group list-group-flush">

                        @foreach ($row->comments as $i=>$item)

                        <li class="list-group-item">
                                <span>{{ $item->user->name }}</span>
                                <span class="pull-right">{{ $item->created_at }}</span>
                                @if(auth()->user())
                                @if((auth()->user()->role == 'admin') || auth()->user()->id == $item->user->id )
                                <span class="pull-right"><a href="" data-toggle="collapse" data-target="#demo{{ $i }}">Edit</a>|</span>
                                @endif
                                @endif
                                <p> {{ $item->content }}</p>
                           <div id="demo{{ $i }}" class="collapse" >
                                @if(auth()->user())
                                @if((auth()->user()->role == 'admin') || auth()->user()->id == $item->user->id )
                           <form action="{{ route('frontEnd.commentUpdate',['id'=>$item->id]) }}" method="POST" >
                                @method('PUT')
                                @csrf
                           <div class="form-group" >
                                <textarea  name="content" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="2" >{{ $item->content }}</textarea>
                                {{-- {{ isset($row) ? $row->des : old('des') }} --}}
                                @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('content') }}</strong>
                                </span>
                                @endif
                              </div>
                              <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">  Update Comment</button>
                                </div>
                           </form>
                           @endif
                           @endif
                        </div>
                        </li>

                        @endforeach
                </ul>
              </div>

</div>
