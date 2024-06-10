<x-app-layout>
    <div class="max-w-md mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h2 class="text-2xl font-bold mb-4">Topic Listing</h2>
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left">Topic Title</th>
                    <th class="px-4 py-2 text-left">Topic Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topics as $topic)
                <tr class="hover:bg-gray-100">
                    <td class="px-4 py-2">
                        <a href="{!! url('/topic/detail', [$topic['topic_id']]) !!}" class="text-blue-600 hover:text-blue-900">
                            {{ $topic['topic_subject'] }}
                        </a>
                    </td>
                    <td class="px-4 py-2">{{ $topic['topic_category_name'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <a href="{!! url('/topic/create') !!}" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                Create Post
            </a>
        </div>
    </div>
</x-app-layout>