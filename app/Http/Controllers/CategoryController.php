<?php

namespace App\Http\Controllers;

use App\Helpers\FlashHelper;
use App\Helpers\RoleHelper;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function scaffold() {
        return [
            'links' => serialize(['overview', 'categories', 'events', 'users']),
            'role' => RoleHelper::getAuthRole()
        ];

    }

    public function index() {

        $categories = Category::all();
        return view('admin.categories', array_merge($this->scaffold(), compact('categories')));
    }

    public function store(Request $request) {

        $attributes = $request->validate([
            'name' => 'required|unique:categories,name|min:4|max:255'
        ]);

        Category::create($attributes);

        return FlashHelper::redirect('back', 'success', 'Category added successfully');
    }

    public function update(Request $request, Category $category) {

        $attributes = $request->validate([
            'name' => 'required|unique:categories,name|min:4|max:255'
        ]);

        $category->update($attributes);

        return FlashHelper::redirect('back', 'success', 'Category updated successfully');
    }

    public function destroy(Category $category) {

        $category->delete();

        return FlashHelper::redirect('back', 'success', 'Category deleted successfully');
    }
}
