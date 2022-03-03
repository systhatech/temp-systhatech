<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta charset="utf-8" />
    <title>{{ isset($comp_static->title) ? $comp_static->title : 'Systha Tech LLC'}}</title>
    <meta name="description" content="{{isset($comp_static->seo_description) ? $comp_static->seo_description : 'systhatech'}}">
    <meta name="keywords" content="{{isset($comp_static->seo_keyword) ? $comp_static->seo_keyword : 'systhatech' }}">
    <meta name="author" content="Systha Tech LLC">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#e8f1ff">
    <!--Website-favicon-->
    <link href="/getFile?path=venndors/attachments&file={{$vendor->profile_pic}}" rel="icon">
    <!--Plugin-css-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
    <link href="/systhatech/css/all.css" rel="stylesheet">
   
    <!-- Template-style-->
</head>
<body>
    