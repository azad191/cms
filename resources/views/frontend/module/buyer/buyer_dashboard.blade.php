@extends('frontend.components.app')
@section('content')
<section class="wt-haslayout wt-dbsectionspace dashboard-content-area">
   <div class="row">
      <div class="container">
         <div class="wt-haslayout page-data re-send-email">
            <div class="wt-jobalerts"></div>
         </div>
      </div>

     <div class="container">

      <div class="wt-moredetailsholder">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox">
                     <figure class="wt-userlistingimg">
                        <span class="lnr lnr-bubble"></span>
                     </figure>
                     <div class="wt-insightdetails">
                        <div class="wt-title">
                           <h3>New Messages</h3>
                           <a href="https://instantkaj.com/dashboard/?ref=chat&amp;identity=1001">Click To View</a>
                        </div>
                     </div>
                     <em class="wtunread-count">
                     0 </em>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox">
                     <figure class="wt-userlistingimg">
                        <span class="lnr lnr-layers"></span>
                     </figure>
                     <div class="wt-insightdetails">
                        <div class="wt-title">
                           <h3>Latest Proposals</h3>
                           <a href="">Click To View</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox">
                     <figure class="wt-userlistingimg">
                        <span class="lnr lnr-layers"></span>
                     </figure>
                     <div class="wt-insightdetails">
                        <div class="wt-title">
                           <h3>Latest Job Posts</h3>
                           <a href="{{route('buyer.all.job.post', base64_encode(auth()->user()->id))}}">Click To View</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox wt-stat-saved">
                     <figure class="wt-userlistingimg">
                        <span class="lnr lnr-heart"></span>
                     </figure>
                     <div class="wt-insightdetails">
                        <div class="wt-title">
                           <h3>View Saved Items</h3>
                           <a href="https://instantkaj.com/dashboard/?ref=saved&amp;identity=1001">Click To View</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox">
                     <figure class="wt-userlistingimg">
                        <span class="lnr lnr-cart"></span>
                     </figure>
                     <div class="wt-insightdetails">
                        <div class="wt-title">
                           <h3>0.00৳&nbsp;</h3>
                           <span>Pending balance</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox">
                     <figure class="wt-userlistingimg">
                        <span class="lnr lnr-gift"></span>
                     </figure>
                     <div class="wt-insightdetails">
                        <div class="wt-title">
                           <h3>0.00৳&nbsp;</h3>
                           <span>Available balance</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox wt-insighton">
                     <figure>
                        <span class="lnr lnr-cloud-sync"></span>
                     </figure>
                     <div class="wt-title">
                        <h3>0</h3>
                        <a href="https://instantkaj.com/dashboard/?ref=projects&amp;mode=ongoing&amp;identity=1001">Total ongoing projects</a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                  <div class="wt-insightsitem wt-dashboardbox wt-insightcom">
                     <figure>
                        <span class="lnr lnr-checkmark-circle"></span>
                     </figure>
                     <div class="wt-title">
                        <h3>0</h3>
                        <a href="https://instantkaj.com/dashboard/?ref=projects&amp;mode=completed&amp;identity=1001">Total Completed Projects</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 float-left">
                  <div class="wt-dashboardbox wt-earningsholder wt-ongoing-dash">
                     <div class="wt-dashboardboxtitle wt-titlewithsearch">
                        <h2>Ongoing projects</h2>
                     </div>
                     <div class="wt-dashboardboxcontent">
                        <div class="wt-emptydata-holder">
                           <div class="wt-emptydata">
                              <div class="wt-emptydetails wt-empty-projects">
                                 <span></span>
                                 <em>No ongoing projects</em>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 float-left">
                  <div class="wt-dashboardbox wt-earningsholder">
                     <div class="wt-dashboardboxtitle wt-titlewithsearch">
                        <h2>Past Earnings</h2>
                     </div>
                     <div class="wt-emptydata-holder">
                        <div class="wt-emptydata">
                           <div class="wt-emptydetails wt-empty-person">
                              <span></span>
                              <em>No Earning has been made yet.</em>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

        </div>
      <div class="wt-uploadimages wt-package-modal modal fade" id="wt-package-details" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="wt-modaldialog modal-dialog" role="document">
            <div class="wt-modalcontent modal-content">
               <div class="wt-boxtitle">
                  <h2>nill<i class=" wt-btncancel fa fa-times" data-dismiss="modal" aria-label="Close"></i></h2>
               </div>
               <div class="wt-modalbody modal-body">
                  <div class="wt-dashboardboxcontent wt-packages">
                     <div class="wt-package wt-packagedetails">
                        <div class="wt-packagecontent">
                           <ul class="wt-packageinfo">
                              <li><span>Remaining credits</span></li>
                              <li><span>Badge</span></li>
                              <li><span>Banner Options</span></li>
                              <li><span>Duration</span></li>
                              <li><span>Remaining skill(s)</span></li>
                              <li><span>Private Quick Chat</span></li>
                           </ul>
                        </div>
                     </div>
                     <div class="wt-package wt-baiscpackage">
                        <div class="wt-packagecontent">
                           <ul class="wt-packageinfo">
                              <li><span>
                                 <em>Remaining credits</em>
                                 <i class="ti-check"></i>&nbsp;</span>
                              </li>
                              <li><span>
                                 <em>Badge</em>
                                 <i class="ti-na"></i>&nbsp;</span>
                              </li>
                              <li><span>
                                 <em>Banner Options</em>
                                 <i class="ti-check"></i>&nbsp;</span>
                              </li>
                              <li><span>
                                 <em>Duration</em>
                                 0&nbsp;Days</span>
                              </li>
                              <li><span>
                                 <em>Remaining skill(s)</em>
                                 <i class="ti-check"></i>&nbsp;</span>
                              </li>
                              <li><span>
                                 <em>Private Quick Chat</em>
                                 <i class="ti-check"></i>&nbsp;</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>




<style>

	.wt-insightsitem {
    width: 100%;
    float: left;
    padding: 30px;
    position: relative;
    text-align: center;
}

.wt-dashboardbox {
    float: left;
    width: 100%;
    background: #fff;
    border-radius: 4px;
    -webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,.1);
    box-shadow: 0 0 15px 0 rgba(0,0,0,.1);
}

.wt-earningsholder {
    margin-top: 30px;
}
.wt-dbsectionspace {
    padding: 20px 0;
}
.wt-haslayout {
    width: 100%;
    float: left;
}

.wt-titlewithsearch h2 {
    line-height: 50px;
    display: inline-block;
    vertical-align: middle;
}

.wt-dashboardboxtitle h2 {
    margin: 0;
    display: block;
    font-size: 18px;
    font-weight: 400;
    line-height: 24px;
}

.wt-dashboardboxtitle {
    float: left;
    width: 100%;
    padding: 25px 30px;
    border-bottom: 1px solid #ddd;
}
.wt-titlewithsearch {
    padding: 12px 20px;
}

.wt-moredetailsholder .wt-insightsitem .wt-title h3 {
    display: block;
    color: #323232;
    font-size: 18px;
    margin: 0 0 3px;
    font-weight: 400;
    line-height: 18px;
}

</style>

@endsection
