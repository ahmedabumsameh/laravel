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

</div>
