@extends('layouts.user_type.auth')

@section('content')
<livewire:table :config="App\Tables\UsersTable::class"/>
