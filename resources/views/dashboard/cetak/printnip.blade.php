<html>

<head>
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <style>
        @media print {
            @page {
                size: landscape
            }
        }

        #rotasi {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
        }
    </style>

    <script type="text/javascript" src="{{asset('assets/js/JsBarcode.all.min.js')}}"></script>
</head>

<body class="bg-white">
    <div class="row bg-white">
        @foreach($pegs as $peg)
        @php
        $nip = str_replace(' ', '', $peg->nip);
        @endphp
        @php
        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
        @endphp
        <div class="col-md-2">
            <!-- <div style="position: relative;max-width:20%; margin:auto;"> -->
            <!-- <div class="col-md-2"> -->
            <table height="340px" width="207px">
                <tr>
                    <td class="text-black" style="text-align:center;font-size:10;font-family:Arial Black;">
                        <img width="30px" src="assets/img/logo.png" style="margin-bottom:5px;"><br>
                        <b>PEMERINTAH KABUPATEN<br> KLATEN</b>
                    </td>
                </tr>
                <tr>
                    <td class="bg-white text-black" style="text-align:center;font-size:10;font-family:arial black;"><b>{{$peg->lokasi}}</b></td>
                </tr>
                <tr>
                    <td class="bg-white text-black" style="text-align:center;font-size:10;font-family:arial black;"><b>{{$peg->lokasi2}}</b></td>
                </tr>
                <tr>
                    <td style="text-align:center;"><img src="assets/img/images/{{$peg->foto}}" width="132" height="151"></td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td class="bg-white text-black" style="text-align:center;text-transform:uppercase;font-size:10;font-family:arial black;"><b>{{$peg->nama}}</b></td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td>
                        <center>
                            {!! $generator->getBarcode($nip, $generator::TYPE_CODE_11,1.5,20) !!}
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="bg-white text-black" style="text-align:center;font-size:13;">{{$peg->nip}}</td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td style="background-color:white"></td>
                </tr>
                <tr>
                    <td style="background-color:red;"></td>
                </tr>
            </table>
            <table id="rotasi" rules="" width="207px" height="350px">
                <tbody class="bg-white text-black" width="500px" height="350px" style="top:-50px;">
                    <tr>
                        <td colspan="3" style="text-align:center; background:#000;color:#FFF;font-size:10;font-family:arial black; height:20px;">

                            <p>KARTU TANDA PENGENAL</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-white text-black" colspan="3" style="text-align:center;font-size:6.5;font-family:arial black;">WAJIB DIKENAKAN UNTUK KEPENTINGAN DINAS</td>
                    </tr>
                    <tr class="bg-white text-black" style="text-align:center; margin-bottom:-10px; height:10px;">
                        <td style="text-align:left;font-size:9;padding-left:8;">Nama</td>
                        <td>:</td>
                        <td style="text-align:left;font-size:9;">{{$peg->username}}</td>
                    </tr>
                    <tr style=" margin-bottom:-10px; height:10px;">
                        <td style="text-align:left;font-size:9;padding-left:8;">NIP</td>
                        <td>:</td>
                        <td style="text-align:left;font-size:9;padding-Right:7;">{{$peg->nip}}</td>
                    </tr>

                    <tr style=" margin-bottom:-10px; height:10px;">
                        <td style="text-align:left;font-size:9;padding-left:8;">Jabatan</td>
                        <td>:</td>
                        <td style="text-align:left;font-size:9;">{{$peg->jabatan}}</td>
                    </tr>
                    <tr style=" margin-bottom:-10px; height:10px;">
                        <td style="text-align:left;font-size:9;padding-left:8;">Gol.Darah</td>
                        <td>:</td>
                        <td style="text-align:left;font-size:9;">{{$peg->goldarah}}</td>
                    </tr>
                    <tr style=" margin-bottom:-10px; height:10px;">
                        <td style="text-align:left;font-size:9;padding-left:8;">Almt Kantor</td>
                        <td>:</td>
                        <td style="text-align:left;font-size:9;">{{$peg->alamatkantor}}</td>
                    </tr>

                    <tr style=" margin-bottom:-10px; height:10px;">
                        <td style="text-align:left;font-size:9;padding-left:8;">Dikeluarkan</td>
                        <td>:</td>
                        <td style="text-align:left;font-size:9;">

                            {{$today}}
                        </td>
                    </tr>
                    <tr></tr>
                    <tr></tr>


                    <tr>
                        <td colspan="3" style="position:relative;left:50px;height:50px; top:6px;"><img width="120px" src="img/ttdfix-pakjajang.png" style="position:absolute;left:0;top:-30px;"></td>
                    </tr>
                    <tr>
                        <td style="background-color:white"></td>
                        <td style="background-color:white"></td>
                        <td style="background-color:white"></td>
                    </tr>
                    <tr>
                        <td style="background-color:white"></td>
                        <td style="background-color:white"></td>
                        <td style="background-color:white"></td>
                    </tr>
                    <tr>
                        <td style="background-color:white"></td>
                        <td style="background-color:white"></td>
                        <td style="background-color:white"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</body>
<script>
    print();
</script>



</html>