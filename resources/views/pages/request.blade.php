@extends('layouts.app', ['activePage' => 'request', 'titlePage' => __('request')])

@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#category").CreateMultiCheckBox({ width: '230px', defaultText : 'Select Below', height:'250px' });
        });
    </script>

    <style>


    .MultiCheckBox {
            border:1px solid #e2e2e2;
            padding: 5px;
            border-radius:4px;
            cursor:pointer;
        }

        .MultiCheckBox .k-icon{
            font-size: 15px;
            float: right;
            font-weight: bolder;
            margin-top: -7px;
            height: 10px;
            width: 14px;
            color:#787878;
        }

        .MultiCheckBoxDetail {
            display:none;
            position:absolute;
            border:1px solid #e2e2e2;
            overflow-y:hidden;
        }

        .MultiCheckBoxDetailBody {
            overflow-y:scroll;
        }

            .MultiCheckBoxDetail .cont  {
                clear:both;
                overflow: hidden;
                padding: 2px;
            }

            .MultiCheckBoxDetail .cont:hover  {
                background-color:#cfcfcf;
            }

            .MultiCheckBoxDetailBody > div > div {
                float:left;
            }

        .MultiCheckBoxDetail>div>div:nth-child(1) {

        }

        .MultiCheckBoxDetailHeader {
            overflow:hidden;
            position:relative;
            height: 28px;
            background-color:#3d3d3d;
        }

            .MultiCheckBoxDetailHeader>input {
                position: absolute;
                top: 4px;
                left: 3px;
            }

            .MultiCheckBoxDetailHeader>div {
                position: absolute;
                top: 5px;
                left: 24px;
                color:#fff;
            }
    </style>



