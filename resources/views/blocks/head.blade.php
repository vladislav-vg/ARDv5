<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ARD – Architecture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cinzel:400,700%7CRaleway:500,500i,600,700%7CMaterial+Icons&amp;display=swap"/>
    <!-- Template Vendor's Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/vendor.css") }}"/>
    <!-- Template Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/main.css") }}"/>
    <!-- Favicons & App Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("img/content/apple-icon-57x57.png") }}"/>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset("img/content/apple-icon-60x60.png") }}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("img/content/apple-icon-72x72.png") }}"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("img/content/apple-icon-76x76.png") }}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("img/content/apple-icon-114x114.png") }}"/>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("img/content/apple-icon-120x120.png") }}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset("img/content/apple-icon-144x144.png") }}"/>
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("img/content/apple-icon-152x152.png") }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("img/content/apple-icon-180x180.png") }}"/>
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("img/content/android-icon-192x192.png") }}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("img/content/favicon-32x32.png") }}"/>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset("img/content/favicon-96x96.png") }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("img/content/favicon-16x16.png") }}"/>
    <link rel="manifest" href="{{ asset("img/content/manifest.json") }}"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="{{ asset("img/content/ms-icon-144x144.png") }}"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="icon" type="image/x-icon" href="{{ asset("img/content/favicon.ico") }}"/>
  </head>