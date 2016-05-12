@extends('layouts.master')
@section('title','用户')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h1 class="text-center">搜索</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <form role="form">
                        <div class="form-group">
                            <div class="input-group"><input type="text" class="form-control" placeholder="请输入">
                                <span class="input-group-btn"> <a class="btn btn-primary" type="submit">用户搜索</a> </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>用户名</th>
                            <th>类型</th>
                            <th>状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>张三</td>
                            <td>读者</td>
                            <td>正常</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>张三</td>
                            <td>读者</td>
                            <td>正常</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>张三</td>
                            <td>读者</td>
                            <td>正常</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop