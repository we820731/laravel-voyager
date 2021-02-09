<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cgy;
use App\Models\Element;
use App\Models\Contact;
use App\Models\Tag;
use App\Models\User;
use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SiteController extends Controller
{
    public function renderHomePage(){
        $articles   = Article::where('status', 'published')->get();
        // ->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->simplePaginate(setting('admin.articlesQty'));
        $articles_feature = Article::where('featured', true)->where('status', 'published')->get();
        // ->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        // $tags = Tag::where('enabled', 1)->where('type', 'like', '%def%')->orderBy('sort', 'asc')->get();
        // $articleQty = Article::where('cgy_id', $cgy->id)->where('status', 'published')->count();
        // $cgys = Cgy::where('enabled',1)->get();
        return view('front.blog', compact('articles','articles_feature'));
    }

    public function renderBlogPage(){
        return view('front.blog');
    }

    public function renderPostPage(){
        return view('front.post');
    }
}
