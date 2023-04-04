<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UsersModel;
use Illuminate\Support\Facades\DB;
class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'emp_id' => 0,
                'emp_fname' => 'แบงค์',
                'emp_lname' => 'นะจ้ะ',
                'emp_email' => 'bank@gmail.com',
                'emp_password' => '0000000000',
                'emp_gender' => 'M',
                'emp_picture' => 'bank.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'เจ',
                'emp_lname' => 'อยากนอน',
                'emp_email' => 'kamin@gmail.com',
                'emp_password' => '1111111111',
                'emp_gender' => 'M',
                'emp_picture' => 'jj.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'แบม',
                'emp_lname' => 'จุ๊บุ',
                'emp_email' => 'bam@gmail.com',
                'emp_password' => '2222222222',
                'emp_gender' => 'F',
                'emp_picture' => 'bam.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'ต่อ',
                'emp_lname' => 'ภัยพิบัติ',
                'emp_email' => 'tor@gmail.com',
                'emp_password' => '3333333333',
                'emp_gender' => 'M',
                'emp_picture' => 'tor.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'เพชร',
                'emp_lname' => 'หลายใจ',
                'emp_email' => 'petch@gmail.com',
                'emp_password' => '4444444444',
                'emp_gender' => 'M',
                'emp_picture' => 'petch.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'อ้อม',
                'emp_lname' => 'สวยสุด',
                'emp_email' => 'aom@gmail.com',
                'emp_password' => '5555555555',
                'emp_gender' => 'F',
                'emp_picture' => 'aom.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'น้ำหวาน',
                'emp_lname' => 'สุดสวย',
                'emp_email' => 'namwan@gmail.com',
                'emp_password' => '6666666666',
                'emp_gender' => 'F',
                'emp_picture' => 'namwan.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'กร',
                'emp_lname' => 'ว่าที่ร้อยตรี',
                'emp_email' => 'korn@gmail.com',
                'emp_password' => '7777777777',
                'emp_gender' => 'M',
                'emp_picture' => 'korn.jpg',
                'emp_dep_id' => 3,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
                'emp_fname' => 'กล์อฟ',
                'emp_lname' => 'ซูเปอร์ทีมลีด',
                'emp_email' => 'golf@gmail.com',
                'emp_password' => '888888888',
                'emp_gender' => 'M',
                'emp_picture' => 'golf.jpg',
                'emp_dep_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

                foreach($users as $users)
            {
                DB::table('users')->insert($users);
            }
    }
}
