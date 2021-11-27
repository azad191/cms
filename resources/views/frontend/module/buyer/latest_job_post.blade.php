@extends('frontend.components.app')
@section('content')
    <!-- ******************* Main Body Part ********************* -->

    <div class="wt-haslayout wt-proposal-single">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 push-lg-2 pb-5">

                    <!-- ------------------------------ -->
                    <div class="wt-proposalholder">
                        <div class=" ">
                            <h2>Your posted job list</h2>
                        </div>
                    </div>
                    <!-- ------------------------------ -->

                    <div class="table-responsive-sm">
                        <table class="table table-striped wt-proposalamount-holder wt-send-project-proposal">

                            <tbody>

                                <!-- ---------------------------- -->
                                @foreach ($data as $i => $item)
                                    <tr style="padding:10px; vertical-align:middle">
                                        <td style="vertical-align:middle">{{$item->project_level}}</td>
                                        <td style="vertical-align:middle">{{$item->job_title}}</td>
                                        <td style="vertical-align:middle">{{$item->job_type}}</td>
                                        <td style="vertical-align:middle">&#2547;{{$item->price_min}} - &#2547;{{$item->price_max}}</td>
                                        <td style="vertical-align:middle">
                                            <div class="wt-btnarea">
                                                <a href=""><span class="badge badge-danger p-1" title="status">Pending</span></a>
                                            </div>
                                        </td>
                                        <td style="vertical-align:middle">
                                            <div class="wt-btnarea">
                                                <a href="{{route('buyer.all.applied.job', base64_encode($item->id))}}"><span class="badge badge-info p-1" title="status">Applied ({{isset($count[$i]->total)?$count[$i]->total:'0'}})</span></a>
                                            </div>
                                        </td>
                                        <td style="vertical-align:middle">
                                            <div class="wt-btnarea">
                                                <a href="" class="btn btn-warning btn-sm text-white"
                                                    title="freelancer profle view" data-id="0" data-post="156">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="javascript:;" class="btn btn-success btn-sm" data-id="0"
                                                    data-post="156" title="accept">
                                                    <i class="fas fa-check" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="btn btn-danger btn-sm" data-id="0"
                                                    data-post="156" title="cancel">
                                                    <i class="fas fa-times" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                <!-- ---------------------------- -->

                            </tbody>

                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>
    </main>
    <!-- ************** Main Part End********************* -->

    <!-- ************* Css Style Part **************-->
    <style>
        .fw-btn-1,
        .wt-btn {
            color: #fff;
            padding: 0 15px;
            background: #fff;
            position: relative;
            text-align: center;
            border-radius: 4px;
            display: inline-block;
            vertical-align: middle;
            text-transform: uppercase;
            font: 700 13px/50px 'Poppins', Arial, Helvetica, sans-serif;
        }

    </style>
    <!-- ************* Css Style Part  End *************-->
@endsection
