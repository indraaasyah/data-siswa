@extends('layouts.frontend')

@section('content')
<section>
    <div class="container com-sp pad-bot-0">
        <div class="row">
            <div class="col-md-2">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <!-- <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <h4>Upcoming Event</h4>
                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <li>
                            <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Latinoo College Expo 2018</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Training at Team Fabio Clemente</h4>
                                </a>
                                <p>Nulla at velit convallis venenatis.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Nulla at velit convallis</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="events.html">
                                    <h4>Admissions Information Session and Tour</h4>
                                </a>
                                <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="col-md-8">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-3">
                    <div class="ho-lat-ev">
                        <h4>Pendaftaran Online</h4>
                        <p>Segera daftarkan diri anda dan bergabung bersama kami</p>
                    </div>
                </div>
                <div class="ho-st-login">
                    <ul class="tabs tabs-hom-reg">
                        <li class="tab col s12"><a href="#hom-vijay" class="active">Register</a>
                        </li>
                        <!-- <li class="tab col s6"><a href="#hom_log">Login</a>
                        </li> -->
                    <div class="indicator" style="right: 177px; left: 0px;"></div></ul>
                    <div id="hom-vijay" class="col s12 active">
                        {!! Form::open(['url' => '/postregister']) !!}
                            <div class="row">
                                <div class="input-field col s12">
                                {!!Form::text('nama_depan','',['class' => 'form-control','placeholder'=>'Nama Depan'])!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                {!!Form::text('nama_belakang','',['class' => 'form-control','placeholder'=>'Nama Belakang'])!!}
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="form-select" id="service-select">
                                        {!!Form::select('jenis_kelamin',['' => 'Pilih Jenis Kelamin','L'=>'Laki-laki', 'P'=>'Perempuan'],'L')!!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                {!!Form::email('email','',['class' => 'form-control','placeholder'=>'Email'])!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                {!!Form::password('password',['class' => 'form-control','placeholder'=>'Password'])!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                {!!Form::text('agama','',['class' => 'form-control','placeholder'=>'Agama'])!!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                {!!Form::textarea('alamat','',['class' => 'form-control','placeholder'=>'Alamat'])!!}
                                </div>
                            </div>
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="Register" class="waves-button-input"></i>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- <div id="hom_log" class="col s12" style="display: none;">
                        {!! Form::open(['url' => 'foo/bar']) !!}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Student user name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" class="validate">
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="Login" class="waves-button-input"></i>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div> -->
                </div>
            </div>
            <div class="col-md-2">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <!-- <div class="ho-ev-latest ho-ev-latest-bg-2">
                    <div class="ho-lat-ev">
                        <h4>Job Vacants</h4>
                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <li>
                            <div class="ho-ev-img"><img src="images/event/1.jpg" alt="">
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Almost before we knew it, we had left the ground</h4>
                                </a>
                                <p>Etiam ornare lacus nec lectus vestibulum aliquam.</p>
                                <span>Location: New York</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-img"><img src="images/event/2.jpg" alt="">
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Then came the night of the first falling star.</h4>
                                </a>
                                <p>Vestibulum sollicitudin sem arcu</p>
                                <span>Location: Los Angeles</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-img"><img src="images/event/3.jpg" alt="">
                            </div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Educate to Empower NYE Party</h4>
                                </a>
                                <p>Vestibulum sollicitudin sem arcu, eget ullamcorper purus hendrerit</p>
                                <span>Location: Chennai</span>
                            </div>
                        </li>
                        <li>
                            <div class="ho-ev-img"><img src="images/event/4.jpg" alt=""></div>
                            <div class="ho-ev-link">
                                <a href="#">
                                    <h4>Then came the night of the first falling star.</h4>
                                </a>
                                <p>Venenatis lacus lectus.</p>
                                <span>Location: Chicago</span>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>
@stop