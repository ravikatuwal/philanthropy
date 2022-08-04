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
                    <h4 class="card-title">मुख्य खाता</h4>
                    <div class="template-demo">
                        <a href="{{ route('add.mainaccount') }}">
                            <button type="button" class="btn btn-primary btn-fw" style="float: right;">खाता थप्नुहोस</button>
                        </a>
                    </div>
                    
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> ल्यामिली कोड </th>
                            <th> खाताको नाम </th>
                            <th> एक्शन </th>
                          </tr>
                        </thead>
                        <tbody>
                          @php($i = 1)
                            @foreach($mainaccount as $row)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td> {{ $row->family_code }} </td>
                            <td> {{ $row->account_name }} </td>
                            <td>
                                <a href="{{ route('edit.mainaccount', $row->family_code) }}" class="btn btn-info">इडिट</a>
                                <a href="{{ route('delete.mainaccount', $row->family_code) }}" onclick="return confirm('यो रेकर्ड डिलिट गर्न चाहनुहुन्छ?')" class="btn btn-danger">डिलिट</a>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $mainaccount->links('pagination-links') }}
                    </div>
                  </div>
                </div>
            </div>
</div>



@endsection