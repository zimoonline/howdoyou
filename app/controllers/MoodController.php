<?php

use Carbon\Carbon;
use HDYF\Forms\MoodForm;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MoodController extends \BaseController {

    /**
     * @var MoodForm
     */
    protected $moodForm;

    function __construct(MoodForm $moodForm)
    {
        $this->moodForm = $moodForm;
    }


    /**
	 * Display a listing of the resource.
	 * GET /input
	 *
	 * @return Response
	 */
	public function index()
	{

        $moods = Mood::orderBy('count', 'desc')->paginate(15);


        $newMoods = Mood::where('updated_at', '>=', Carbon::now()->subDay())
            ->orderBy('updated_at', 'desc')
            ->get();

        $latest = Mood::orderBy('updated_at', 'desc')->take(5)->get();


        $total = DB::table('moods')->sum('count');

        return View::make('moods.index', compact('moods', 'latest', 'total', 'newMoods'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /input/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /input
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->moodForm->validate(Input::all());
        $ip = Request::getClientIp();
        $location = GeoIP::getLocation($ip);

        $mood = Input::get('type');
//        $splits = preg_split('/^[a-z]+$\|&nbsp;/i', $mood);
        $splits = explode(',', $mood);

        foreach ($splits as $split) {
            $split = trim($split);
            if (empty($split)) {
                continue;
            }
            try {
                $mood = Mood::where('type', $split)->firstOrFail();
                $mood->count += 1;
                $mood->ip = $location['country'];
                $mood->save();
            } catch (ModelNotFoundException $e) {
                Mood::create(array(
                    'type'  => $split,
                    'count' => 1,
                    'ip'    => $location['country']
                ));

            }
        }

//        $number = Mood::where('type', $mood)->count();

//        $moods = Mood::orderBy('count', 'desc')->paginate(15);
//        $latest = Mood::orderBy('created_at', 'desc')->take(3)->get();

        return Redirect::route('moods.index');

	}




	/**
	 * Display the specified resource.
	 * GET /input/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /input/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /input/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /input/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}