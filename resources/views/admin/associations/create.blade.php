@extends('admin.body')

@section('body')
    {{-- <div class="page-heading">
        <div class="title">
            Association
        </div>
    </div> --}}

    <section class="page page-white">
        <div class="container-fluid">

            @include('errors.list')


              {!! Form::model($association, ['method' => 'PUT', 'route' => ['associations.update', $association->number], 'class' => '_form' ]) !!}

                {{ csrf_field() }}

                <h4 class="mt-20">Détails de la société</h4>
                <div class="row mt-20">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Abbréviation</label>
                            <input type="text" name="short_name" value="{{ $association->short_name }}" class="form-control input-lg ">
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <div class="form-group">
                            <label>Nom complet</label>
                            <input type="text" name="long_name" value="{{ $association->long_name }}" class="form-control input-lg ">
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>PO Box</label>
                            <input type="text" name="po_box" value="{{ $association->po_box }}" class="form-control input-lg ">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ $association->email }}" class="form-control input-lg " required>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Siège Social</label>
                            <input type="text" name="location" value="{{ $association->location }}" class="form-control input-lg " required>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Téléphone 1</label>
                            <input type="text" name="phone_1" value="{{ $association->phone_1 }}" class="form-control input-lg " required>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Téléphone 2</label>
                            <input type="text" name="phone_2" value="{{ $association->phone_2 }}" class="form-control input-lg ">
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Addresse</label>
                            <input type="text" name="address" value="{{ $association->address }}" class="form-control input-lg ">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Présentation</label>
                            <textarea
                              name="presentation"
                              rows="4"
                              cols="80"
                              class="form-control input-lg">{{ $association->presentation }}</textarea>
                        </div>
                    </div>
                </div>


                <div class="mt-20 text-right">
                    <button type="submit" class="btn btn-lg btn-primary">
                        <i class="ion-checkmark"></i>
                        Modifier
                    </button>
                </div>

            {!! Form::close() !!}
        </div>
    </section>
@endsection
