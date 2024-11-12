<?php

namespace Modules\DystoreFiles\Domain\Files\Entities;

use Illuminate\Contracts\Support\Arrayable;

class File implements Arrayable
{
    public function __construct(
        public string|int $id,
        public string $serverId,
        public string $fileName,
        public bool $uploaded,
        public ?int $order = null,
    ) {}

    /**
     * Get the file ID.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get the file name.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Get the server ID.
     */
    public function getServerId(): string
    {
        return $this->serverId;
    }

    /**
     * Get the uploaded status.
     */
    public function getUploaded(): bool
    {
        return $this->uploaded;
    }

    /**
     * Get the file order.
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'fileName' => $this->fileName,
            'serverId' => $this->serverId,
            'uploaded' => $this->uploaded,
            'order' => $this->order,
        ];
    }
}
