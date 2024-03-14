@extends('layouts/admin')
@section('content')

<form action="{{route('admin.product.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="title">Title</label>
      Title: <input type="text"  name='title' class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" value="{{ old('title') }}" required><br>
      @error('title')
      <span class="invalid-feedback" role="alert">
          <strong>Incorrect Title</strong>
      </span>
  @enderror
      Content: <input type="text" name='content' class="form-control @error('content') is-invalid @enderror" id="content" value="{{ old('content') }}"  placeholder="Content" min='10' required></br>
      @error('content')
      <span class="invalid-feedback" role="alert">
          <strong>Incorrect Content</strong>
      </span>
  @enderror
      Image: <input type="file" name='image' class="form-control @error('image') is-invalid @enderror" id="image" required><br>
      @error('image')
    <span class="invalid-feedback" role="alert">
        <strong>Incorrect image</strong>
    </span>
@enderror
      Product Count: <input type="number" name='count' class="form-control @error('count') is-invalid @enderror" id="count" value='1'  placeholder="count" min='1' max='999999' required><br>
    </div>
    @error('count')
    <span class="invalid-feedback" role="alert">
        <strong>Incorrect Product Count</strong>
    </span>
@enderror
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
    @endsection