<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Password Generator</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/bootstrap-daterangepicker/daterangepicker.css')}}" />

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">

        <!--logo start-->
        <a href="" class="logo" style="text-align: center"><b>Password Generator</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">

        </div>

    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->


    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Fill in the details to generate a password</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        {{--@if (count($errors))--}}
                            {{--<ul>--}}
                                {{--@foreach($errors as $error)--}}
                                    {{--<li>{!! $error !!}</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--@endif--}}

                            @include('includes.message-block')

                        <form class="form-horizontal style-form" method="post" action="{{ url('/createPassword') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Please enter your first name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" required="" value="{{ old('name') }}"  name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Password capitalized?</label>
                                <div class="col-sm-8">
                                    <input type="radio" name="capitalization" value="Yes"> Yes<br>
                                    <input type="radio" name="capitalization" value="No"> No
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Include Special Characters?</label>
                                <div class="col-sm-8">
                                    <input type="radio" name="specialChars" value="Yes"> Yes<br>
                                    <input type="radio" name="specialChars" value="No"> No
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Choose your password length</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="passwordlength">
                                        <option selected="">8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-theme">Generate</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->




        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>


<!--common script for all pages-->
<script src="{{asset('js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>

<!--custom switch-->
<script src="{{asset('js/bootstrap-switch.js')}}"></script>

<!--custom tagsinput-->
<script src="{{asset('js/jquery.tagsinput.js')}}"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="{{asset('js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-daterangepicker/date.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('js/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>


<script src="{{asset('js/form-component.js')}}"></script>


<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
