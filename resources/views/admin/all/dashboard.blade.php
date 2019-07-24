@extends('admin.body')



@section('body')
<div class="page-title">
    <h3>Dashboard</h3>
</div>

<div class="dashboard">
    <div class="container-fluid">
        <div class="cards row">
            <div class="col-sm-3">
                <div class="card blue">
                    <h3>{{ $references }}</h3>
                    <h5>Références</h5>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card red">
                    <h3>{{ $ressources }}</h3>
                    <h5>Ressources</h5>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card green">
                    <h3>{{ $membres }}</h3>
                    <h5>Membres</h5>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
