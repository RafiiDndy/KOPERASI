@include('common.header')

<h2>{{ $topic->topic_subject }}</h2>

<!-- Show Edit and Delete buttons if the authenticated user is the topic's author -->
@if (auth()->check() && auth()->user()->id == $topic->topic_by)
    <div class="btn-group" role="group" aria-label="Topic Actions">
        <a href="{{ route('topic.edit', $topic->topic_id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('topic.delete', $topic->topic_id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this topic?');">Delete</button>
        </form>
    </div>
@endif

<table border="1">
    <tr>
        <th width="20%">Post Author</th>
        <th width="80%">Post Message</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td width="20%" height="100" valign="top">{{ $post['post_by'] }}</td>
            <td width="80%" height="100" valign="top">{{ $post['post_content'] }}</td>
        </tr>
    @endforeach
</table>

@if (auth()->check())
    <form method="POST" action="/reply/save">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" id="topic_id" name="topic_id" value="{{ $topic->topic_id }}">
        <label for="post_message">Post Message:</label>
        <div class="form-group">
            <textarea rows="5" cols="60" class="form-control" id="post_message" name="post_message"></textarea>
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit Reply</button>
        </div>
    </form>
@endif

@include('common.footer')
