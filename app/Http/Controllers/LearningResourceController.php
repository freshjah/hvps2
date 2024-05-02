<?php

namespace App\Http\Controllers;

use App\Models\LearningResource;
use App\Models\ResourceType;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LearningResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        $types = ResourceType::all();
        $service->load('resources');

        return view('resources.index', compact('service','types'));
    }


    public function create(Service $service, ResourceType $type)
    {
        return view('resources.create', compact('service','type'));
    }

    public function store(Request $request, Service $service, ResourceType $type): RedirectResponse
    {
        // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
        $request->validate([
            'file_upload' => 'required|mimes:pdf,zip,mpeg|max:20480',
        ]);

        // Store the file in storage\app\public folder
        $file = $request->file('file_upload');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads', 'public');

        // Store file information in the database       
        $resource = new LearningResource();
        $resource->service_id = $request->service_id;
        $resource->resource_type_id = $request->type_id;
        $resource->name = $request->name;
        $resource->filename = $fileName;
        $resource->original_name = $file->getClientOriginalName();
        $resource->file_path = $filePath;
        $resource->save();
        

        // Redirect back to the index page with a success message
        return redirect()->route('services.resources.index', $service->id)
            ->with('success', "File `{$fileName}` uploaded successfully.");
            //->with('success', "File `{$uploadedFile->original_name}` uploaded successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(LearningResource $learningResource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LearningResource $learningResource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LearningResource $learningResource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LearningResource $learningResource)
    {
        //
    }
}
