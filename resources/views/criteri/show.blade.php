@extends('layouts.app')

@section('template_title')
    {{ $criteri->name ?? "{{ __('Show') Criteri" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Criteri</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('criteris.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Criteri:</strong>
                            {{ $criteri->criteri }}
                        </div>
                        <div class="form-group">
                            <strong>Resultat d'aprenentatge:</strong>
                            {{ $criteri->ra->name}}
                        </div>
                        <div class="form-group">
                            <strong>Unitat Formativa:</strong>
                            {{ $criteri->ra->uf->name }}
                        </div>
                        <div class="form-group">
                            <strong>Modul:</strong>
                            {{ $criteri->ra->uf->modul->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
