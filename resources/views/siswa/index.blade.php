<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminum</title>

    <!-- <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/starter-template/"> -->

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <style>
        body {
            padding-top: 5rem;
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->
</head>

<body>


    <main class="container">

        <div class=" justify-content-center align-items-center d-flex">
            <table class="table ">
                <tr>
                    <th>nama depan </th>
                    <th>nama belakang </th>
                </tr>
                <!-- loop -->
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama_depan }} </td>
                    <td>{{ $siswa->nama_belakang }} </td>
                    <!-- <td>nama belakang </td> -->
                </tr>
                @endforeach
            </table>
        </div>

        <div class=" d-flex align-items-end justify-content-end">
            <button type="button" class="btn btn-primary  m-3 " data-toggle="modal" data-target="#staticBackdrop">
                tambah
            </button>
        </div>

        <!-- <div class="starter-template text-center py-5 px-3">
            <h1>Bootstrap starter template</h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        </div> -->

    </main><!-- /.container -->




    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>


    <!-- js script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>

</html>