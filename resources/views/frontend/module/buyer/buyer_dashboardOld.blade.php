@extends('frontend.components.app')
@section('content')
<div class="clearfix"></div>


<section class="py-5 header" style="margin: 30px 0;">
    <div class="container py-4 pro-bg">


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div style="background: #fcfcfc;" class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">

                        <span class="font-weight-bold small text-uppercase">Personal Details</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">

                        <span class="font-weight-bold small text-uppercase">Brochures</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">

                        <span class="font-weight-bold small text-uppercase">Demo 1</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">

                        <span class="font-weight-bold small text-uppercase">Demo 2</span></a>
                    </div>
            </div>
            @php
                $name  = explode(' ', $data->name);

            @endphp

            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade shadow rounded show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <form action="{{route('buyer.profile.update', auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="wt-tabscontent tab-content">
                           <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                              <div class="wt-yourdetails wt-tabsinfo">
                                 <div class="wt-tabscontenttitle">
                                    <h2>Your basics</h2>
                                 </div>
                                 <div class="wt-formtheme wt-userform">
                                    <fieldset>
                                       <div class="form-group form-group-half toolip-wrapo">
                                          <input type="text" value="{{$name[0]}}" name="f_name" class="form-control" placeholder="First Name">

                                       </div>
                                       <div class="form-group form-group-half toolip-wrapo">
                                          <input type="text" value="{{$name[1]}}" name="l_name" class="form-control" placeholder="Last Name">

                                       </div>

                                       <div class="form-group toolip-wrapo">
                                          <input type="text" value="" name="phone_number" class="form-control" placeholder="Phone number">
                                       </div>
                                       <div class="form-group toolip-wrapo">
                                          <input type="text" name="company_name" class="form-control count_tagline" value="{{$data->buyerProfile->company_name}}" placeholder="Add your tagline here">
                                       </div>

                                       <div class="form-group toolip-wrapo">
                                          <input type="text" name="" class="form-control count_tagline" value="" placeholder="Company ,....">

                                       </div>

                                       <div class="form-group form-group-half toolip-wrapo">
                                          <input type="text" value="" name="" class="form-control" placeholder="Job Title">
                                       </div>
                                    </fieldset>
                                 </div>
                              </div>
                              <div class="wt-tabsinfo">
                                 <div class="wt-tabscontenttitle">
                                    <h2>Add description</h2>
                                 </div>

                                 <div class="form-group">
                                   <label for="exampleFormControlTextarea1">Large textarea</label>
                                    <textarea class="form-control rounded-0" name="buyer_description" placeholder="description" id="exampleFormControlTextarea1" rows="5">{!! $data->buyerProfile->buyer_description !!}</textarea>
                                 </div>


                              </div>



                              <div class="wt-profilephoto wt-tabsinfo wt-profile-avatar">
                                 <div class="wt-tabscontenttitle">
                                    <h2>Profile Photo</h2>
                                 </div>
                                 <div class="wt-profilephotocontent">
                                    <div class="wt-formtheme wt-formprojectinfo wt-formcategory" id="wt-img-9654">
                                       <fieldset>
                                          <div class="form-group form-group-label" id="wt-image-container-1426" style="position: relative;">
                                             <div class="wt-labelgroup" id="image-drag-1426" style="position: relative;">
                                                   <input type="file"  name="buyer_profile_image">
                                             </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>


                              <div class="wt-profilephoto wt-tabsinfo wt-profile-banner">
                                 <div class="wt-tabscontenttitle">
                                    <h2>Banner Photo</h2>
                                 </div>
                                 <div class="wt-profilephotocontent">
                                    <div class="wt-formtheme wt-formprojectinfo wt-formcategory" id="wt-img-26755">
                                    <fieldset>
                                          <div class="form-group form-group-label" id="wt-image-container-1426" style="position: relative;">
                                             <div class="wt-labelgroup" id="image-drag-1426" style="position: relative;">
                                                   <input type="file"  name="buyer_banner_image">
                                             </div>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>




                              <div class="wt-location wt-tabsinfo">
                                 <div class="wt-tabscontenttitle">
                                    <h2>Company Details</h2>
                                 </div>
                                 <div class="wt-formtheme wt-userform">
                                    <fieldset>
                                       <div class="form-group form-group-half">
                                          <label><strong>Your Department?</strong></label>
                                          <label>
                                             <input type="radio" name="company_type" value="Accounting & Finance" {{$data->buyerProfile->company_type == 'Accounting & Finance' ? 'checked':''}} > Accounting & Finance
                                          </label>

                                          <label>
                                             <input type="radio" name="company_type" value="Marketing" {{$data->buyerProfile->company_type == 'Marketing' ? 'checked':''}} >Marketing
                                          </label>

                                          <label>
                                             <input type="radio" name="company_type" value="Marketing" {{$data->buyerProfile->company_type == 'Software Development' ? 'checked':''}}>Software Development
                                          </label>
                                       </div>

                                       <div class="form-group form-group-half toolip-wrapo">
                                         <label><strong>No. of employees you have</strong> </label>
                                          <label>
                                             <input type="radio" name="number_of_employee" value="Its Just me" {{$data->buyerProfile->number_of_employee == 'Its Just me' ? 'checked':''}}> Its Just me
                                          </label>

                                          <label>
                                             <input type="radio" name="number_of_employee" value="0-10" {{$data->buyerProfile->number_of_employee == '0-10' ? 'checked':''}}> 0-10 employee
                                          </label>

                                           <label>
                                             <input type="radio" name="number_of_employee" value="10-20" {{$data->buyerProfile->number_of_employee == '10-20' ? 'checked':''}}> 10-20 employee
                                          </label>

                                           <label>
                                             <input type="radio" name="number_of_employee" value="50-100" {{$data->buyerProfile->number_of_employee == '50-100' ? 'checked':''}}> 50-100 employee
                                          </label>

                                           <label>
                                             <input type="radio" name="number_of_employee" value="100-150" {{$data->buyerProfile->number_of_employee == '100-150' ? 'checked':''}}> 100-150 employee
                                          </label>


                                       </div>
                                    </fieldset>
                                 </div>
                              </div>



                              <div class="wt-skills">
                                 <div class="wt-tabscontenttitle">
                                    <h2>Your Location</h2>
                                 </div>
                                 <div class="wt-skillscontent-holder">
                                    <div class="wt-formtheme wt-skillsforms wt-skillsform-load-temp">
                                       <fieldset>
                                          <div class="form-group form-group-half ">
                                             <span class="wt-selects" style="z-index: 2;">
                                                <select name="buyer_location" id="skills-dp"  class="chosen-select wt-skill-title" >
                                                   <option value="0">Select Location</option>
                                                   <option class=" level-0" name="buyer_location" value="{{$data->buyerProfile->buyer_location}}" {{$data->buyerProfile->buyer_location != null?'selected':''}}>Dhaka</option>
                                                   <option class=" level-0" name="buyer_location" value="{{$data->buyerProfile->buyer_location}}" {{$data->buyerProfile->buyer_location != null?'selected':''}}>Khulna</option>
                                                   <option class=" level-0" name="buyer_location" value="{{$data->buyerProfile->buyer_location}}" {{$data->buyerProfile->buyer_location != null?'selected':''}}>Comilla</option>
                                                </select>

                                             </span>
                                          </div>

                                          <div class="form-group wt-btnarea">
                                             <button type="submit" class="wt-btn wt-add-skill-box" data-display_type="number">Save & Update</button>
                                          </div>

                                          <!-- <p>Don’t see your option listed? </p> -->
                                       </fieldset>
                                       </from>
                                    </div>

                                    <div class="wt-myskills wt-listskill">
                                       <ul class="sortable list" id="skills_sortable"></ul>
                                    </div>
                                 </div>
                              </div>



                              <script type="text/template" id="tmpl-load-skill">
                                 <li class="wt-skill-list ">
                                    <div class="wt-dragdroptool">
                                       <a href="#" onclick="event_preventDefault(event);" class="fa fa-arrows-alt"></a>
                                    </div>
                                             <span class="skill-dynamic-html">(<em class="skill-val"></em>&nbsp;%)</span>
                                          <span class="skill-dynamic-field">
                                                   <input type="text" name="" value="">
                                                <input type="hidden" name="" value="">
                                    </span>
                                    <div class="wt-rightarea">
                                       <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo" data-display_type="number"><i class="lnr lnr-pencil"></i></a>
                                       <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-skill"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                 </li>
                              </script>
                              <script type="text/template" id="tmpl-load-custom-skill">
                                 <li class="wt-skill-list">
                                    <div class="wt-dragdroptool">
                                       <a href="javascript:" class="fa fa-arrows-alt"></a>
                                    </div>
                                    <span class="skill-dynamic-html"> (<em class="skill-val"></em>&nbsp;%)</span>
                                    <span class="skill-dynamic-field">
                                                   <input type="text" name="">
                                                <input type="hidden" name="" value="">
                                    </span>
                                    <div class="wt-rightarea">
                                       <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo" data-display_type="number"><i class="lnr lnr-pencil"></i></a>
                                       <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-skill"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                 </li>
                              </script>
                              <script type="text/template" id="tmpl-add-skill-custom">
                                 <fieldset class="wt-skillsform wt-custom-skillsform">

                                    <div class="form-group-holder">
                                       <div class="form-group">
                                          <input type="text" class="form-control wt-custom-skill-title" placeholder="Enter Your Skill" validate="true">
                                       </div>
                                       <div class="form-group">
                                                      <input type="number" class="form-control wt-custom-skill-val" min="0" max="100" placeholder="add % value e.g. 95" validate="true">
                                                </div>
                                    </div>
                                    <div class="form-group wt-btnarea">
                                       <a href="#" onclick="event_preventDefault(event);" class="wt-btn wt-add-custom-skill-box" data-display_type="number">Add Skill</a>
                                    </div>
                                 </fieldset>
                              </script>
                           </div>

                           <div class="wt-faqholder tab-pane fade" id="wt-faq-profile">
                              <div class="wt-faqdataholder wt-tabsinfo">
                                 <div class="wt-tabscontenttitle wt-addnew">
                                    <h2>Profile FAQ</h2>

                                 </div>
                                 <ul class="wt-experienceaccordion accordion" id="faqsortable"></ul>
                              </div>
                              <script type="text/template" id="tmpl-load-faqs">
                                 <li id="" data-id="" class="wt-placehoder-img">
                                    <div class="wt-accordioninnertitle">
                                       <a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>
                                       <div class="wt-projecttitle">
                                          <h3><span class="head-title">Question</span></h3>
                                       </div>
                                       <div class="wt-rightarea">
                                          <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                          <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>
                                       </div>
                                    </div>
                                    <div class="wt-collapseexp collapse show" id="" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                       <div class="wt-formtheme wt-userform wt-formprojectinfo">
                                          <fieldset>
                                             <div class="form-group">
                                                <input type="text" name="" class="wt-input-title form-control" placeholder="Question">
                                             </div>
                                             <div class="form-group">
                                                <textarea class="form-control" name="" placeholder="Answer"></textarea>
                                             </div>
                                          </fieldset>
                                       </div>
                                    </div>
                                 </li>
                              </script>
                           </div>
                           <div class="wt-educationholder tab-pane fade" id="wt-education">
                              <div class="wt-userexperience wt-tabsinfo">
                                 <div class="wt-tabscontenttitle wt-addnew">
                                    <h2>Add Your Experience</h2>
                                    <!-- <span class="wt-add-experience"><a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">+ Add Experience</a></span> -->
                                 </div>
                                 <ul class="wt-experienceaccordion accordion" id="expsortable"></ul>
                              </div>
                              <script type="text/template" id="tmpl-load-experience">
                                 <li class="">
                                    <div class="wt-accordioninnertitle">
                                       <a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>
                                       <span id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle"><span class="wt-head-title">Experience title</span>&nbsp;<em>(Start date - End date)</em></span>
                                       <div class="wt-rightarea">
                                          <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                          <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>
                                       </div>
                                    </div>
                                    <div class="wt-collapseexp collapse show" id="" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                       <div class="wt-formtheme wt-userform">
                                          <fieldset>
                                             <div class="form-group form-group-half">
                                                <input type="text" name="" class="wt-head-input form-control" placeholder="Experience title">
                                             </div>
                                             <div class="form-group form-group-half">
                                                <input type="text" name="" class="form-control wt-start-pick" placeholder="Starting date">
                                             </div>
                                             <div class="form-group form-group-half">
                                                <input type="text" name="" class="form-control wt-end-pick" placeholder="Ending date *">
                                             </div>
                                             <div class="form-group form-group-half">
                                                <input type="text" name="" class="form-control wt-job-title" placeholder="Company title">
                                             </div>
                                             <div class="form-group">
                                                <textarea name="" class="form-control" placeholder="Experience description"></textarea>
                                             </div>
                                             <div class="form-group">
                                                <span>* Leave ending date empty if its your current job</span>
                                             </div>
                                          </fieldset>
                                       </div>
                                    </div>
                                 </li>
                              </script>
                              <div class="wt-userexperience">
                                 <div class="wt-tabscontenttitle wt-addnew">
                                    <h2>Add Your Education</h2>
                                    <span class="wt-add-education"><a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">+ Add education</a></span>
                                 </div>
                                 <ul class="wt-experienceaccordion accordion" id="edusortable"></ul>
                              </div>
