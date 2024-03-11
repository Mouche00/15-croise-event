<x-dashboard.layout :links="$links" :role="$role">

    <div class="w-full">
        <section class="flex flex-col lg:grid grid-cols-2 items-start gap-16">
            <div class="col-span-3 h-32 relative min-w-[25rem]">
                <div
                    class="h-full w-full border-2 border-black border-dashed bg-[url('{{ asset($event->image) }}')] bg-cover bg-center bg-no-repeat flex flex-col justify-end relative rounded-xl">
                    <div class="absolute w-full h-full bg-magenta bg-opacity-40 rounded-lg"></div>
                </div>

                <div
                    class="z-[10] absolute top-0 left-0 flex flex-col items-start">

                    <x-dashboard.info name="title" :value="$event->title"/>
                    <x-dashboard.info name="seats" :value="$event->seats"/>
                    <x-dashboard.info name="remaining" :value="$event->remainingSeats()"/>
                    {{--                        <p class="">{{ substr($event->description, 0, 50) . '...' }}</p>--}}
                </div>

            </div>
            @if($reservations->first())
                @foreach($reservations as $reservation)
                    <div class="relative flex flex-col">
                        <section class="w-full flex-grow flex items-center justify-center p-4">
                            <div class="flex w-full max-w-3xl text-zinc-50 h-64">
                                <div class="h-full bg-zinc-900 flex items-center justify-center px-8 rounded-l-3xl">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="140px" height="140px" viewBox="0 0 232 232"
                                         enable-background="new 0 0 232 232" xml:space="preserve">
				<rect x="0" y="0" width="232" height="232" fill="#18181b"/>
                                        <g transform="translate(16,16)">
                                            <g transform="translate(72,0) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,0) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,0) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,0) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,8) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,8) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,8) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,8) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,8) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,16) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,16) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,16) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,24) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,24) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,24) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,24) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,32) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,32) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,32) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,32) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,40) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,40) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,40) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,40) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,40) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,40) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,48) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,48) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,48) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,48) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,48) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,56) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,56) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,56) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(16,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(24,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(32,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(40,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(48,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,64) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(8,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(16,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(24,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(32,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,72) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(8,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(24,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(48,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,80) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(8,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(32,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,88) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(8,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(48,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,96) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(8,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(24,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,104) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(16,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(24,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(40,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(48,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,112) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(24,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(32,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,120) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(16,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(48,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(56,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,128) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,136) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,144) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(104,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,152) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,160) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(120,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,168) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(96,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,176) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(72,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(112,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(128,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(144,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,184) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(64,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(80,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(88,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(136,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(152,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(168,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(176,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(184,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(192,192) scale(0.08,0.08)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(0,0) scale(0.56, 0.56)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <g>
                                                        <rect x="15" y="15" style="fill:none;" width="70" height="70"/>
                                                        <path
                                                            d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z"/>
                                                    </g>
                                                </g>
                                            </g>
                                            <g transform="translate(144,0) scale(0.56, 0.56)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <g>
                                                        <rect x="15" y="15" style="fill:none;" width="70" height="70"/>
                                                        <path
                                                            d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z"/>
                                                    </g>
                                                </g>
                                            </g>
                                            <g transform="translate(0,144) scale(0.56, 0.56)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <g>
                                                        <rect x="15" y="15" style="fill:none;" width="70" height="70"/>
                                                        <path
                                                            d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z"/>
                                                    </g>
                                                </g>
                                            </g>
                                            <g transform="translate(16,16) scale(0.24, 0.24)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(160,16) scale(0.24, 0.24)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                            <g transform="translate(16,160) scale(0.24, 0.24)">
                                                <g transform="" style="fill: rgb(255, 255, 255);">
                                                    <rect width="100" height="100"/>
                                                </g>
                                            </g>
                                        </g></svg>
                                </div>
                                <div
                                    class="relative h-full flex flex-col items-center border-dashed justify-between border-2 bg-zinc-900 border-zinc-50">
                                    <div class="absolute rounded-full w-8 h-8 bg-zinc-200 -top-5"></div>
                                    <div class="absolute rounded-full w-8 h-8 bg-zinc-200 -bottom-5"></div>
                                </div>
                                <div class="h-full py-8 px-10 bg-zinc-900 flex-grow rounded-r-3xl flex flex-col">
                                    <div class="flex w-full justify-between items-center">
                                        <div class="flex flex-col mx-auto items-center">
                                            <span class="text-4xl font-bold">{{ $reservation->client->name }}</span>
                                            <span class="text-zinc-500 text-sm">{{ $reservation->client->email }}</span>
                                        </div>
                                    </div>
                                    <div class="flex w-full mt-auto justify-between">
                                        <div class="flex flex-col">
                                            <span class="text-xs text-zinc-400">Date</span>
                                            @php
                                                $date = Carbon\Carbon::parse($reservation->created_at)->format('d/m/Y');
                                            @endphp
                                            <span class="font-mono">{{ $date }}</span>
                                        </div>
                                        <div class="flex flex-col  mx-8">
                                            <span class="text-xs text-zinc-400">Status</span>
                                            <span
                                                class="font-mono">{{ $reservation->validated_at ? 'Approved' : ($reservation->deleted_at ? 'Rejected' : 'Pending') }}</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-xs text-zinc-400">Seat</span>
                                            <span class="font-mono">{{ $reservation->seat }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- ACTIONS -->
                        <div
                            class="flex flex-col items-center text-black absolute top-0 right-0 translate-x-[50%] translate-y-[50%]">
                            @if($event->date > now()->toDateTimeString() && ! $event->auto)
                                @if( ! $reservation->validated_at)
                                    <form action="{{ route('reservation.approve', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <button type="SUBMIT">
                                            <svg class="w-6 h-6"
                                                 fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 173.309 173.309" xml:space="preserve"><g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M173.295,59.534c-0.001-4.142-3.358-7.499-7.5-7.499h-57.784l8.781-34.368c0.573-2.244,0.077-4.627-1.343-6.457 c-1.421-1.83-3.607-2.9-5.924-2.9H74.73c-3.427,0-6.417,2.322-7.266,5.642l-9.735,38.06L7.497,52.036 C3.355,52.038,0,55.395,0,59.536v83.849c0,4.142,3.357,7.5,7.5,7.5h40.154l26.668,13.322c1.041,0.52,2.188,0.791,3.351,0.791h78.951 c4.143,0,7.5-3.358,7.5-7.5V140.51h1.684c1.989,0,3.898-0.791,5.304-2.197c1.406-1.407,2.196-3.315,2.196-5.304L173.295,59.534z M123.727,125.51c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h25.398v9.487H79.443l-26.668-13.322 c-1.041-0.52-2.188-0.79-3.352-0.79H15V67.032l48.556-0.022c3.426-0.002,6.414-2.323,7.263-5.642l9.735-38.058h19.314l-8.781,34.368 c-0.573,2.244-0.077,4.627,1.343,6.456c1.421,1.83,3.607,2.9,5.924,2.9h59.942l0.002,9.473H123.74c-4.142,0-7.5,3.358-7.5,7.5 s3.358,7.5,7.5,7.5h34.561l0.002,9.503H123.74c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h34.565l0.002,9.499H123.727z"></path>
                                                </g></svg>
                                        </button>
                                    </form>
                                @endif

                                @if( ! $reservation->deleted_at)
                                    <form action="{{ route('reservation.reject', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">
                                            <svg class="w-6 h-6"
                                                 fill="#000000" height="200px" width="200px" version="1.1" id="Capa_1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 viewBox="0 0 173.309 173.309" xml:space="preserve"><g
                                                    id="SVGRepo_bgCarrier"
                                                    stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M165.809,22.424h-40.154L98.986,9.102c-1.041-0.52-2.188-0.791-3.351-0.791H16.684c-4.143,0-7.5,3.358-7.5,7.5v16.987H7.5 c-1.989,0-3.898,0.791-5.304,2.197C0.79,36.402,0,38.311,0,40.3l0.014,73.475c0.001,4.142,3.358,7.499,7.5,7.499h57.784 l-8.781,34.368c-0.573,2.244-0.077,4.628,1.343,6.457c1.421,1.829,3.607,2.9,5.924,2.9h34.795c3.427,0,6.417-2.322,7.266-5.642 l9.735-38.06l50.232-0.023c4.142-0.002,7.497-3.359,7.497-7.5V29.924C173.309,25.782,169.951,22.424,165.809,22.424z M158.309,106.276l-48.556,0.022c-3.426,0.001-6.414,2.323-7.263,5.642l-9.735,38.058H73.44l8.781-34.368 c0.573-2.244,0.077-4.627-1.343-6.457c-1.421-1.83-3.607-2.9-5.924-2.9H15.013L15.011,96.8h34.558c4.142,0,7.5-3.358,7.5-7.5 s-3.358-7.5-7.5-7.5H15.008l-0.002-9.503h34.563c4.142,0,7.5-3.358,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5H15.003l-0.002-9.499h34.581 c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5H24.184v-9.487h69.682l26.668,13.322c1.041,0.52,2.188,0.791,3.352,0.791 h34.424V106.276z"></path>
                                                </g>
                                            </svg>
                                        </button>

                                    </form>
                                @endif
                            @endif

                        </div>
                    </div>

                @endforeach
            @else
                <p>No reservations.</p>
            @endif
        </section>
    </div>

</x-dashboard.layout>
