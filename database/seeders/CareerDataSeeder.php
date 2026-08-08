<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CareerCategory;
use App\Models\CareerJob;

class CareerDataSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Biomedical Service Engineers
        $biomedical = CareerCategory::create([
            'name' => 'Biomedical Service Engineers',
            'status' => 1
        ]);

        CareerJob::create([
            'career_category_id' => $biomedical->id,
            'title' => 'Senior Biomedical Service Engineer',
            'location' => 'Chennai, TN',
            'type' => 'Full-Time',
            'qualification' => 'B.E / B.Tech / Diploma in Biomedical Engineering',
            'experience' => '3 to 5 Years',
            'salary' => 'Competitive (Based on expertise)',
            'responsibilities' => "Install, calibrate, maintain, and repair critical hospital equipment including Patient Monitors, ECG machines, and Defibrillators.\nProvide prompt troubleshooting and support directly to healthcare facilities in Chennai.\nConduct routine preventative maintenance (PM) service according to standards.\nDocument all repair and services logs in compliance with medical device standards.",
            'skills' => "Excellent diagnostic skills in troubleshooting medical electronics.\nExperience with diagnostic patient simulator systems.\nStrong communication skills and client management abilities.",
            'status' => 1
        ]);

        // 2. Sales & Marketing
        $sales = CareerCategory::create([
            'name' => 'Sales & Marketing',
            'status' => 1
        ]);

        CareerJob::create([
            'career_category_id' => $sales->id,
            'title' => 'Sales & Marketing Executive',
            'location' => 'Chennai, TN (Field Job)',
            'type' => 'Full-Time',
            'qualification' => 'B.Sc / BBA / MBA / Biomedical Degree preferred',
            'experience' => '1 to 3 Years (Medical device sales preferred)',
            'salary' => 'Frequent field visits to local hospitals',
            'responsibilities' => "Promote the company’s range of medical accessories, sensors, and equipment to cardiologists, hospital procurement units, and clinics.\nGenerate qualified leads, submit quotations, negotiate prices, and close sales orders.\nMaintain robust relationship records with key healthcare administrators.\nDeliver on monthly and quarterly sales targets set by the coordinator team.",
            'skills' => "Strong presentation, negotiation, and closing skills.\nBasic knowledge of hospital accessories and consumable products.\nFluency in Tamil and English (written and spoken).",
            'status' => 1
        ]);

        // 3. Technical Support
        $support = CareerCategory::create([
            'name' => 'Technical Support',
            'status' => 1
        ]);

        CareerJob::create([
            'career_category_id' => $support->id,
            'title' => 'Technical Support Specialist',
            'location' => 'Chennai, TN (Office-Based)',
            'type' => 'Full-Time',
            'qualification' => 'Diploma / Degree in Electronics or Biomedical Engineering',
            'experience' => '1 to 2 Years',
            'salary' => 'Rotational Day Shifts',
            'responsibilities' => "Answer incoming queries and support calls from hospital administrators and service coordinators.\nProvide remote configuration, troubleshooting, and advice on equipment use.\nRegister service calls, open support tickets, and route urgent cases to on-site field engineers.\nTrack feedback and close tickets in the system once issue resolves.",
            'skills' => "Excellent telephonic support etiquette and listening skills.\nAnalytical mind to quickly diagnose electronics errors remotely.\nWorking familiarity with MS Office and Ticket systems.",
            'status' => 1
        ]);

        // 4. Administration
        $admin = CareerCategory::create([
            'name' => 'Administration',
            'status' => 1
        ]);

        CareerJob::create([
            'career_category_id' => $admin->id,
            'title' => 'Office Administrator / Coordinator',
            'location' => 'Chennai, TN',
            'type' => 'Full-Time',
            'qualification' => 'Any Bachelor\'s Degree',
            'experience' => '2 to 4 Years',
            'salary' => 'Documentation, Invoicing, Dispatch Coordinator',
            'responsibilities' => "Manage general office files, coordinate incoming and outgoing shipments of medical consumables.\nDraft purchase and sales bills, track payments, and file tax receipts.\nAnswer primary corporate desk queries and coordinate with recruitment agencies.\nAssist leadership with executive documentation tasks.",
            'skills' => "Strong organizational skills and file sorting methods.\nFluency in Tally ERP, MS Excel, and word tools.\nMulti-tasking ability and polite email communication.",
            'status' => 1
        ]);
    }
}
