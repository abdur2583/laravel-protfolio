@extends('layout.app')

@if (DB::connection()->getPdo())
    <h1>Connected to :: {{ DB::connection()->getDatabaseName() }}</h1>
@endif

