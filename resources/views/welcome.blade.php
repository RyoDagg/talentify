<x-layout>
    <div class="space-y-16 mb-16">
        <section class="space-y-4">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-job-card />
                <x-job-card />
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section class="space-y-4">
            <x-section-heading>Tags</x-section-heading>
            <div class="flex items-center gap-4">
                <x-tag>Programming</x-tag>
                <x-tag>Design</x-tag>
                <x-tag>Marketing</x-tag>
                <x-tag>Finance</x-tag>
                <x-tag>Engineering</x-tag>
                <x-tag>Health</x-tag>
                <x-tag>Education</x-tag>
            </div>
        </section>

    </div>
</x-layout>
