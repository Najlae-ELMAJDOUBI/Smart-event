
@extends('layouts.app', ['activePage' => 'Event', 'titlePage' => __('Table Evenement')])
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
                        NOM
                    </th>
                    <th>
                      Prenom
                    </th>
                    <th>
                      Email
                    </th>
                    <th >
                      Category
                    </th>
                    <th >
                      Sujet
                    </th>
                    
                  </tr></thead>
                  <tbody>
                  
                  @foreach($liste as $list)
                    <tr>
                        <td>
                          {{$list->nom}}
                        </td>
                        <td>
                        {{$list->prenom}}
                        </td>
                        <td>
                        {{$list->email}}
                        </td>
                        <td>
                        {{$list->category}}
                        </td>
                        <td>
                        {{$list->sujet}}
                        </td>
                        
                      </tr>
                      @endforeach
                                        </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection



