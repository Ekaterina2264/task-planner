<x-layouts::app :title="__('Мои задачи')">


    <div class="max-w-3xl mx-auto py-6 space-y-6">

        <!-- Сегодня -->
        <div>
        <div>
            <div class="flex items-center justify-between mb-2">
                <h2 class="text-lg font-semibold">Мои задачи</h2>
                <span class="text-sm text-gray-400">{{ $tasks->count() }}</span>
            </div>

            <div class="space-y-3">
                @foreach($tasks as $task)
                    <div class="p-4 bg-white dark:bg-neutral-900 rounded-xl shadow-sm border">
                        <div class="font-medium">{{ $task->title }}</div>

                        <div class="text-sm text-gray-500">
                            {{ $task->project_id }} • {{ $task->creator->name }}
                        </div>

                        <div class="text-sm text-gray-400 mt-1">
                            {{ $task->due_date }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Завтра -->
        <div>
            <div class="flex items-center justify-between mb-2">
                <h2 class="text-lg font-semibold">Завтра</h2>
                <span class="text-sm text-gray-400">1</span>
            </div>

            <div class="p-4 bg-white dark:bg-neutral-900 rounded-xl shadow-sm border">
                <div class="font-medium">Проверить спецификацию</div>
                <div class="text-sm text-gray-500">Склад Екад • ПТО</div>
                <div class="text-sm text-gray-400 mt-1">Завтра</div>
            </div>
        </div>

        <!-- Потом -->
        <div>
            <div class="flex items-center justify-between mb-2">
                <h2 class="text-lg font-semibold">Потом</h2>
                <span class="text-sm text-gray-400">1</span>
            </div>

            <div class="p-4 bg-white dark:bg-neutral-900 rounded-xl shadow-sm border">
                <div class="font-medium">Уточнить поставку подсистемы</div>
                <div class="text-sm text-gray-500">Логистика • Логистика</div>
                <div class="text-sm text-gray-400 mt-1">Позже</div>
            </div>
        </div>

    </div>

</x-layouts::app>