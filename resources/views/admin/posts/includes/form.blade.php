
    <div class="form-group p-3">
      <label for="input-title">Title</label>
      <input type="text" class="form-control" id="input-title" name="title" value="{{ old('title', $post->title) }}" required>
    </div>
    @error('title')
    <div class="alert alert-danger">
      
    </div>
    @enderror


    <div class="form-group p-3">
      <label for="input-author">Author</label>
      <input type="text" class="form-control" id="input-author" name="author" value="{{ old('author', $post->author) }}" required>
    </div>
    @error('author')
    <div class="alert alert-danger">
        
    </div>
    @enderror

    <div class="form-group p-3">
      <label for="input-description">Content</label>
      <input type="text" class="form-control" id="input-description" name="description" value="{{ old('description', $post->post_content) }}" required>
    </div>
    @error('description')
    <div class="alert alert-danger">
       
    </div>
    @enderror

    <div class="form-group p-3">
      <label for="input-image-url">Image</label>
      <input type="text" class="form-control" id="input-image-url" name="image-url" value="{{ old('image_url', $post->image_url) }}" required>
    </div>
    @error('image-url')
    <div class="alert alert-danger">
       
    </div>
    @enderror

<div class="form-group p-3 text-center">
    <button type="submit" class="btn btn-lg btn-primary">Publish</button>
</div>