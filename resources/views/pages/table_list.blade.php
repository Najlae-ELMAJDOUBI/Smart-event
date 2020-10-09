@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table Category')])

@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Les Catégories</h4>
              <p class="card-category"> toutes les catégories sont affichés sur le tableau ci-dessous</p>
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ url('category/create')}}" class="btn btn-sm btn-primary">Add category</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr><th>
                        ID
                    </th>
                    <th>
                      Category
                    </th>
                    <th>
                      Description
                    </th>
                    <th class="text-right">
                      Actions
                    </th>
                  </tr></thead>
                  <tbody>
                  @foreach($cat as $ct)
                    <tr>
                        <td>
                          {{$ct->id}}
                        </td>
                        <td>
                        {{$ct->category_label}}
                        </td>
                        <td>
                        {{$ct->description}}
                        </td>
                        <td class="td-actions text-right">
                        <form action="{{ url('category/'.$ct->id) }}" method="post">

                             		{{ csrf_field()}}
                	            	{{ method_field('DELETE')}}
                        <a href="{{ url('category/'.$ct->id.'/edit')}}" class="btn btn-success btn-link"><i class="material-icons">edit</i></a>
                        <a href="" ><i class="material-icons">update</i></a>
                        <button class="btn btn-danger btn-link"><i class="material-icons">delete</i></button>

                            </td>
                            </form>
                      </tr>
                      @endforeach
                                        </tbody>
                </table>
              </div>
            </div>
          </div>


@endsection
