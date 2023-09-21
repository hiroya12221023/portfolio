<?php
    
    namespace App\Http\Controllers;
    
    use Illuminate\Support\Facades\Auth;
    
    class DashboardController extends Controller
    {
        public function index()
        {
            if (Auth::check()) {
                // ログインしている場合はダッシュボードを表示
                return view('aa/confirm');
            } else {
                // ログインしていない場合はログインページにリダイレクト
                return redirect()->route('login');
            }
        }
    
        // ...
    }