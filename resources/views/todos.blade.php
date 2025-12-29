<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách công việc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
    @livewireStyles
</head>
<body class="bg-[#fafafa] flex justify-center p-4 md:p-10">
    <div class="w-full max-w-2xl bg-white shadow-sm border border-gray-200 rounded-xl p-6 md:p-8">
        <h1 class="text-2xl font-bold text-gray-900 mb-8">Danh sách công việc</h1>

        <livewire:todo-manager />

    </div>
    @livewireScripts
</body>
</html>