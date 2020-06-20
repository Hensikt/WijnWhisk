<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/mobile-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}">
    <script src="{{ asset('js/mobile_nav.js') }}"></script>
</head>
<body>
    <header id="header">
        <a href="<?php echo url('/')?>"><svg class="logo" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 376.72 139.68"><defs><style>.cls-1{fill:#fff;}</style></defs><path class="cls-1" d="M54.72,46.79,63.45,0H76.76L62.38,65.75H48.93l-10.55-44-10.55,44H14.38L0,0H13.31l8.77,46.69,8.8-38.42L29.12,0h15Z"/><path class="cls-1" d="M54.72,120.7l8.73-46.78H76.76L62.38,139.67H48.93l-10.55-44-10.55,44H14.38L0,73.92H13.31l8.77,46.69,8.8-38.42-1.76-8.27h15Z"/><path class="cls-1" d="M98.18,65.75H84.82V0H98.18Z"/><path class="cls-1" d="M136.69,0h13.36V45.52a22.11,22.11,0,0,1-2.74,11.09A18.77,18.77,0,0,1,139.58,64a23.88,23.88,0,0,1-11.26,2.61q-10.29,0-16-5.3t-5.74-15H120c0,3.23.67,5.6,2,7.14s3.44,2.3,6.32,2.3a7.62,7.62,0,0,0,6.1-2.66q2.27-2.67,2.27-7.59Z"/><path class="cls-1" d="M214.21,65.75H200.85l-26-43.26V65.75H161.49V0h13.36l26,43.35V0h13.32Z"/><path class="cls-1" d="M134.91,139.67H121.73V111.49H96v28.18H82.85V73.92H96v26.64h25.7V73.92h13.18Z"/><path class="cls-1" d="M160.43,139.67H147.25V73.92h13.18Z"/><path class="cls-1" d="M205.81,121.77a6.89,6.89,0,0,0-2.64-5.81q-2.62-2-9.49-4.28a67.77,67.77,0,0,1-10.85-4.43q-10.89-6-10.89-16.09a15.82,15.82,0,0,1,2.92-9.38,19.09,19.09,0,0,1,8.39-6.43A31.12,31.12,0,0,1,195.53,73a28.35,28.35,0,0,1,12.21,2.52,19.5,19.5,0,0,1,8.33,7.1,18.86,18.86,0,0,1,3,10.43H205.85a8.83,8.83,0,0,0-2.76-6.93q-2.78-2.48-7.78-2.47c-3.22,0-5.73.69-7.51,2.07a6.56,6.56,0,0,0-2.68,5.46,6.26,6.26,0,0,0,3.14,5.3,35.48,35.48,0,0,0,9.25,4Q208.75,104,213.89,109A17.05,17.05,0,0,1,219,121.68q0,8.43-6.28,13.21t-16.91,4.79a32.28,32.28,0,0,1-13.45-2.74,21.3,21.3,0,0,1-9.24-7.5,19.4,19.4,0,0,1-3.19-11h13.23q0,10.73,12.65,10.73c3.13,0,5.58-.64,7.33-1.93A6.35,6.35,0,0,0,205.81,121.77Z"/><path class="cls-1" d="M248,113.3l-6.85,7.58v18.79H228V73.92h13.18v29.8l5.8-8.17,16.29-21.63h16.21l-22.71,29.22,23.37,36.53H264.41Z"/><path class="cls-1" d="M348.74,123.49a5.07,5.07,0,0,1-.6,4.49c-.61,1.07-1.3,2.09-1.93,3.15a6.4,6.4,0,0,0-1,2.51,3.29,3.29,0,0,0,1.94,3.7.71.71,0,0,1,.49.84,4.08,4.08,0,0,0,0,.52c-.16-.08-.31-.1-.36-.17a1.15,1.15,0,0,0-.9-.48,1.32,1.32,0,0,1-.55-.25,3.8,3.8,0,0,1-1.46-3.48,9.3,9.3,0,0,1,1.51-4,22.61,22.61,0,0,0,1.62-3.08,5.2,5.2,0,0,0-.1-4.23,1.44,1.44,0,0,0-.71-.69,15.44,15.44,0,0,1-5.85-5.09,14.24,14.24,0,0,1-2.26-5.89c0-.23-.06-.46-.09-.69a3.32,3.32,0,0,1,.36-2.66l-.12,0-.25.49h-.09v-1.53l.72.16v2c1-.06,1.94-.13,2.88-.16,1.54-.05,3.08-.15,4.62-.09.48,0,.93,0,1.4,0,5.34,0,10.68,0,16,0,.67,0,1.35,0,2,0a1.79,1.79,0,0,1,.35.11,2.33,2.33,0,0,1,.5-.1c1.11,0,2.22,0,3.33,0,1.65,0,3.29.13,4.94.17.17,0,.45-.14.48-.26s.22-.56-.08-.79a.35.35,0,0,1-.1-.24,40.63,40.63,0,0,0-1.41-9.81c-.89-3.87-1.81-7.75-2.6-11.65a69.72,69.72,0,0,1-1.25-10.59c-.05-.9-.06-1.79-.09-2.72l-.65,0v-.49l.06,0c.72,0,.77-.07,1,.62a2,2,0,0,1,.08,1.59s0,.08,0,.12c.17,1,.39,2,.51,3a128.11,128.11,0,0,0,3.17,16.93c.71,2.71,1.29,5.45,1.9,8.19.16.7.21,1.43.3,2.15a1.37,1.37,0,0,1-.06.39h-.17v-.83a2.5,2.5,0,0,0,0-.61.35.35,0,0,0-.28-.2c-.08,0-.25.14-.25.21,0,1,0,2,0,3,.54.11.56.09.57-.39,0-.14,0-.29,0-.46.38.27.47.83.34,1.89-.47,0-.72.12-.69.41s.37.38.76.33c-.12,1-.19,2-.36,3-.86,5.06-3.77,8.59-8.25,10.93a1.73,1.73,0,0,0-.8,1.27,6,6,0,0,0,.7,4.55c.61,1.1,1.29,2.16,1.87,3.28a6.19,6.19,0,0,1,.72,3.73,3.64,3.64,0,0,1-1,2.11c-.67-.14-.67-.14-.75.55l-.54.05c-.21.57-.27.6-.85.35a3.57,3.57,0,0,1-.56-.26.39.39,0,0,1-.17-.29.37.37,0,0,1,.23-.23,8,8,0,0,1,.91-.07c.56-.91,1.58-1.68,1.56-3a6.54,6.54,0,0,0-.9-3.16c-.58-1-1.25-2-1.85-3a6.46,6.46,0,0,1-1.09-3.56,4.48,4.48,0,0,1,.1-.82.75.75,0,0,0-.11-.77c-.25-.27-.09-.65.29-.88a29.84,29.84,0,0,0,4.8-3.71,14.36,14.36,0,0,0,4.6-8.37c0-.13,0-.27,0-.42-12,.47-24,.47-36.05,0,.12.6.23,1.24.39,1.86a14.61,14.61,0,0,0,4.57,7.31,30.64,30.64,0,0,0,4.62,3.55c.13.08.29.28.27.4S348.89,123.3,348.74,123.49Zm23.41-14.06c-9.76-.34-19.51-.3-29.27,0C352.64,109.7,362.39,109.67,372.15,109.43Z"/><path class="cls-1" d="M367.17,136.16a10.41,10.41,0,0,1-.68.81,4.42,4.42,0,0,1-.62.48c-.06-.1-.08-.21-.14-.24a.93.93,0,0,0-.5-.11c-.09,0-.22.31-.17.38a.83.83,0,0,0,.43.29,4.28,4.28,0,0,0,.58.11c0,.51.35.76.78.94l0,.11-1.12.17v-1h-.6a7.3,7.3,0,0,1,0,.81.41.41,0,0,1-.25.26,62.15,62.15,0,0,1-11.57.36c-1.33-.09-2.66-.28-4-.43a2.85,2.85,0,0,1-.4-.1l.92-.86c-.71-.34-1,.29-1.52.62v-1c.4.06.78.15,1.17.17,2.36.15,4.72.32,7.09.43,1.28,0,2.57,0,3.86,0a13.38,13.38,0,0,0,2-.26,2.47,2.47,0,0,0,1.37-.86c.37-.44.23-.88-.35-.92a29.28,29.28,0,0,0-3.24-.15c-2.69.07-5.39.19-8.08.32a15.39,15.39,0,0,0-1.66.22l0,.12,2.23.92a6.54,6.54,0,0,1-3.1-.46c-.52-.24-.52-.44-.11-.94a4.28,4.28,0,0,1-.18-2.69c0-.35.15-.7.2-1a1.59,1.59,0,0,0,0-.57c-.84,1.29-.69,2.81-1,4.23a3.42,3.42,0,0,1-.24-2.49l-.3.4c-.35-.79.88-4,2.78-5.15-.06.11-.12.24-.19.35-.44.66-.88,1.32-1.31,2a.68.68,0,0,0-.11.43l1.46-2.2.09.05c-.17.39-.33.79-.53,1.16a1.31,1.31,0,0,0,1,2c1.45.23,2.9.42,4.35.59a31.27,31.27,0,0,0,6.56,0c.6-.06,1.2-.14,1.79-.24a.85.85,0,0,0,.75-1.12,3.18,3.18,0,0,0-.65-1.05c-.26-.32-.63-.56-.68-1a2.83,2.83,0,0,0,2,1.06,3,3,0,0,1,.82.26.92.92,0,0,1,.25,1.56,2.13,2.13,0,0,1-.94.54,25.84,25.84,0,0,1-3,.49c-1.14.1-2.3.09-3.45.1s-2.29,0-3.45,0c.38,0,.76.11,1.15.13l4.92.24a8.84,8.84,0,0,1,2.95.66,2,2,0,0,1,1.31,1.37,18.94,18.94,0,0,0,1-1.77,17.82,17.82,0,0,0,.54-1.84,5.52,5.52,0,0,1-1.38,4.14,6.74,6.74,0,0,0,2.08-3.52c.27.49,0,1.61-.7,2.72Zm-17.29-1.77h-.1c0,.31,0,.62.09.92s.08.46.21.51a1.81,1.81,0,0,0,.7,0v-.14l-.35,0,.11-.07Zm1.18.56c.08-.82-.81-1.15-.92-1.87A2.78,2.78,0,0,0,351.06,135Z"/><path class="cls-1" d="M344.52,73.44c0,.15,0,.3,0,.46-.1,1.33-.18,2.67-.32,4-.24,2.22-.48,4.44-.8,6.64-.65,4.6-1.9,9.08-2.93,13.59-.4,1.74-.71,3.49-1.06,5.23l-.07.27-.66.05c.08-.46.12-.89.22-1.31.72-3,1.42-6.1,2.19-9.13a106.89,106.89,0,0,0,2.3-11.88c.28-2,.55-4,.81-6,.07-.54.11-1.09.16-1.63a2.29,2.29,0,0,1,.07-.28Z"/><path class="cls-1" d="M369.6,73.66c0,.17.06.32.07.49.1,1.66.14,3.32.29,5,.21,2.22.47,4.44.78,6.64A83.06,83.06,0,0,0,372.91,96a73.41,73.41,0,0,1,1.83,8.16c0,.16,0,.32.05.51-.31,0-.48,0-.52-.36a53.62,53.62,0,0,0-1.73-8.22,88.93,88.93,0,0,1-2.44-12.72c-.29-2.61-.45-5.24-.66-7.86,0-.47,0-1-.05-1.43,0-.13,0-.27,0-.41Z"/><path class="cls-1" d="M364.68,122c1.08-.68,2.27-1.32,3.33-2.12a13.23,13.23,0,0,0,4.75-6.19,5,5,0,0,0,.24-2.34.44.44,0,0,1,.37-.54,2.8,2.8,0,0,1,.71-.06c.29,0,.25.24.21.43a11.69,11.69,0,0,1-1.3,4.07,14.46,14.46,0,0,1-8,6.66Z"/><path class="cls-1" d="M365.09,72.4V73h-1.25l-14-.08c-.51,0-.55,0-.91-.54Z"/><path class="cls-1" d="M351.1,122.92c-.66-.31-1.3-.56-1.88-.9a22.41,22.41,0,0,1-7.82-7.57,7.81,7.81,0,0,1-1.12-3.45c0-.1.1-.21.15-.32.07.08.19.15.21.25a12.77,12.77,0,0,0,3.28,6.15,20.52,20.52,0,0,0,7,5.15C351.23,122.38,351.13,122.6,351.1,122.92Z"/><path class="cls-1" d="M364.19,123.7a3.14,3.14,0,0,1-.39.24,9.25,9.25,0,0,1-3.37.6c-.55,0-1.1,0-1.65,0-.06,0-.15,0-.19,0-.32.2-.55.29-.42-.25l-.16,0c0,.15-.05.4-.11.41a1.53,1.53,0,0,1-.51-.07s0,0,0-.07c-.27.26-.6-.08-.89.09l-.19-.27-.26.28-.23-.32c-.1.25-.22.4-.51.23-.09,0-.24,0-.36,0s-.37.1-.51-.18c0-.1-.41-.06-.63-.06s-.35.11-.51.08c-1.08-.25-2.15-.52-3.22-.78a.2.2,0,0,1-.13-.11l3.25.36a29.12,29.12,0,0,0,9.36-.3,8.06,8.06,0,0,1,1.63,0Z"/><path class="cls-1" d="M350.86,125.16c1.3.77,2.82.69,4.31.82a22.84,22.84,0,0,0-4.81,2.17Z"/><path class="cls-1" d="M363.32,128.19l-.33.49c-.21-.2-.4-.38-.2-.69a3.64,3.64,0,0,0,.38-.66l-.64.65c-.1-.43-.55-.72-.13-1.17l-.26.15-.08,0c0-.1,0-.24.11-.3.5-.42,1-.84,1.53-1.23a4.24,4.24,0,0,1,.79-.36l-.57.74.05,0,.4-.35-.35.65.42-.26c-.39.8-.76,1.58-1.13,2.36Z"/><path class="cls-1" d="M341.77,110.73a1.57,1.57,0,0,1,.12.3,15.18,15.18,0,0,0,6.73,9.08,1.84,1.84,0,0,1,.33.35,2.25,2.25,0,0,1-.48-.14,17.07,17.07,0,0,1-5.22-5.21,12.52,12.52,0,0,1-1.57-4,2.44,2.44,0,0,1-.05-.39Z"/><path class="cls-1" d="M365.66,119c.63-.5,1.25-1,1.82-1.48a10.18,10.18,0,0,0,3.46-6.52.59.59,0,0,1,0-.2c.08-.12.19-.22.28-.33.08.14.24.27.23.4a8.26,8.26,0,0,1-1.3,3.81,14.19,14.19,0,0,1-4.4,4.29S365.72,119,365.66,119Z"/><path class="cls-1" d="M371.7,113.85c.18,1.17-1.66,3.52-3.24,4.08.62-.7,1.25-1.3,1.77-2a25.38,25.38,0,0,0,1.35-2.17Z"/><path class="cls-1" d="M363.32,128.19v0c.24-.42.49-.84.74-1.26l.06,0-.18.94a1.39,1.39,0,0,1,.15-.29,1.53,1.53,0,0,1,.18-.18c0,.09.13.17.13.26,0,.46-.09.92-.13,1.38a2.32,2.32,0,0,0,0,.37h0c-.46.1-.6-.09-.51-.8l-.26.47c-.28-.12-.44-.26-.28-.58A3.58,3.58,0,0,0,363.32,128.19Z"/><path class="cls-1" d="M367.72,118.5a14.44,14.44,0,0,1-4.8,2.76l4.71-2.89Z"/><path class="cls-1" d="M365.72,73.11v-.76c.56,0,1.1,0,1.63,0,.1,0,.27.21.26.33s-.18.22-.28.32-.08,0-.12,0C366.73,73.07,366.25,72.72,365.72,73.11Z"/><path class="cls-1" d="M347.65,72.44v.5c-.55,0-1.08,0-1.61,0-.13,0-.25-.22-.38-.34l.08-.15Z"/><path class="cls-1" d="M353.73,126.78a11,11,0,0,1,3.33-.89l.07.13c-.11.08-.22.23-.34.25Q355.26,126.54,353.73,126.78Z"/><path class="cls-1" d="M371.66,113.38c.15-.56.31-1,.41-1.5.05-.26,0-.55,0-.81,0-.1.15-.18.23-.27.09.09.25.19.24.27A3.7,3.7,0,0,1,371.66,113.38Z"/><path class="cls-1" d="M367.17,136.16l0-.12,1.05-1.43a1.85,1.85,0,0,1-.8,1.77C367.2,136.5,367.11,136.42,367.17,136.16Z"/><path class="cls-1" d="M338.55,105.35c.7.26.64.06.52,1.08C338.39,106.5,338.29,106.17,338.55,105.35Z"/><path class="cls-1" d="M364.25,129.46l.39-1.24h.18c-.05.61-.28,1.25.33,1.74l-.17.09-.72-.6Z"/><path class="cls-1" d="M374.46,106.45l-.1-1.21c.57,0,.51.36.55.68S374.85,106.44,374.46,106.45Z"/><path class="cls-1" d="M374.73,108.52c-.08-.37-.17-.74-.24-1.11s.05-.47.46-.42l-.11,1.53Z"/><path class="cls-1" d="M368.26,73v-.54c.62-.1.65-.07.58.54Z"/><path class="cls-1" d="M339,105c-.12-.17-.35-.35-.32-.5s.29-.26.45-.39l.11.1-.07.74Z"/><path class="cls-1" d="M355.17,123.42l-.66,0H354C354.13,123,354.79,123,355.17,123.42Z"/><path class="cls-1" d="M351.77,122.57l.57.18-.57.47Z"/><path class="cls-1" d="M333,74.13c.3-.6.58-1.1.79-1.62.12-.28.11-.62.21-.92,0-.1.21-.16.32-.25.08.12.24.27.22.35A4.27,4.27,0,0,1,333,74.13Z"/><path class="cls-1" d="M342.24,64.46a74.21,74.21,0,0,0-1.94-14.67,140.61,140.61,0,0,0-6.78-21.39,2.17,2.17,0,0,0-2.17-1.49h-26a2,2,0,0,0-2,1.42c-.31.79-.67,1.57-.94,2.37-1.42,4.18-2.9,8.33-4.19,12.55a86.81,86.81,0,0,0-3.4,17.06,43.84,43.84,0,0,0,0,9.09,21,21,0,0,0,1.6,6.68,21.72,21.72,0,0,0,9.9,9.94,39.06,39.06,0,0,1,6.05,3.4c1.87,1.5,3.25,3.21,3.24,5.84-.06,10.68,0,21.36,0,32a26.28,26.28,0,0,1-.87,6.6,3,3,0,0,1-2,2.22,21.39,21.39,0,0,1-2.21.77c-3.21.8-6.43,1.56-9.64,2.35a8.11,8.11,0,0,0-.82.31l0,.13h36.08l0-.13c-.28-.09-.55-.2-.83-.27-2.51-.66-5-1.25-7.52-2-1.6-.47-3.15-1.14-4.71-1.75a2.14,2.14,0,0,1-1.36-1.54,14.3,14.3,0,0,1-.46-2.57c-.09-1.56-.06-3.13-.07-4.69q0-15.81,0-31.63a6.5,6.5,0,0,1,2.14-5A15.85,15.85,0,0,1,328,87.27a27.17,27.17,0,0,0,8.85-6,17,17,0,0,0,4-6.28A30.4,30.4,0,0,0,342.24,64.46ZM339.68,70a18.38,18.38,0,0,1-8.21,12.61,24.4,24.4,0,0,1-15.72,3.8,22.2,22.2,0,0,1-11.16-3.8,17,17,0,0,1-6.07-7.76,29,29,0,0,1-1.83-11.77A62.63,62.63,0,0,1,297.77,53a124,124,0,0,1,5.9-20.63c.44-1.16.93-2.31,1.34-3.47a.76.76,0,0,1,.86-.58c4.23,0,8.46,0,12.68,0h0c4.17,0,8.33,0,12.49,0a.89.89,0,0,1,1,.67,125.3,125.3,0,0,1,6.05,18.59c.62,2.66,1.22,5.34,1.57,8A45.65,45.65,0,0,1,339.68,70Z"/><path class="cls-1" d="M338.42,55.78c-.17-1.58-.42-3.14-.64-4.84-.87.52-1.59,1-2.33,1.38A28.87,28.87,0,0,1,325.5,56c-2.55.37-5.06.18-7.12-1.57a16.33,16.33,0,0,0-10.24-3.71,26.69,26.69,0,0,0-8.78,1.14.7.7,0,0,0-.38.46c-.21,1.12-.41,2.24-.57,3.36a45.29,45.29,0,0,0,.13,15.1,15.32,15.32,0,0,0,5.86,9.81,25.23,25.23,0,0,0,8.71,4.17,20.17,20.17,0,0,0,6.71.43c8-.58,13.68-4.5,17.21-11.64,1.94-3.94,2.19-8.16,1.87-12.46Q338.71,58.45,338.42,55.78ZM301.55,66.9a2.37,2.37,0,0,1,.17.41c1.31,5.3,4.56,9.16,9,12.14a2.87,2.87,0,0,1,.45.47,2.23,2.23,0,0,1-.65-.19,22.9,22.9,0,0,1-7-7,16.82,16.82,0,0,1-2.1-5.27,4.78,4.78,0,0,1-.06-.53ZM314,83.21c-.88-.41-1.74-.74-2.52-1.2a30,30,0,0,1-10.46-10.13,10.41,10.41,0,0,1-1.49-4.61c0-.14.12-.29.19-.44.1.12.26.22.28.34a17.07,17.07,0,0,0,4.39,8.23,27.55,27.55,0,0,0,9.34,6.9C314.22,82.49,314.08,82.79,314,83.21Zm12.84-4.39a11.77,11.77,0,0,0,5.33-6.68.53.53,0,0,1,.08-.22c.12-.11.27-.21.4-.31.06.17.21.36.17.5a9.62,9.62,0,0,1-2.29,4,16.53,16.53,0,0,1-5.93,4h-.16C325.31,79.68,326.11,79.28,326.88,78.82Zm5.58-3.25c0,1.36-2.64,3.65-4.56,3.94.86-.65,1.7-1.2,2.43-1.87a29.5,29.5,0,0,0,2-2.17Zm-5.6,4.28.07.16a16.43,16.43,0,0,1-6,2.11ZM336,73a13.7,13.7,0,0,1-2.35,4.37,16.79,16.79,0,0,1-10.51,5.86,3.82,3.82,0,0,1-.4,0c1.38-.55,2.87-1,4.25-1.71a15.23,15.23,0,0,0,6.73-6,5.73,5.73,0,0,0,.77-2.6.51.51,0,0,1,.54-.54,3.26,3.26,0,0,1,.82.08C336.17,72.56,336.07,72.81,336,73Z"/></svg></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="/collection/Yamazaki">Collection</a></li>
                    <li><a href="/collection/Yamazaki/checkout">Checkout</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            <a onclick="openNav()" class="menu">menu</a>
        </nav>
    </header>
    <div id="mobile__menu" class="overlay">
        <a class="close" onclick="closeNav()">&times;</a>
            <div class="overlay__content">
                <a href="/collection/Yamazaki">Collection</a>
                <a href="/collection/Yamazaki/checkout">Checkout</a>
                <a href="/register">Register</a>
                <a href="/login">Login</a>
            </div>

    </div>
    <div class="hero">
        @section('hero')
        @show
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="container">
                <h1 class="information__title">@yield('collection_title')</h1>
                <h4 class="information__subtitle">@yield('collection_subtitle')</h4>

                <div class="information__smalldesc">@yield('collection_smalldesc')</div>
                <div class="information__bigdesc">@yield('collection_bigdesc')</div>
                <div class="information__carousel--information">
                    @section('collection_carousel-information')
                        This is just a carousel
                    @show
                </div>
                <div class="information__desc">@yield('collection_desc')</div>
                    <p class="information__divider"></p>
                <div class="information__extra">@yield('collection_extra')</div>
                <div class="information__proceed">@yield('collection_proceed')</div>
            </div>
            <div class="container">
                <div class="information__carousel--selector">
                    @section('collection_carousel-selector')
                        <span class="text" onclick="currentSlide(1)">15 cl |</span>
                        <span class="text" onclick="currentSlide(2)">20 cl |</span>
                        <span class="text" onclick="currentSlide(3)">25 cl |</span>
                        <span class="text" onclick="currentSlide(4)">30 cl  </span>
                    @show
                </div>

                <div class="information__carousel--container">
                    @section('collection_carousel')
                        <div class="carousel--slide fade" style="display: block;">
                            <div class="carousel--number">1 / 4</div>
                            <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Test</div>
                        </div>

                        <div class="carousel--slide fade">
                            <div class="carousel--number">2 / 4</div>
                                <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Klein</div>
                        </div>

                        <div class="carousel--slide fade">
                            <div class="carousel--number">3 / 4</div>
                            <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Middelgroot</div>
                        </div>

                        <div class="carousel--slide fade">
                            <div class="carousel--number">4 / 4</div>
                            <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Groot</div>
                        </div>
                    @show
                </div>
            </div>
        </div>
    </div>
        <script src="{{ asset('js/carousel.js') }}"></script>
    </body>
</html>