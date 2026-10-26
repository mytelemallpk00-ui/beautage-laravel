<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — Beautage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
</head>
<body class="bg-slate-100 text-slate-800 min-h-screen">
    <header class="bg-beautage-purpleDark text-white border-b border-purple-800">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between gap-3">
            <a href="{{ route('admin.dashboard') }}" class="font-serif font-bold text-lg tracking-wide">BEAUTAGE Admin</a>
            @auth
                <nav class="flex flex-wrap items-center gap-4 text-sm font-semibold">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-pink-300">Dashboard</a>
                    <a href="{{ route('admin.investor-reports.index') }}" class="hover:text-pink-300">IR Reports</a>
                    <a href="{{ route('admin.investor-snapshot.edit') }}" class="hover:text-pink-300">Stock Snapshot</a>
                    <a href="{{ route('investor-relations') }}" target="_blank" rel="noopener" class="hover:text-pink-300">View IR Page ↗</a>
                    <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-pink-200 hover:text-white">Logout</button>
                    </form>
                </nav>
            @endauth
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-8">
        @if (session('status'))
            <div class="mb-6 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-semibold px-4 py-3">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-xl bg-red-50 border border-red-200 text-red-800 text-sm px-4 py-3">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
