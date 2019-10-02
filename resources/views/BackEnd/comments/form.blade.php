@csrf

<div class="col-xs-4 ">
  <div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <input type="hidden" name="video_id" value="{{ $row->id }}">
            <div class="form-group">
                    <label for="exampleInputEmail1">التعليق</label>
                    <textarea  name="content" class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="8" placeholder="اكتب تعليق"></textarea>
                    {{-- {{ isset($row) ? $row->des : old('des') }} --}}
                    @if ($errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('content') }}</strong>
                    </span>
                    @endif
                  </div>
                  <div class="box-footer">
                        <button type="submit" class="btn btn-primary"> اضف تعليق</button>
                    </div>
                </div>
    </div>
  </div>
</div>

