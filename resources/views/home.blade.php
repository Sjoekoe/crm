@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <header class="panel-heading">
                    Clients
                    <span class="tools pull-right">
                        <a href="#" class="fa fa-chevron-down"></a>
                        <a href="#" class="fa fa-cog"></a>
                        <a href="#" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <table class="table table-hover table-general">
                        <thead>
                            <tr>
                                <th>Company</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>
                                        {{ $client->company()->name() }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
