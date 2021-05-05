@extends('layouts/layout')

@section('title', 'Task details')

@section('main')
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $tasks->title }}</h3>
					<p>{{ $tasks->description }}</p>
					<p>{{ \Carbon\Carbon::parse($tasks->created_at)->format('l j F Y - h:m:s A')}}</p>
				</div>
				<div class="card-footer">
                    <a href="/task/{{$tasks->id}}/delete" class="card-footer-item">Delete Task?</a>
                </div>
			</div>
		</div>
@endsection