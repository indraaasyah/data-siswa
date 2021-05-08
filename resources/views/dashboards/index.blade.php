@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Weekly Overview</h3>
                        <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
                    </div>
                    <div class="panel-body">    
                        <div class="row">
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-users"></i></span>
                                    <p>
                                        <span class="number">{{totalSiswa()}}</span>
                                        <span class="title">Jumlah Siswa</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-book"></i></span>
                                    <p>
                                        <span class="number">{{totalPelajaran()}}</span>
                                        <span class="title">Jumlah Mata Pelajaran</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <p>
                                        <span class="number">{{totalGuru()}}</span>
                                        <span class="title">Jumlah Guru</span>
                                    </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Ranking 5 Besar Siswa</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>RANKING </th>
                                                    <th>NAMA</th>
                                                    <th>NILAI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $ranking = 1;
                                                @endphp
                                                @foreach(ranking5Besar() as $s)
                                                <tr>
                                                    <td>{{$ranking}}</td>
                                                    <td>{{$s->nama_lengkap()}}</td>
                                                    <td>{{$s->rataRataNilai}}</td>
                                                </tr>
                                                @php
                                                    $ranking++;
                                                @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Ranking 5 Besar Matematika</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>RANKING </th>
                                                    <th>NAMA</th>
                                                    <th>NILAI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
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
    </div>
@stop