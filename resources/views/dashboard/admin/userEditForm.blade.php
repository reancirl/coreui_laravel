@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Edit') }} {{ $user->name }}</div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="/users/{{ $user->id }}">
                            @csrf
                            @method('PUT')
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <svg class="c-icon c-icon-sm">
                                          <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                      </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ $user->email }}" required>
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <svg class="c-icon">
                                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                    </svg>
                                  </span>
                              </div>
                              <input class="form-control" type="password" placeholder="{{ __('New Password') }}" name="password" value="">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <svg class="c-icon">
                                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                    </svg>
                                  </span>
                              </div>
                              <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" value="">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <svg class="c-icon">
                                      <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                                    </svg>
                                  </span>
                              </div>
                              <select class="form-control" name="qualification_id" id="quaification">
                                <option value="">-- Qualification --</option>
                                @foreach($qualifications as $i => $q)
                                  <option value="{{ $q->id }}" {{$user->qualification_id == $q->id ? 'selected' : ''}}>{{ $q->name }}</option>
                                @endforeach
                              </select>
                            </div>
                            @foreach(\DB::table('roles')->get() as $i => $role)
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><input type="checkbox" {{ in_array($role->id,$user_roles) ? 'checked' : '' }} value="{{ $role->name }}" name="roles[{{ ++$i }}]"></span>
                                </div>
                                <input class="form-control" type="text" value="{{ $role->name }}" readonly>
                              </div>
                            @endforeach
                            <button class="btn btn-block btn-success mt-5" type="submit">{{ __('Save') }}</button>
                            <a href="{{ route('users.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection