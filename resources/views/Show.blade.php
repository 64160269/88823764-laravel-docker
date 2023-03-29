<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table class="table table-dark">
        <thead class="text-center">
            <th scope="row">#</th>
            <td colspan="2" class="table-active">Email</td>
            <td>Password</td>
        </thead>
        <tbody>
        <tr class="table-active">
            <th scope="row" class="text-center">1</th>
            <td colspan="2" class="table-active">{{$em}}</td>
            <td>{{$pw}}</td>
        </tr>
        </tbody>
    </table>
</body>
</html>