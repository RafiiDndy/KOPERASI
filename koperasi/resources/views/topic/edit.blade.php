<x-app-layout>
    <div class="max-w-md mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h2 class="text-2xl font-bold mb-4">Edit Topic</h2>
        <form action="{{ route('topic.update', $topic->topic_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="topic_cat" class="block text-sm font-bold mb-2">Category</label>
                <select name="topic_cat" id="topic_cat" class="w-full pl-10 text-sm text-gray-700">
                    @foreach($categories as $category)
                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $topic->topic_cat? 'elected' : '' }}>
                        {{ $category->cat_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="topic_subject" class="block text-sm font-bold mb-2">Subject</label>
                <input type="text" name="topic_subject" id="topic_subject" class="w-full pl-10 text-sm text-gray-700" value="{{ $topic->topic_subject }}">
            </div>
            <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                Update Topic
            </button>
        </form>
    </div>
</x-app-layout>