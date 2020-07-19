@extends('admin.body')

@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="{{ route('references.index') }}" class="btn btn-lg btn-teal">
                <i class="ion-reply"></i> Cancel
            </a>
        </div>

        <div class="title">
            Une nouvelle référence
        </div>
    </div>

{!! Form::open(['method' => 'POST', 'route' => ['references.store'], 'class' => '_form' ]) !!}

    <section class="container-fluid mt-20">

        @include('errors.list')

        <div class="block">
            <div class="block-content form">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" name="title" class="form-control input-lg" placeholder="Titre" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Lieu</label>
                            <input type="text" name="location" class="form-control input-lg" placeholder="Lieu" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Année</label>
                            <input type="text" name="year" class="form-control input-lg" placeholder="Année">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Commanditaires</label>
                            <input type="text" name="commanditaires" class="form-control input-lg" placeholder="Description">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="3" cols="80" class="form-control input-lg" placeholder="Saisissez la description"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="text-right mr-20">
        <button type="submit" class="btn btn-lg btn-primary">
            <i class="ion-checkmark"></i> Sauvegarder
        </button>
    </div>

{!! Form::close() !!}
@endsection
