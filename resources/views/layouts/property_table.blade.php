<html>
    <body>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset">
            <div class="panel panel-default">


                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                
                <div class="container">
  <div class="topnav">
    <a class="active" href="/">Home</a>
    <a href="/form">property </a>
  </div>
  
                <div class="panel-body">
                    <table >
                    <tr>
                        <th>
                     <td>Number</td>
                    <td>Property Name </td>
                    <td>Location</td>
                    <td>Description</td>
                    <td>Picture</td>
                    <td>action</td>


                    </tr>
                    @foreach($property as $zawatu)
                    <tr >
                    <td>{{$zawatu->id}}</td>
                    <td>{{$zawatu->Name}}</td>
                    <td>{{$zawatu->location}}</td>
                    <td>{{$zawatu->description}}</td>
                    <td>{{$zawatu->contacts}}</td>
                    <td>
      <a href="{{URL::to('del')}}" title="delete?">
        <i class ="fa fa-trash"></i>
      </a>
    </td>

                <td><a href="/propertyupdate/{{$zawatu->id}}" class="btn btn-default">Update</a></td>
                    <td><a href="/propertydestroy/{{$zawatu->id}}" class="btn btn-default">Delete</a></td>

                    </tr>
                    @endforeach
                     </table>

                </div>
            </div>
        </div>
    </div>
</div>
<style>

.table {
    border-collapse: collapse;
    width="100%";
    overflow-x: auto;
    overflow-y: auto;
    height: 600px;
}

th,
td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #EEEDED;
}

tr:hover {
    background-color: #036;
    color: white;
    cursor: pointer;
}

a:hover {
    background-color: #036;
    color: white;
}

th {
    background-color: wheat;
    color: black;
}

th:hover {
    background-color: wheat;
    color: black;
}

</style>

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
