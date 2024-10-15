<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;
use Modules\Language\Entities\Language;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('access_limitation')->only([
            'destroy',
        ]);
    }


    public function index()
    {
        try {

            $levels = Level::with('translations')->paginate(10);

            $app_language = Language::latest()->get(['code', 'name']);

            return view('backend.level.index', compact('levels', 'app_language'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            abort_if(! userCan('job_levels.create'), 403);

            // validation
            $app_language = Language::latest()->get(['code', 'name']);
            $validate_array = [];
            foreach ($app_language as $language) {
                $validate_array['name_'.$language->code] = 'required|string|max:255';
            }
            $this->validate($request, $validate_array);

            // saving the data
            $job_level = new Level();
            $job_level->save();

            foreach ($request->except('_token') as $key => $value) {
                $job_level->translateOrNew(str_replace('name_', '', $key))->name = $value;
                $job_level->save();
            }

            flashSuccess(__('job_level_created_successfully'));

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            abort_if(! userCan('job_levels.update'), 403);

            $level = Level::findOrFail($id);
           
            $levels = Level::with('translations')->paginate(10);
            $app_language = Language::latest()->get(['code', 'name']);

            return view('backend.level.index', compact('level', 'levels', 'app_language'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            abort_if(! userCan('job_levels.update'), 403);

            // validation
            $app_language = Language::latest()->get(['code', 'name']);
            $validate_array = [];
            foreach ($app_language as $language) {
                $validate_array['name_'.$language->code] = 'required|string|max:255';
            }
            $this->validate($request, $validate_array);

            $level = Level::findOrFail($id);
            // saving the data
            foreach ($request->except(['_token', '_method']) as $key => $value) {
                $level->translateOrNew(str_replace('name_', '', $key))->name = $value;
                $level->save();
            }

            flashSuccess(__('job_level_updated_successfully'));

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            abort_if(! userCan('job_modes.delete'), 403);
            $level = Level::findOrFail($id);
            // check if the job_type has candidates
            if ($level && $level->jobs->count()) {
                flashError(__('job_mode_has_job'));

                return back();
            }

            $level->delete();

            flashSuccess(__('job_level_deleted_successfully'));

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
