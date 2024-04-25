<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndividualInvestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            $ind_investor1=[
                'name' => 'Sarita Gurung',
                'email' => 'sarita@yopmail.com',
                'phone' => '9841234567',
                'sex' => 'Female',
                'dob' => '1990-06-12',
                'image' => 'new-dashboard/img/profile_picture/sarita.jpg',
                'father_name' => 'Bikram Gurung',
                'grand_father_name' => 'Narayan Gurung',
                'province' => 'Bagmati',
                'district' => 'Kathmandu',
                'municipality' => 'Kathmandu Metropolitian City',
                'locality' => 'Thamel',
                'ward' => '5',
                'temporary_province' => 'Bagmati',
                'temporary_district' => 'Kathmandu',
                'temporary_municipality' => 'Kathmandu Metropolitian City',
                'temporary_locality' => 'Thamel',
                'temporary_ward' => '5',
                'citizenship_number' => '9876543210',
                'citizenship_issue_date' => '2005-11-20',
                'citizenship_issue_district' => 'Kathmandu',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Passionate about sustainable investing.',
                'max_investment_amount' => '100000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor2=[
                'name' => 'Rajesh Sharma',
                'email' => 'rajesh@yopmail.com',
                'phone' => '9812345678',
                'sex' => 'Male',
                'dob' => '1988-03-25',
                'image' => 'new-dashboard/img/profile_picture/rajesh.jpg',
                'father_name' => 'Dinesh Sharma',
                'grand_father_name' => 'Hari Sharma',
                'province' => 'GANDAKI',
                'district' => 'KASKI',
                'municipality' => 'Pokhara Metropolitian City',
                'locality' => 'Lakeside',
                'ward' => '6',
                'temporary_province' => 'GANDAKI',
                'temporary_district' => 'Pokhara',
                'temporary_municipality' => 'Pokhara',
                'temporary_locality' => 'Lakeside',
                'temporary_ward' => '6',
                'citizenship_number' => '8765432109',
                'citizenship_issue_date' => '2008-05-20',
                'citizenship_issue_district' => 'Pokhara',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Tech enthusiast and early-stage investor.',
                'max_investment_amount' => '75000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor3=[
                'name' => 'Asha Rai',
                'email' => 'asha@yopmail.com',
                'phone' => '9856781234',
                'sex' => 'Female',
                'dob' => '1993-09-18',
                'image' => 'new-dashboard/img/profile_picture/asha.jpg',
                'father_name' => 'Ramesh Rai',
                'grand_father_name' => 'Dhan Bahadur Rai',
                'province' => 'Province 1',
                'district' => 'MORANG',
                'municipality' => 'Biratnagar Metropolitian City',
                'locality' => 'Birat Chowk',
                'ward' => '1',
                'temporary_province' => 'Province 1',
                'temporary_district' => 'MORANG',
                'temporary_municipality' => 'Biratnagar Metropolitian City',
                'temporary_locality' => 'Birat Chowk',
                'temporary_ward' => '1',
                'citizenship_number' => '7654321098',
                'citizenship_issue_date' => '2011-12-18',
                'citizenship_issue_district' => 'MORANG',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'processing',
                'kyc_remarks' => null,
                'description' => 'Passionate about education and youth development.',
                'max_investment_amount' => '50000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor4=[
                'name' => 'Nabin Thapa',
                'email' => 'nabin@yopmail.com',
                'phone' => '9812345678',
                'sex' => 'Male',
                'dob' => '1990-05-22',
                'image' => 'new-dashboard/img/profile_picture/nabin.jpg',
                'father_name' => 'Bikash Thapa',
                'grand_father_name' => 'Krishna Thapa',
                'province' => 'LUMBINI',
                'district' => 'ARGHAKHANCHI',
                'municipality' => 'Malika Rural Municipality',
                'locality' => 'Traffic Chowk',
                'ward' => '3',
                'temporary_province' => 'LUMBINI',
                'temporary_district' => 'ARGHAKHANCHI',
                'temporary_municipality' => 'Malika Rural Municipality',
                'temporary_locality' => 'Traffic Chowk',
                'temporary_ward' => '3',
                'citizenship_number' => '6543210987',
                'citizenship_issue_date' => '2013-08-15',
                'citizenship_issue_district' => 'ARGHAKHANCHI',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Entrepreneur in the hospitality industry.',
                'max_investment_amount' => '90000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor5=[
                'name' => 'Prakriti Shrestha',
                'email' => 'prakriti@yopmail.com',
                'phone' => '9845671234',
                'sex' => 'Female',
                'dob' => '1987-12-05',
                'image' => 'new-dashboard/img/profile_picture/prakriti.jpg',
                'father_name' => 'Suresh Shrestha',
                'grand_father_name' => 'Narendra Shrestha',
                'province' => 'BAGMATI',
                'district' => 'Lalitpur',
                'municipality' => 'Lalitpur Metropolitian City',
                'locality' => 'Jawalakhel',
                'ward' => '2',
                'temporary_province' => 'BAGMATI',
                'temporary_district' => 'Lalitpur',
                'temporary_municipality' => 'Lalitpur Metropolitian City',
                'temporary_locality' => 'Jawalakhel',
                'temporary_ward' => '2',
                'citizenship_number' => '5432109876',
                'citizenship_issue_date' => '2003-05-10',
                'citizenship_issue_district' => 'Lalitpur',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Investor with a focus on social enterprises.',
                'max_investment_amount' => '80000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor6=[
                'name' => 'Suman Adhikari',
                'email' => 'suman@yopmail.com',
                'phone' => '9812345678',
                'sex' => 'Male',
                'dob' => '1995-02-28',
                'image' => 'new-dashboard/img/profile_picture/suman.jpg',
                'father_name' => 'Ramesh Adhikari',
                'grand_father_name' => 'Narayan Adhikari',
                'province' => 'MADHESH',
                'district' => 'DHANUSA',
                'municipality' => 'Kamala Municipality',
                'locality' => 'Maisthan',
                'ward' => '4',
                'temporary_province' => 'MADHESH',
                'temporary_district' => 'DHANUSA',
                'temporary_municipality' => 'Kamala Municipality',
                'temporary_locality' => 'Maisthan',
                'temporary_ward' => '4',
                'citizenship_number' => '8765432109',
                'citizenship_issue_date' => '2009-09-15',
                'citizenship_issue_district' => 'DHANUSA',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'rejected',
                'kyc_remarks' => 'Upload Proper Passport Size Photo',
                'description' => 'Tech entrepreneur and early-stage investor.',
                'max_investment_amount' => '70000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor7=[
                'name' => 'Karuna Bhandari',
                'email' => 'karuna@yopmail.com',
                'phone' => '9856781234',
                'sex' => 'Female',
                'dob' => '1992-10-20',
                'image' => 'new-dashboard/img/profile_picture/karuna.jpg',
                'father_name' => 'Bharat Bhandari',
                'grand_father_name' => 'Rajendra Bhandari',
                'province' => 'LUMBINI',
                'district' => 'GULMI',
                'municipality' => 'Resunga Municipality',
                'locality' => 'Traffic Chowk',
                'ward' => '3',
                'temporary_province' => 'LUMBINI',
                'temporary_district' => 'GULMI',
                'temporary_municipality' => 'Resunga Municipality',
                'temporary_locality' => 'Traffic Chowk',
                'temporary_ward' => '3',
                'citizenship_number' => '6543210987',
                'citizenship_issue_date' => '2012-12-25',
                'citizenship_issue_district' => 'GULMI',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Tech entrepreneur and early-stage investor.',
                'max_investment_amount' => '90000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor8 = [
                'name' => 'Suresh Thapa',
                'email' => 'suresh@yopmail.com',
                'phone' => '9812345678',
                'sex' => 'Male',
                'dob' => '1985-05-15',
                'image' => 'new-dashboard/img/profile_picture/suresh.jpg',
                'father_name' => 'Ganesh Thapa',
                'grand_father_name' => 'Hari Thapa',
                'province' => 'BAGMATI',
                'district' => 'KATHMANDU',
                'municipality' => 'Kathmandu Metropolitian City',
                'locality' => 'Durbar Marg',
                'ward' => '5',
                'temporary_province' => 'BAGMATI',
                'temporary_district' => 'KATHMANDU',
                'temporary_municipality' => 'Kathmandu Metropolitian City',
                'temporary_locality' => 'Durbar Marg',
                'temporary_ward' => '5',
                'citizenship_number' => '7890123456',
                'citizenship_issue_date' => '2008-08-10',
                'citizenship_issue_district' => 'KATHMANDU',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Entrepreneur with a focus on sustainable technologies.',
                'max_investment_amount' => '80000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor9 = [
                'name' => 'Ranjita Sharma',
                'email' => 'ranjita@yopmail.com',
                'phone' => '9745632109',
                'sex' => 'Female',
                'dob' => '1980-09-08',
                'image' => 'new-dashboard/img/profile_picture/ranjita.jpg',
                'father_name' => 'Narayan Sharma',
                'grand_father_name' => 'Krishna Sharma',
                'province' => 'MADHESH',
                'district' => 'DHANUSA',
                'municipality' => 'Kamala Municipality',
                'locality' => 'Main Road',
                'ward' => '2',
                'temporary_province' => 'MADHESH',
                'temporary_district' => 'DHANUSA',
                'temporary_municipality' => 'Kamala Municipality',
                'temporary_locality' => 'Main Road',
                'temporary_ward' => '2',
                'citizenship_number' => '5432109876',
                'citizenship_issue_date' => '2005-03-22',
                'citizenship_issue_district' => 'DHANUSA',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Investor passionate about supporting education startups.',
                'max_investment_amount' => '75000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
            $ind_investor10 = [
                'name' => 'Amit Patel',
                'email' => 'amit@yopmail.com',
                'phone' => '9908765432',
                'sex' => 'Male',
                'dob' => '1991-12-03',
                'image' => 'new-dashboard/img/profile_picture/amit.jpg',
                'father_name' => 'Raj Patel',
                'grand_father_name' => 'Sanjay Patel',
                'province' => 'GANDAKI',
                'district' => 'KASKI',
                'municipality' => 'Pokhara Metropolitian City',
                'locality' => 'Lakeside',
                'ward' => '4',
                'temporary_province' => 'GANDAKI',
                'temporary_district' => 'Pokhara',
                'temporary_municipality' => 'Pokhara',
                'temporary_locality' => 'Lakeside',
                'temporary_ward' => '4',
                'citizenship_number' => '8765432109',
                'citizenship_issue_date' => '2010-06-18',
                'citizenship_issue_district' => 'Pokhara',
                'citizenship_front_document' => 'new-dashboard/img/citizenship_front.png',
                'citizenship_back_document' => 'new-dashboard/img/citizenship_back.jpg',
                'account_type' => 'individual',
                'kyc_status' => 'verified',
                'kyc_remarks' => null,
                'description' => 'Entrepreneur and advocate for environmental sustainability.',
                'max_investment_amount' => '85000',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'created_at'=>Carbon::now()->subDays(rand(1, 30)),
            ],
        ]);
        $ind_investor1 = User::find(2);
        $ind_investor2 = User::find(3);
        $ind_investor3 = User::find(4);
        $ind_investor4 = User::find(5);
        $ind_investor5 = User::find(6);
        $ind_investor6 = User::find(7);
        $ind_investor7 = User::find(8);
        $ind_investor8 = User::find(9);
        $ind_investor9 = User::find(10);
        $ind_investor10 = User::find(11);

        //Assign Role
        $ind_investor1->assignRole('investor');
        $ind_investor2->assignRole('investor');
        $ind_investor3->assignRole('investor');
        $ind_investor4->assignRole('investor');
        $ind_investor5->assignRole('investor');
        $ind_investor6->assignRole('investor');
        $ind_investor7->assignRole('investor');
        $ind_investor8->assignRole('investor');
        $ind_investor9->assignRole('investor');
        $ind_investor10->assignRole('investor');

        //Investor Interests
        $ind_investor1->sectors()->sync([2, 5, 8, 11]);
        $ind_investor2->sectors()->sync([1, 4, 7, 10]);
        $ind_investor3->sectors()->sync([3, 6, 9, 12]);
        $ind_investor4->sectors()->sync([2, 5, 8, 11]);
        $ind_investor5->sectors()->sync([1, 4, 7, 10]);
        $ind_investor6->sectors()->sync([3, 6, 9, 12]);
        $ind_investor7->sectors()->sync([2, 5, 8, 11]);
        $ind_investor8->sectors()->sync([1, 4, 7, 10]);
        $ind_investor9->sectors()->sync([3, 6, 9, 12]);
        $ind_investor10->sectors()->sync([2, 5, 8, 11]);

    }
}

