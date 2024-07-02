<?php

namespace App\Http\Controllers;

use App\models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    // Validation rules for creating or updating a category
    protected function validateCategoryData(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'is_active' => 'sometimes',
        ]);
    }

    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate the request data
            $this->validateCategoryData($request);

            // Handle image upload
            $imagePath = $this->handleImageUpload($request);

            // Create the category
            Category::create([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imagePath,
                'is_active' => $request->input('is_active', 0),
            ]);

            return redirect('categories/create')->with('status', 'Category Created');
        } catch (\Exception $e) {
            return redirect()->route('error')->with($e->getMessage());
        }
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, int $id)
    {
        try {
            // Validate the request data
            $this->validateCategoryData($request);

            // Find the category
            $category = Category::findOrFail($id);

            // Handle image update
            $imagePath = $this->handleImageUpload($request, $category);

            // Update the category
            $category->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imagePath,
                'is_active' => $request->input('is_active', 0),
            ]);

            return redirect()->back()->with('status', 'Category Updated');
        } catch (\Exception $e) {
            return redirect()->route('error')->with($e->getMessage());
        }
    }

    public function destroy(int $id)
    {
        try {
            $category = Category::findOrFail($id);

            // Delete the image if it exists
            if (File::exists($category->image)) {
                File::delete($category->image);
            }

            // Delete the category
            $category->delete();

            return redirect()->back()->with('status', 'Category Deleted');
        } catch (\Exception $e) {
            return redirect()->route('error')->with($e->getMessage());
        }
    }

    // Helper method to handle image upload and update
    private function handleImageUpload(Request $request, $category = null)
    {
        $imagePath = null;
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/category';
            $file->move($path, $filename);
            $imagePath = $path . '/' . $filename;

            // Delete the old image if updating
            if ($category && File::exists($category->image)) {
                File::delete($category->image);
            }
        }

        return $imagePath;
    }
}
