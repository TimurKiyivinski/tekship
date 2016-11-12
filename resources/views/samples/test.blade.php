@extends('samples.template')

@section('content')
<div class="container">
    {{-- Heading --}}
    <div class="panel panel-default">
        <div class="panel-heading">
            Headings
        </div>
        <div class="panel-body">
            <h1>h1 heading</h1>
            <h2>h2 heading</h2>
            <h3>h3 heading</h3>
            <h4>h4 heading</h4>
            <h5>h5 heading</h5>
            <h6>h6 heading</h6>
        </div>
    </div>

    {{-- Buttons --}}
    <div class="panel panel-primary">
        <div class="panel-heading">
            Buttons
        </div>
        <div class="panel-body">
            <button type="button" class="btn btn-default">Default</button>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-link">Link</button>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">
            Table
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>...</td>
                    </tr>
                    <tr class="active">
                        <td class="active">...</td>
                    </tr>
                    <tr class="success">
                        <td class="success">...</td>
                    </tr>
                    <tr class="warning">
                        <td class="warning">...</td>
                    </tr>
                    <tr class="danger">
                        <td class="danger">...</td>
                    </tr>
                    <tr class="info">
                        <td class="info">...</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- List Groups --}}
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    List Groups
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <a href="#" class="list-group-item active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item"><span class="badge">14</span>Vestibulum at eros</a>
                    </ul>
                </div>
            </div>
        </div>

        {{-- ALerts --}}
        <div class="col-md-9">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Alerts
                </div>
                <div class="panel-body">
                    <div class="alert alert-success" role="alert">...</div>
                    <div class="alert alert-info" role="alert">...</div>
                    <div class="alert alert-warning" role="alert">...</div>
                    <div class="alert alert-danger" role="alert">...</div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-warning">
        <div class="panel-heading">
            Lables
        </div>
        <div class="panel-body">
            <span class="label label-default">Default</span>
            <span class="label label-primary">Primary</span>
            <span class="label label-success">Success</span>
            <span class="label label-info">Info</span>
            <span class="label label-warning">Warning</span>
            <span class="label label-danger">Danger</span>
        </div>
    </div>
</div>
@endsection
