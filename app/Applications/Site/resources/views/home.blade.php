@extends('site::base')

@section('body')

    <h1 class="page-header">List Users</h1>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    {{--{!! $users->render() !!}--}}

@endsection