<script type="text/template" id="tmpl-load-education">
<li class="">
<div class="wt-accordioninnertitle">
<a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>
<span id="accordioninnertitle1" data-toggle="collapse" data-target=""><span class="wt-head-title">Education title</span>&nbsp;<em>(Start date - End date)</em></span>
<div class="wt-rightarea">
   <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle1" data-toggle="collapse" data-target="" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
   <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>
</div>
</div>
<div class="wt-collapseexp collapse show" id="" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
<div class="wt-formtheme wt-userform">
   <fieldset>
      <div class="form-group form-group-half">
         <input type="text" name="" class="wt-head-input form-control" placeholder="Degree title">
      </div>
      <div class="form-group form-group-half">
         <input type="text" name="" class="wt-start-pick form-control" placeholder="Starting date">
      </div>
      <div class="form-group form-group-half">
         <input type="text" name="" class="wt-end-pick form-control" placeholder="Ending date">
      </div>
      <div class="form-group form-group-half">
         <input type="text" name="" class="form-control" placeholder="Institute name">
      </div>
      <div class="form-group">
         <textarea name="" class="form-control" placeholder="Description"></textarea>
      </div>
      <div class="form-group">
         <span>* Leave ending date empty if its your current degree</span>
      </div>
   </fieldset>
</div>
</div>
</li>
</script>
</div>
<div class="wt-awardsholder tab-pane fade" id="wt-projects">
<div class="wt-addprojectsholder">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Add Your Projects</h2>

