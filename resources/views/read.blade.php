<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>- Laravel 8 -</title>
</head>
<body>
    <div class="container mt-4">
        <a href="/" class="btn btn-primary m-2">Home</a>
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif

      <a href="/input" class="btn btn-success m-2">Create Data</a>
        <div class="card ">
            <div class="card-header text-center font-weight-bold bg-info">
@@ -38,16 +40,14 @@
                    <td class="table-info">{{ $data -> created_at }}</td>
                    <td class="table-info">{{ $data -> updated_at }}</td>
                    <td class="table-info">
                        <a href="/edit/{{ $data -> id }}" class="btn btn-warning">update</a>
                        <a href="/edit/{{ $data -> id }}" class="btn btn-warning">Edit</a>
                        <a href="/delete/{{ $data -> id }}" class="btn btn-danger" onclick="return confirm('Are You Sure Deleted?')">Delete</a>
                    </td>

                </tr>
                <?php $i++; ?>
                @endforeach
            </table>
        </div>


        </div>       
</body>
</html>