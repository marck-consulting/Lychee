<?php

use App\Models\Extensions\BaseConfigMigration;

return new class() extends BaseConfigMigration {
	public const IMAGE_PROCESSING = 'Image Processing';
	public const INT = 'int';

	public function getConfigs(): array
	{
		return [
			[
				'key' => 'upload_chunk_size',
				'value' => '0',
				'confidentiality' => '0',
				'cat' => self::IMAGE_PROCESSING,
				'type_range' => self::INT,
				'description' => 'Size of chunks when uploading in bytes: 0 is auto',
			],
		];
	}
};
