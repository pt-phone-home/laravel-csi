@extends('admin.adminmaster')

@section('title')

CSI Admin | Create New Article

@endsection

@section('content')
    <section class="new-newsitem-banner">
        <h1>Add new article</h1>
    </section>

    <form action="/admin/create" method="POST" class="article-form" enctype="multipart/form-data" name="myform" id="myform">
        @csrf
        @if ($errors)
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach

        @endif
        <div class="form-group">
            <label for="title">News Title:</label>
            <input type="text" name="title" id="title" placeholder="Article Title" required>
        </div>
        <div class="form-group">
            <label for="headline">Headline:</label>
            <input type="text" name="headline" id="headline" placeholder="Headline for article" required>
        </div>
        <div class="form-group">
            <label for="summernote" class="content-label">Article Content:</label>
    
            <textarea name="content" id="content" cols="30" rows="20" placeholder="Type the content of your article here" required></textarea>
        </div>
    
        <div class="form-group">
            <label for="image">Upload Image (Optional):</label>
            <input type="file" name="img" id="image" class="image-input">
        </div>
    
    
    
        <button>Save</button>
    
        <a href="/admin">Go Back</a>
    </form>




    <script>
            CKEDITOR.replace('content');
    </script>
@endsection