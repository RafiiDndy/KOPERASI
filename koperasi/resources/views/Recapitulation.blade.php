<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rekapitulasi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">Rekapitulasi Pokok</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>role</th>
                            <th>Total</th>
                            <th>jenis_simpanan</th>
                            <th>status</th>
                            <th>tgl_created</th>
                            <th>tgl_updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->role }}</td>
                                @foreach($data1 as $row)
                                <td>{{ $row->jumlah }}</td>
                                <td>{{ $row->jenis_simpanan }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>{{ $row->updated_at }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">Rekapitulasi Wajib</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>role</th>
                            <th>Total</th>
                            <th>jenis_simpanan</th>
                            <th>status</th>
                            <th>tgl_created</th>
                            <th>tgl_updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->role }}</td>
                                @foreach($data2 as $row)
                                <td>{{ $row->jumlah }}</td>
                                <td>{{ $row->jenis_simpanan }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>{{ $row->updated_at }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">Rekapitulasi Sukarela</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>role</th>
                            <th>Total</th>
                            <th>jenis_simpanan</th>
                            <th>status</th>
                            <th>tgl_created</th>
                            <th>tgl_updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->role }}</td>
                                @foreach($data3 as $row)
                                <td>{{ $row->jumlah }}</td>
                                <td>{{ $row->jenis_simpanan }}</td>
                                <td>{{ $row->status }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>{{ $row->updated_at }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>