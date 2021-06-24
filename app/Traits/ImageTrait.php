<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait ImageTrait
{
    /**
     * Uploads image to the storage and returns it's path.
     *
     * @param UploadedFile|null $requestFile
     * @return string|null
     */
    public function store(?UploadedFile $requestFile): ?string
    {
        if (!$requestFile) {
            return null;
        }

        $imagePath = Storage::disk('s3')->putFile('uploads', $requestFile, 'public');

        return Storage::disk('s3')->url($imagePath);
    }

    /**
     * Deletes old entity image from storage if it exists.
     *
     * @param string|null $imagePath
     * @return void
     */
    public function remove(?string $imagePath): void
    {
        if ($imagePath) {
            Storage::disk('s3')->delete(explode('.com/', $imagePath)[1]);
        }
    }
}
