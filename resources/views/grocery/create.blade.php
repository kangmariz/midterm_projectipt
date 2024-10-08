@extends('layouts.app')

@section('content')
    <h1>Add Grocery Item</h1>

    <form action="{{ route('grocery.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