</div>
<ul class="wt-experienceaccordion accordion" data-id="https://instantkaj.com/wp-content/themes/workreap/images/project-65x65.jpg" id="projectsortable"></ul>
</div>

</div>
<div class="wt-awardsholder tab-pane fade" id="wt-videos">
<div class="wt-videosdataholder wt-tabsinfo">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Add Your Videos</h2>
<span class="wt-add-video"><a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">+ Add Video URL</a></span>
</div>
<ul class="wt-experienceaccordion" id="videossortable"></ul>
</div>

</div>
<div class="wt-awardsholder tab-pane fade" id="wt-specialization">
<div class="wt-skills">
<div class="wt-tabscontenttitle">
<h2>Specializations</h2>
</div>
<div class="wt-skillscontent-holder">
<div class="wt-formtheme wt-userform wt-experience-form">
<fieldset>
   <div class="form-group form-group-half">
      <span class="wt-select">
         <select name="specialization" id="specialization-dp" class="chosen-select wt-specialization-title" style="display: none;">
            <option value="0">Select specialization</option>
            <option class=" level-0" value="301">Academic – K-12</option>
            <option class=" level-0" value="300">Asset Management</option>
            <option class=" level-0" value="302">Change Management</option>
            <option class=" level-0" value="303">Employee Onboarding</option>
            <option class=" level-0" value="304">Organizational Development</option>
         </select>
         <div class="chosen-container chosen-container-single workreap-custom-zindex" title="" id="specialization_dp_chosen" style="width: 0px;">
            <a class="chosen-single">
               <span>Select specialization</span>
               <div><b></b></div>
            </a>
            <div class="chosen-drop">
               <div class="chosen-search">
                  <input class="chosen-search-input" type="text" autocomplete="off" placeholder="Start typing...">
               </div>
               <ul class="chosen-results"></ul>
            </div>
         </div>
      </span>
   </div>
   <div class="form-group form-group-half toolip-wrapo">
      <input type="number" class="form-control specialization-val" min="0" max="100" placeholder="add % value e.g. 95" validate="true">
   </div>
   <div class="form-group wt-btnarea">
      <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);" class="wt-btn wt-add-specialization-box" data-display_type="number">Add Specialization</a>
   </div>
</fieldset>
</div>
<div class="wt-myskills wt-myspecifications">
<ul class="sortable list" id="specializations_sortable"></ul>
</div>
</div>
</div>

</div>
</div>
</div>

<div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
<div class="wt-tabscontent tab-content">
<div class="wt-personalskillshold tab-pane fade" id="wt-skills">

<div class="wt-tabsinfo">
<div class="wt-tabscontenttitle">
<h2>Add description</h2>
</div>
<div class="form-group">
<div id="wp-freelancer_details-wrap" class="wp-core-ui wp-editor-wrap tmce-active">
<link rel="stylesheet" id="dashicons-css" href="https://instantkaj.com/wp-includes/css/dashicons.min.css?ver=5.8.1" type="text/css" media="all">
<link rel="stylesheet" id="editor-buttons-css" href="https://instantkaj.com/wp-includes/css/editor.min.css?ver=5.8.1" type="text/css" media="all">
<div id="wp-freelancer_details-editor-tools" class="wp-editor-tools hide-if-no-js">
   <div class="wp-editor-tabs"><button type="button" id="freelancer_details-tmce" class="wp-switch-editor switch-tmce" data-wp-editor-id="freelancer_details">Visual</button>
      <button type="button" id="freelancer_details-html" class="wp-switch-editor switch-html" data-wp-editor-id="freelancer_details">Text</button>
   </div>
