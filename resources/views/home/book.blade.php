@extends('layouts.master')
@section('title','图书')
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
                                <span class="input-group-btn"> <a class="btn btn-primary" type="submit">图书搜索</a> </span>
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
                            <th>书名</th>
                            <th>ISBN</th>
                            <th>书目</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>《JavaEE开发的颠覆者：Spring Boot实战 》</td>
                            <td>9787121282089</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>《JavaEE开发的颠覆者：Spring Boot实战 》</td>
                            <td>9787121282089</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>《JavaEE开发的颠覆者：Spring Boot实战 》</td>
                            <td>9787121282089</td>
                            <td>3</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop