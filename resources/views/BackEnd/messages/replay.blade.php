@csrf
<div class="box-body">

          <div class="form-group">
                <label for="exampleInputEmail1">ارسال اميل </label>
                <textarea name="message" class="form-control  {{ $errors->has('message') ? ' is-invalid' : '' }}" rows="4" placeholder="Repaly Contact..."></textarea>
                @if ($errors->has('message'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('message') }}</strong>
                </span>
                @endif
              </div>


</div>
