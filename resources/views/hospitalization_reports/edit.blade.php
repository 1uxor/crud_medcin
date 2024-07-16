@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Hospitalization Report</h1>
    <form action="{{ route('hospitalization-reports.update', $hospitalizationReport->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $hospitalizationReport->name) }}">
        </div>

        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" class="form-control" value="{{ old('surname', $hospitalizationReport->surname) }}">
        </div>

        <div class="form-group">
            <label for="cne">CNE</label>
            <input type="text" name="cne" class="form-control" value="{{ old('cne', $hospitalizationReport->cne) }}">
        </div>

        <div class="form-group">
            <label for="hospitalization_start">Hospitalization Start</label>
            <input type="date" name="hospitalization_start" class="form-control" value="{{ old('hospitalization_start', $hospitalizationReport->hospitalization_start) }}">
        </div>

        <div class="form-group">
            <label for="hospitalization_end">Hospitalization End</label>
            <input type="date" name="hospitalization_end" class="form-control" value="{{ old('hospitalization_end', $hospitalizationReport->hospitalization_end) }}">
        </div>

        <div class="form-group">
            <label for="reason">Reason</label>
            <textarea name="reason" class="form-control">{{ old('reason', $hospitalizationReport->reason) }}</textarea>
        </div>

        <div class="form-group">
            <label for="history">History</label>
            <textarea name="history" class="form-control">{{ old('history', $hospitalizationReport->history) }}</textarea>
        </div>

        <div class="form-group">
            <label for="operation_date">Operation Date</label>
            <input type="date" name="operation_date" class="form-control" value="{{ old('operation_date', $hospitalizationReport->operation_date) }}">
        </div>

        <div class="form-group">
            <label for="intervention_title">Intervention Title</label>
            <input type="text" name="intervention_title" class="form-control" value="{{ old('intervention_title', $hospitalizationReport->intervention_title) }}">
        </div>

        <div class="form-group">
            <label for="progress">Progress</label>
            <textarea name="progress" class="form-control">{{ old('progress', $hospitalizationReport->progress) }}</textarea>
        </div>

        <div class="form-group">
            <label for="discharge_decision">Discharge Decision</label>
            <textarea name="discharge_decision" class="form-control">{{ old('discharge_decision', $hospitalizationReport->discharge_decision) }}</textarea>
        </div>

        <div class="form-group">
            <label for="discharge_date">Discharge Date</label>
            <input type="date" name="discharge_date" class="form-control" value="{{ old('discharge_date', $hospitalizationReport->discharge_date) }}">
        </div>

        <div class="form-group">
            <label for="rehabilitation">Rehabilitation</label>
            <textarea name="rehabilitation" class="form-control">{{ old('rehabilitation', $hospitalizationReport->rehabilitation) }}</textarea>
        </div>

        <div class="form-group">
            <label for="treatment">Treatment</label>
            <textarea name="treatment" class="form-control">{{ old('treatment', $hospitalizationReport->treatment) }}</textarea>
        </div>

        <div class="form-group">
            <label for="follow_up_date">Follow-up Date</label>
            <input type="date" name="follow_up_date" class="form-control" value="{{ old('follow_up_date', $hospitalizationReport->follow_up_date) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