</div>
<div id="wp-freelancer_details-editor-container" class="wp-editor-container">
   <div id="qt_freelancer_details_toolbar" class="quicktags-toolbar hide-if-no-js"><input type="button" id="qt_freelancer_details_strong" class="ed_button button button-small" aria-label="Bold" value="b"><input type="button" id="qt_freelancer_details_em" class="ed_button button button-small" aria-label="Italic" value="i"><input type="button" id="qt_freelancer_details_link" class="ed_button button button-small" aria-label="Insert link" value="link"><input type="button" id="qt_freelancer_details_block" class="ed_button button button-small" aria-label="Blockquote" value="b-quote"><input type="button" id="qt_freelancer_details_del" class="ed_button button button-small" aria-label="Deleted text (strikethrough)" value="del"><input type="button" id="qt_freelancer_details_ins" class="ed_button button button-small" aria-label="Inserted text" value="ins"><input type="button" id="qt_freelancer_details_img" class="ed_button button button-small" aria-label="Insert image" value="img"><input type="button" id="qt_freelancer_details_ul" class="ed_button button button-small" aria-label="Bulleted list" value="ul"><input type="button" id="qt_freelancer_details_ol" class="ed_button button button-small" aria-label="Numbered list" value="ol"><input type="button" id="qt_freelancer_details_li" class="ed_button button button-small" aria-label="List item" value="li"><input type="button" id="qt_freelancer_details_code" class="ed_button button button-small" aria-label="Code" value="code"><input type="button" id="qt_freelancer_details_more" class="ed_button button button-small" aria-label="Insert Read More tag" value="more"><input type="button" id="qt_freelancer_details_close" class="ed_button button button-small" title="Close all open tags" value="close tags"></div>
   <div id="mceu_24" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;">
      <div id="mceu_24-body" class="mce-container-body mce-stack-layout">
         <div id="mceu_25" class="mce-top-part mce-container mce-stack-layout-item mce-first">
            <div id="mceu_25-body" class="mce-container-body">
               <div id="mceu_26" class="mce-toolbar-grp mce-container mce-panel mce-first mce-last" hidefocus="1" tabindex="-1" role="group">
                  <div id="mceu_26-body" class="mce-container-body mce-stack-layout">
                     <div id="mceu_27" class="mce-container mce-toolbar mce-stack-layout-item mce-first" role="toolbar">
                        <div id="mceu_27-body" class="mce-container-body mce-flow-layout">
                           <div id="mceu_28" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                              <div id="mceu_28-body">
                                 <div id="mceu_0" class="mce-widget mce-btn mce-menubtn mce-fixed-width mce-listbox mce-first mce-btn-has-text" tabindex="-1" aria-labelledby="mceu_0" role="button" aria-haspopup="true"><button id="mceu_0-open" role="presentation" type="button" tabindex="-1"><span class="mce-txt">Paragraph</span> <i class="mce-caret"></i></button></div>
                                 <div id="mceu_1" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Bold (Ctrl+B)"><button id="mceu_1-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div>
                                 <div id="mceu_2" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Italic (Ctrl+I)"><button id="mceu_2-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div>
                                 <div id="mceu_3" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Bulleted list (Shift+Alt+U)"><button id="mceu_3-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bullist"></i></button></div>
                                 <div id="mceu_4" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Numbered list (Shift+Alt+O)"><button id="mceu_4-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-numlist"></i></button></div>
                                 <div id="mceu_5" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Blockquote (Shift+Alt+Q)"><button id="mceu_5-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-blockquote"></i></button></div>
                                 <div id="mceu_6" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Align left (Shift+Alt+L)"><button id="mceu_6-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignleft"></i></button></div>
                                 <div id="mceu_7" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Align center (Shift+Alt+C)"><button id="mceu_7-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-aligncenter"></i></button></div>
                                 <div id="mceu_8" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Align right (Shift+Alt+R)"><button id="mceu_8-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-alignright"></i></button></div>
                                 <div id="mceu_9" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Insert/edit link (Ctrl+K)"><button id="mceu_9-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-link"></i></button></div>
                                 <div id="mceu_10" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Insert Read More tag (Shift+Alt+T)"><button id="mceu_10-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-wp_more"></i></button></div>
                                 <div id="mceu_11" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Fullscreen"><button id="mceu_11-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-fullscreen"></i></button></div>
                                 <div id="mceu_12" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Toolbar Toggle (Shift+Alt+Z)"><button id="mceu_12-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-wp_adv"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="mceu_29" class="mce-container mce-toolbar mce-stack-layout-item mce-last" role="toolbar" style="display: none;">
                        <div id="mceu_29-body" class="mce-container-body mce-flow-layout">
                           <div id="mceu_30" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group">
                              <div id="mceu_30-body">
                                 <div id="mceu_13" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Strikethrough (Shift+Alt+D)"><button id="mceu_13-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-strikethrough"></i></button></div>
                                 <div id="mceu_14" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Horizontal line"><button id="mceu_14-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-hr"></i></button></div>
                                 <div id="mceu_15" class="mce-widget mce-btn mce-splitbtn mce-colorbutton" role="button" tabindex="-1" aria-haspopup="true" aria-label="Text color"><button role="presentation" hidefocus="1" type="button" tabindex="-1"><i class="mce-ico mce-i-forecolor"></i><span id="mceu_15-preview" class="mce-preview"></span></button><button type="button" class="mce-open" hidefocus="1" tabindex="-1"> <i class="mce-caret"></i></button></div>
                                 <div id="mceu_16" class="mce-widget mce-btn" tabindex="-1" aria-pressed="false" role="button" aria-label="Paste as text"><button id="mceu_16-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-pastetext"></i></button></div>
                                 <div id="mceu_17" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Clear formatting"><button id="mceu_17-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-removeformat"></i></button></div>
                                 <div id="mceu_18" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Special character"><button id="mceu_18-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-charmap"></i></button></div>
                                 <div id="mceu_19" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Decrease indent"><button id="mceu_19-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-outdent"></i></button></div>
                                 <div id="mceu_20" class="mce-widget mce-btn" tabindex="-1" role="button" aria-label="Increase indent"><button id="mceu_20-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-indent"></i></button></div>
                                 <div id="mceu_21" class="mce-widget mce-btn mce-disabled" tabindex="-1" role="button" aria-label="Undo (Ctrl+Z)" aria-disabled="true"><button id="mceu_21-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-undo"></i></button></div>
                                 <div id="mceu_22" class="mce-widget mce-btn mce-disabled" tabindex="-1" role="button" aria-label="Redo (Ctrl+Y)" aria-disabled="true"><button id="mceu_22-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-redo"></i></button></div>
                                 <div id="mceu_23" class="mce-widget mce-btn mce-last" tabindex="-1" role="button" aria-label="Keyboard Shortcuts (Shift+Alt+H)"><button id="mceu_23-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-wp_help"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="mceu_31" class="mce-edit-area mce-container mce-panel mce-stack-layout-item" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="freelancer_details_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press Alt-Shift-H for help." style="width: 100%; height: 334px; display: block;"></iframe></div>
         <div id="mceu_32" class="mce-statusbar mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;">
            <div id="mceu_32-body" class="mce-container-body mce-flow-layout">
               <div id="mceu_33" class="mce-path mce-flow-layout-item mce-first">
                  <div class="mce-path-item">&nbsp;</div>
               </div>
               <div id="mceu_34" class="mce-flow-layout-item mce-last mce-resizehandle"><i class="mce-ico mce-i-resize"></i></div>
            </div>
         </div>
      </div>
   </div>
   <textarea class="customwp_editor wp-editor-area" style="height: 300px; display: none;" autocomplete="off" cols="40" name="basics[content]" id="freelancer_details" aria-hidden="true"></textarea>
