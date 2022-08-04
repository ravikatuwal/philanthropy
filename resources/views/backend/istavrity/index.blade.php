@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">

            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="{{asset('backend/assets/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Welcome to the Philanthropy</h4>
                        
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Visit Frontend</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">व्यक्तिगत खाता</h4>
                    <div class="template-demo">
                      <form action="" class="col-9">
                      <div class="input-group">
                        <input type="search" name="search" id="" class="form-control rounded" placeholder="फ्यामिली कोड ले अथवा नाम ले खोज्नुहोस" value="{{ $search }}">
                        <button class="btn btn-primary">Search</button>
                        
                        <button class="btn btn-danger" type="button"><a href="{{ url('/istavrity') }}">Reset</a></button>
                
                        

                      </div>
                      
                      </form>
                        
                    </div>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> फ्यामिली कोड </th>
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
                        <tbody>
                          @php($i = 1)
                            @foreach($istavrity as $row)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <a href="{{ route('edit.account', $row->id) }}" class="btn btn-info">इडिट</a>
                                <a href="{{ route('delete.account', $row->id) }}" onclick="return confirm('यो रेकर्ड डिलिट गर्न चाहनुहुन्छ?')" class="btn btn-danger">डिलिट</a>

                            </td>
                            <td> {{ $row->family_code }} </td>
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
                        </tbody>
                      </table>
                      <form action="" class="col-9">
                        <div class="input-group">
                        <button class="btn btn-success" type="button"><a href="{{ route('prnpriview', $search) }}">Print</a></button>
                        </div>
        </form>
                      
                    </div>
                  </div>
                </div>
            </div>
</div>



@endsection