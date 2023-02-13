@extends('layouts/backend.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">

               <!--begin::Card-->
               <div class="card card-custom example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Write Intro </h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <a href="{{url('search')}}" class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Search</a>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="form" method="post" action="{{route('Save-intro')}}" id="intro-form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label>About<span class="text-danger">*</span> </label>
                                <textarea name="intro" id="" class="form-control" cols="30" rows="5">{{$IntroModel->about}}</textarea>
                            </div>

                            <div class="row col-md-12 mt-4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Level</th>
                                            <th class="text-center">%</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_data">
                                        @foreach ($IntroModel->skill as $k=>$skill_detail)
                                        <tr id="tr-{{$k}}">
                                            <td>
                                                <input type="text" value="{{$skill_detail->name}}" class="form-control" id="name-{{$k}}" name="name[]"/>
                                            </td>
                                        
                                            <td>
                                                <select class="form-control" aria-placeholder="Level" name="Level[]" id="Level-{{$k}}">
                                                    <option selected disabled value="">Select Level</option>
                                                    <option {{$skill_detail->level == 'begning' ? 'selected' : ""}}  value="begning">begning</option>   
                                                </select>
                                            </td>
                                        
                                        
                                            <td>
                                                <input type="number" value="{{$skill_detail->percentage}}"   class="form-control" id="percentage-{{$k}}" name="percentage[]"/>
                                            </td>
                                        
                                        
                                            <td>
                                                <button onclick="remove_row({{$k}})" type="button"  class="float-right btn btn-sm btn-light-danger">-</button>
                                            </td>
                                           </tr>

                                            
                                        @endforeach
                                    </tbody>   
                                </table>
                                <div class="col-md-12">
                                    <button onclick='add_row()' type='button' class="custom-sm-btn float-right btn btn-sm btn-light-primary">+</button>
                                    <br>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                        </div>
                    </div>
                   </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->

        </div>
    </div>
</div>


@endsection