<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Login • Think Africa</title>
    @vite(['resources/css/app.css'])
  </head>
  <body class="min-h-screen bg-gray-50 text-gray-800">
    <div class="mx-auto max-w-md px-4 sm:px-6 lg:px-8 py-16">
      <div class="text-center mb-8">
        <div class="inline-flex items-center gap-2 text-xl font-semibold">
          <span class="inline-block size-2 rounded-full bg-emerald-600"></span>
          <span>Think Africa Admin</span>
        </div>
      </div>
      <div class="rounded-xl bg-white p-6 shadow-sm border border-gray-100">
        <form method="POST" action="{{ route('admin.login.attempt') }}" class="space-y-4">
          @csrf
          <div>
            <label class="text-sm font-medium">Email</label>
            <input type="email" name="email" required class="mt-1 w-full rounded-md border-gray-300" />
            @error('email')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
          </div>
          <div>
            <label class="text-sm font-medium">Password</label>
            <input type="password" name="password" required class="mt-1 w-full rounded-md border-gray-300" />
          </div>
          <div class="flex items-center justify-between">
            <label class="inline-flex items-center gap-2 text-sm"><input type="checkbox" name="remember" class="rounded border-gray-300" /> Remember me</label>
          </div>
          <div class="flex justify-end">
            <button type="submit" class="rounded-md bg-emerald-600 text-white px-5 py-2">Login</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