</div>
</div>
</div>
</div>
<div class="wt-tabsinfo">
<div class="wt-tabscontenttitle">
<h2>Your english level</h2>
</div>
<div class="wt-settingscontent">
<div class="wt-formtheme wt-userform">
<div class="form-group">
   <select data-placeholder="Select english level" name="settings[english_level]" class="chosen-select" style="display: none;">
      <option value="">Select english level</option>
      <option selected="selected" value="basic">Basic</option>
      <option value="conversational">Conversational</option>
      <option value="fluent">Fluent</option>
      <option value="professional">Professional</option>
   </select>
   <div class="chosen-container chosen-container-single workreap-custom-zindex" title="" style="width: 197px;">
      <a class="chosen-single">
         <span>Basic</span>
         <div><b></b></div>
      </a>
      <div class="chosen-drop">
         <div class="chosen-search">
            <input class="chosen-search-input" type="text" autocomplete="off" placeholder="Start typing...">
         </div>
         <ul class="chosen-results"></ul>
      </div>
   </div>
</div>
</div>
</div>
<div class="wt-tabscontenttitle">
<h2>Type of freelancer you are</h2>
</div>
<div class="wt-settingscontent">
<div class="wt-formtheme wt-userform">
<div class="form-group">
   <select data-placeholder="Select freelancer type" name="settings[freelancer_type]" class="chosen-select" style="display: none;">
      <option value="">Select freelancer type</option>
      <option value="independent">Independent Freelancers</option>
      <option selected="selected" value="rising_talent">New Rising Talent</option>
      <option value="agency">Professional Freelancers</option>
   </select>
   <div class="chosen-container chosen-container-single workreap-custom-zindex" title="" style="width: 239px;">
      <a class="chosen-single">
         <span>New Rising Talent</span>
         <div><b></b></div>
      </a>
      <div class="chosen-drop">
         <div class="chosen-search">
            <input class="chosen-search-input" type="text" autocomplete="off" placeholder="Start typing...">
         </div>
         <ul class="chosen-results"></ul>
      </div>
   </div>
</div>
</div>
</div>
</div>
<div class="wt-profilephoto wt-tabsinfo wt-profile-avatar">
<div class="wt-tabscontenttitle">
<h2>Profile Photo</h2>
</div>
<div class="wt-profilephotocontent">
<div class="wt-formtheme wt-formprojectinfo wt-formcategory" id="wt-img-9654">
<fieldset>
   <div class="form-group form-group-label" id="wt-image-container-9654" style="position: relative;">
      <div class="wt-labelgroup" id="image-drag-9654" style="position: relative;">
         <label for="file" class="wt-image-file">
         <span class="wt-btn" id="image-btn-9654" style="z-index: 1;">Select File</span>
         </label>
         <span>Drop files here to upload</span>
         <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
      </div>
      <div id="html5_1fjancr3n5gp1et1t129jqvufc_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 7px; left: 12px; width: 167px; height: 46px; overflow: hidden; z-index: 0;"><input id="html5_1fjancr3n5gp1et1t129jqvufc" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.jpg,.jpeg,image/gif,.gif,image/png,.png"></div>
   </div>
   <div class="form-group uploaded-placeholder"></div>
</fieldset>
</div>
</div>
</div>

<div class="wt-profilephoto wt-tabsinfo wt-profile-banner">
<div class="wt-tabscontenttitle">
<h2>Banner Photo</h2>
</div>
<div class="wt-profilephotocontent">
<div class="wt-formtheme wt-formprojectinfo wt-formcategory" id="wt-img-26755">
<fieldset>
   <div class="form-group form-group-label" id="wt-image-container-26755" style="position: relative;">
      <div class="wt-labelgroup" id="image-drag-26755" style="position: relative;">
         <label for="file" class="wt-image-file">
         <span class="wt-btn" id="image-btn-26755" style="z-index: 1;">Select File</span>
         </label>
         <span>Drop files here to upload</span>
         <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
      </div>
      <div id="html5_1fjancr3r12lrkc01lo170i1ng5f_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 7px; left: 12px; width: 167px; height: 46px; overflow: hidden; z-index: 0;"><input id="html5_1fjancr3r12lrkc01lo170i1ng5f" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.jpg,.jpeg,image/gif,.gif,image/png,.png"></div>
   </div>
   <div class="form-group uploaded-placeholder"></div>
</fieldset>
</div>
</div>
</div>

<div class="wt-profilephoto wt-tabsinfo wt-profile-gallery">
<div class="wt-tabscontenttitle">
<h2>Gallery Photo</h2>
</div>
<div class="wt-profilephotocontent">
<div class="wt-formtheme wt-formprojectinfo wt-formcategory" id="wt-img-1426">
<fieldset>
   <div class="form-group form-group-label" id="wt-image-container-1426" style="position: relative;">
      <div class="wt-labelgroup" id="image-drag-1426" style="position: relative;">
         <label for="file" class="wt-image-file">
         <span class="wt-btn" id="image-btn-1426" style="z-index: 1;">Select File</span>
         </label>
         <span>Drop files here to upload</span>
         <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
      </div>
      <div id="html5_1fjancr3t1drr16lb1j2h1kl41c0oi_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 7px; left: 12px; width: 167px; height: 46px; overflow: hidden; z-index: 0;"><input id="html5_1fjancr3t1drr16lb1j2h1kl41c0oi" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.jpg,.jpeg,image/gif,.gif,image/png,.png"></div>
   </div>
   <div class="form-group uploaded-placeholder">
      <ul class="wt-attachfile wt-attachfilevtwo wt-galler-images"></ul>
   </div>
</fieldset>
</div>
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
      <select name="basics[country]" id="location-dp" class="item-location-dpss chosen-select" style="display: none;">
         <option value="0">Select Location</option>
         <option style="" class=" level-0" value="barisal">Barisal</option>
         <option style="" class=" level-0" value="chittagong" selected="selected">Chittagong</option>
         <option style="" class=" level-0" value="dhaka">Dhaka</option>
         <option style="" class=" level-0" value="khulna">Khulna</option>
         <option style="" class=" level-0" value="mymensingh">Mymensingh</option>
         <option style="" class=" level-0" value="rajshahi">Rajshahi</option>
         <option style="" class=" level-0" value="rangpur">Rangpur</option>
         <option style="" class=" level-0" value="sylhet">Sylhet</option>
      </select>
      <div class="chosen-container chosen-container-single workreap-custom-zindex" title="" id="location_dp_chosen" style="width: 256px;">
         <a class="chosen-single">
            <span>Chittagong</span>
            <div><b></b></div>
         </a>
         <div class="chosen-drop">
            <div class="chosen-search">
               <input class="chosen-search-input" type="text" autocomplete="off" placeholder="Start typing...">
            </div>
            <ul class="chosen-results"></ul>
         </div>
      </div>
   </span>
