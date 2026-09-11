<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Delivery Manager')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 text-gray-900">

    {{-- ヘッダー --}}
    <header class="bg-white border-b">
        <div class="max-w-5xl mx-auto px-4 h-16 flex items-center justify-between">

            <a href="/" class="text-xl font-bold text-blue-600">
                Delivery Manager
            </a>

            <nav class="flex items-center gap-5 text-sm">

                <a href="/" class="text-gray-600 hover:text-blue-600">
                    ホーム
                </a>

                <a href="#" class="text-gray-600 hover:text-blue-600">
                    月の収支
                </a>

                <form action="#" method="POST">
                    @csrf
                    <button class="text-gray-500 hover:text-red-500">
                        ログアウト
                    </button>
                </form>

            </nav>

        </div>
    </header>


    {{-- メイン --}}
    <main class="max-w-5xl mx-auto px-4 py-8">

        @yield('content')

    </main>

</body>
</html>