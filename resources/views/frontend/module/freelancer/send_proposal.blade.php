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
                            <h2>Freelancer applied under a posted job</h2>
                        </div>
                    </div>
                    <!-- ------------------------------ -->

                    <div class="table-responsive-sm">
                        <table class="table table-striped wt-proposalamount-holder wt-send-project-proposal">

                            <tbody>

                                <!-- ---------------------------- -->
                                @foreach ($data as $i => $item)

                                    <tr style="padding:10px; vertical-align:middle">

                                        <td style="vertical-align:middle">&#2547;{{$item->amount}}</td>
                                        <td style="vertical-align:middle">{{$item->duration}}</td>

                                        <td style="vertical-align:middle">{{Str::substr($item->description, 0, 50)}}...</td>
                                        <td style="vertical-align:middle"><a href="{{route('job.file.download', $item->id)}}" class="d-flex align-item-center"><p>Document</p><i class="fas fa-download"></i></a></td>
                                        <td style="vertical-align:middle">
                                            <div class="wt-btnarea">
                                                <a href=""><span class="badge badge-danger p-1" title="status">{{$item->status}}</span></a>
                                            </div>
                                        </td>
                                        <td style="vertical-align:middle">
                                            <div class="wt-btnarea">
                                                <a href="{{route('freelancer.details',base64_encode($item->freelancer_id))}}" class="btn btn-warning btn-sm text-white"
                                                    title="freelancer profle view" data-id="0" data-post="156">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                {{-- <a href="javascript:;" class="btn btn-success btn-sm" data-id="0"
                                                    data-post="156" title="accept">
                                                    <i class="fas fa-check" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{route('buyer.proposal.view', base64_encode($item->id))}}" class="btn btn-info btn-sm" data-id="0"
                                                    data-post="156" title="Proposal View">
                                                    <i class="fas fa-eye"></i>
                                                </a> --}}
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
            <!-- Button trigger modal -->



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
