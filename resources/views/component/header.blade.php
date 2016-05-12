<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('title') | 图书管理系统</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap/bootstrap-theme.min.css">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet"
          type="text/css">
</head>
<body>
<div class="navbar navbar-default navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="/">
                <span>图书管理系统</span> </a></div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">书目</a></li>
                <li class="{{ Request::is('user') ? 'active' : '' }}"><a href="/user">用户</a></li>
            </ul>
        </div>
    </div>
</div>