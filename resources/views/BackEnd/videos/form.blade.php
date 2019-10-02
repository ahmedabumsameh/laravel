@csrf
<div class="row">
<div class="col-xs-8">
  <div class="box box-primary">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">الاسم</label>
        <input type="name" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"  placeholder="الاسم"  value="{{ isset($row) ? $row->name : old('name') }}">
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">metaDes</label>
        <input type="name" name="metaDes" class="form-control {{ $errors->has('metaDes') ? ' is-invalid' : '' }}"  placeholder="metaDes "  value="{{ isset($row) ? $row->metaDes : old('metaDes') }}">
        @if ($errors->has('metaDes'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('metaDes') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">metaKeywords</label>
        <input type="name" name="metaKeywords" class="form-control {{ $errors->has('metaKeywords') ? ' is-invalid' : '' }}"  placeholder="الكلامات الدلاليه"  value="{{ isset($row) ? $row->metaKeywords : old('metaKeywords') }}">
        @if ($errors->has('metaKeywords'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('metaKeywords') }}</strong>
        </span>
        @endif
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">اكتب الوصف</label>
        <textarea  name="des" class="form-control {{ $errors->has('des') ? ' is-invalid' : '' }}" rows="8" placeholder="الوصف">{{ isset($row) ? $row->des : old('des') }}</textarea>
        @if ($errors->has('des'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('des') }}</strong>
        </span>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="col-xs-4">
        <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                        <div class="form-group ">
                                <label class="bmd-label-floating">Video Category</label>
                                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                  @foreach($categories  as $caegory)
                                  <option value="{{ $caegory->id }}" {{ isset($row) && $row->category_id == $caegory->id ? 'selected'  :'' }}>{{ $caegory->name }}</option>
                                  @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                                @endif
                              </div>
                              <div class="form-check">
                                    <label for="exampleInputEmail1">الاوسمه</label><br/>
                                      @foreach ($tags as $item)
                                      <label class="form-check-label"  >
                                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{$item->id}}"
                                        @if ( isset($row) )
                                            @foreach ($row->tags as $tag)
                                                @if ($item->id == $tag->id)
                                                checked
                                                @endif
                                            @endforeach
                                        @endif
                                        />
                                        {{ $item->name }}

                                     </label>

                                      @endforeach


                                    @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                                  <div class="form-check">
                                        <label for="exampleInputEmail1">المهارات</label><br/>
                                          @foreach ($skills as $item)
                                          <label class="form-check-label"  >
                                            <input class="form-check-input" type="checkbox" name="skills[]" value="{{$item->id}}"
                                            @if ( isset($row) )
                                                @foreach ($row->skills as $skill)
                                                    @if ($item->id == $skill->id)
                                                    checked
                                                    @endif
                                                @endforeach
                                            @endif
                                            />
                                            {{ $item->name }}

                                         </label>

                                          @endforeach


                                        @if ($errors->has('skills'))
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('skills') }}</strong>
                                        </span>
                                        @endif
                                      </div>
                              <div class="form-group">
                                    <label for="exampleInputEmail1">youtube</label>
                                    <input type="name" name="youtube" class="form-control {{ $errors->has('youtube') ? ' is-invalid' : '' }}"  placeholder=" youtube"  value="{{ isset($row) ? $row->youtube : old('youtube') }}">
                                    @if ($errors->has('youtube'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('youtube') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                              <div class="form-group">
                                    <label >Video image</label>
                                    <input type="file" name="image">
                                    @if ($errors->has('featured'))
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('featured') }}</strong>
                                    </span>
                                    @endif
                                  </div>

                                <!-- /.box-body -->
                                <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">{{  isset($row) ? 'تعديل الفيديو'  : $titlePage }}</button>
                                    </div>
                                </div>
                </div>
        </div>


</div>
