<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Dr. Arun Kumar',
                'designation' => 'Cardiologist',
                'rating' => 5,
                'comment' => 'We’ve been using Sinoatrial’s SpO₂ sensors and ECG cables for over 2 years now, and the quality is unmatched.',
                'status' => 1
            ],
            [
                'name' => 'Dr. Leena George',
                'designation' => 'Pediatrician',
                'rating' => 5,
                'comment' => 'The team at Sinoatrial Medical is incredibly professional. Their response time and service support are exceptional.',
                'status' => 1
            ],
            [
                'name' => 'Mr. Prakash Nair',
                'designation' => 'Procurement Manager',
                'rating' => 5,
                'comment' => 'Their range of accessories and sensors meet all our needs with top-notch safety and reliability.',
                'status' => 1
            ],
            [
                'name' => 'Dr. Ravi',
                'designation' => 'Healthcare Consultant',
                'rating' => 4,
                'comment' => 'The user interface on the patient monitor accessories is straightforward, and the durability is impressive.',
                'status' => 1
            ],
            [
                'name' => 'Mr. Naveen Raj',
                'designation' => 'Medical Distributor',
                'rating' => 5,
                'comment' => 'Excellent support and competitive pricing. Sinoatrial is our go-to partner for medical cable solutions.',
                'status' => 1
            ],
            [
                'name' => 'Dr. Ramesh Kannan',
                'designation' => 'Chief Surgeon',
                'rating' => 5,
                'comment' => 'Sinoatrial\'s commitment to precision gives us confidence in their critical care equipment.',
                'status' => 1
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['name' => $testimonial['name']],
                $testimonial
            );
        }
    }
}
