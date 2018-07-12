<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>{{$album->name}}</title>
    <!-- Latest compiled and minified CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 50px;
      }
      .starter-template {
        padding: 40px 15px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle"data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Awesome Albums</a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{route('create_album_form')}}">Create New Album</a></li>
          </ul>
        </div><!--/.nav-collapse -->
     </div>
    </div>
    <div class="container">

      <div class="starter-template">
        <div class="media">
          <img class="media-object pull-left"alt="{{$album->name}}" src="/albums/{{$album->cover_image}}" width="350px">
          <div class="media-body">
            <h2 class="media-heading" style="font-size: 26px;">Album Name:</h2>
            <p>{{$album->name}}</p>
          <div class="media">
          <h2 class="media-heading" style="font-size: 26px;">AlbumDescription :</h2>
          <p>{{$album->description}}<p>
          <a href="{{route('add_image',array('id'=>$album->id))}}"><button type="button"class="btn btn-primary btn-large">Add New Image to Album</button></a>
          <a href="{{route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are yousure?')"><button type="button"class="btn btn-danger btn-large">Delete Album</button></a>
        </div>
      </div>
    </div>
    </div>
    <div class="row">
        @foreach($album->Photos as $photo)
          <div class="col-lg-3">
            <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
              <img alt="{{$album->name}}" src="/albums/{{$photo->image}}">
              <div class="caption">
                <p>{{$photo->description}}</p>
                <p>Created date:  {{ date("d F Y",strtotime($photo->created_at)) }}at {{ date("g:ha",strtotime($photo->created_at)) }}</p>
                <a href="{{URL::route('delete_image',array('id'=>$photo->id))}}" onclick="returnconfirm('Are you sure?')"><button type="button"class="btn btn-danger btn-small">Delete Image</button></a>
                <p>Move image to another Album :</p>
                <form name="movephoto" method="POST"action="{{URL::route('move_image')}}">
                    {{ csrf_field() }}
                  <select name="new_album">
                    @foreach($albums as $others)
                      <option value="{{$others->id}}">{{$others->name}}</option>
                    @endforeach
                  </select>
                  <input type="hidden" name="photo"value="{{$photo->id}}" />
                  <button type="submit" class="btn btn-smallbtn-info" onclick="return confirm('Are you sure?')">Move Image</button>
                </form>
              </div>
            </div>
          </div>
      @endforeach
    </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
  </body>
</html>
