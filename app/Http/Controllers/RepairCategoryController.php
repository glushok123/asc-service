<?php

namespace App\Http\Controllers;

use App\Models\RepairCategory;
use App\Http\Requests\StoreRepairCategoryRequest;
use App\Http\Requests\UpdateRepairCategoryRequest;

class RepairCategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RepairCategory  $repairCategory
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)//RepairCategory $repairCategory
    {
        return view('category.category', [
            'slug' => $slug,
        ]);
    }
}
