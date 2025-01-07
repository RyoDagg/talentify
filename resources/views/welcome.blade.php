<x-layout>
    <div class="space-y-8">
        <section class="space-y-4">
            <div class="inline-flex items-center space-x-2">
                <span class="h-4 w-4 bg-slate-200"></span>
                <h1 class="text-xl font-semibold">Top Jobs</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-job-card />
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>
    </div>
</x-layout>
