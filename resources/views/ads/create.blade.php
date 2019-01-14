@extends('layouts.default')
@section('content')
    <div class="row">
        <h3>Create</h3>
    </div>
    <div class="container">
        <form method="POST" action="/ads/create">
            @csrf

            <div class="form-group">
                <label for="condition">Category</label>
                <select id="condition" name="condition" class="form-control" required>
                    <option value="guitars">Guitars</option>
                    <option value="keyboards">Keyboards</option>
                    <option value="drums">Drums/Percussion</option>
                    <option value="accessories">Accessories</option>
                    <option value="sound">Sound & Studio</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mfr">Manufacturer</label>
                <input type="text" id="mfr" name="mfr" class="form-control" placeholder="Manufacturer" required>
            </div>

            <div class="form-group">
                <label for="model">Type/Model</label>
                <input type="text" id="model" name="model" class="form-control" placeholder="Type/Model" required>
            </div>

            <div class="form-group">
                <label for="condition">Condition</label>
                <select id="condition" name="condition" class="form-control" required>
                    <option value="new">new</option>
                    <option value="factory">factory new</option>
                    <option value="good">in good condition</option>
                    <option value="heavily_used">heavily used</option>
                    <option value="bad">in bad condition</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mfr">Price (HUF)</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Price" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description"
                          name="description"
                          class="form-control"
                          rows="4"
                          required>
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-2">Post</button>

        </form>
    </div>
@endsection
