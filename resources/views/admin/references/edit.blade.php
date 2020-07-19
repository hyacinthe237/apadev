@extends('admin.body')

@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="{{ route('references.index') }}" class="btn btn-lg btn-teal">
                <i class="ion-reply"></i> Cancel
            </a>
        </div>

        <div class="title">
            Modification référence
        </div>
    </div>

<section class="container-fluid mt-20">
      {!! Form::model($reference, ['method' => 'PUT', 'route' => ['references.update', $reference->id], 'class' => '_form' ]) !!}
        @include('errors.list')

        <div class="block">
            <div class="block-content form">

              <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Titre</label>
                          <input type="text" name="title" class="form-control input-lg" value="{{ $reference->title }}" required>
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Lieu</label>
                          <input type="text" name="location" class="form-control input-lg" value="{{ $reference->location }}" required>
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Année</label>
                          <input type="text" name="year" class="form-control input-lg" value="{{ $reference->year }}">
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Commanditaires</label>
                          <input type="text" name="commanditaires" class="form-control input-lg" value="{{ $reference->commanditaires }}">
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" rows="3" cols="80" class="form-control input-lg">{{ $reference->description }}</textarea>
                      </div>
                  </div>
              </div>

            </div>
        </div>

        <div class="text-right mr-20">
            <button type="submit" class="btn btn-lg btn-primary">
                <i class="ion-checkmark"></i> Sauvegarder
            </button>
        </div>
    {!! Form::close() !!}

    {{-- <div class="row">
        <div class="col-sm-6 mb-40">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <button class="btn btn-lg btn-danger" data-toggle="modal" data-target="#confirmModal">
                        Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
</section>

@include('admin.modals.confirm', [
    'route'    => 'references.destroy',
    'method'   => 'delete',
    'resource' => $reference,
    'confirm'  => 'Oui, je supprime',
    'message'  => 'Voulez-vous de façon permanente supprimer cette référence ?'
])
@endsection
