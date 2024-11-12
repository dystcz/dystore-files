<?php

namespace Modules\DystoreFiles\Domain\Files\JsonApi\V1;

use Dystcz\LunarApi\Support\Models\Actions\SchemaType;
use LaravelJsonApi\Core\Schema\Schema;
use LaravelJsonApi\NonEloquent\Fields\ID;
use Modules\DystoreFiles\Domain\Files\Entities\File;

class FileSchema extends Schema
{
    /**
     * The model the schema corresponds to.
     */
    public static string $model = File::class;

    /**
     * {@inheritDoc}
     */
    public function fields(): iterable
    {
        return [
            ID::make(),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function uriType(): string
    {
        if ($this->uriType) {
            return $this->uriType;
        }

        return $this->uriType = $this->type();
    }

    /**
     * {@inheritDoc}
     */
    public static function type(): string
    {
        return SchemaType::get(File::class);
    }
}
