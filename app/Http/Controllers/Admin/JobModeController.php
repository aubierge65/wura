<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobMode;
use Illuminate\Http\Request;
use Modules\Language\Entities\Language;

class JobModeController extends Controller
{

    public function __construct()
    {
        $this->middleware('access_limitation')->only([
            'destroy',
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $job_modes = JobMode::with('translations')->paginate(10);

            $app_language = Language::latest()->get(['code', 'name']);

            return view('backend.JobMode.index', compact('job_modes', 'app_language'));
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            abort_if(! userCan('job_modes.create'), 403);

            // validation
            $app_language = Language::latest()->get(['code', 'name']);
            $validate_array = [];
            foreach ($app_language as $language) {
                $validate_array['name_'.$language->code] = 'required|string|max:255';
            }
            $this->validate($request, $validate_array);

            // saving the data
            $job_type = new JobMode();
            $job_type->save();

            foreach ($request->except('_token') as $key => $value) {
                $job_type->translateOrNew(str_replace('name_', '', $key))->name = $value;
                $job_type->save();
            }

            flashSuccess(__('job_mode_created_successfully'));

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
            abort_if(! userCan('job_modes.update'), 403);

            $job_mode = JobMode::findOrFail($id);
           
            $job_modes = JobMode::with('translations')->paginate(10);
            $app_language = Language::latest()->get(['code', 'name']);

            return view('backend.JobMode.index', compact('job_mode', 'job_modes', 'app_language'));
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
            abort_if(! userCan('job_modes.update'), 403);

            // validation
            $app_language = Language::latest()->get(['code', 'name']);
            $validate_array = [];
            foreach ($app_language as $language) {
                $validate_array['name_'.$language->code] = 'required|string|max:255';
            }
            $this->validate($request, $validate_array);

            $jobMode = JobMode::findOrFail($id);
            // saving the data
            foreach ($request->except(['_token', '_method']) as $key => $value) {
                $jobMode->translateOrNew(str_replace('name_', '', $key))->name = $value;
                $jobMode->save();
            }

            flashSuccess(__('job_mode_updated_successfully'));

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
            $jobMode = JobMode::findOrFail($id);
            // check if the job_type has candidates
            if ($jobMode && $jobMode->jobs->count()) {
                flashError(__('job_mode_has_job'));

                return back();
            }

            $jobMode->delete();

            flashSuccess(__('job_mode_deleted_successfully'));

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }
}
