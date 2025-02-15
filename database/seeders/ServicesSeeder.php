<?php

namespace Database\Seeders;

use App\Enums\FileType;
use App\Models\File;
use App\Models\Service;
use App\Models\ServiceText;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ServicesSeeder extends Seeder
{
	protected $services = [
		[
			'slug' => 'laser_cut',
			'texts' => [
				[
					'locale' => 'uk',
					'name' => 'Лазерна різка листового металу',
					'description' => 'Лазер забезпечує високу точність і швидкість вирізання, що дозволяє обробляти складні геометричні форми з високою чіткістю.',
					'characteristics' => [
						'Діапазон товщин 0.5 – 20 мм.',
						'Точність 0.01 мм.',
						'Потужність 2-4 КВТ.',
						'Швидкість виконання до 20 м/хв.',
					],
					'prices' => [
						[
							'group_name' => 'Нержавійка, Мідь, Цинк, Алюміній',
							'group_prices' => [	
								'0.8мм- 26.66₴ / 0.66₴',
								'1мм - 26.66₴ / 0.66₴',
								'1.5мм - 27.43₴ / 0.66₴',
								'2мм - 35.46₴ / 1.75₴',
								'2.5мм - 66.39₴ / 3.05₴',
								'3мм - 71.25₴ / 3.05₴',
								'4мм - 74.44₴ / 3.4₴',
								'5мм - 80.21₴ / 3.4₴',
								'6мм - 84.76₴ / 4.03₴',
								'8мм - 103.91₴ / 5.91₴',
								'10мм - 123.06₴ / 7.3₴',
							]
						],
						[
							'group_name' => 'Сталь',
							'group_prices' => [
								'0.5мм- 16.50₴ / 0.41₴',
								'0.8мм- 16.50₴ / 0.41₴',
								'1мм - 16.50₴ / 0.41₴',
								'1.5мм - 19.50₴ / 0.62₴',
								'2мм - 22.16₴ / 1.1₴',
								'2.5мм - 21.14₴ / 1.43₴',
								'3мм - 28.04₴ / 1.43₴',
								'4мм - 31.25₴ / 1.43₴',
								'5мм - 34.13₴ / 1.43₴',
								'6мм - 36.58₴ / 1.74₴',
								'8мм - 47.60₴ / 2.36₴',
								'10мм - 58.52₴ / 2.69₴',
								'12мм - 75.06₴ / 3.3₴',
								'14мм - 86.06₴ / 4.3₴',
								'15мм - 96.06₴ / 4.3₴',
								'16мм - 109.06₴ / 5.3₴',
							]
						]
					],
					'price_conditions_text' => 'Ціни є приблизними. Кінцева ціна вираховується після отримання креслення.',
				],
			],
			'files' => [
				['type' => FileType::IMAGE, 'path' => '/images/services/laser_cut/1.jpg'],
				['type' => FileType::IMAGE, 'path' => '/images/services/laser_cut/2.jpg'],
			],
		],
		[
			'slug' => 'laser_pipe_cut',
			'texts' => [
				[
					'locale' => 'uk',
					'name' => 'Лазерна різка трубного металу',
					'description' => 'Це високотехнологічний процес, де лазерний промінь використовується для точного розрізання труб із металу.',
					'characteristics' => [
						'Діаметр труби 10 – 220 мм.',
						'Точність 0.01 мм.',
						'Потужність 2 КВТ.',
						'Довжина труб заготовок 0.5 - 6 м',
					],
					'prices' => [
						[
							'group_name' => 'Сталь',
							'group_prices' => [
								'0.5мм - 33₴ / 0.82₴',
								'0.8мм - 33₴ / 0.82₴',
								'1мм - 33₴ / 0.82₴',
								'1.5мм - 39₴ / 1.24₴',
								'2мм - 44.32₴ / 2.2₴',
								'2.5мм- 46.28₴ / 2.2₴',
								'3мм - 56.08₴ / 2.86₴',
								'4мм - 62.25₴ / 2.86₴',
								'5мм - 68.26₴ / 2.86₴',
								'6мм - 73.16₴ / 3.48₴',
								'8мм - 95.2₴ / 5.38₴',
							]
						],
						[
							'group_name' => 'нержавійка',
							'group_prices' => [
								'0.5мм - 33₴ / 0.82₴:',
								'0.8мм - 33₴ / 0.82₴',
								'1мм- 33₴ / 0.82₴',
								'1.5мм - 39₴ / 1.24₴',
								'2мм - 44.32₴ / 2.2₴',
								'2.5мм - 46.28₴ / 2.2₴',
								'3мм- 56.08₴ / 2.86₴',
								'4мм - 62.25₴ / 2.86₴',
								'5мм - 68.26₴ / 2.86₴',
								'6мм - 73.16₴ / 3.48₴',
								'8мм- 95.2₴ / 5.38₴',
							]
						]
					],
					'price_conditions_text' => 'Ціни є приблизними. Кінцева ціна вираховується після отримання креслення.',
				],
			],
			'files' => [
				['type' => FileType::IMAGE, 'path' => '/images/services/laser_pipe_cut/1.jpg'],
				['type' => FileType::IMAGE, 'path' => '/images/services/laser_pipe_cut/2.jpg'],
			]
		],
		[
			'slug' => 'metal_bending',
			'texts' => [
				[
					'locale' => 'uk',
					'name' => 'Гнуття металу',
					'description' => 'Це метод обробки листового металу, який дозволяє надати передбачену завданням точну, вигнуту форму деталі, без проведення зварювальних робіт.',
					'characteristics' => [
						'Робочий натиск - до 100 тон',
						'Довжина згину в робочій зоні - до 2.5м.',
						'Товщина металу - до 12мм',
						'Швидкість виконання до 20 м/хв.',
					],
					'prices' => [
						[
							'group_name' => 'Нержавійка, Мідь, Цинк, Алюміній, Сталь',
							'group_prices' => [
								'Від 30₴ за 1 гнуття',
								'Від 30₴ за зенькування та нарізку різьби',
							]
						],
					],
					'price_conditions_text' => 'Ціни є приблизними. Кінцева ціна вираховується після отримання технічного завдання в форматі PDF.',
				],
			],
			'files' => [
				['type' => FileType::IMAGE, 'path' => '/images/services/metal_bending/1.jpg'],
				['type' => FileType::IMAGE, 'path' => '/images/services/metal_bending/2.jpg'],
				['type' => FileType::IMAGE, 'path' => '/images/services/metal_bending/3.jpg'],
			],
		],
		[
			'slug' => 'powder_coating',
			'texts' => [
				[
					'locale' => 'uk',
					'name' => 'Порошкове фарбування',
					'description' => 'Це процес нанесення порошкової фарби, яка плавиться під високою температурою, утворюючи міцне та рівномірне покриття.',
					'characteristics' => [
						'Величезний асортимент кольорів',
						'Довжина до 6м.',
						'Висота до 2м',
						'Ширина до 1.45м',
					],
					'prices' => [
						[
							'group_name' => 'Поверхня',
							'group_prices' => [
								'350₴ за м²',
							]
						],
					],
					'price_conditions_text' => 'При обрахуванні ціни площа заокруглюється до м² в вищу сторону.',
				],
			],
			'files' => [
				['type' => FileType::IMAGE, 'path' => '/images/services/powder_coating/1.jpg'],
				['type' => FileType::IMAGE, 'path' => '/images/services/powder_coating/2.jpg'],
			],
		],
		[
			'slug' => 'milling',
			'texts' => [
				[
					'locale' => 'uk',
					'name' => 'Фрезерування',
					'description' => 'Це процес обробки металу за допомогою фрези, яка видаляє шари матеріалу для створення точних та складних деталей з гладкою поверхнею.',
					'characteristics' => [
						'Розмір стола - 1300x570мм',
						'Максимальна висота заготовки - 590мм',
						'Максимальна вага заготовки - 1000кг',
					],
					'prices' => [
						[
							'group_name' => 'Ціни',
							'group_prices' => [
								'Ціни вираховуються відносно ТЗ і заготовки.',
							]
						],
					],
					'price_conditions_text' => 'На жаль, розрахунок ціни можливий виключно за чітким технічним завданням у форматі PDF.',
				],
			],
			'files' => [
				['type' => FileType::IMAGE, 'path' => '/images/services/milling/1.webp'],
				['type' => FileType::IMAGE, 'path' => '/images/services/milling/2.webp'],
			],
		],
		[
			'slug' => 'turning_work',
			'texts' => [
				[
					'locale' => 'uk',
					'name' => 'Токарні роботи',
					'description' => 'Це процес обробки металу на токарному верстаті, під час якого заготовка обертається, а різець знімає зайвий матеріал, створюючи точні циліндричні форми та деталі.',
					'characteristics' => [
						'Максимальний діаметр заготовки - 250мм',
						'Максимальна довжина заготовки - 850мм.',
					],
					'prices' => [
						[
							'group_name' => 'Ціни',
							'group_prices' => [
								'Ціни вираховуються відносно ТЗ і заготовки.',
							]
						],
					],
					'price_conditions_text' => 'На жаль, розрахунок ціни можливий виключно за чітким технічним завданням у форматі PDF.',
				],
			],
			'files' => [
				['type' => FileType::IMAGE, 'path' => '/images/services/turning_work/1.webp'],
				['type' => FileType::IMAGE, 'path' => '/images/services/turning_work/2.webp'],
			],
		],
		[
			'slug' => 'welding',
			'texts' => [
				[
					'locale' => 'uk',
					'name' => 'Зварювання',
					'description' => 'Це процес з’єднання металевих деталей шляхом їхнього нагрівання та плавлення, що забезпечує міцне та надійне з’єднання.',
					'characteristics' => [
						'MIG MAG (ручне/напівавтомат)',
						'Роботизоване',
						'TIG (аргон)',
					],
					'prices' => [
						[
							'group_name' => 'Ціни',
							'group_prices' => [
								'Ціни вираховуються відносно ТЗ і заготовки.',
							]
						],
					],
					'price_conditions_text' => 'На жаль, розрахунок ціни можливий виключно за чітким технічним завданням у форматі PDF.',
				],
			],
			'files' => [
				['type' => FileType::IMAGE, 'path' => '/images/services/turning_work/1.webp'],
				['type' => FileType::IMAGE, 'path' => '/images/services/turning_work/2.jpg'],
			],
		],
	];

	public function run(): void
	{
		ServiceText::query()->truncate();
		Service::query()->truncate();

		foreach ($this->services as $serviceData) {
			$service = new Service();
			$service->slug = $serviceData['slug'];
			$service->save();
			
			foreach ($serviceData['texts'] as $text) {
				$serviceText = new ServiceText();
				$serviceText->locale = $text['locale'];
				$serviceText->name = $text['name'];
				$serviceText->description = $text['description'];
				$serviceText->characteristics = $text['characteristics'];
				$serviceText->prices = $text['prices'];
				$serviceText->price_conditions_text = $text['price_conditions_text'];
				$serviceText->service()->associate($service);
				$serviceText->save();
			}
			
			foreach (Arr::get($serviceData, 'files', []) as $fileData) {
				$file = new File();
				$file->path = $fileData['path'];
				$file->type = $fileData['type'];
				
				$file->fileable()->associate($service);
				$file->save();
			}
		}
	}
}
