@extends('main')

<!--  PAPER WRAP -->
<div class="wrap-fluid">
    {{--<div class="container-fluid paper-wrap bevel tlbr" style="background: url('assets/img/r7a-Xlog9Fc.jpg')">--}}
    <div class="container-fluid paper-wrap bevel tlbr" style="background: url('assets/img/1B9gE8lVt-s.jpg')">





        <!-- CONTENT -->
        <!--TITLE -->
        <div class="row" >
            <div id="paper-top">
                <div class="col-sm-3">
                    <h2 class="tittle-content-header">
                        <i class="icon-document-edit"></i>
                        <span> Чебурашка ищет дом
                            </span>
                    </h2>

                </div>

                <div class="col-sm-9">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="tittle-middle-header">

                        <div class="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Вас устроит телефонная будка?
                        </div>


                    </div>

                </div>

            </div>
        </div>
        <!--/ TITLE -->

        <!-- BREADCRUMB -->
    {{--<ul id="breadcrumb">--}}
    {{--<li>--}}
    {{--<span class="entypo-home"></span>--}}
    {{--</li>--}}
    {{--<li><i class="fa fa-lg fa-angle-right"></i>--}}
    {{--</li>--}}
    {{--<li><a href="#" title="Sample page 1">Form</a>--}}
    {{--</li>--}}
    {{--<li><i class="fa fa-lg fa-angle-right"></i>--}}
    {{--</li>--}}
    {{--<li><a href="#" title="Sample page 1">Form Element</a>--}}
    {{--</li>--}}
    {{--<li class="pull-right">--}}
    {{--<div class="input-group input-widget">--}}

    {{--<input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}

    <!-- END OF BREADCRUMB -->


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">
                    <div class="nest" id="basicClose">
                        {{--<div class="title-alt">--}}
                        {{--<h6></h6>--}}


                        {{--</div>--}}

                        <div class="body-nest" id="basic" style="margin-top: 300px;">
                            <div class="form_center">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Укажите адрес дома</label>
                                        <input type="street" placeholder="Воронеж Шишкова 125" id="street" class="form-control">
                                    </div>



                                    <button class="btn btn-info" type="submit" style="margin-left: 45%">Каково здесь?</button>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>






        <!-- /END OF CONTENT -->



        <!-- FOOTER -->
        <div class="footer-space"></div>

        <!-- / END OF FOOTER -->


    </div>
</div>
<!--  END OF PAPER WRAP -->