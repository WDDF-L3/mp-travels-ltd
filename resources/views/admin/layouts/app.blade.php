<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - MP Travels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
</head>
<body>

<div class="admin-wrapper">
    <aside class="admin-sidebar">
        <h3>MP Travels</h3>

        <a href="{{ route('admin.dashboard') }}">
            <i class="fa-solid fa-chart-line"></i> Dashboard
        </a>

        <a href="{{ route('admin.jobs.index') }}">
            <i class="fa-solid fa-briefcase"></i> Jobs
        </a>

        <a href="#">
            <i class="fa-solid fa-file-lines"></i> Applications
        </a>

        <a href="#">
            <i class="fa-solid fa-envelope"></i> Contact Messages
        </a>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </button>
        </form>
    </aside>

    <main class="admin-main">
        @yield('content')
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>