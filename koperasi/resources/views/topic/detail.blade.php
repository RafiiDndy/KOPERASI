<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">{{ $topic->topic_subject }}</h2>

    <!-- Show Edit and Delete buttons if the authenticated user is the topic's author -->
    @if (auth()->check() && auth()->user()->id == $topic->topic_by)
    <div class="flex justify-end mb-4">
        <a href="{{ route('topic.edit', $topic->topic_id) }}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
        <form action="{{ route('topic.delete', $topic->topic_id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this topic?');">Delete</button>
        </form>
    </div>
    @endif

    <table class="w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 text-left" width="20%">Post Author</th>
                <th class="px-4 py-2 text-left" width="80%">Post Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td class="px-4 py-2" width="20%">{{ $post['post_by'] }}</td>
                <td class="px-4 py-2" width="80%">{{ $post['post_content'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if (auth()->check())
    <form method="POST" action="/reply/save">
        @csrf
        <input type="hidden" class="form-control" id="topic_id" name="topic_id" value="{{ $topic->topic_id }}">
        <label for="post_message" class="block text-sm font-bold mb-2">Post Message:</label>
        <div class="form-group mb-4">
            <textarea rows="5" cols="60" class="w-full pl-10 text-sm text-gray-700" id="post_message" name="post_message"></textarea>
        </div>
        <div class="form-group mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit Reply</button>
        </div>
    </form>
    @endif
</x-app-layout>