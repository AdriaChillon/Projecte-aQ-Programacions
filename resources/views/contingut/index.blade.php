@extends('layouts.app')

@section('template_title')
    Contingut
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contingut') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('continguts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Contingut</th>
										<th>Resultat d'aprenentatge</th>
										<th>Unitat Formativa</th>
										<th>Módul</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($continguts as $contingut)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contingut->contingut }}</td>
											<td>{{ $contingut->ra->name }}</td>
											<td>{{ $contingut->ra->uf->name }}</td>
											<td>{{ $contingut->ra->uf->modul->name }}</td>

                                            <td>
                                                <form action="{{ route('continguts.destroy',$contingut->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('continguts.show',$contingut->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('continguts.edit',$contingut->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $continguts->links() !!}
            </div>
        </div>
    </div>
@endsection
