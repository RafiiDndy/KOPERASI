<x-app-layout>
    <div class="container">
        <h2>Edit Topic</h2>
        <form action="{{ route('topic.update', $topic->topic_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="topic_cat">Category</label>
                <select name="topic_cat" id="topic_cat" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $topic->topic_cat ? 'selected' : '' }}>
                        {{ $category->cat_name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="topic_subject">Subject</label>
                <input type="text" name="topic_subject" id="topic_subject" class="form-control" value="{{ $topic->topic_subject }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Topic</button>
        </form>
    </div>
</x-app-layout>