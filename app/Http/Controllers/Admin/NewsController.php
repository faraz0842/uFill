<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminCompany;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_data = AdminCompany::where('company_id',1)->first();
        $news = News::join('admins','admins.name','news.added_by')->orderBy('news_id','DESC')->get();
        return view('admin.news')->with('news',$news)->with('company_data',$company_data);
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
        try {

            $image = $request->file('image');
            if (isset($image)) {
                $image_name = $image->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/StaffImages/';
                $image->move($image_path, $image_name);
                $profile = $image_path.$image_name;
            } else {
                $profile = null;
            }


            $news = new News();
            $news->version = $request->version;
            $news->title = $request->title;
            $news->description = $request->description;
            $news->title_de = $request->title_de;
            $news->description_de = $request->description_de;
            $news->type = $request->type;
            $news->image = $profile;
            $news->added_by = session('name');
            $news->save();

            return redirect()->Route('admin.news');


        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $image = $request->file('image');
            if (isset($image)) {
                $image_name = $image->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/StaffImages/';
                $image->move($image_path, $image_name);
                $profile = $image_path.$image_name;
            } else {
                $profile = $request->previous_image;
            }


            $news = News::where('news_id',$id)->first();
            $news->version = $request->version;
            $news->title = $request->title;
            $news->description = $request->description;
            $news->title_de = $request->title_de;
            $news->description_de = $request->description_de;
            $news->type = $request->type;
            $news->image = $profile;
            $news->added_by = session('name');
            $news->save();

            return redirect()->Route('admin.news');


        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('news_id',$id)->delete();
        return redirect()->Route('admin.news');
    }
}
