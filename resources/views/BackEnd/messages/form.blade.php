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
            <label for="exampleInputEmail1">الاميل</label>
            <input type="email" name="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ isset($row) ? $row->email : old('email') }}">
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>

          <div class="form-group">
                <label for="exampleInputEmail1">المحتوى</label>
                <textarea name="content" class="form-control  {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="4" placeholder="Tell us your thoughts and feelings...">{{ isset($row) ? $row->content : old('content') }}</textarea>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>


</div>
