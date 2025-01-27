<?php

namespace App\Enums;

final class ProductCategory
{
	public const PRESS_KC = 'press_kc';
	public const PRESS_KT = 'press_kt';
	public const PRESS_KG = 'press_kg';
	public const PRESS_KY = 'press_ky';
	public const PRESS_KU = 'press_ku';
	public const PRESS_KV = 'press_kv';
	public const BRICK_MACHINE = 'brick_machine';
	public const YVT = 'yvt';
	public const SOLAR_SYSTEMS = 'solar_systems';

	public static function values(): array
	{
		return [
			self::PRESS_KC,
			self::PRESS_KT,
			self::PRESS_KG,
			self::PRESS_KY,
			self::PRESS_KU,
			self::PRESS_KV,
			self::BRICK_MACHINE,
			self::YVT,
			self::SOLAR_SYSTEMS,
		];
	}
}
