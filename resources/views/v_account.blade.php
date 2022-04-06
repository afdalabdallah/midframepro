<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Department</th>
                <th>Doctor</th>
                <th>Date</th>
            </tr>
        </thead>
       <tbody>
           @foreach ($app as $data)
           <tr>
               <td>{{ $data->s_name }}</td>
               <td>{{ $data->name }}</td>
               <td>{{ $data->date }}</td>
           </tr>
           @endforeach
       </tbody>
    </table>
</body>
</html>