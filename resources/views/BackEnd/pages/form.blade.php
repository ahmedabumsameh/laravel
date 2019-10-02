@csrf
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
                <label for="exampleInputEmail1">الوصف</label>
                <textarea  name="des" class="form-control {{ $errors->has('des') ? ' is-invalid' : '' }}" rows="3" placeholder="الوصف">{{ isset($row) ? $row->des : old('des') }}</textarea>
                @if ($errors->has('des'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('des') }}</strong>
                </span>
                @endif
              </div>

</div>
