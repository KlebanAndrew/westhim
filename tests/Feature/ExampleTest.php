<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Enums\ProductCategory;
use App\Models\Product;
use App\Models\Service;
use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class ExampleTest extends TestCase
{
	#[DataProvider('provideUrls')]
	public function testRotes(string $url): void
	{
		$this->get($url)->assertStatus(200);
	}

	public static function provideUrls(): Generator
	{
		yield ['/'];
		yield ['/home'];
		yield ['/about'];
		yield ['/contact'];
		yield ['/faq'];
		yield ['/sitemap.xml'];
		yield ['/robots.txt'];
		yield ['/services'];
		yield ['/products'];
		yield ['/products/' . ProductCategory::BRICK_MACHINES];
		yield ['/services/' . 'laser_cut'];
	}
}
