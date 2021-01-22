<?php

namespace Naykel\Navit\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Naykel\Navit\Models\Page;
use Naykel\Navit\Http\Requests\ValidatePage;

class PageController extends Controller
{

    protected $storageDir = 'content';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('navit::pages.index')->with([
    //         'title' => 'Pages List',
    //         'pages' => Page::paginate(24),

    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('navit::pages.create-edit')->with([
    //         'title' => 'Create New Page',
    //         'formType' => 'store',
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(ValidatePage $request)
    // {
    //     $validatedData = $request->validated();
    //     $page = Page::create($validatedData);

    //     // $validatedData = $this->validateMergeData($request);
    //     // $document = Media::create($validatedData);
    //     return redirect('pages');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    // NK:COMMENT this could be moved to an invokable controller
    public function show($page)
    {
        // if $page parameter is numeric, then search by id else search by slug
        $page = Page::when(
            is_numeric($page),
            fn ($query) => $query->where('id', $page),
            fn ($query) => $query->where('slug', $page)
        )->firstOrFail();

        // dd($page);
        // NK:TD add metadata
        return view('navit::pages.show')->with([
            'title' => $page->title,
            'page' => $page
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    // public function edit(Page $page)
    // {
    //     return view('navit::pages.create-edit')->with([
    //         'title' => 'Edit Page',
    //         'page' => $page,
    //         'formType' => 'update',
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    // public function update(ValidatePage $request, Page $page)
    // {
    //     $validatedData = $this->validateMergeData($request);

    //     // delete page image
    //     if ($request->input('deleteImage') === 'true' && $page->image_path) {
    //         Storage::disk('public')->delete($page->image_path);
    //         $validatedData['image_path'] = null;
    //     }

    //     $page->update($validatedData);
    //     return $this->redirectId('pages', $page->id);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Page $page)
    // {
    //     $page->delete();
    //     return back();
    // }

    /**
     *  Validate request, and merge any other additional data fields that are
     *  required but not in the $request.
     *  `$validatedData = $this->validateMergeData($request);`
     * ----------------------------------------------------------------------
     * @param mixed $request
     * @return array[] $validatedData
     */
    // public function validateMergeData($request)
    // {
    //     $validatedData = $request->validated(); // validated fields from request

    //     if ($request->has('image')) {  // set file detail if file exists
    //         $fileData = addOverrideFile($request->image, $this->storageDir);
    //         $validatedData['image_path'] = $fileData['filePath'];
    //     }

    //     return $validatedData;
    // }


    /**
     * Dynamically redirect after form action (for use with 'id')
     * Example Usage: return redirectId('users', $user->id);
     * --------------------------------------------------------------------------
     * @param string $resource (profiles, users)
     * @param integer $id
     */
    // function redirectId($resource, $id)
    // {
    //     switch (request('action')) {
    //         case 'save_stay':
    //             return back()->with('flash', 'Page saved!')->with('flash', 'Page saved!');
    //             break;
    //         case 'save_close':
    //             return redirect(route("$resource.index"))->with('flash', 'Page saved!');
    //             break;
    //         case 'save_new':
    //             return redirect(route("$resource.create"))->with('flash', 'Page saved!');
    //             break;
    //         case 'save_preview':
    //             return redirect(route("$resource.show", $id))->with('flash', 'Page saved!');
    //             break;
    //         case 'close':
    //             return redirect(route("$resource.index"));
    //             break;
    //     }
    // }
}
