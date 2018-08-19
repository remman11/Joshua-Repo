<!DOCTYPE html>
<head>
    <html lang="en">
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>TSMS &mdash; Admin</title>
        @include('Templates.newTemplateScripts')
        @yield('assets')
        <!--Primary Styles-->
        @include('Templates.newTemplateStyle')
    </head>
    <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="navbar-bg"></div>
                @include('Templates.newNavbar')
                @include('Templates.newSidebar')
                @yield('outside')
                <div id="mainSection" class="main-content">
                    @include('Messages.maintenanceValidations')
                    @yield('content')
                </div>
                @include('Templates.newTemplateFooter')
            </div>
        </div>
        @yield('scripted')
    </body>
</html>