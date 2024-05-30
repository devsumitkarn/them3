@extends('User.layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <!-- main col left --> 
        
        <div class="col-sm-12">
            <div class="well"> 
                <form class="form" method="post" action="{{route('post.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title" name="title" value="{{old('title')}}">
                        @error('title')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder=" Enter message" name="description">{{old('description')}}</textarea>
                        @error('description')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            @forelse ($posts as $post)
            <div class="panel panel-default">   
                <div class="panel-heading"><a href="#" class="pull-right">{{auth()->user()->name}}</a> <h4>{{$post->title}}</h4></div>
                <div class="panel-body">
                   <input type="file" id="fileSelector" style="display: none;">
                   <img src="assets/img/150x150.gif" class="test img-circle pull-right" onclick="fileSelector.click()"><div>{{$post->description}}</div>
                   <div class="clearfix"></div>
                   <hr>
                   @foreach ($post->comments as $comment)
                    <p>{{$comment->comment}}</p>    
                    <hr>
                        
                   @endforeach
                    <form method="post" action="{{route('comment.store')}}">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group">
                            <input type="text" class="form-control" id="comment" aria-describedby="emailHelp" placeholder="Enter comment" name="comment" value="{{old('comment')}}">
                            @error('comment')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            @empty
            Not Post Yet!
            @endforelse
        </div>
    </div>
    <!--/row-->
@endsection