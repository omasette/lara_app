<!DOCTYPE html>
<html>
<head>
	<title>Property</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="topnav">
    <a class="active" href="/">Home</a>
    <a href="/property_table">property Table</a>
  </div>
  <h2>My Properties</h2>
  <form class="form-horizontal" action="/property" method="post"  encytype = "multipart/form-data">
{{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2">Property Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter Property Name" name="propertyName" value="{{$property->Name or ''}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">location:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter property's location" name="locationName" value="{{$property->location or ''}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter property'description" name="description" value="{{$property->description or ''}}" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">contact:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter landlord's contact" name="contacts" value="{{$property->contacts or ''}}">
      </div>
    </div>
    <input type="hidden" name="id" value="{{$property->id or ''}}" readonly>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
<style>
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
</body>
</html>
