<?php session_start();
include '../connect.php';?>
<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>TODO | THINK FIRST</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="#">
      <meta name="keywords" content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="#">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- flag icon framework css -->
      <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
      <!-- Menu-Search css -->
      <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
      <!-- Mini-color css -->
      <link rel="stylesheet" type="text/css" href="assets/pages/jquery-minicolors/css/jquery.minicolors.css" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!--color css-->

      <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" type="text/css" href="assets/css/mine.css">

  </head>
  <body>

     <div id="pcoded" class="pcoded">
         <div class="pcoded-container navbar-wrapper">

             <nav class="navbar header-navbar pcoded-header">
                 <div class="navbar-wrapper">
                     <div class="navbar-logo" style="height: 55px;">
                         <a class="mobile-menu" id="mobile-collapse" href="#!">
                             <i class="ti-menu"></i>
                         </a>

                         <a href="">
                           Think First Technology
                         </a>
                         <a class="mobile-options">
                             <i class="ti-more"></i>
                         </a>
                     </div>
                     <div class="navbar-container container-fluid">
                         <div>
                             <ul class="nav-left">
                                 <li>
                                     <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                 </li>


                             </ul>
                             <ul class="nav-right">


                                 <li class="user-profile header-notification">
                                     <a href="#!">
                                         <img src="assets/images/avatar-1.png" alt="User-Profile-Image">
                                         <span>User</span>
                                         <i class="ti-angle-down"></i>
                                     </a>
                                     <ul class="show-notification profile-notification">

                                         <!-- <li>
                                             <a href="#!">
                                                 <i class="ti-layout-sidebar-left"></i> Logout
                                             </a>
                                         </li> -->
                                     </ul>
                                 </li>
                             </ul>

                         </div>
                     </div>
                 </div>
             </nav>

             <!-- Sidebar chat start -->

             <!-- Sidebar inner chat start-->

             <!-- Sidebar inner chat end-->
             <div class="pcoded-main-container">
                 <div class="pcoded-wrapper">
                     <nav class="pcoded-navbar">
                         <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i>Home</a></div>
                         <ul>
                           <li style="    border: 1px solid white;
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 20px;"><i class="ti-home" style="margin-right: 15px;"></i><a></a></li>
                         </ul>

                     </nav>
                     <div class="pcoded-content">
                         <div class="pcoded-inner-content">

                             <!-- Main-body start -->
                             <div class="main-body">
                                 <div class="page-wrapper">
                                     <!-- Page header start -->
                                     <div class="page-header">
                                         <div class="page-header-title">
                                             <h4>To-Do</h4>
                                         </div>
                                         <div class="page-header-breadcrumb">
                                             <ul class="breadcrumb-title">
                                                 <li class="breadcrumb-item">
                                                     <a href="">
                                                     <i class="icofont icofont-home"></i>
                                                 </a>
                                                 </li>
                                                 <li class="breadcrumb-item"><a href="#!">To-Do</a>
                                                 </li>
                                                 <li class="breadcrumb-item"><a href="#!">To Do</a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <!-- Page header end -->
                                     <!-- Page-body start -->
                                     <div class="page-body">
                                         <div class="row">

                                             <div class="col-xl-12">
                                                 <!-- To Do List card start -->
                                                 <div class="card">
                                                     <div class="card-header">
                                                         <h5>To Do List
                                                 </h5>
                                                         <label class="label label-success">On</label>
                                                         <div class="card-header-right">
                                                             <i class="icofont icofont-rounded-down"></i>
                                                             <i class="icofont icofont-refresh"></i>
                                                             <!-- <i class="icofont icofont-close-circled"></i> -->
                                                         </div>
                                                     </div>
                                                     <div class="card-block">
                                                       <p class="cool"></p>
                                                         <div class="input-group input-group-button">
                                                             <input type="text" class="form-control add_task_todo" placeholder="Create your task list" name="task-insert">
                                                             <span class="input-group-addon">
                                                       <button id="add-btn" class="btn btn-primary addMe">Add <i class="icofont icofont-close-add"></i></button>
                                                   </span>
                                                         </div>
                                                    <div class="mCover" >
                                                                   <!-- <div class="mBase" >

                                                                             <div class="forInput" >
                                                                                    <input type="checkbox" name=""  value="">
                                                                             </div>
                                                                             <div class="forText" >
                                                                                  <p >jhfjfgdgdkjbvhgvhjgjhgfjhgfjhgfjhfjfgdgdkjbvhgvhjgjhgfjhgfjhgfjhfjfgdgd</p>
                                                                             </div>
                                                                             <div class="forEditDelete" >
                                                                               <span>some minute ago</span>
                                                                                   <div class="f-right">
                                                                                       <a href="#" data-toggle="modal" data-target="#pop"  class="delete_todolist delete"><i class="icofont icofont-ui-edit" ></i></a>
                                                                                   </div>
                                                                                   <div class="f-right">
                                                                                       <a href="#" class="delete_todolist edit"><i class="icofont icofont-ui-delete" ></i></a>
                                                                                   </div>
                                                                             </div>

                                                                   </div> -->


                                                      </div>
                                                    </div>

                                                     </div>
                                                 </div>
                                                 <!-- To Do List card end -->
                                             </div>
                                         </div>

                                     </div>
                                     <!-- Page-body end -->
                                 </div>
                             </div>
                             <!-- Main-body end -->

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>



     <!-- Todo Modal -->
     <div class="modal fade" id="pop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="modalLabel">Add new todo</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
                 </div>
                 <div class="modal-body">
                     <div class="row">
                         <label class="col-sm-3 col-form-label">Edit Todo</label>
                         <div class="col-sm-9">
                             <input type="text" class="form-control save_task_todo" placeholder="Type your Task Here">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                      <p class="empty"></p>
                     <button type="button" class="save_btn btn btn-primary">Save</button>
                     <button type="button" class="btn btn-default close_btn" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>

