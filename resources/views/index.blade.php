<x-layout>
    <div class="space-y-5">
        <section class="text-center pt-10">
            <h1 class="font-bold text-4xl mt-4 my-4">Let´s Find you a great job</h1>

            <form action="">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-3 w-full max-w-xl">
            </form>
        </section>

    <section class="pt-25">
        <x-section-heading>Feauture Jobs</x-section-heading>

       <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach($featuredJobs as $job)
                    <x-job-card :$job/>
            @endforeach
       </div>
    </section>

    <section>
       <x-section-heading>Tags</x-section-heading>

       <div class="mt-3 space-x-1">
            @foreach($tags as $tag)
                    <x-tag :$tag/>
            @endforeach
        </div>
    </section>

    <section>
       <x-section-heading>Recent Jobs</x-section-heading>

       <div class="mt-6 space-y-6">
            @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
            @endforeach
        </div>

    </section>
    </div>
</x-layout>
