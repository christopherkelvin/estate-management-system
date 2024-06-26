<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estate>
 */
class EstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Location'=>$this->faker->city(),
            'NumberOfBeds'=>$this->faker->numberBetween(1,10),
            'NumberOfBathrooms'=>$this->faker->numberBetween(1,10),
            'Description'=>$this->faker->paragraph(100) ,
            'SellingPrice'=>$this->faker->numberBetween(1000000,100000000),
            'Cartegory'=>'Casual Home',
            'Area'=>$this->faker->randomDigit(),
            'photo'=>'storage/1691085254.jpg',
        ];
    }
}












// Welcome to our stunning rental house located in the heart of America. This spacious and modern
//                         home offers everything you need for a comfortable and memorable stay. With four bedrooms, three
//                         bathrooms, a sitting room, and additional amenities, it's the perfect choice for families or
//                         groups seeking a home away from home.

//                         As you step into the house, you'll be greeted by a bright and inviting atmosphere. The sitting
//                         room is elegantly furnished with plush sofas and armchairs, creating a cozy space for relaxation
//                         and socializing. Whether you want to curl up with a book or gather with your loved ones for
//                         movie night, this room provides the ideal setting.

//                         The house features four tastefully decorated bedrooms, each designed with your comfort in mind.
//                         The master bedroom boasts a luxurious king-sized bed, while the other three bedrooms are
//                         furnished with comfortable queen-sized beds. Soft linens and ample storage space ensure a
//                         restful night's sleep for everyone.

//                         The three bathrooms are well-appointed and equipped with modern fixtures. They offer both
//                         showers and bathtubs, allowing you to choose your preferred method of relaxation. Fresh towels
//                         and complimentary toiletries are provided, adding a touch of luxury to your stay.
