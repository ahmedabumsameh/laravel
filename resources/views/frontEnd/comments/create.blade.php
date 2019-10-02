<div class="col-lg-12" id="commentsId">
        <form action="{{ route('frontEnd.commentStore',['id'=>$row->id]) }}" method="POST" >
              @csrf
        <div class="form-group">
                <label for="exampleInputEmail1">Add Comment </label>
                <textarea  name="content" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="5" placeholder="اكتب تعليق"></textarea>
                {{-- {{ isset($row) ? $row->des : old('des') }} --}}
                @if ($errors->has('content'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('content') }}</strong>
                </span>
                @endif
              </div>
              <div class="box-footer">
                    <button type="submit" class="btn btn-primary"> Add Comment </button>
                </div>
        </form>
</div>
