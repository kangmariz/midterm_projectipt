@extends('layouts.app')

@section('styles')
    <style>
        body {
            background-image: url("{{asset('images/7690031.jpg')}}");
            background-size: cover;
            background-position: center;
            height: 90vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Make container semi-transparent */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 50px; /* Add some margin from the top */
        }

        h1 {
            font-family: 'PainFont', sans-serif; /* Custom font */
            color: #333;
            font-size: 2.5rem;
        }

        .btn {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-warning {
            background-color: #ffc107;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        /* Add custom hover effects */
        .btn:hover {
            opacity: 0.9;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h1>Grocery List</h1>
        <a href="{{ route('grocery.create') }}" class="btn btn-primary">Add Item</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <a href="{{ route('grocery.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('grocery.destroy', $item) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
