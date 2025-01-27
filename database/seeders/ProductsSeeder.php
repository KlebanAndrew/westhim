<?php

namespace Database\Seeders;

use App\Enums\ProductCategory;
use App\Models\Product;
use App\Models\ProductText;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
	protected $products = [
		[
			'slug' => 'kc_3537',
			'category' => ProductCategory::PRESS_KC,
			'texts' => [
				[
					'locale' => 'uk',
					'sku' => 'kc_3537',
					'name' => 'ПРЕС КС3537 ДВОКРИВОШИПНИЙ ПРОСТОЇ ДІЇ ВІДКРИТИЙ',
					'description' => 'Прес призначений для виготовлення з листового матеріалу середніх великих деталей, що вимагають вирубки, гнуття, формовки, неглибокого витягування та інших операцій холодного штампування.',
					'characteristics' => [
						['name' => 'Номінальне зусилля, МН (т.с.)', 'value' => '5,0 / 500'],
						['name' => 'Хід повзуна,мм', 'value' => '250'],
						['name' => 'Частота безперервних ходів повзуна,1/хв', 'value' => '32'],
						['name' => 'Частота поодиноких включень,1/хв', 'value' => '20'],
						['name' => 'Відстань між столом і повзуном в його нижньому положенні, мм', 'value' => '750'],
						['name' => 'Товщина підштампової плити**, мм', 'value' => '220'],
						['name' => 'Зусилля верхнього виштовхувача, т.с.', 'value' => '40'],
						['name' => 'Сумарне зусилля пневмоподушок*, т.с.', 'value' => '60'],
						['name' => 'Робочий хід пневмоподушок, мм', 'value' => '120'],
						['name' => 'Величина регулювання відстані між столом і повзуном, мм', 'value' => '250'],
						['name' => 'Розмір стола (ширина х глибина),мм', 'value' => '2500x1400'],
						['name' => 'Розміри повзуна (ширина х глибина),мм', 'value' => '2500x1300'],
						['name' => 'Розмір вікон в стійках (ширина х висота), мм', 'value' => '1320х800'],
						['name' => 'Потужність головного двигуна,кВт', 'value' => '47,0'],
						['name' => 'Габаритні розміри преса, мм (довжина,ширина,висота)', 'value' => '5640x3500x6475'],
						['name' => 'Орієнтовна маса преса,кГ', 'value' => '86500'],
					],
					'notes' => [
						'* Діаметр отвору в столі і розташування в столі, можливе згідно технічного завдання Замовника',
						'** Повзун і підштампова плита, можливо виконати згідно з ескізу Замовника',
					],
				],
			],
		],
	];

	public function run(): void
	{
		ProductText::query()->truncate();
		Product::query()->truncate();
		
		foreach ($this->products as $productData) {
			$product = new Product();
			$product->slug = $productData['slug'];
			$product->category = $productData['category'];
			$product->save();

			foreach ($productData['texts'] as $text) {
				$serviceText = new ProductText();
				$serviceText->locale = $text['locale'];
				$serviceText->sku = $text['sku'];
				$serviceText->name = $text['name'];
				$serviceText->description = $text['description'];
				$serviceText->characteristics = $text['characteristics'];
				$serviceText->notes = $text['notes'];
				$serviceText->product()->associate($product);
				$serviceText->save();
			}
		}
	}
}
