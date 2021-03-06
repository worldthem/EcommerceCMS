<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <meta name="author" content="violacms.com"/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="shortcut icon" href="{{URL::to('/')}}/img/favicon.ico" type="image/png"/> 
     
 <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('title')</title>
        
        <script type="text/javascript">
            <!--
               var url_website= '{{URL::to('/')}}';
               var url_resources = '{{URL::to('/')."/resources/"}}';
             -->
        </script>
        
      <link href="{{URL::to('/')}}/resources/admin_assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{URL::to('/')}}/resources/admin_assets/css/style.css" rel="stylesheet"/>
      <script src="{{URL::to('/')}}/resources/admin_assets/js/jquery-3.3.1.min.js"></script>
      <script src="{{URL::to('/')}}/resources/admin_assets/js/jquery-ui.min.js"></script>
      <script type="text/javascript" src="{{URL::to('/')}}/resources/admin_assets/js/admin.js"></script>
      {!! \Wh::hooks('adminheader') !!}
 </head>
<body>
  
 
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                 <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo_admin" href="{{url('/')}}">&nbsp;</a>
                 </div>
                
                <div class="collapse navbar-collapse">  
                <ul class="nav navbar-nav navbar-right admin_menu"> 
                   @foreach(\Wh::doAdminMenu() as  $k_menu=>$v_menu)
                      @if(count($v_menu)>1)
                           
                          <li class="dropdown">
                           <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                  {{ array_shift($v_menu) }}
                                 <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">
                                     {!! \Wh::generateAdminMenu($v_menu) !!}
                                </ul>
                          </li>
                          @else
                          {!! \Wh::generateAdminMenu($v_menu) !!}
                          @endif
                   @endforeach
                  </ul>
                     
                </div>
            </div>
        </nav>
 
 <div class="content">
   <div class="container-fluid" >
       <div class="row">
             <div class="col-md-12">
                <nav class="nav-tab-wrapper woo-nav-tab-wrapper">
                   <ul>
                      {!! \Wh::generateAdminMenu(40,'arr') !!}
                   </ul>
                 <div class="clear"></div>
                 </nav>
             </div>  
          
             @yield('content')
            
            <div class="height10px"></div>
            <div class="text_align_center"> 
                <p>
                  <a href="https://watcms.com/">Made by WatCMS.com</a>
                </p>   
           </div>
           
       </div>
    </div>
   </div> 
 </div> 
 
     
     
<div class="modal fade" tabindex="-1" role="dialog" id="load_ajax_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal_load_title"> </h4>
          </div>
         <div class="modal_load_content">   
        </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  


<!-- Plugin JavaScript -->
<script src="{{URL::to('/')}}/resources/admin_assets/js/bootstrap.min.js" type="text/javascript"></script>
    
<link href="{{URL::to('/')}}/resources/admin_assets/css/animate.min.css" rel="stylesheet"/>
<link href="{{URL::to('/')}}/resources/assets/css/font-awesome.min.css" rel="stylesheet"/>

 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<!----> 
  <script src="{{URL::to('/')}}/resources/admin_assets/js/tinymce/tinymce.min.js"></script>
  <script src="{{URL::to('/')}}/resources/admin_assets/js/tinymce/init-tinymce.js"></script>
 
 
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="load_icons_modal" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <input type="text" id="search-input" class="form-control" onkeyup="search_icon(this.value)"  placeholder="Please enter a search key, like cart or star or user or ..." title="Type in a name">
      </div>
        <div class="modal_load_contentIcon">   
           <div class="col-md-12">
             @include('admin.layouts.iconList')
          </div>
        <div class="clear"></div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
  {!! \Wh::hooks('adminfooter') !!}
   </body>
</html>         