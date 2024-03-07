<x-layout class="relative h-[100vh] bg-[url('{{ asset('images/register.jpg') }}')] bg-contain bg-repeat bg-opacity-50">
    <div class="h-full bg-gray-500 bg-opacity-40">
        <div class="px-4 py-2 mx-2 flex flex-row justify-start">
            <a href="{{url('/')}}" class=" text-2xl font-medium rounded-full text-main transition-all hover:bg-main hover:text-white float-right">
                <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <g>
                        <path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                        </path>
                    </g>
                </svg>
            </a>
        </div>
        <main class="h-[80vh] p-16 flex items-center justify-center gap-16">
            <h1 class="h-fit text-5xl font-extrabold text-black w-fit tex-center py-4 px-8 bg-white">Login</h1>
            <form action="{{ route('login.store') }}" method="POST" id="login-form" class="bg-white rounded-lg p-8 space-y-8 transition-all">
                @csrf

                <x-form.input name="email" type="email"/>
                <x-form.input name="password" type="password"/>

                <x-form.button />
            </form>
        </main>
    </div>
</x-layout>
