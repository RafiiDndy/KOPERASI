<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TopicController extends Controller
{
    use ValidatesRequests;

    public function create()
    {
        $categories = Category::all();
        return view('topic.create', ['categories' => $categories]);
    }

    public function save()
    {
        $user = auth()->user();
        $this->validate(request(), [
            'topic_cat' => 'required',
            'topic_subject' => 'required',
            'topic_message' => 'required'
        ]);

        $topic = Topic::create([
            'topic_cat' => request()->input('topic_cat'),
            'topic_subject' => request()->input('topic_subject'),
            'topic_by' => $user->id,
            'topic_date' => date('Y-m-d'),
        ]);

        $post = Post::create([
            'post_content' => request()->input('topic_message'),
            'post_topic' => $topic->getKey(),
            'post_by' => $user->id,
            'post_date' => date('Y-m-d'),
        ]);

        return redirect()->to('topic/index')
            ->with('success', 'Topic is created successfully.');
    }

    public function index()
    {
        $topics = Topic::all();
        $arrTopics = array();

        foreach ($topics as $topic) {
            $category = Category::where('cat_id', $topic->topic_cat)->first();
            $arrTopics[] = array(
                'topic_id' => $topic->topic_id,
                'topic_subject' => $topic->topic_subject,
                'topic_category_name' => $category->cat_name
            );
        }

        return view('topic.index', ['topics' => $arrTopics]);
    }

    public function detail($id)
    {
        $topic = Topic::where('topic_id', $id)->first();
        $posts = Post::where('post_topic', $id)->get();
        $arrPosts = array();

        foreach ($posts as $post) {
            $user = User::where('id', $post->post_by)->first();
            $arrPosts[] = array(
                'post_by' => $user->name,
                'post_content' => $post->post_content
            );
        }

        return view('topic.detail', ['topic' => $topic, 'posts' => $arrPosts]);
    }

    public function replySave()
    {
        $user = auth()->user();
        $this->validate(request(), [
            'post_message' => 'required'
        ]);

        $post = Post::create([
            'post_content' => request()->input('post_message'),
            'post_topic' => request()->input('topic_id'),
            'post_by' => $user->id,
            'post_date' => date('Y-m-d'),
        ]);

        return redirect()->to('topic/detail/' . request()->input('topic_id'))
            ->with('success', 'Reply is added successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $topic = Topic::find($id);
        $categories = Category::all();

        if (!$topic) {
            return redirect()->to('topic/index')
                ->with('error', 'Topic not found.');
        }

        return view('topic.edit', ['topic' => $topic, 'categories' => $categories]);
    }

    // Update topic
    public function update(Request $request, $id)
    {
        $topic = Topic::find($id);

        if (!$topic) {
            return redirect()->to('topic/index')
                ->with('error', 'Topic not found.');
        }

        $this->validate($request, [
            'topic_cat' => 'required',
            'topic_subject' => 'required',
        ]);

        $topic->update([
            'topic_cat' => $request->input('topic_cat'),
            'topic_subject' => $request->input('topic_subject'),
        ]);

        return redirect()->to('topic/index')
            ->with('success', 'Topic updated successfully.');
    }

    // Delete topic
    public function delete($id)
    {
        $topic = Topic::find($id);

        if (!$topic) {
            return redirect()->to('topic/index')
                ->with('error', 'Topic not found.');
        }

        // Delete related posts first
        Post::where('post_topic', $id)->delete();
        // Delete the topic
        $topic->delete();

        return redirect()->to('topic/index')
            ->with('success', 'Topic deleted successfully.');
    }
}
