<?php

namespace Modules\DystoreFiles\Domain\Files\Http\Controllers;

use Illuminate\Http\Response;
use Modules\DystoreFiles\Domain\Files\Contracts\FilesController as FilesControllerContract;
use Modules\DystoreFiles\Domain\Files\JsonApi\V1\DeleteFileRequest;
use Modules\DystoreFiles\Domain\Files\JsonApi\V1\UploadFileRequest;
use Sopamo\LaravelFilepond\Http\Controllers\FilepondController;

class FilesController extends FilepondController implements FilesControllerContract
{
    /**
     * Upload file.
     */
    public function uploadFile(UploadFileRequest $request): Response
    {
        return parent::upload($request);
    }

    /**
     * Remove temporary file.
     */
    public function deleteFile(DeleteFileRequest $request): Response
    {
        return parent::delete($request);
    }
}
