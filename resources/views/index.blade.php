@extends('layouts.app')

@section('content')
    <h4>Projects</h4>
    <div class="row">
        <div class="col">
            <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                <thead class="thead-inverse|thead-default">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Project</th>
                        <th>City</th>
                        <th>Company</th>
                        <th>Execution date</th>
                        <th>Is active</th>
                        <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td class="text-center" scope="row">{{ $loop->index + 1 }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->city->name }}</td>
                                <td>{{ $project->company->name }}</td>
                                <td class="text-center">{{ $project->execution_date }}</td>
                                <td class="text-center">{{ $project->is_active ? '✅' : '🚫' }}</td>
                                <td>{{ $project->user->name }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection