@extends('main')

<div class="wrap-fluid">

    <div class="container-fluid paper-wrap bevel tlbr">





        <!-- CONTENT -->
        <!--TITLE -->
        {{--<div class="row" >--}}
            {{--<div id="paper-top">--}}
                {{--<div class="col-sm-3">--}}
                    {{--<h2 class="tittle-content-header">--}}
                        {{--<i class="icon-document-edit"></i>--}}
                        {{--<span> Чебурашка ищет дом--}}
                            {{--</span>--}}
                    {{--</h2>--}}

                {{--</div>--}}

                {{--<div class="col-sm-9">--}}
                    {{--<div class="devider-vertical visible-lg"></div>--}}
                    {{--<div class="tittle-middle-header">--}}

                        {{--<div class="alert">--}}
                            {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                            {{--Вас устроит телефонная будка?--}}
                        {{--</div>--}}


                    {{--</div>--}}

                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
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

                        <div class="body-nest" id="basic" style="margin-top: 30px;">
                            <div class="form_center">
                                <h2>{{ $house->street }} {{ $house->num_house }}</h2>
                                <img src="assets/img/mic1map.jpg" alt="">
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">левая
                                    <h3>Эти аспекты могут быть важны для вас</h3>
                                        <ul class="list-unstyled">
                                            <li class="text-danger">Пандус</li>
                                            <li class="text-success">Бассейн</li>
                                            <li class="text-danger">Садик</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">правая
                                    <h3>Рекомендуем - Шишкова 12</h3>
                                        <ul class="list-unstyled">
                                            <li class="text-success">Пандус</li>
                                            <li class="text-success">Бассейн</li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Вы можете рассчитывать на заслуженно высокий балл благоустроенности:</h4>
                                        <div class="div">

                                                @foreach ($achivments as $achiv)
                                                @if ($achiv->pic == 1)
                                                    <img src="assets/img/baby-carriage.svg" alt="мамочки" width="30px">
                                                @endif
                                                @if ($achiv->pic == 2)
                                                    <img src="assets/img/disabled.svg" alt="инвалиды" width="30px">
                                                @endif
                                                @if ($achiv->pic == 3)
                                                    <img src="assets/img/trophy.svg" alt="спортсмены" width="30px">
                                                @endif
                                                @if ($achiv->pic == 4)
                                                    <img src="assets/img/bus.svg" alt="транспорт" width="30px">
                                                @endif
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Общий рейтинг:</h4>
                                        <h3 style="font-size: 50px">{{$reiting}}/10 </h3>
                                        {{--<div class="full" style="display: inline-block">--}}
                                            {{--<img src="assets/img/tree_full.png" alt="" width="50px">--}}
                                            {{--<img src="assets/img/tree_full.png" alt="" width="50px">--}}
                                            {{--<img src="assets/img/tree_full.png" alt="" width="50px">--}}
                                            {{--<img src="assets/img/tree_full.png" alt="" width="50px">--}}
                                            {{--<img src="assets/img/tree_full.png" alt="" width="50px">--}}
                                            {{--<img src="assets/img/tree_full.png" alt="" width="50px">--}}
                                            {{--<img src="assets/img/tree_full.png" alt="" width="50px">--}}
                                        {{--</div>--}}
                                        {{--<div class="empty" style="display: inline-block">--}}
                                            {{--<img src="assets/img/tree_empty.jpg" alt="" width="70px">--}}
                                            {{--<img src="assets/img/tree_empty.jpg" alt="" width="70px">--}}
                                            {{--<img src="assets/img/tree_empty.jpg" alt="" width="70px">--}}
                                        {{--</div>--}}
                                    </div>
                                </div>

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