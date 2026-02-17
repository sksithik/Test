<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('include.head')
</head>
<body class="bg-gray-100">

<header class="bg-[#00153D] text-white px-6 py-3 flex items-center justify-between shadow-xl fixed w-full z-50">
    @include('include.header')
</header>

<div class="flex pt-16">

    <!-- Fixed Sidebar -->
    <aside class="fixed top-16 left-0 w-[16.875rem] h-[calc(100vh_-_4rem)] bg-white border-r border-gray-200 p-6 overflow-y-auto">
        @include('include.sidebar') 
    </aside>

    <!-- Main Content -->
    <main class="ml-[16.875rem] bg-white p-6 w-full min-h-screen">
        @yield('content')
    </main>

</div>

@stack('scripts')
@include('include.script') 
</body>
</html>