</div>
</fieldset>
</div>
</div>
<div class="wt-skills">
<div class="wt-tabscontenttitle">
<h2>My Skills</h2>
</div>
<div class="wt-skillscontent-holder">



<div class="wt-myskills wt-listskill">
<ul class="sortable list" id="skills_sortable"></ul>
</div>
</div>
</div>

</div>

<div class="wt-educationholder tab-pane fade active show" id="wt-education">
<div class="wt-userexperience wt-tabsinfo">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Add Your Experience</h2>
<!-- <span class="wt-add-experience"><a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">+ Add Experience</a></span> -->
</div>
<ul class="wt-experienceaccordion accordion" id="expsortable">
<li class="dateinit-87715" draggable="false">
<!-- <div class="wt-accordioninnertitle">
   <a href="#" onclick="event_preventDefault(event);" class="handle" draggable="false"></a>
   <span id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle87715"><span class="wt-head-title">Experience title</span>&nbsp;<em>(Start date - End date)</em></span>
   <div class="wt-rightarea">
      <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle87715" aria-expanded="true" draggable="false"></a>
      <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data" draggable="false"></a>
   </div>
</div> -->
<div class="wt-collapseexp collapse show" id="innertitle87715" aria-labelledby="accordioninnertitle" data-parent="#accordion">
   <div class="wt-formtheme wt-userform">
      <fieldset>
         <div class="form-group form-group-half">
            <input type="text" name="settings[experience][87715][title]" class="wt-head-input form-control" placeholder="Experience title">
         </div>
         <div class="form-group form-group-half">
            <input type="text" name="settings[experience][87715][startdate]" class="form-control wt-start-pick" placeholder="Starting date">
         </div>
         <div class="form-group form-group-half">
            <input type="text" name="settings[experience][87715][enddate]" class="form-control wt-end-pick" placeholder="Ending date *">
         </div>
         <div class="form-group form-group-half">
            <input type="text" name="settings[experience][87715][job]" class="form-control wt-job-title" placeholder="Company title">
         </div>
         <div class="form-group">
            <textarea name="settings[experience][87715][details]" class="form-control" placeholder="Experience description"></textarea>
         </div>
         <div class="form-group">
            <span>* Leave ending date empty if its your current job</span>
         </div>
      </fieldset>
   </div>
