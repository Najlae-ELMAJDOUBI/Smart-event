
@extends('layouts.app', ['activePage' => 'Event', 'titlePage' => __('')])
@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">The Events</h4>
              <p class="card-category"> ALL Events Displayed In This Table </p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">

                  <thead class=" text-primary">
                    <tr><th>
                        Title
                    </th>
                    <th>
                      Description
                    </th>
                    <th>
                      Number_days
                    </th>
                    <th >
                      begin/end
                    </th>
                    <th >
                      Organisation
                    </th>
                    <th >
                      Event_Adress
                    </th>
                    <th >
                      Event_Phone
                    </th>
                    <th >
                      Event_Email
                    </th>

                  </tr></thead>
                  <tbody>
                  @foreach($liste as $list)
                    <tr>
                        <td>
                          {{ $list -> title }}
                        </td>
                        <td>
                        {{ $list -> description }}
                        </td>
                        <td>
                        {{ $list->nb_days }}
                        </td>
                        <td>
                        {{ $list->begin_at }} / {{ $list->end_at }}
                        </td>
                        <td>
                        {{ $list->organisation }}
                        </td>
                        <td>
                        {{ $list->event_address }}
                        </td>
                        <td>
                        {{ $list->event_phone }}
                        </td>
                        <td>
                        {{ $list->event_email }}
                        </td>
                        <td>
                        <button type="button" class="btn btn-info">Interested</button>
                        </td>

                      </tr>
                      @endforeach
                                        </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection
