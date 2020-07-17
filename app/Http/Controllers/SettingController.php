<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\createRequestSetting;

class SettingController extends Controller
{

    public function index()
    {
        //
        $setting = Setting::paginate(3);
        return view('admin.setting.index', compact('setting'));

    }


    public function create()
    {
        //
        return view('admin.setting.create');
    }


    public function store(createRequestSetting $request)
    {
        //
        $setting = new Setting();
        $setting->title = $request->title;
        $setting->author = $request->author;
        $setting->keywords = $request->keywords;
        $setting->description = $request->description;
        $setting->save();
        session()->flash('success', 'ایتم مورد نظر با موفقیت در دیتا ثبت گردید');
        return redirect(route('setting.index'));
    }

    public function show( $setting)
    {
        //
        $setting=Setting::findOrFail($setting);
        return $setting;

    }


    public function destroy( $setting)
    {
        //
      Setting::destroy($setting);
      session()->flash('danger','ایتم مورد نظر با موفقیت در دیتا حذف گرید');
      return redirect(route('setting.index'));


    }
}
