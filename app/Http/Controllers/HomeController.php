<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        #echo var_dump($usertype);

        if($usertype == '1')
        {
            return view('admin.home');
        }
        else
        {
            $data = product::paginate(3);
            return view('User.home', compact('data'));
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = product::paginate(3);
            return view('User.home', compact('data'));
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if($search=='')
        {
            $data = product::paginate(3);
            return view('User.home', compact('data'));
        }
        $data=product::where('title', 'Like', '%' .$search.'%')->get();

        return view('User.home', compact('data'));
    }
}