<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('request') }}" autocomplete="off" class="form-horizontal">
            @csrf
          <!--  @method('put')-->
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('New events Request') }}</h4>
                <p class="card-category">{{ __('Be carful to put information ') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('title') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('title') }}" value="{{ old('title', auth()->user()->title) }}" required="true" aria-required="true"/>
                      @if ($errors->has('title'))
                        <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="input-type" type="text" placeholder="{{ __('type') }}" value="{{ old('type', auth()->user()->type) }}" required="true" aria-required="true"/>
                      @if ($errors->has('type'))
                        <span id="type-error" class="error text-danger" for="input-type">{{ $errors->first('type') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('link') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" id="input-link" type="longText" placeholder="{{ __('link') }}" value="{{ old('link', auth()->user()->link) }}" required="true" aria-required="true"/>
                      @if ($errors->has('link'))
                        <span id="link-error" class="error text-danger" for="input-link">{{ $errors->first('link') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('description') }}" value="{{ old('description', auth()->user()->description) }}" required="true" aria-required="true"/>
                      @if ($errors->has('description'))
                        <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('number of days') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nb_days') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nb_days') ? ' is-invalid' : '' }}" name="nb_days" id="input-nb_days" type="integer" placeholder="{{ __('nb_days') }}" value="{{ old('nb_days', auth()->user()->nb_days) }}" required="true" aria-required="true"/>
                      @if ($errors->has('nb_days'))
                        <span id="nb_days-error" class="error text-danger" for="input-nb_days">{{ $errors->first('nb_days') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('begin at') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('begin_at') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('begin_at') ? ' is-invalid' : '' }}" name="begin_at" id="input-begin_at" type="date" placeholder="{{ __('begin_at') }}" value="{{ old('begin_at', auth()->user()->begin_at) }}" required="true" aria-required="true"/>
                      @if ($errors->has('begin_at'))
                        <span id="begin_at-error" class="error text-danger" for="input-begin_at">{{ $errors->first('begin_at') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('End At') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('end_at') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('end_at') ? ' is-invalid' : '' }}" name="end_at" id="input-end_at" type="date" placeholder="{{ __('end_at') }}" value="{{ old('end_at', auth()->user()->end_at) }}" required="true" aria-required="true"/>
                      @if ($errors->has('end_at'))
                        <span id="end_at-error" class="error text-danger" for="input-end_at">{{ $errors->first('end_at') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('organisation') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('organisation') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('organisation') ? ' is-invalid' : '' }}" name="organisation" id="input-organisation" type="text" placeholder="{{ __('organisation') }}" value="{{ old('organisation', auth()->user()->organisation) }}" required="true" aria-required="true"/>
                      @if ($errors->has('organisation'))
                        <span id="organisation-error" class="error text-danger" for="input-organisation">{{ $errors->first('organisation') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Adress') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('event_address') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('event_address') ? ' is-invalid' : '' }}" name="event_address" id="input-event_address" type="longText" placeholder="{{ __('event_address') }}" value="{{ old('event_address', auth()->user()->event_address) }}" required="true" aria-required="true"/>
                      @if ($errors->has('event_address'))
                        <span id="event_address-error" class="error text-danger" for="input-event_address">{{ $errors->first('event_address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('event_phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('event_phone') ? ' is-invalid' : '' }}" name="event_phone" id="input-event_phone" type="text" placeholder="{{ __('event_phone') }}" value="{{ old('event_phone', auth()->user()->event_phone) }}" required="true" aria-required="true"/>
                      @if ($errors->has('event_phone'))
                        <span id="event_phone-error" class="error text-danger" for="input-event_phone">{{ $errors->first('event_phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('event_email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('event_email') ? ' is-invalid' : '' }}" name="event_email" id="input-event_email" type="text" placeholder="{{ __('event_email') }}" value="{{ old('event_email', auth()->user()->event_email) }}" required="true" aria-required="true"/>
                      @if ($errors->has('event_email'))
                        <span id="event_email-error" class="error text-danger" for="input-event_email">{{ $errors->first('event_email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('visibility') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('visibility') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('visibility') ? ' is-invalid' : '' }}" name="visibility" id="input-visibility" type="enum" placeholder="{{ __('visibility') }}" value="{{ old('visibility', auth()->user()->visibility) }}" required="true" aria-required="true"/>
                      @if ($errors->has('visibility'))
                        <span id="visibility-error" class="error text-danger" for="input-visibility">{{ $errors->first('visibility') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('flyer_link') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('flyer_link') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('flyer_link') ? ' is-invalid' : '' }}" name="flyer_link" id="input-flyer_link" type="text" placeholder="{{ __('flyer_link') }}" value="{{ old('flyer_link', auth()->user()->flyer_link) }}" required="true" aria-required="true"/>
                      @if ($errors->has('flyer_link'))
                        <span id="flyer_link-error" class="error text-danger" for="input-flyer_link">{{ $errors->first('flyer_link') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Interest category ') }}</label>
                  <div class="col-sm-7">
                  <select id="categories" name='categories' multiple="multiple">
                      <option value="1">Science </option>
                      <option value="2"> INFORMATICS</option>
                      <option value="3">Data Science</option>
                      <option value="4">BioInformatics</option>
                     <option value="5">Statistics</option>
                       <option value="6">sociologie</option>
                      <option value="7">Philosophie</option>
                     <option value="8">Art</option>


                  </select>
                  </div>
                </div>
              </div>

              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <script>
      $(document).ready(function () {
            $(document).on("click", ".MultiCheckBox", function () {
                var detail = $(this).next();
                detail.show();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader input", function (e) {
                e.stopPropagation();
                var hc = $(this).prop("checked");
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", hc);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetailHeader", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").find(".MultiCheckBoxDetailBody input").prop("checked", !chk);
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont input", function (e) {
                e.stopPropagation();
                $(this).closest(".MultiCheckBoxDetail").next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).on("click", ".MultiCheckBoxDetail .cont", function (e) {
                var inp = $(this).find("input");
                var chk = inp.prop("checked");
                inp.prop("checked", !chk);

                var multiCheckBoxDetail = $(this).closest(".MultiCheckBoxDetail");
                var multiCheckBoxDetailBody = $(this).closest(".MultiCheckBoxDetailBody");
                multiCheckBoxDetail.next().UpdateSelect();

                var val = ($(".MultiCheckBoxDetailBody input:checked").length == $(".MultiCheckBoxDetailBody input").length)
                $(".MultiCheckBoxDetailHeader input").prop("checked", val);
            });

            $(document).mouseup(function (e) {
                var container = $(".MultiCheckBoxDetail");
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.hide();
                }
            });
        });

        var defaultMultiCheckBoxOption = { width: '220px', defaultText: 'Select Below', height: '200px' };

        jQuery.fn.extend({
            CreateMultiCheckBox: function (options) {

                var localOption = {};
                localOption.width = (options != null && options.width != null && options.width != undefined) ? options.width : defaultMultiCheckBoxOption.width;
                localOption.defaultText = (options != null && options.defaultText != null && options.defaultText != undefined) ? options.defaultText : defaultMultiCheckBoxOption.defaultText;
                localOption.height = (options != null && options.height != null && options.height != undefined) ? options.height : defaultMultiCheckBoxOption.height;

                this.hide();
                this.attr("multiple", "multiple");
                var divSel = $("<div class='MultiCheckBox'>" + localOption.defaultText + "<span class='k-icon k-i-arrow-60-down'><svg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='sort-down' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512' class='svg-inline--fa fa-sort-down fa-w-10 fa-2x'><path fill='currentColor' d='M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z' class=''></path></svg></span></div>").insertBefore(this);
                divSel.css({ "width": localOption.width });

                var detail = $("<div class='MultiCheckBoxDetail'><div class='MultiCheckBoxDetailHeader'><input type='checkbox' class='mulinput' value='-1982' /><div>Select All</div></div><div class='MultiCheckBoxDetailBody'></div></div>").insertAfter(divSel);
                detail.css({ "width": parseInt(options.width) + 10, "max-height": localOption.height });
                var multiCheckBoxDetailBody = detail.find(".MultiCheckBoxDetailBody");

                this.find("option").each(function () {
                    var val = $(this).attr("value");

                    if (val == undefined)
                        val = '';

                    multiCheckBoxDetailBody.append("<div class='cont'><div><input type='checkbox' class='mulinput' value='" + val + "' /></div><div>" + $(this).text() + "</div></div>");
                });

                multiCheckBoxDetailBody.css("max-height", (parseInt($(".MultiCheckBoxDetail").css("max-height")) - 28) + "px");
            },
            UpdateSelect: function () {
                var arr = [];

                this.prev().find(".mulinput:checked").each(function () {
                    arr.push($(this).val());
                });

                this.val(arr);
            },
        });</script>
@endsection
