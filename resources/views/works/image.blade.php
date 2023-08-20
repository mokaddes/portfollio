@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Photo Resizer</div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" class="form-control-file" accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <label for="width">Width</label>
                        <input type="number" name="width" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="height">Height</label>
                        <input type="number" name="height" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Resize and Download</button>
                </form>
            </div>
        </div>
    </div>
@endsection
