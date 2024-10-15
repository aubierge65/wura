<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobContract;
use Illuminate\Http\Request;
use Modules\Language\Entities\Language;

class JobContractController extends Controller
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

            $job_contrats = JobContract::with('translations')->paginate(10);

            $app_language = Language::latest()->get(['code', 'name']);

            return view('backend.JobContrat.index', compact('job_contrats', 'app_language'));
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
            abort_if(! userCan('job_contracts.create'), 403);

            // validation
            $app_language = Language::latest()->get(['code', 'name']);
            $validate_array = [];
            foreach ($app_language as $language) {
                $validate_array['name_'.$language->code] = 'required|string|max:255';
            }
            $this->validate($request, $validate_array);

            // saving the data
            $job_type = new JobContract();
            $job_type->save();

            foreach ($request->except('_token') as $key => $value) {
                $job_type->translateOrNew(str_replace('name_', '', $key))->name = $value;
                $job_type->save();
            }

            flashSuccess(__('job_contract_created_successfully'));

            return back();
        } catch (\Exception $e) {
            flashError('An error occurred: '.$e->getMessage());

            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            abort_if(! userCan('job_modes.update'), 403);

            $job_contrat = JobContract::findOrFail($id);
           
            $job_contrats = JobContract::with('translations')->paginate(10);
            $app_language = Language::latest()->get(['code', 'name']);

            return view('backend.JobContrat.index', compact('job_contrat', 'job_contrats', 'app_language'));
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

            $jobContrat = JobContract::findOrFail($id);
            // saving the data
            foreach ($request->except(['_token', '_method']) as $key => $value) {
                $jobContrat->translateOrNew(str_replace('name_', '', $key))->name = $value;
                $jobContrat->save();
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
        //
    }
}
