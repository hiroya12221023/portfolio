<?php
        
 namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\RedirectResponse;
    
    class ConfirmController extends Controller
    {
        public function confirm(Request $request): RedirectResponse
        {
            $credentials = $request->validate([
                'name' => ['required'],
                'password' => ['required'],
            ]);
    
            if (Auth::attempt(['name' => $credentials['name'], 'password' => $credentials['password']])) {
                return redirect('/problem-page');
            } else {
                return redirect('/register')->with('error', 'Incorrect name or password. Please try again.');
            }
        }
    
        public function show()
        {
            return view('aa.confirm');
        }
    
 public function start()
{
    // ログインされているか確認します
    if (Auth::check()) {
        // ログインされている場合、次のページに進みます
        return view('aa/start');
    } else {
        // ログインされていない場合は、適切なリダイレクト先にリダイレクトします
        return redirect('/login')->with('error', 'ログインしてください');
    }
}
    }