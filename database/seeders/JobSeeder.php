<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
        ['id'=>1,
        'title'=>'Software Developer',
        'salary'=>'$60,000',
        'description'=>'Develops and maintains software applications using programming languages like Python, Java, or C++.'
        ],
        
        ['id'=>2,
        'title'=>'Web Developer',
        'salary'=>'$50,000',
        'description'=>'Builds and maintains websites to make sure they load fast and work properly on all devices.'
        ],

        ['id'=>3,
        'title'=>'Front-End Developer',
        'salary'=>'$47,000',
        'description'=>'Works on the visual side of websites using HTML, CSS, and JavaScript.'
        ],

        ['id'=>4,
        'title'=>'Back-End Developer',
        'salary'=>'$48,000',
        'description'=>'Handles server-side logic, databases, and APIs behind web applications.'
        ],

        ['id'=>5,
        'title'=>'Full-Stack Developer',
        'salary'=>'$80,000',
        'description'=>'Handles both front-end and back-end development of web applications.'
        ],

        ['id'=>6,
        'title'=>'Data Analyst',
        'salary'=>'$68,000',
        'description'=>'Analyzes data to help companies make better business decisions.'
        ],

        ['id'=>7,
        'title'=>'Database Administrator',
        'salary'=>'$55,000',
        'description'=>'Manages and secures company databases to keep data safe and accessible.'
        ],

        ['id'=>8,
        'title'=>'Network Administrator',
        'salary'=>'$44,000',
        'description'=>'Sets up and maintains computer networks to keep all systems connected and secure.'
        ],

        ['id'=>9,
        'title'=>'Cybersecurity Analyst',
        'salary'=>'$60,000',
        'description'=>'Protects company systems from hackers and responds to security threats.'
        ],

        ['id'=>10,
        'title'=>'Mobile App Developer',
        'salary'=>'$52,000',
        'description'=>'Creates mobile applications for Android and iOS using Flutter or React Native.'
        ],

        ['id'=>11,
        'title'=>'Game Developer',
        'salary'=>'$45,000',
        'description'=>'Designs and builds video games using engines like Unity or Unreal Engine.'
        ],

        ['id'=>12,
        'title'=>'Machine Learning Engineer',
        'salary'=>'$70,000',
        'description'=>'Builds AI models and systems that learn from data to solve real-world problems.'
        ],

        ['id'=>13,
        'title'=>'Technical Support Engineer',
        'salary'=>'$32,000',
        'description'=>'Helps clients and employees fix technical and software-related problems.'
        ],

        ['id'=>14,
        'title'=>'QA Tester',
        'salary'=>'$35,000',
        'description'=>'Tests software applications to ensure they meet quality standards and function as expected.'
        ],

        ['id'=>15,
        'title'=>'IT Project Manager',
        'salary'=>'$65,000',
        'description'=>'Leads IT projects and makes sure the team meets deadlines and delivers quality results.'
        ],
        ];
        foreach($jobs as $job){\DB::table('job_listing')->insert($job);}
    }
}
