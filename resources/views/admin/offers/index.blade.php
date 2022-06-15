@extends('layouts.admin')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-laptop"></i> العروض</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">لوحة التحكم</li>
            <li class="breadcrumb-item active"><a href="#">العروض</a></li>
        </ul>

        <div>
            <a href="{{route('offers.create')}}" class="btn btn-primary"> اضافة عرض جديد</a>
        </div>
    </div>
    <div class="col-md-12">


        <div class="row">

            @foreach ($offers as $offer)
                <div class="col-md-6">
                    <div class="tile">

                        <div class="tile-title-w-btn">
                            
                                <img class="" style="height:150px ; width:100%; object-fit: cover" src="{{asset('storage/' . $offer->image)}}">
                               
                            
                            {{-- <h3 class="title">{{ $offer->name }}</h3>
                            <div class="btn-group">
                                <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-edit"></i></a>
                                <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-trash"></i></a>
                            </div> --}}
                        </div>
                        <hr>
                        <div class="tile-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <b>عدد الأدوية </b><br>
                                    {{ $offer->Medicine->count() }}
                                </div>

                                <div class="col-md-4">
                                    <b>نسبة الخصم</b><br>
                                    {{ $offer->discount }}
                                </div>

                                <div class="col-md-4">
                                    <b>تاريخ الانتهاء </b><br>
                                    {{ $offer->offer_expired }}
                                </div>

                            </div>
                        </div>

                        <hr>
                        <div class="tile-body container">
                            <div class="row">
                                @foreach ($offer->Medicine as $med)
                                    <div class="col-md-6">
                                        <span class="badge badge-success">{{ $med->name }}</span>
                                    </div>
                                @endforeach



                            </div>

                        </div>





                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script> --}}
@endsection
