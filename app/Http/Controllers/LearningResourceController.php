<?php

namespace App\Http\Controllers;

use App\Models\LearningResource;
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
        return view('resources.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Service $service)
    {
        return view('resources.create', compact('service'));
    }

    public function store(Request $request, Service $service): RedirectResponse
    {
        // Validate the incoming file. Refuses anything bigger than 2048 kilobyes (=2MB)
        $request->validate([
            'file_upload' => 'required|mimes:pdf,jpg,png|max:2048',
        ]);

        // Store the file in storage\app\public folder
        $file = $request->file('file_upload');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads', 'public');

        // Store file information in the database       
        $uploadedFile = new LearningResource();
        $uploadedFile->type = $request->type;
        $uploadedFile->name = $request->name;
        $uploadedFile->filename = $fileName;
        $uploadedFile->original_name = $file->getClientOriginalName();
        $uploadedFile->file_path = $filePath;
        $uploadedFile->save();
        

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
