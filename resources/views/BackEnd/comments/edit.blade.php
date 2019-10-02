<form action="{{ route('comments.updateComment',['id'=>$item->id]) }}" method="POST"  >
    @method('PUT')
    @csrf
    <div class="form-group">
            <textarea  name="content" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="2" >{{ $item->content }}</textarea>
            {{-- {{ isset($row) ? $row->des : old('des') }} --}}
            @if ($errors->has('content'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('content') }}</strong>
            </span>
            @endif
          </div>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary"> تعديل تعليق</button>
            </div>

</form>
