@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ url('category/'.$cat->id) }}" autocomplete="off" class="form-horizontal">
            <input type="hidden" name="_method" value="put">
              {{ csrf_field()}}

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Category') }}</h4>
                <p class="card-category">{{ __('Category information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <div>
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="category"  value="{{ $cat->category_label }}""/>

                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    <div>
                      <textarea class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="description">{{ $cat->description }}</textarea>

                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>



@endsection
