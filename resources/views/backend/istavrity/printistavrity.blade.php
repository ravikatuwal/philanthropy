<html>
  <head>
    <title>Print Istavrity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  </head>
<body>

<center>
    <br><br><a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Preview</a></center>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btnprn').printPage();
        });
    </script>
<div class="content-wrapper">



        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" border=1>
                        <thead>
                          <tr>
                            <th> क्र.म. </th>
                            <th> पुरा नाम </th>
                            <th> ऋत्विक </th>
                            <th> स्वस्त्ययनी </th>
                            <th> इस्टभृति </th>
                            <th> आचार्यभृति </th>
                            <th> दक्षिणा </th>
                            <th> सङ्गठनि </th>
                            <th> आनन्दबजार </th>
                            <th> प्रणामी </th>
                            <th> स्व:अव: </th>
                            <th> ऋत्विकि </th>
                            <th> उत्सव </th>
                            <th> दिक्षा प्र: </th>
                            <th> आ:प्र: </th>
                            <th> परिभृति </th>
                            <th> विविध </th>

                          </tr>
                        </thead>
                        <div class="row">
                          <div class="col-md-3">
                            फ्यामिली कोड : {{ $mainaccount->family_code }}
                          </div><br>
                          <div class="col-md-3">
                            फ्यामिली नाम : {{ $mainaccount->account_name }}
                          </div><br>
                        </div>
                        <tbody>
                          @php($i = 1)  @php($swastyayani = 0)  @php($istabhrity = 0)
                          @php($aacharyabhrity = 0)@php($dakshina = 0)@php($sangathani = 0)
                          @php($aanandabaajar = 0)@php($pranami = 0)@php($swaawa = 0)
                          @php($ritwiki = 0)@php($utsaw = 0)@php($dikshyapra = 0)@php($aapra = 0)
                          @php($paribhrity = 0)@php($wiwidh = 0) @php($swastya = 0)
                            @foreach($istavrity as $row)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td> {{ $row->full_name }} </td>
                            <td> {{ $row->ritwik_name }} </td>
                            <td> {{ $row->swastyayani }} </td>
                            <td> {{ $row->istabhrity }} </td>
                            <td> {{ $row->aacharyabhrity }} </td>
                            <td> {{ $row->dakshina }} </td>
                            <td> {{ $row->sangathani }} </td>
                            <td> {{ $row->aanandabaajar }} </td>
                            <td> {{ $row->pranami }} </td>
                            <td> {{ $row->swaawa }} </td>
                            <td> {{ $row->ritwiki }} </td>
                            <td> {{ $row->utsaw }} </td>
                            <td> {{ $row->dikshyapra }} </td>
                            <td> {{ $row->aapra }} </td>
                            <td> {{ $row->paribhrity }} </td>
                            <td> {{ $row->wiwidh }} </td>
                            
                          </tr>
                          @endforeach
                          @for($i; $i<= 18; $i++)
                          <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td></td>
                          </tr>
                          @endfor
                          <tr>
                            <td colspan=3 align="right">Total</td>
                            <td align=center>{{$swastyayani}}</td>
                            <td align=center>{{$istabhrity}}</td>
                            <td align=center>{{$aacharyabhrity}}</td>
                            <td align=center>{{$dakshina}}</td>
                            <td align=center>{{$sangathani}}</td>
                            <td align=center>{{$aanandabaajar}}</td>
                            <td align=center>{{$pranami}}</td>
                            <td align=center>{{$swaawa}}</td>
                            <td align=center>{{$ritwiki}}</td>
                            <td align=center>{{$utsaw}}</td>
                            <td align=center>{{$dikshyapra}}</td>
                            <td align=center>{{$aapra}}</td>
                            <td align=center>{{$paribhrity}}</td>
                            <td align=center>{{$wiwidh}}</td>
                          </tr>
                        </tbody>
                      </table>
                      
                    </div>
                  </div>
                </div>
            </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

      </body>
      </html>