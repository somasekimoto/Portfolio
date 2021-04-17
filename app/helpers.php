<?php
if (!function_exists('s3_asset')) {
    function s3_asset($path)
    {
        return \Illuminate\Support\Facades\Storage::disk('s3')->temporaryUrl($path, now()->addMinute());
    }
}
