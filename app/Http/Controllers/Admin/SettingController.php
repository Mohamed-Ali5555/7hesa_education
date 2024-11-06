<?php

namespace App\Http\Controllers\Admin;

// use App\Models\Setting;
use Illuminate\Http\Request;
use App\Traits\AttachFilesTrait;
use App\Http\Controllers\Controller;
use App\Settings\GeneralSettings;

class SettingController extends Controller
{
    use AttachFilesTrait;
    public function index(GeneralSettings $generalSettings )
    {
        // $collection = Setting::get();

        // $setting['setting'] = $collection->flatMap(fn($collection) => [$collection->key => $collection->value]);
        return view('admin.pages.setting.index', compact('generalSettings'));
    }

    public function update(Request $request)
    {

        try {
            $info = $request->except('_token', '_method', 'logo');
            foreach ($info as $key => $value) {
                Setting::where('key', $key)->update(['value' => $value]);
            }

            if ($request->hasFile('logo')) {
                $logo_name = $request->file('logo')->getClientOriginalName();
                Setting::where('key', 'logo')->update(['value' => $logo_name]);
                $this->uploadFile($request, 'logo', 'logo');
            }

            toastr()->success(trans('messages.Update'));
            return back();
        } catch (\Exception $e) {

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }
}
