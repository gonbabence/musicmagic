@extends('layouts.default')
@section('content')
    <div class="row">
        <h3>Create</h3>
    </div>
    <div class="container">
        <form method="POST" action="/profile">
            @csrf

            <div class="form-group">
                <label for="mfr">Manufacturer</label>
                <input type="text" id="mfr" name="mfr" class="form-control" placeholder="Manufacturer">
            </div>

            <div class="form-group">
                <label for="model">Type/Model</label>
                <input type="text" id="model" name="model" class="form-control" placeholder="Type/Model">
            </div>

            <div class="form-group">
                <label for="condition">Example select</label>
                <select id="condition" name="condition" class="form-control">
                    <option>new</option>
                    <option>factory new</option>
                    <option>in good condition</option>
                    <option>heavily used</option>
                    <option>in bad condition</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" placeholder="Type your description here"></textarea>
            </div>
        </form>
    </div>
@stop
