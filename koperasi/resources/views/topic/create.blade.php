<x-app-layout>
    <div class="max-w-md mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h2 class="text-2xl font-bold mb-4">Create a New Topic</h2>
        <form method="POST" action="/topic/save">
            @csrf
            <div class="form-group mb-4">
                <label for="topic_cat" class="block text-sm font-bold mb-2">Topic Category:</label>
                <select name="topic_cat" class="w-full pl-10 text-sm text-gray-700">
                    <option value="">--Select Category--</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="topic_subject" class="block text-sm font-bold mb-2">Topic Subject:</label>
                <input type="text" class="w-full pl-10 text-sm text-gray-700" id="topic_subject" name="topic_subject">
            </div>
            <div class="form-group mb-4">
                <label for="topic_message" class="block text-sm font-bold mb-2">Topic Message:</label>
                <input type="text" class="w-full pl-10 text-sm text-gray-700" id="topic_message" name="topic_message">
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                    Submit
                </button>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </div>
</x-app-layout>