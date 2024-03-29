@extends('layouts.app')

@section('template_title')
    {{ $contingut->name ?? "{{ __('Show') Contingut" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contingut</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('continguts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Contingut:</strong>
                            {{ $contingut->contingut }}
                        </div>
                        <div class="form-group">
                            <strong>Resultat d'aprenentatge:</strong>
                            {{ $contingut->ra->name }}
                        </div>
                        <div class="form-group">
                            <strong>Unitat Formativa:</strong>
                            {{ $contingut->ra->uf->name }}
                        </div>
                        <div class="form-group">
                            <strong>Modul:</strong>
                            {{ $contingut->ra->uf->modul->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
