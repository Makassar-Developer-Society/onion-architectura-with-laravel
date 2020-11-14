<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <a class="btn btn-success btn-md p-2 m-2" href="{{ route('create.customer') }}">Tambah Data</a>
    <table class="table"> 
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $item)
              <tr>
                <th scope="row">1</th>
                <td>{{ $item->getName() }}</td>
                <td>{{ $item->getEmail() }}</td>
                <td>
                    <a href="{{ route('edit.customer',$item->getId()) }}" class="btn btn-secondary btn-sm">Edit</a> ||
                    <a href="{{ route('delete.customer',$item->getId()) }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            @endforeach
         
       
        </tbody>
      </table>
      
    </div>
</body>
</html>
