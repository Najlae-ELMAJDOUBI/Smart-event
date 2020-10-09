@extends('layouts.app', ['activePage' => 'demande', 'titlePage' => __('Demandes')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Les Demandes</h4>
              <p class="card-category"> toutes les Demandes qui ne sont pas encore acceptés sont affichés sur le tableau ci-dessous</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">

                  <thead class=" text-primary">
                    <tr><th>
                        DESCRIPTION
                    </th>
                    <th>
                      event_phone
                    </th>
                    <th>
                      event_email
                    </th>
                    <th >
                      	event_address
                    </th>
                    <th class="text-right">

                    </th>
                    <th class="text-right">

                    </th>
                  </tr></thead>
                  <tbody>

                  @foreach($liste as $list)
                    <tr>
                        <td>
                          {{$list->description}}
                        </td>
                        <td>
                        {{$list->event_phone}}
                        </td>
                        <td>
                        {{$list->event_email}}
                        </td>
                        <td>
                        {{$list->event_address}}
                        </td>
                        <td>
                        <a href="{{ url('send-mail/'.$list->id)}}" class= "btn btn-primary" name="oui">Accepter</a>
                        </td>
                        <td>

                        <a href="{{ url('/demande/edit/'.$list->id)}}" class="btn btn-danger " name="annuler" type="submit" >Annuler</a></td>
                        </td>

                      </tr>
                      @endforeach
                                        </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection
