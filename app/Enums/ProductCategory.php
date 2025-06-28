<?php

namespace App\Enums;

final class ProductCategory
{
	public const BRICK_MACHINES = 'brick_machines';
	public const MECHANICAL_PRESSES = 'mechanical_presses';
	public const HYDRAULIC_PRESSES = 'hydraulic_presses';
	public const VATS = 'vats';
	public const SEWER_HATCHES = 'sewer_hatches';

	public static function values(): array
	{
		return [
			self::BRICK_MACHINES,
			self::MECHANICAL_PRESSES,
			self::HYDRAULIC_PRESSES,
			self::VATS,
			self::SEWER_HATCHES,
		];
	}
}