</div>
</li>
</ul>
</div>
{{--<script type="text/template" id="tmpl-load-experience">--}}
{{--<li class="dateinit-{{data.counter}}">--}}
{{--<div class="wt-accordioninnertitle">--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>--}}
{{--<span id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle{{data.counter}}"><span class="wt-head-title">Experience title</span>&nbsp;<em>(Start date - End date)</em></span>--}}
{{--<div class="wt-rightarea">--}}
{{--   <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle{{data.counter}}" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>--}}
{{--   <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="wt-collapseexp collapse show" id="innertitle{{data.counter}}" aria-labelledby="accordioninnertitle" data-parent="#accordion">--}}
{{--<div class="wt-formtheme wt-userform">--}}
{{--   <fieldset>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[experience][{{data.counter}}][title]" class="wt-head-input form-control" placeholder="Experience title">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[experience][{{data.counter}}][startdate]" class="form-control wt-start-pick" placeholder="Starting date">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[experience][{{data.counter}}][enddate]" class="form-control wt-end-pick" placeholder="Ending date *">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[experience][{{data.counter}}][job]" class="form-control wt-job-title" placeholder="Company title">--}}
{{--      </div>--}}
{{--      <div class="form-group">--}}
{{--         <textarea name="settings[experience][{{data.counter}}][details]" class="form-control" placeholder="Experience description"></textarea>--}}
{{--      </div>--}}
{{--      <div class="form-group">--}}
{{--         <span>* Leave ending date empty if its your current job</span>--}}
{{--      </div>--}}
{{--   </fieldset>--}}
{{--</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--</script>--}}
<div class="wt-userexperience">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Add Your Education</h2>
<!--  <span class="wt-add-education"><a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">+ Add education</a></span> -->
</div>
<ul class="wt-experienceaccordion accordion" id="edusortable">
<li class="dateinit-93414">
<!-- <div class="wt-accordioninnertitle">
   <a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>
   <span id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle93414"><span class="wt-head-title">Education title</span>&nbsp;<em>(Start date - End date)</em></span>
   <div class="wt-rightarea">
      <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle93414" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
      <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>
   </div>
</div> -->
<div class="wt-collapseexp collapse show" id="innertitle93414" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
   <div class="wt-formtheme wt-userform">
      <fieldset>
         <div class="form-group form-group-half">
            <input type="text" name="settings[education][93414][degree]" class="wt-head-input form-control" placeholder="Degree title">
         </div>
         <div class="form-group form-group-half">
            <input type="text" name="settings[education][93414][startdate]" class="wt-start-pick form-control" placeholder="Starting date">
         </div>
         <div class="form-group form-group-half">
            <input type="text" name="settings[education][93414][enddate]" class="wt-end-pick form-control" placeholder="Ending date">
         </div>
         <div class="form-group form-group-half">
            <input type="text" name="settings[education][93414][university]" class="form-control" placeholder="Institute name">
         </div>
         <div class="form-group">
            <textarea name="settings[education][93414][details]" class="form-control" placeholder="Description"></textarea>
         </div>
         <div class="form-group">
            <span>* Leave ending date empty if its your current degree</span>
         </div>
      </fieldset>
   </div>
</div>
</li>
</ul>
</div>
{{--<script type="text/template" id="tmpl-load-education">--}}
{{--<li class="dateinit-{{data.counter}}">--}}
{{--<div class="wt-accordioninnertitle">--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>--}}
{{--<span id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle{{data.counter}}"><span class="wt-head-title">Education title</span>&nbsp;<em>(Start date - End date)</em></span>--}}
{{--<div class="wt-rightarea">--}}
{{--   <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle{{data.counter}}" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>--}}
{{--   <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="wt-collapseexp collapse show" id="innertitle{{data.counter}}" aria-labelledby="accordioninnertitle1" data-parent="#accordion">--}}
{{--<div class="wt-formtheme wt-userform">--}}
{{--   <fieldset>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[education][{{data.counter}}][degree]" class="wt-head-input form-control" placeholder="Degree title">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[education][{{data.counter}}][startdate]" class="wt-start-pick form-control" placeholder="Starting date">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[education][{{data.counter}}][enddate]" class="wt-end-pick form-control" placeholder="Ending date">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[education][{{data.counter}}][university]" class="form-control" placeholder="Institute name">--}}
{{--      </div>--}}
{{--      <div class="form-group">--}}
{{--         <textarea name="settings[education][{{data.counter}}][details]" class="form-control" placeholder="Description"></textarea>--}}
{{--      </div>--}}
{{--      <div class="form-group">--}}
{{--         <span>* Leave ending date empty if its your current degree</span>--}}
{{--      </div>--}}
{{--   </fieldset>--}}
{{--</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--</script>--}}
</div>

<div class="wt-awardsholder tab-pane fade" id="wt-projects">
<div class="wt-addprojectsholder">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Add Your Projects</h2>
</div>
<ul class="wt-experienceaccordion accordion" data-id="https://instantkaj.com/wp-content/themes/workreap/images/project-65x65.jpg" id="projectsortable">
<li id="wt-award-3091" data-id="3091" class="wt-placehoder-img" draggable="false">

<div class="wt-collapseexp collapse show" id="innertitle-3091" aria-labelledby="accordioninnertitle" data-parent="#accordion" style="">
   <div class="wt-formtheme wt-userform wt-formprojectinfo">
      <fieldset>
         <div class="form-group form-group-half">
            <input type="text" name="settings[project][3091][title]" class="wt-input-title form-control" placeholder="Project Title">
         </div>
         <div class="form-group form-group-half">
            <input type="text" name="settings[project][3091][link]" class="wt-input-subtitle form-control" placeholder="Project URL">
         </div>
         <div class="form-group form-group-label" id="wt-award-container-3091" style="position: relative;">
            <div class="wt-labelgroup" id="award-drag-3091" style="position: relative;">
               <label for="file">
               <span class="wt-btn" id="award-btn-3091" style="z-index: 1;">Select file</span>
               </label>
               <span>Drop files here to upload</span>
               <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
            </div>
            <div id="html5_1fjao3eh41q26g7t14rl6b51o1e14_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1fjao3eh41q26g7t14rl6b51o1e14" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.jpg,.jpeg,image/gif,.gif,image/png,.png,application/pdf,.pdf,.pdf"></div>
         </div>
         <div class="form-group uploaded-placeholder"></div>
      </fieldset>
   </div>
</div>
</li>
</ul>
</div>
{{--<script type="text/template" id="tmpl-load-project-image">--}}
{{--<ul class="wt-attachfile">--}}
{{--<li class="wt-uploading award-new-item wt-doc-parent" id="thumb-{{data.id}}">--}}
{{--<span class="uploadprogressbar" style="width:0%"></span>--}}
{{--<span>{{data.name}}</span>--}}
{{--<em>File size: {{data.size}}<a href="#" onclick="event_preventDefault(event);" class="lnr lnr-cross wt-remove-award-image"></a></em>--}}
{{--<input type="hidden" name="settings[{{data.type}}][{{data.counter}}][image]" value="{{data.url}}">--}}
{{--</li>--}}
{{--</ul>--}}
{{--</script>--}}
{{--<script type="text/template" id="tmpl-load-project">--}}
{{--<li id="wt-award-{{data.counter}}" data-id="{{data.counter}}" class="wt-placehoder-img">--}}
{{--<div class="wt-accordioninnertitle">--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>--}}
{{--<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitle-{{data.counter}}">--}}
{{--   <figure class="award-thumb"><img src="https://instantkaj.com/wp-content/themes/workreap/images/project-65x65.jpg" alt="Title"></figure>--}}
{{--   <h3><span class="head-title">Project Title Here</span><span class="head-sub-title">www.test.com</span></h3>--}}
{{--</div>--}}
{{--<div class="wt-rightarea">--}}
{{--   <a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitle-{{data.counter}}"><i class="lnr lnr-pencil"></i></a>--}}
{{--   <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="wt-collapseexp collapse" id="innertitle-{{data.counter}}" aria-labelledby="accordioninnertitle" data-parent="#accordion">--}}
{{--<div class="wt-formtheme wt-userform wt-formprojectinfo">--}}
{{--   <fieldset>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[project][{{data.counter}}][title]" class="wt-input-title form-control" placeholder="Project Title">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-half">--}}
{{--         <input type="text" name="settings[project][{{data.counter}}][link]" class="wt-input-subtitle form-control" placeholder="Project URL">--}}
{{--      </div>--}}
{{--      <div class="form-group form-group-label" id="wt-award-container-{{data.counter}}">--}}
{{--         <div class="wt-labelgroup" id="award-drag-{{data.counter}}">--}}
{{--            <label for="file">--}}
{{--               <span class="wt-btn" id="award-btn-{{data.counter}}">Select file</span>--}}
{{--            </label>--}}
{{--            <span>Drop files here to upload</span>--}}
{{--            <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>--}}
{{--         </div>--}}
{{--      </div>--}}
{{--      <div class="form-group uploaded-placeholder"></div>--}}
{{--   </fieldset>--}}
{{--</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--</script>--}}
</div>
<div class="wt-awardsholder tab-pane fade" id="wt-videos">
<div class="wt-videosdataholder wt-tabsinfo">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Add Your Videos</h2>
<span class="wt-add-video"><a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);">+ Add Video URL</a></span>
</div>
<ul class="wt-experienceaccordion" id="videossortable"></ul>
</div>
{{--<script type="text/template" id="tmpl-load-videos">--}}
{{--<li data-id="{{data.counter}}" class="wt-videos-item">--}}
{{--<div class="wt-accordioninnertitle">--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>--}}
{{--<div class="form-group">--}}
{{--   <input type="text" name="settings[videos][]" class="wt-input-title form-control" placeholder="Video URL">--}}
{{--</div>--}}
{{--<div class="wt-rightarea">--}}
{{--   <a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--</script>--}}
</div>
<div class="wt-awardsholder tab-pane fade" id="wt-specialization">
<div class="wt-skills">
<div class="wt-tabscontenttitle">
<h2>Specializations</h2>
</div>
<div class="wt-skillscontent-holder">
<div class="wt-formtheme wt-userform wt-experience-form">
<fieldset>
   <div class="form-group form-group-half">
      <span class="wt-select">
         <select name="specialization" id="specialization-dp" class="chosen-select wt-specialization-title" style="display: none;">
            <option value="0">Select specialization</option>
            <option class=" level-0" value="301">Academic – K-12</option>
            <option class=" level-0" value="300">Asset Management</option>
            <option class=" level-0" value="302">Change Management</option>
            <option class=" level-0" value="303">Employee Onboarding</option>
            <option class=" level-0" value="304">Organizational Development</option>
         </select>
         <div class="chosen-container chosen-container-single workreap-custom-zindex" title="" id="specialization_dp_chosen" style="width: 0px;">
            <a class="chosen-single">
               <span>Select specialization</span>
               <div><b></b></div>
            </a>
            <div class="chosen-drop">
               <div class="chosen-search">
                  <input class="chosen-search-input" type="text" autocomplete="off" placeholder="Start typing...">
               </div>
               <ul class="chosen-results"></ul>
            </div>
         </div>
      </span>
   </div>
   <div class="form-group form-group-half toolip-wrapo">
      <input type="number" class="form-control specialization-val" min="0" max="100" placeholder="add % value e.g. 95" validate="true">
   </div>
   <div class="form-group wt-btnarea">
      <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event_preventDefault(event);" class="wt-btn wt-add-specialization-box" data-display_type="number">Add Specialization</a>
   </div>
</fieldset>
</div>
<div class="wt-myskills wt-myspecifications">
<ul class="sortable list" id="specializations_sortable"></ul>
</div>
</div>
</div>
{{--<script type="text/template" id="tmpl-load-spec">--}}
{{--<li class="wt-skill-list dbskill-{{data.name}}"">--}}
{{--<div class="wt-dragdroptool">--}}
{{--<a href="javascript:" class="lnr lnr-menu"></a>--}}
{{--</div>--}}
{{--<span class="skill-dynamic-html">{{data.text}} (<em class="skill-val">{{data.value}}</em>&nbsp;%)</span>--}}
{{--<span class="skill-dynamic-field">--}}
{{--            <input type="text" name="settings[specialization][{{data.counter}}][value]" value="{{data.value}}">--}}
{{--         <input type="hidden" name="settings[specialization][{{data.counter}}][spec]" value="{{data.name}}">--}}
{{--</span>--}}
{{--<div class="wt-rightarea">--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="wt-addinfo" data-display_type="number"><i class="lnr lnr-pencil"></i></a>--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-skill"><i class="lnr lnr-trash"></i></a>--}}
{{--</div>--}}
{{--</li>--}}
{{--</script>--}}
</div>
</div>
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <!--  -->
                        <div class="wt-addprojectsholder">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Add Your Projects</h2>

</div>
<ul class="wt-experienceaccordion accordion" data-id="https://instantkaj.com/wp-content/themes/workreap/images/project-65x65.jpg" id="projectsortable">
<li id="wt-award-3091" data-id="3091" class="wt-placehoder-img" draggable="false">

<div class="wt-collapseexp collapse show" id="innertitle-3091" aria-labelledby="accordioninnertitle" data-parent="#accordion" style="">
<div class="wt-formtheme wt-userform wt-formprojectinfo">
<fieldset>
   <div class="form-group form-group-half">
      <input type="text" name="settings[project][3091][title]" class="wt-input-title form-control" placeholder="Project Title">
   </div>
   <div class="form-group form-group-half">
      <input type="text" name="settings[project][3091][link]" class="wt-input-subtitle form-control" placeholder="Project URL">
   </div>
   <div class="form-group form-group-label" id="wt-award-container-3091" style="position: relative;">
      <div class="wt-labelgroup" id="award-drag-3091" style="position: relative;">
         <label for="file">
         <span class="wt-btn" id="award-btn-3091" style="z-index: 1;">Select file</span>
         </label>
         <span>Drop files here to upload</span>
         <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
      </div>
      <div id="html5_1fjao3eh41q26g7t14rl6b51o1e14_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1fjao3eh41q26g7t14rl6b51o1e14" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.jpg,.jpeg,image/gif,.gif,image/png,.png,application/pdf,.pdf,.pdf"></div>
   </div>
   <div class="form-group uploaded-placeholder"></div>
</fieldset>
</div>
</div>
</li>

</ul>
</div>
                        <!--  -->
                    </div>

                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="wt-faqholder tab-pane fade active show" id="wt-faq-profile">
<div class="wt-faqdataholder wt-tabsinfo">
<div class="wt-tabscontenttitle wt-addnew">
<h2>Profile FAQ</h2>

</div>
<ul class="wt-experienceaccordion accordion" id="faqsortable">
<li id="wt-faq-c852" data-id="c852" class="wt-placehoder-img">

<div class="wt-collapseexp collapse show" id="innertitle-c852" aria-labelledby="accordioninnertitle" data-parent="#accordion">
<div class="wt-formtheme wt-userform wt-formprojectinfo">
   <fieldset>
      <div class="form-group">
         <input type="text" name="settings[faq][c852][faq_question]" class="wt-input-title form-control" placeholder="Question">
      </div>
      <div class="form-group">
         <textarea class="form-control" name="settings[faq][c852][faq_answer]" placeholder="Answer"></textarea>
      </div>
   </fieldset>
</div>
</div>
</li>
</ul>
</div>
{{--<script type="text/template" id="tmpl-load-faqs">--}}
{{--<li id="wt-faq-{{data.counter}}" data-id="{{data.counter}}" class="wt-placehoder-img">--}}
{{--<div class="wt-accordioninnertitle">--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="handle"><i class="fa fa-arrows-alt"></i></a>--}}
{{--<div class="wt-projecttitle">--}}
{{--<h3><span class="head-title">Question</span></h3>--}}
{{--</div>--}}
{{--<div class="wt-rightarea">--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle-{{data.counter}}" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>--}}
{{--<a href="#" onclick="event_preventDefault(event);" class="wt-deleteinfo wt-delete-data"><i class="lnr lnr-trash"></i></a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="wt-collapseexp collapse show" id="innertitle-{{data.counter}}" aria-labelledby="accordioninnertitle" data-parent="#accordion">--}}
{{--<div class="wt-formtheme wt-userform wt-formprojectinfo">--}}
{{--<fieldset>--}}
{{--   <div class="form-group">--}}
{{--      <input type="text" name="settings[faq][{{data.counter}}][faq_question]" class="wt-input-title form-control" placeholder="Question">--}}
{{--   </div>--}}
{{--   <div class="form-group">--}}
{{--      <textarea class="form-control" name="settings[faq][{{data.counter}}][faq_answer]" placeholder="Answer"></textarea>--}}
{{--   </div>--}}
{{--</fieldset>--}}
{{--</div>--}}
{{--</div>--}}
{{--</li>--}}
{{--</script>--}}
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
