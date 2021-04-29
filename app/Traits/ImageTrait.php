<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait ImageTrait
{
    /**
     * Uploads image to the storage and returns it's path.
     *
     * @param string $entity
     * @param UploadedFile|null $requestFile
     * @return string|null
     */
    public function store(string $entity, ?UploadedFile $requestFile): ?string
    {
        if (!$requestFile) {
            return null;
        }

        $imagePath = $requestFile->store("public/files/$entity");
        $imageStoragePath = str_replace('public', 'storage', $imagePath);
        $appURL = env('APP_URL');
        return $appURL . $imageStoragePath;
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
            $appStorageURL = env('APP_URL') . 'storage';
            $imageStorageURL = str_replace($appStorageURL, '', $imagePath);
            Storage::delete('public' . $imageStorageURL);
        }
    }
}
