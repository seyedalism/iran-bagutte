<?php use App\Core\Controller;
use App\Models\Advertise;

class GamesController extends Controller
{
	public function show($id=1)
	{
		$ads = Advertise::where('state','<','2');
		$dynamic = Advertise::where('state','=','2');
		return view('game.games',compact('ads','dynamic'));
	}

	public function redirectToAd ($id)
	{
		$ad = Advertise::findById($id)[0];
		$ad->clicks++;
		$ad->save();
		return header('Location: '.$ad->url);
	}

	public function gamesPage()
	{
		return view('game.gamesPage');
	}
}