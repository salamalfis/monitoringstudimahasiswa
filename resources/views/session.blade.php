@extends('layouts/app')

@section('content')

    <h1>Session</h1>

    <p>
        <a href="{{ route('session.create') }}">Create</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Session</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sessions as $session)
                <tr>
                    <td>{{ $session->id }}</td>
                    <td>{{ $session->session }}</td>
                    <td>
                        <a href="{{ route('session.edit', $session->id) }}">Edit</a>
                        <a href="{{ route('session.destroy', $session->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
