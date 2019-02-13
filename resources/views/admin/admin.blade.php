@extends('admin.adminmaster')

@section('title')
    CSI | Administration Panel
@endsection

@section('content')
<div class="admin-content">
        
        <div class="admin-login">
            <div class="admin-area-articles">
                <h2 class="admin-area-articles-heading">Articles</h2>
                @include('inc.messages')
                <p class="admin-area-articles-new">
                    <a href="/admin/createarticle">
                        <h1>Add New Article</h1>
                    </a>
                </p>

                <table class="admin-area-articles-table">
                    <thead>
                        <th>Title</th>
                        <th>Published/Updated Date</th>
                        <th colspan=2>Admin Options</th>
                    </thead>
                    <tbody>
                       @foreach ($articles as $article)
                        <tr>

                            <td>
                            <a href="show/{{$article->id}}">
                                {{$article->title}}
                                </a>
                            </td>
                            <td>
                                {{$article->updated_at}}
                            </td>
                            <td>
                            <a href="/admin/{{$article->id}}/edit">Edit</a>
                            </td>
                            <td>
                            <form method="POST" action="/admin/{{$article->id}}" onsubmit="return confirm('Are you sure you want to delete this article? This cannot be undone!')">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                            {{-- <a href="/admin/{{$article->id}}">Delete</a> --}}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>

        </div>
    </div>
@endsection