</div>

<!-- Required Jquery -->
<script type="text/javascript" src="bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="bower_components/classie/js/classie.js"></script>
<!-- Color picker js -->
<script type="text/javascript" src="bower_components/spectrum/js/spectrum.js"></script>
<script type="text/javascript" src="bower_components/jscolor/js/jscolor.js"></script>
<!-- Mini-color js -->
<script type="text/javascript" src="assets/pages/jquery-minicolors/js/jquery.minicolors.min.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.mousewheel.min.js"></script>
<script>
    "use strict";
    $(document).ready(function() {

            // Color picker js start
            function change_checkbox_color() {
                $('.color-box .show-box').on('click', function() {
                    $(".color-box").toggleClass("open");
                });

                $('.colors-list a').on('click', function() {
                    var curr_color = $('main').data('checkbox-color');
                    var color = $(this).data('checkbox-color');
                    var new_colot = 'checkbox-' + color;

                    $('.rkmd-checkbox .input-checkbox').each(function(i, v) {
                        var findColor = $(this).hasClass(curr_color);

                        if (findColor) {
                            $(this).removeClass(curr_color);
                            $(this).addClass(new_colot);
                        }

                        $('main').data('checkbox-color', new_colot);

                    });
                });
            }

            // Mini-color js start
            $('.demo').each(function() {
                $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    defaultValue: $(this).attr('data-defaultValue') || '',
                    format: $(this).attr('data-format') || 'hex',
                    keywords: $(this).attr('data-keywords') || '',
                    inline: $(this).attr('data-inline') === 'true',
                    letterCase: $(this).attr('data-letterCase') || 'lowercase',
                    opacity: $(this).attr('data-opacity'),
                    position: $(this).attr('data-position') || 'bottom left',
                    swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
                    change: function(value, opacity) {
                        if (!value) return;
                        if (opacity) value += ', ' + opacity;
                        if (typeof console === 'object') {
                            console.log(value);
                        }
                    },
                    theme: 'bootstrap'
                });

});
            // Mini-color js ends
        });
</script>
<script type="text/javascript" src="./views/Todo.js"></script>
<script type="text/javascript">
      document.querySelector('.mobile-options')addEventListener('click',e =>{
        console.log('ss');
      });
</script>
</body>

</html>
