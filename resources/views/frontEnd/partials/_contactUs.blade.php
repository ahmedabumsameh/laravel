<div class="section landing-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="text-center">Keep in touch?</h2>
              <form action="{{ route('frontEnd.messageStore') }}" method="POST"  >
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <label>Name</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nc-icon nc-single-02"></i>
                        </span>
                      </div>
                      <input type="text" name="name" class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name">
                      @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="nc-icon nc-email-85"></i>
                        </span>
                      </div>
                      <input type="email" name="email" class="form-control  {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email">
                      @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                </div>
                <label>Message</label>
                <textarea name="content" class="form-control  {{ $errors->has('content') ? ' is-invalid' : '' }}" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                @if ($errors->has('content'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('content') }}</strong>
                </span>
                @endif
                <div class="row">
                  <div class="col-md-4 ml-auto mr-auto">
                    <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
