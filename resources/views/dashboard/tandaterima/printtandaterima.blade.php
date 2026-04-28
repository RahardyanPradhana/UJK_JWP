<html>

<head>
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="row">
                    <div class="col-md-2">
                        <img src="assets/img/logo.png" width="150" alt="">
                    </div>
                    <div class="col-md-10">
                        <h1><b>BADAN KEPEGAWAIAN DAN PENGEMBANGAN<br>SUMBER DAYA MANUSIA</b></h1>
                    </div>
                </div> -->
                <table class="table">
                    <thead>
                        <td style="border:1px solid black; color:black;"><b>No</b></td>
                        <td style="border:1px solid black; color:black;"><b>NIP</b></td>
                        <td style="border:1px solid black; color:black;"><b>Nama</b></td>
                        <td style="border:1px solid black; color:black;"><b>Instansi</b></td>
                        <td style="border:1px solid black; color:black;"><b>Unit Kerja</b></td>
                        <td style="border:1px solid black; color:black;"><b>Kode Cetak</b></td>
                        <td style="border:1px solid black; color:black;"><b>Tanda Tangan</b></td>
                    </thead>
                    <tbody>
                        @foreach($pegs as $peg)
                        <tr style="height: 60px;">
                            <td style="border:1px solid black; color:black;">{{$loop->iteration}}</td>
                            <td style="border:1px solid black; color:black;">{{$peg->nip}}</td>
                            <td style="border:1px solid black; color:black;">{{$peg->nama}}</td>
                            <td style="border:1px solid black; color:black;">{{$peg->lokasi}}</td>
                            <td style="border:1px solid black; color:black;">
                                @if($peg->lokasi2 == null)
                                -
                                @else
                                {{$peg->lokasi2}}
                                @endif
                            </td>
                            <td style="border:1px solid black; color:black;">{{$peg->kdcetak}}</td>
                            <td style="border:1px solid black; color:black;"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>