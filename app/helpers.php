<?php
if (!function_exists('s3_asset')) {
    function s3_asset($path)
    {
        return \Illuminate\Support\Facades\Storage::disk('s3')->temporaryUrl($path, now()->addMinutes(60));
    }
}

if (!function_exists('s3_icon_asset')) {
    function s3_icon_asset($path)
    {
        return \Illuminate\Support\Facades\Storage::disk('s3_icon')->temporaryUrl($path, now()->addMinutes(60));
    }
}
