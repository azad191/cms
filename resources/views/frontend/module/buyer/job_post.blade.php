@extends('frontend.components.app')
@section('subBanner')
            <div class="wt-haslayout wt-innerbannerholder wt-titlebardynmic" style="background-image: url('wp-content/uploads/2019/04/tb-1.jpg');">
               <div class="container">
                  <div class="row justify-content-md-center">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                        <div class="wt-innerbannercontent">
                           <div class="wt-title">
                              <h1>Job Post</h1>
                           </div>
                           <ol class="wt-breadcrumb">
                              <li class="first-item">
                                 <a href="../index.html">Home</a>
                              </li>
                              <li class="last-item">Job post</li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

@endsection
@section('content')

<section class="py-5 header" style="margin: 30px 0;">
                   <div class="container py-4 pro-bg">
                       <div class="row">
                           <div class="col-md-12">
                               <!-- Tabs content -->
                               <div class="tab-content" id="v-pills-tabContent">
                                   <div class="tab-pane fade shadow rounded show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                       <div class="wt-tabscontent tab-content">
                                          <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                                             <form action="{{route('job.post', auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                             <div class="wt-yourdetails wt-tabsinfo">
                                                <h3 style="font-size: 20px;
                                                padding: 10px 0; margin-bottom: 20px; text-transform: none; border-bottom: 1px solid #ccc;">Post a Job </h3>
                                                <div class="wt-tabscontenttitle">
                                                   <h2>Job Description</h2>
                                                </div>
                                                <div class="wt-formtheme wt-userform">
                                                   <fieldset>
                                                      <div class="form-group toolip-wrapo">
                                                         <input type="text" name="job_title" class="form-control" placeholder="Project title">
                                                      </div>

                                                      <div class="form-group form-group-half">
                                                         <span class="wt-select">
                                                            <select name="project_level" class="chosen-select" >
                                                               <option value="basic" >Basic</option>
                                                               <option value="medium">Medium</option>
                                                               <option value="expensive">Expensive</option>
                                                            </select>
                                                         </span>
                                                      </div>

                                                      <div class="form-group form-group-half">
                                                         <span class="wt-select">
                                                            <select name="duration" class="chosen-select" style="display: none;">
                                                               <option value="">Select One</option>
                                                               <option value="0-1">01 to 02 months</option>
                                                               <option value="2-3">02 to 03 months</option>
                                                               <option value="3-6">03 to 06 months</option>
                                                               <option value="6-12">06 to 12 months</option>
                                                            </select>
                                                         </span>
                                                      </div>

                                                      <div class="form-group form-group-half">
                                                         <span class="wt-select">
                                                            <select name="freelancer_type" class="chosen-select" style="display: none;">
                                                               <option selected="selected" value="Selece freelancer type">Selece freelancer type</option>
                                                               <option value="Independent Freelancers">Independent Freelancers</option>
                                                               <option value="New Rising Talent">New Rising Talent</option>
                                                               <option value="Professional Freelancers">Professional Freelancers</option>
                                                            </select>
                                                         </span>
                                                      </div>

                                                      <div class="form-group form-group-half">
                                                         <span class="wt-select">
                                                            <select name="english_level" class="chosen-select" style="display: none;">
                                                               <option value="">Selece english level</option>
                                                               <option value="basic">Basic</option>
                                                               <option value="medium">Medium</option>
                                                               <option value="advance">Advance</option>
                                                            </select>
                                                         </span>
                                                      </div>

                                                      <div class="form-group form-group-half">
                                                         <span class="wt-select">
                                                            <select name="experience_preferred" class="chosen-select" style="display: none;">
                                                               <option value="">Years experience Perferred</option>
                                                               <option value="1">1 Year</option>
                                                               <option value="2">2 Years</option>
                                                               <option value="3">3 Years</option>
                                                               <option value="4">4 Years</option>
                                                               
                                                            </select>
                                                         </span>
                                                      </div>


                                                      <div class="form-group form-group-half toolip-wrapo">
                                                         <input type="datetime-local" name="project_expire" class="form-control" placeholder="Project Expiry Date (Required)">
                                                         <span class="wt-element-hint"></span>
                                                      </div>

                                                      <div class="form-group form-group-half toolip-wrapo">
                                                         <input type="datetime-local" name="project_deadline" class="form-control" placeholder="Project deadline date (Optional)">
                                                         <span class="wt-element-hint"></span>
                                                      </div>
                                                   </fieldset>
                                                </div>
                                             </div>

                                             <!--  -->

                                             <div class="wt-yourdetails wt-tabsinfo" style="pading-top: 30px">
                                                <div class="wt-tabscontenttitle">
                                                   <h2>Prices</h2>
                                                </div>
                                                <div class="wt-formtheme wt-userform">
                                                   <fieldset>
                                                      <div class="form-group form-group-half">
                                                         <span class="wt-select">
                                                            <select name="job_type" class="chosen-select" style="display: none;">
                                                               <option value="">Select job type</option>
                                                               <option value="fixed">Fixed Project</option>
                                                               <option value="hourly">Hourly Based Project</option>
                                                            </select>
                                                         </span>
                                                      </div>

                                                      <div class="form-group form-group-half">
                                                         <input type="text" name="price_min" class="form-control" placeholder="Minimum Price">
                                                      </div>

                                                      <div class="form-group form-group-half">
                                                         <input type="text" name="price_max" class="form-control" placeholder="Maximum Price">
                                                      </div>

                                                   </fieldset>
                                                </div>
                                             </div>
                                             <!--  -->

                                              <!--  -->
                                             <div class="wt-yourdetails wt-tabsinfo" style="pading-top: 30px">
                                                <div class="wt-tabscontenttitle">
                                                   <h2>Job Categories</h2>
                                                </div>
                                                <div class="wt-formtheme wt-userform">
                                                   <fieldset>
                                                      <div class="form-group">
                                                         <span class="wt-select">
                                                            <select name="category_id" class="chosen-select" style="display: none;">
                                                               <option value="">Select categories</option>
                                                               <option value="1">Web Desing</option>
                                                               <option value="2">Web Development</option>
                                                               <option value="3">Graphics Desing</option>
                                                            </select>
                                                         </span>
                                                      </div>
                                                   </fieldset>
                                                </div>
                                             </div>
                                             <!--  -->

                                              <!--  -->
                                             <div class="wt-yourdetails wt-tabsinfo" style="pading-top: 30px">
                                                <div class="wt-tabscontenttitle">
                                                   <h2>Skills Required</h2>
                                                </div>
                                                <div class="wt-formtheme wt-userform">
                                                   <fieldset>
                                                      <div class="form-group">
                                                         <span class="wt-select">
                                                            <select name="skills" class="chosen-select" style="display: none;">
                                                               <option value="">Select Skill</option>
                                                               <option value="php">PHP</option>
                                                               <option value="laravel">Laravel</option>
                                                               <option value="javascript">Javascript</option>
                                                            </select>
                                                         </span>
                                                      </div>

                                                      <!-- <div class="form-group wt-btnarea">
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);" class="wt-btn wt-add-skill-box" data-display_type="number">Add Skills</a>
                                                      </div> -->
                                                   </fieldset>
                                                </div>
                                             </div>
                                             <!--  -->

                                             <!--  -->
                                              <div class="wt-profilephoto wt-tabsinfo wt-profile-gallery">
                                                   <div class="wt-tabscontenttitle">
                                                      <h2>Upload Relevant Project Files </h2>
                                                   </div>

                                                   <div class="wt-profilephotocontent">
                                                   <div class="wt-formtheme wt-formprojectinfo wt-formcategory" id="wt-img-9654">
                                                      <fieldset>
                                                      <div class="form-group form-group-label" id="wt-image-container-1426" style="position: relative;">
                                                        <div class="wt-labelgroup" id="image-drag-1426" style="position: relative;">
                                                            <input type="file"  name="project_file">
                                                        </div>
                                                    </div>
                                                         
                                                      </fieldset>
                                                   </div>
                                                </div>
                                                   
                                                </div>
                                             <!--  -->



                                             <div class="wt-tabsinfo">
                                                <div class="wt-tabscontenttitle">
                                                   <h2>Add description</h2>
                                                </div>

                                                <div class="form-group">
                                                  <label for="exampleFormControlTextarea1">Large textarea</label>
                                                   <textarea class="form-control rounded-0" placeholder="description" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>
                                                </div>
                                             </div>
                                             <div class="wt-location wt-tabsinfo">
                                                <div class="wt-tabscontenttitle">
                                                   <h2>Your Location</h2>
                                                </div>
                                                <div class="wt-formtheme wt-userform">
                                                   <fieldset>
                                                      <div class="form-group form-group-half">
                                                         <span class="wt-select">
                                                            <select name="location" id="location-dp" class="item-location-dpss chosen-select" >
                                                               <option value="">Select Location</option>
                                                               <option style="" class=" level-0" value="barisal">Barisal</option>
                                                               <option style="" class=" level-0" value="chittagong" selected="selected">Chittagong</option>
                                                               <option style="" class=" level-0" value="dhaka">Dhaka</option>
                                                               <option style="" class=" level-0" value="khulna">Khulna</option>
                                                               <option style="" class=" level-0" value="mymensingh">Mymensingh</option>
                                                               <option style="" class=" level-0" value="rajshahi">Rajshahi</option>
                                                               <option style="" class=" level-0" value="rangpur">Rangpur</option>
                                                               <option style="" class=" level-0" value="sylhet">Sylhet</option>
                                                            </select>
                                                         
                                                         </span>
                                                      </div>
                                                   </fieldset>
                                                </div>
                                             </div>

                                             <div class="wt-skills">
                                                
                                                <div class="wt-skillscontent-holder">
                                                   <div class="wt-formtheme wt-skillsforms wt-skillsform-load-temp">
                                                      <fieldset>

                                                        <!--  <p>Don’t see your option listed? <a class="wt-create-custom-skills" href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">Create one.</a></p> -->
                                                         
                                                         <div class="form-group wt-btnarea">
                                                            <button type="submit"  class="wt-btn wt-add-skill-box" >Save & Update</button>
                                                         </div>
                                                         
                                                      </fieldset>
                                                   </div>
                                                   <div class="wt-myskills wt-listskill">
                                                      <ul class="sortable list" id="skills_sortable"></ul>
                                                   </div>
                                                </div>
                                             </div>
                                             </form>
                                          </div>
                          
  



</div>
                                   </div>
                                   

                                   
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
                 

<style>
   
.nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #45b649;
    background: #fff;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}



body {
    min-height: 100vh;
    background: linear-gradient(to left, #dce35b, #c8356c);
}

</style>
            

@endsection