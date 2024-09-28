<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Animal Model 有 create 寫好的方法，把請求的內容，用all方法轉為陣列，傳入 create 方法中。
        $animal = Animal::create($request->all());
        
        // 回傳 animal 產生出來的實體物件資料，第二個參數設定狀態碼，可以直接寫 201 表示創建成功的狀態螞或用下面 Response 功能 
        return response($animal, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    public function destroy($id)
    {
        $animal = Animal::find($id);  // 手動加載資料
        if (!$animal) {
            return response()->json(['error' => 'Animal not found'], 404);
        }

        $animal->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Animal  $animal
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Animal $animal)
    // {
    //     dd($animal);
    //     DB::enableQueryLog();
    //     // 把這個實體物件刪除
    //     $animal->delete();
    //     dd(DB::getQueryLog());
    //     // 回傳 null 並且給予 204 狀態碼
    //     return response(null, Response::HTTP_NO_CONTENT);
        
    // }
}
