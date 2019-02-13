@extends('admin.adminmaster')

@section('title')

CSI Admin | Update Article

@endsection

@section('content')
    <section class="new-newsitem-banner">
        <h1>Update article</h1>
    </section>

<form action="/admin/{{$article->id}}" method="POST" class="article-form" enctype="multipart/form-data" name="myform" id="myform">
        @csrf
        @method('put')
        @if ($errors)
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach

        @endif
        <div class="form-group">
            <label for="title">News Title:</label>
        <input type="text" name="title" id="title" placeholder="Article Title" required value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="headline">Headline:</label>
        <input type="text" name="headline" id="headline" placeholder="Headline for article" required value="{{$article->headline}}">
        </div>
        <div class="form-group">
            <label for="summernote" class="content-label">Article Content:</label>
    
        <textarea name="content" id="content" cols="30" rows="20" placeholder="Type the content of your article here" required>{{$article->content}}</textarea>
        </div>
    
        <div class="form-group">
            <label for="image">Upload Image (Optional):</label>
        <input type="file" name="img" id="image" class="image-input" value="{{$article->img}}">
        </div>

    
    
    
    
        <button>Update</button>
    
        <a href="/admin">Go Back</a>
    </form>




    <script>
            CKEDITOR.replace('content');
    </script>
@endsection