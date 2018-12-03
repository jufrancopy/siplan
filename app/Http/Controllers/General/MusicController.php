<?php

namespace App\Http\Controllers\General;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ianring\Score;
use ianring\Pitch;
use ianring\Chord;
use ianring\NOTE;
use ianring\PHPMusicTools;





class MusicController extends Controller
{
    public function prueba(){
    	$chord = Chord::constructFromArray(
	array(
		'notes' => array(
			0 => array(
				'pitch' => array(
					'step' => 'C',
					'alter' => 1,
					'octave' => 4,
				),
				'rest' => false,
			)
		)
	)
);

		$chord->toPNG();
    	dd($chord);
    	return view ('web.lilyponds.prueba', compact('chord'));
}
}
