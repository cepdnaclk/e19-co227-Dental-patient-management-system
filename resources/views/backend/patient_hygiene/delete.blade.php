@extends('backend.layouts.app')

@section('title', __('Basic Hygiene Records'))

@section('content')
    <div>
        <x-backend.card>
            <x-slot name="header">
                Basic Habit Records: Delete | {{ $patientHygiene->patient_id }}
            </x-slot>

            <x-slot name="body">
                <p>Are you sure you want to delete the patient habits record for
                    <strong><i>"{{ $patientHygiene->patient_id }}"</i></strong>?
                </p>
                <div class="d-flex">
                    {!! Form::open([
                        'url' => route('admin.patient_hygiene.destroy', compact('patientHygiene')),
                        'method' => 'delete',
                        'class' => 'container',
                    ]) !!}
                        @csrf
                        @method('delete')

                        <a href="{{ route('admin.patient_hygiene.index') }}" class="btn btn-light mr-2">Back</a>
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </x-slot>
        </x-backend.card>
    </div>
@endsection
