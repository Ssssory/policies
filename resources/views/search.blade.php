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
                    <div class="nest" id="basicClose" style="border-radius: 22px;">
                        {{--<div class="title-alt">--}}
                        {{--<h6></h6>--}}


                        {{--</div>--}}

                        <div class="body-nest" id="basic" style="margin-top: 300px;BACKGROUND: cadetblue;border-radius: 22px;">
                            <div class="form_center">
                                <form role="form" method="get" action="/results">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" style="COLOR: #f7eeee;">Укажите адрес дома</label>
                                        <input type="text" placeholder="Воронеж Шишкова 125" name="street" id="street" class="form-control" style="COLOR: #000!important;">
                                    </div>
                                    <div class="form-group ">
                                        {{--<ul class="list">--}}
                                            {{--<li>--}}
                                                {{--<input tabindex="11" type="radio" id="square-radio-1" name="square-radio">--}}
                                                {{--<label for="square-radio-1">Молодая семья</label>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="skin skin-flat">
                                                    <ul class="list list-unstyled">
                                                        <li>
                                                            <input tabindex="11" type="radio" id="square-radio-1" name="radio" value="moms">
                                                            <label for="square-radio-1" style="COLOR: #f7eeee;">Молодая семья</label>
                                                        </li>
                                                    </ul>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="skin skin-flat">
                                                    <ul class="list list-unstyled">
                                                        <li>
                                                            <input tabindex="11" type="radio" id="square-radio-2" name="radio" value="disabled">
                                                            <label for="square-radio-2" style="COLOR: #f7eeee;">Люди с ограниченными возможностями</label>
                                                        </li>
                                                    </ul>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="skin skin-flat">
                                                    <ul class="list list-unstyled">
                                                        <li>
                                                            <input tabindex="11" type="radio" id="square-radio-3" name="radio" value="sport">
                                                            <label for="square-radio-3" style="COLOR: #f7eeee;">Спортсмены</label>
                                                        </li>
                                                    </ul>
                                                    <div style="clear:both;"></div>
                                                </div>
                                            </div>
                                        </div>
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