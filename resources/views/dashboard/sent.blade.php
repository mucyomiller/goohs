@extends('dashboard.theme')
@section('content')
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid"> 
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar mini mini-mobile" id="main-menu" data-inner-menu="1">
 <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrappers">
  <!-- BEGIN MINI-PROFILE -->
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
	</div>
    <div class="user-info">
      <div class="greeting">Welcome</div>
      <div class="username">John <span class="semi-bold">Smith</span></div>
      <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
  
  <!-- BEGIN MINI-WIGETS -->

   <!-- END MINI-WIGETS -->
   
   <!-- BEGIN SIDEBAR MENU -->	
	<p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
         <ul>
        <li class="start "> <a href="{{route('backend.index')}}"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow "></span> </a> 
        </li>
        <li class=""> <a href="email.html"> <i class="fa fa-envelope"></i> <span class="title">Email</span> <span class="badge badge-disable pull-right ">203</span></a> </li>
      </ul>
	<div class="side-bar-widgets">
	<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="fa fa-plus"></i></a></span></p>
	<ul class="folders" >
		  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
		  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
		  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
		  <li class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" ></li>
	</ul>
	<p class="menu-title">PROJECTS </p>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Redesign home page</p>
			</div>
		</div>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Statistical report</p>
			</div>
		</div>
	</div>
	
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
 </div>

   <div class="inner-menu nav-collapse">   
    <div id="inner-menu">
        <div class="inner-wrapper" >    
          <a href="send_email.html" class="btn btn-block btn-primary" ><span class="bold">COMPOSE</span></a>
         </div>
         <div class="inner-menu-content">
          <p class="menu-title">FOLDER <span class="pull-right"><i class="icon-refresh"></i></span></p>
          </div>
         <ul class="big-items">
          <li class="active"><span class="badge badge-important">5</span><a href="{{ route('backend.message')}}" > Inbox</a></li>
          <li><a href="{{ route('backend.sent')}}">Sent</a></li>
         </ul>
     </div> 
  </div>
 </div>
  <a href="#" class="scrollup">Scroll</a>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE -->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>

    <div class="content">    
	<div class="page-title" style="display:none"> <a href="#" id="btn-back"><i class="icon-custom-left"></i></a>
        <h3>Back- <span class="semi-bold">Inbox</span></h3>
     </div>		
		<div class="row"  id="inbox-wrapper">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple" >
							<div class="grid-body no-border email-body" >
							<br>
							 <div class="row-fluid" >
							 <div class="row-fluid dataTables_wrapper">
								<h2 class=" inline">Sent </h2>
								<div class="btn-group m-l-10 m-b-10">
									<a href="#" data-toggle="dropdown" class="btn btn-white btn-mini dropdown-toggle"><span class="caret single"></span></a>
									<ul class="dropdown-menu">
											  <li><a href="#">Action</a></li>
											  <li class="divider"></li>
											  <li><a href="#">Others</a></li>
									</ul>
							     </div>
								 
								<div class="pull-right margin-top-20">
									<div class="dataTables_paginate paging_bootstrap pagination">
										<ul>
											<li class="prev disabled"><a href="#"><i class="fa fa-chevron-left"></i></a></li>
											<li class="active"><a href="#">1</a></li><li><a href="#">2</a></li>
											<li class="next"><a href="#"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
									<div class="dataTables_info hidden-xs" id="example_info">Showing <b>1 to 10</b> of 14 entries</div></div>
									<div class="clearfix"></div>
								</div>
								
								<div id="email-list">									
								<table class="table table-striped table-fixed-layout table-hover" id="emails" > 
								  <thead>
									<tr>
									  <th class="small-cell"></th>
									  <th class="small-cell"></th>
									  <th class="medium-cell"></th>
									  <th ></th>
									  <th class="medium-cell"></th>
									</tr>
								  </thead>
								  <tbody>
									<tr >
									 <td  class="small-cell v-align-middle">
									  <div class="checkbox check-success ">
										<input id="checkbox8" type="checkbox" value="1" >
											<label for="checkbox8"></label>
										</div>
									</td>
									  <td  class="small-cell v-align-middle">
									   <div class="star">
										<input id="checkbox9" type="checkbox" value="1" checked >
											<label for="checkbox9"></label>
										</div>
									  </td>
									  <td  class="clickable v-align-middle">David Nester</td>
									  <td  class="clickable tablefull v-align-middle"><span class="muted">Less spam, and mobile access. Gmail is email that's intuitive, ...efficient, and useful. And maybe even fun.</span></td>
									  <td class="clickable"><span class="muted">Yesterday </span></td>
								   
									</tr>
									<tr >
									  <td  class="small-cell v-align-middle">
									  <div class="checkbox check-success ">
										<input id="checkbox10" type="checkbox" value="1" >
											<label for="checkbox10"></label>
										</div>
									</td>
									  <td  class="small-cell v-align-middle">
									   <div class="star">
										<input id="checkbox11" type="checkbox" value="1" >
											<label for="checkbox11"></label>
										</div>
									  </td>
									  <td  class="clickable v-align-middle">Jane Smith</td>
									  <td  class="clickable v-align-middle"><span class="label label-important">HOME</span>&nbsp;<span class="muted">Open the door to success, maximum revanue efficient, and useful</span></td>
									  <td class="clickable v-align-middle"><span class="muted">Yesterday </span></td>								     
									</tr>
									<tr >
									  <td  class="v-align-middle">
									  <div class="checkbox check-success ">
										<input id="checkbox12" type="checkbox" value="1" >
											<label for="checkbox12"></label>
										</div>
									</td>
									  <td  class="v-align-middle">
									   <div class="star">
										<input id="checkbox13" type="checkbox" value="1" >
											<label for="checkbox13"></label>
										</div>
									  </td>
									  <td  class="clickable v-align-middle">David Nester</td>
									  <td  class="clickable v-align-middle"><span class="muted">Less spam, and mobile access. Gmail is email that's intuitive, ...efficient, and useful. And maybe even fun.</span></td>
									  <td class="clickable"><span class="muted">Yesterday </span></td>
								     
									</tr>
									<tr >
									  <td  class="v-align-middle">
									  <div class="checkbox check-success ">
										<input id="checkbox14" type="checkbox" value="1" >
											<label for="checkbox14"></label>
										</div>
									</td>
									  <td  class="v-align-middle">
									   <div class="star">
										<input id="checkbox15" type="checkbox" value="1" checked>
											<label for="checkbox15"></label>
										</div>
									  </td>
									  <td  class="clickable v-align-middle">David Nester</td>
									  <td  class="clickable v-align-middle"><span class="muted"><span class="label label-success">WORK</span>&nbsp;Less spam, and mobile access. Gmail is email that's intuitive, ...efficient, and useful. And maybe even fun.</span></td>
									  <td class="clickable"><span class="muted">Yesterday </span></td>
								     
									</tr>
									<tr >
									  <td  class="v-align-middle">
									  <div class="checkbox check-success ">
										<input id="checkbox16" type="checkbox" value="1" >
											<label for="checkbox16"></label>
										</div>
									</td>
									  <td  class="v-align-middle">
									   <div class="star">
										<input id="checkbox17" type="checkbox" value="1" checked>
											<label for="checkbox17"></label>
										</div>
									  </td>
									  <td  class="clickable v-align-middle">Jane Smith</td>
									  <td  class="clickable v-align-middle"><span class="muted">Open the door to success, maximum revanue efficient, and useful</span></td>
									  <td class="clickable"><span class="muted">Yesterday </span></td>
								     
									</tr>									
								</tbody>
								</table>
							 </div>							
							 </div>							
							</div>
							</div>	
						</div>
					</div>
				</div>	
		</div>
		<div class="row">
			<div class="col-md-12" id="preview-email-wrapper" style="display:none">
				<div class="row">
					<div class="col-md-12">
						 <div class="grid simple">
						 	<div class="grid-title no-border">
								<h4></h4>
								<div class="tools">
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="grid-body no-border" style="min-height: 850px;">
								<div class="" >
									<h1 id="emailheading">Meeting</h1>
									<br>
									<div class="control">									
										<div class="pull-left">
										<div class="btn-group">
										<a href="#" data-toggle="dropdown" class="btn btn-mini dropdown-toggle">
										David Nester
										<span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
											  <li><a href="#">Action</a></li>
											  <li><a href="#">Another action</a></li>
											  <li><a href="#">Something else here</a></li>
											  <li class="divider"></li>
											  <li><a href="#">Separated link</a></li>
										</ul>
									</div>
										<label class="inline"><span class="muted">&nbsp;&nbsp;to</span> <span class="bold small-text">johnsmith@skyace.com</span></label>
										</div>
										<div class="pull-right">
											<span class="muted small-text">August 5 2013 11.30PM</span>
										</div>
										<div class="clearfix"></div>
									</div>	
									<br>
									<div class="email-body">
										<p>Thank you for taking the time to meet with me and other representatives of the last week regarding the challenges facing public transportation, especially. We enjoyed meeting with you and . I’m glad we had the opportunity to discuss an issue that affects so many people in [city/state/community]. We especially appreciate your commitment to [describe any commitment made by the official].
										The [coalition name] believes that public transportation is vital to quality of life of our community. As we discussed …
										Our coalition would greatly appreciate your support  in ensuring that public transportation is widely available to all who need it – especially the people living in . On behalf of all our members and the thousands of citizens they represent, I want to thank you for taking the time out of your busy schedule to discuss this important matter.
										</p>
									</div>						
								</div>							
							</div>
							</div>	
						</div>
				</div>
			</div>		
		</div>
	

 <div class="clearfix"></div>
  </div>
   <div class="clearfix"></div>
	<div class="admin-bar" id="quick-access" style="display:">
		<div class="admin-bar-inner">
		
			<button class="btn btn-danger  btn-add" type="button"><i class="icon-trash"></i> Move to trash</button>
			<button class="btn btn-white  btn-cancel" type="button">Cancel</button>
		</div>
	</div> 
  <!-- END PAGE --> 
