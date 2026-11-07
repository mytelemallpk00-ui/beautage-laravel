@extends('admin.layout')

@section('title', 'Login')

@section('content')
    <div class="max-w-md mx-auto bg-white rounded-2xl border border-purple-100 shadow-lg p-8">
        <h1 class="text-2xl font-bold text-beautage-purple font-serif mb-2">Admin Sign In</h1>
        <p class="text-sm text-slate-600 mb-6">Manage Investor Relations reports and stock snapshot.</p>

        <form method="POST" action="{{ route('admin.login.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-xs font-bold uppercase text-beautage-purple mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                       class="w-full rounded-xl border border-purple-200 px-4 py-2.5 text-sm focus:border-beautage-purple focus:outline-none">
            </div>
            <div>
                <label for="password" class="block text-xs font-bold uppercase text-beautage-purple mb-1">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full rounded-xl border border-purple-200 px-4 py-2.5 text-sm focus:border-beautage-purple focus:outline-none">
            </div>
            <label class="flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remember" value="1" class="rounded border-purple-300">
                Remember me
            </label>
            <button type="submit" class="w-full py-3 rounded-xl bg-beautage-pink hover:bg-beautage-pinkHover text-white font-bold text-sm">
                Sign in
            </button>
        </form>
    </div>
@endsection
