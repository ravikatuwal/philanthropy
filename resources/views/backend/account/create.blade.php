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


            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">व्यक्तिगत खाता थप्नुहोस</h4>
                  
                    <form class="forms-sample" method="POST" action="{{ route('store.account') }}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">फ्यामिली कोड</label>
                        <select class="form-control basic-single" id="fcode" name="family_code">
                          <option disabled selected>फ्यामिली कोड</option>
                          @foreach($family_code as $row)
                          <option>{{ $row->family_code }}</option>
                          @endforeach
                        </select>
                        @error('family_code')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <script type="text/javascript">
                        $(document).ready(function(){
                          $('.basic-single').select2();
                        });
                      </script>
                      <div class="form-group">
                        <label for="exampleInputEmail1">पुरा नाम</label>
                        <input type="text" class="form-control" name="full_name" placeholder="खाताको नाम">
                        @error('full_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">ऋत्विकको नाम</label>
                        <input type="text" class="form-control" name="ritwik_name" placeholder="खाताको नाम">
                        @error('ritwik_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">स्वस्त्ययनी</label>
                        <input type="text" class="form-control" name="swastyayani" placeholder="खाताको नाम">
                        @error('swastyayani')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">इस्टभृति</label>
                        <input type="text" class="form-control" name="istabhrity" placeholder="खाताको नाम">
                        @error('istabhrity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">आचार्यभृति</label>
                        <input type="text" class="form-control" name="aacharyabhrity" placeholder="खाताको नाम">
                        @error('aacharyabhrity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">दक्षिणा</label>
                        <input type="text" class="form-control" name="dakshina" placeholder="खाताको नाम">
                        @error('dakshina')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">संगठनी</label>
                        <input type="text" class="form-control" name="sangathani" placeholder="खाताको नाम">
                        @error('sangathani')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">आनन्दबजार</label>
                        <input type="text" class="form-control" name="aanandabaajar" placeholder="आनन्दबजार">
                        @error('aanandabaajar')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">प्रणामी</label>
                        <input type="text" class="form-control" name="pranami" placeholder="प्रणामी">
                        @error('pranami')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">स्व:अव:</label>
                        <input type="text" class="form-control" name="swaawa" placeholder="स्व:अव:">
                        @error('swaawa')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">ऋत्विकि</label>
                        <input type="text" class="form-control" name="ritwiki" placeholder="ऋत्विकि">
                        @error('ritwiki')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">उत्सव</label>
                        <input type="text" class="form-control" name="utsaw" placeholder="उत्सव">
                        @error('utsaw')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">दिक्षा प्र:</label>
                        <input type="text" class="form-control" name="dikshyapra" placeholder="दिक्षा प्र:">
                        @error('dikshyapra')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">आ:प्र:</label>
                        <input type="text" class="form-control" name="aapra" placeholder="आ:प्र:">
                        @error('aapra')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">परिभृति</label>
                        <input type="text" class="form-control" name="paribhrity" placeholder="परिभृति">
                        @error('paribhrity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">विविध</label>
                        <input type="text" class="form-control" name="wiwidh" placeholder="विविध">
                        @error('wiwidh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">सेभ गर्नुहोस</button>
                      
                    </form>
                  </div>
                </div>
              </div>


</div>




@endsection