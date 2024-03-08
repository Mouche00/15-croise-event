<x-dashboard.layout :links="$links" :role="$role">

    <table class="w-full border-separate border-spacing-2">
        <thead>
            <tr>
                <th class="bg-black text-white py-2 px-4 rounded-lg">ID</th>
                <th class="bg-black text-white py-2 px-4 rounded-lg">Name</th>
                <th class="bg-black text-white py-2 px-4 rounded-lg">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($categories->first())
            @foreach($categories as $category)
                <tr class="text-center">
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">{{ $category->id }}</td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                        <form action="{{ route('category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input name="name" value="{{ $category->name }}" type="text" class="edit-input w-full h-full text-center" readonly>
                            <button type="submit" class="hidden"></button>
                        </form>
                    </td>
                    <td class="text-black border-2 border-black py-2 px-4 rounded-lg flex justify-evenly">
                        <button onclick="editInput(event)" type="button">EDIT</button>
                        <form action="{{ route('category.delete', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @endif
            <tr class="text-center">
                <td class="text-black border-2 border-black py-2 px-4 rounded-lg">
                    <button onclick="addInput(event)" type="button" class="w-full h-full">+</button>
                </td>
                <td id="hidden-input" class="text-black border-2 border-black py-2 px-4 rounded-lg hidden">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <input name="name" type="text" class="w-full h-full">
                        <button type="submit" class="hidden"></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</x-dashboard.layout>
