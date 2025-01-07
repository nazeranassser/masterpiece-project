<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // عرض جميع الفئات
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    // عرض صفحة إضافة فئة جديدة
    public function create()
    {
        return view('admin.categories.create');
    }

    // تخزين الفئة الجديدة
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        $imagePath = $request->file('image')->store('categories', 'public');

        Category::create([
            'name' => $validated['name'],
            'image' => $imagePath,
            'slug' => str_replace(' ', '-', strtolower($validated['name'])),
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category added successfully!');
    }

    // عرض صفحة تعديل الفئة
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    // تحديث الفئة
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category->name = $validated['name'];

        if ($request->hasFile('image')) {
            if ($category->image) {
                \Storage::delete('public/' . $category->image);
            }
            $imagePath = $request->file('image')->store('categories', 'public');
            $category->image = $imagePath;
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully!');
    }

    // حذف الفئة وجميع المنتجات المرتبطة بها
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->products()->delete();
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category and related products removed successfully.');
    }
}
