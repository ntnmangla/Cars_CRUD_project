<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Cars Application</title>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid bg-danger p-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-1 text-white">Cars</h1>
                    <p class="Lead text-white">A web application that creates cars....</p>
                </div>
                <div class="col-md-6">
                    <img src="img/Cars.jpg" alt="Car">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('cars.create')}}" method="post">
                @csrf
                <div class="row form-group">
                    <div class=" col-md-12">
                        <label for="" >Make:</label>
                        <input type="text" name="make" class="form-control" required></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class=" col-md-12">
                        <label for="" >Model:</label>
                        <input type="text" name="model" class="form-control" required></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class=" col-md-12">
                        <label for="" >Produced on:</label>
                        <input type="date" name="produced_on" class="form-control" required></input>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="Submit" class="btn btn-success w-50 float-right">Create</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Produced on</th>
                    <th></th>
                </tr>
                @foreach($cars as $car)
                    <tr>
                        <td>{{$car->make}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->produced_on}}</td>
                        <td>
                            <a href="{{route('cars.edit',['car'=>$car])}}" class="btn btn-on btn-primary">Edit</a>
                            <form class="d-inline" action="{{route('cars.delete',['car'=>$car])}}" method="Post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-on btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

</body>
</html>