</div>
<!-- BEGIN CHAT --> 
<div class="chat-window-wrapper">
	<div id="main-chat-wrapper" class="inner-content">
        <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users" >
            <div class="chat-header">	
            <div class="pull-left">
                <input type="text" placeholder="search">
            </div>		
                <div class="pull-right">
                    <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
                </div>			
            </div>	
            <div class="side-widget">
               <div class="side-widget-title">group chats</div>
                <div class="side-widget-content">
                 <div id="groups-list">
                    <ul class="groups" >
                        <li><a href="#"><div class="status-icon green"></div>Office work</a></li>
                        <li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="side-widget fadeIn">
               <div class="side-widget-title">favourites</div>
               <div id="favourites-list">
                <div class="side-widget-content" >
                    <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <span class="badge badge-important">3</span>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>	
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>					
                </div>
                </div>
            </div>
            <div class="side-widget">
               <div class="side-widget-title">more friends</div>
                 <div class="side-widget-content" id="friends-list">
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">

                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>	
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>		
                    <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                        <div class="user-profile">
                            <img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            Jane Smith
                            </div>
                            <div class="user-more">
                            Hello you there?
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">

                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon green"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>	
                    <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                        <div class="user-profile">
                            <img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                        </div>
                        <div class="user-details">
                            <div class="user-name">
                            David Nester
                            </div>
                            <div class="user-more">
                            Busy, Do not disturb
                            </div>
                        </div>
                        <div class="user-details-status-wrapper">
                            <div class="clearfix"></div>
                        </div>
                        <div class="user-details-count-wrapper">
                            <div class="status-icon red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>				
                </div>		
            </div>
        </div>

        <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
        <div class="chat-header">	
            <div class="pull-left">
                <input type="text" placeholder="search">
            </div>		
                <div class="pull-right">
                    <a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
                </div>					
            </div>
        <div class="clearfix"></div>	
        <div class="chat-messages-header">
        <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
        <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
        </div>
        <div class="chat-messages scrollbar-dynamic clearfix">
            <div class="inner-scroll-content clearfix">
            <div class="sent_time">Yesterday 11:25pm</div>
            <div class="user-details-wrapper " >
                <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">	
                        Hello, You there?
                   </div>
                </div>					
                <div class="clearfix"></div>
               <div class="sent_time off">Yesterday 11:25pm</div>
            </div>		
            <div class="user-details-wrapper ">
                <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">	
                        How was the meeting?
                   </div>
                </div>					
                <div class="clearfix"></div>
                <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="user-details-wrapper ">
                <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="user-details">
                  <div class="bubble">	
                        Let me know when you free
                   </div>
                </div>					
                <div class="clearfix"></div>
                <div class="sent_time off">Yesterday 11:25pm</div>
            </div>
            <div class="sent_time ">Today 11:25pm</div>
            <div class="user-details-wrapper pull-right">
                <div class="user-details">
                  <div class="bubble sender">	
                        Let me know when you free
                   </div>
                </div>					
                <div class="clearfix"></div>
                <div class="sent_time off">Sent On Tue, 2:45pm</div>
            </div>		
        </div>
        </div>
        <div class="chat-input-wrapper" style="display:none">
            <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- END CHAT -->
</div>
<!-- END CONTAINER --> 
@endsection()