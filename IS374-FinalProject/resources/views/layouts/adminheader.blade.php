<!DOCTYPE html>
<html lang="en">


<head>
    <title>EEducation Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{asset('/build/assets/images/fav.ico')}}" type="{{asset('/build/assets/image/x-icon')}}">
    <!-- GOOGLE FONT -->
    <link href="{{asset('/build/assets/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700')}}" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('/build/assets/css/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('/build/assets/css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('/build/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('/build/assets/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('/build/assets/css/style-mob.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index-2.html" class="logo"><img src="{{asset('/build/assets/images/logo1.png')}}" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="{{asset('/build/assets/admin-all-enquiry.html')}}" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="{{asset('/build/assets/admin-course-enquiry.html')}}" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="{{asset('/build/assets/admin-admission-enquiry.html')}}" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="{{asset('/build/assets/images/user/6.png')}}" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="{{asset('/build/assets/admin-panel-setting.html')}}" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>




<!--== BODY CONTNAINER ==-->
<div class="container-fluid sb2">
    <div class="row">
        <div class="sb2-1">
            <!--== USER INFO ==-->
            <div class="sb2-12">
                <ul>
                    <li><img src="{{asset('/build/assets/images/placeholder.jpg')}}" alt="">
                    </li>
                    <li>
                        <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                    </li>
                    <li></li>
                </ul>
            </div>
            <!--== LEFT MENU ==-->
            <div class="sb2-13">
                <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="{{route('admin')}}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                    </li>

                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> All Courses</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{route('admin_all_course')}}">All Course</a>
                                </li>
                                <li><a href="{{route('admin_new_course')}}">Add New Course</a>

                            </ul>
                        </div>
                   




                    <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students</a>
                        <div class="collapsible-body left-sub-menu">
                            <ul>
                                <li><a href="{{route('admin_details_student')}}">All Students</a>
                                </li>
                                <li><a href="{{route('admin_add_student')}}">Add New Students</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
        </div>

 <!--== BODY INNER CONTAINER ==-->
 <div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="{{route('dashboard')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="{{route('dashboard')}}"> Dashboard</a>
            </li>
            <li class="page-back"><a href="{{route('dashboard')}}"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>


