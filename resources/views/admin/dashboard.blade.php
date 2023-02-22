<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ Auth::guard('admin')->user()->name }} - ({{ Auth::guard('admin')->user()->email }})
        </h2>
    </x-slot>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="/categories" class="list-group-item list-group-item-action bg-light">Hotels</a>
            <a href="/items" class="list-group-item list-group-item-action bg-light">Items</a>
            <a href="/payment" class="list-group-item list-group-item-action bg-light">Payment</a>
            <a href="/profile" class="list-group-item list-group-item-action bg-light">Profile</a>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
    <div id="page-content-wrapper">
</x-admin-layout>
