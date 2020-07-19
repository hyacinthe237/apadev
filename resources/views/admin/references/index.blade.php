@extends('admin.body')


@section('body')
    <div class="page-heading">
      <div class="buttons">
          <a href="{{ route('references.create') }}" class="btn btn-lg btn-primary">
              <i class="ion-plus"></i> Référence
          </a>
      </div>

        <div class="title">
            Références
        </div>
    </div>

    <section class="page page-white">
        <div class="container-fluid">
            <div class="mt-10">
                <div class="row">
                    <form class="_form" action="" method="get">
                      <div class="col-sm-8">
                          <div class="form-group">
                              <input type="text"
                              name="keywords"
                              class="form-control input-lg"
                              value="{{ Request::get('keywords') }}"
                              placeholder="Saisissez votre recherche...">
                          </div>
                      </div>

                      <div class="col-sm-4">
                          <button type="submit" class="btn btn-lg btn-primary btn-block">
                              Filter
                          </button>
                      </div>
                    </form>
                </div>
            </div>

            @include('errors.list')

            <div class="mt-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Periode</th>
                            <th>Commanditaires</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($references as $refrence)
                            <tr data-href="/admin/references/{{ $refrence->id }}/edit">
                                <td>{{ $refrence->id }}</td>
                                <td class="bold">{{ $refrence->title }}</td>
                                <td>{{ $refrence->year ? $refrence->year : $refrence->description }}</td>
                                <td>{{ $refrence->commanditaires }}</td>
                                <td>{{ date('d/m/Y H:i', strtotime($refrence->created_at)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-20 text-center">
              {{ $references->links() }}
            </div>
            <!-- End of table -->
        </div>
    </section>


@endsection
