<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\UsersModel;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\DB;
use App\Models\userModel;

>>>>>>> e81599feff887396e90198461ed039c74da78093
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
<<<<<<< HEAD
                'emp_fname' => 'แบงค์',
                'emp_lname' => 'นะจ้ะ',
                'emp_email' => 'bank@gmail.com',
                'emp_password' => '0000000000',
                'emp_gender' => 'M',
                'emp_picture' => 'bank.jpg',
=======
                'fname' => 'แบงค์',
                'lname' => 'นะจ้ะ',
                'email' => 'bankkamo@gmail.com',
                'password' => '0000000000',
                'gender' => 'M',
                'picture' => 'bank.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'เจ',
                'emp_lname' => 'อยากนอน',
                'emp_email' => 'kamin@gmail.com',
                'emp_password' => '1111111111',
                'emp_gender' => 'M',
                'emp_picture' => 'jj.jpg',
=======
                'fname' => 'เจ',
                'lname' => 'อยากนอน',
                'email' => 'kamin@gmail.com',
                'password' => '1111111111',
                'gender' => 'M',
                'picture' => 'jj.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'แบม',
                'emp_lname' => 'จุ๊บุ',
                'emp_email' => 'bam@gmail.com',
                'emp_password' => '2222222222',
                'emp_gender' => 'F',
                'emp_picture' => 'bam.jpg',
=======
                'fname' => 'แบม',
                'lname' => 'จุ๊บุ',
                'email' => 'bam@gmail.com',
                'password' => '2222222222',
                'gender' => 'F',
                'picture' => 'bam.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'ต่อ',
                'emp_lname' => 'ภัยพิบัติ',
                'emp_email' => 'tor@gmail.com',
                'emp_password' => '3333333333',
                'emp_gender' => 'M',
                'emp_picture' => 'tor.jpg',
=======
                'fname' => 'ต่อ',
                'lname' => 'ภัยพิบัติ',
                'email' => 'tor@gmail.com',
                'password' => '3333333333',
                'gender' => 'M',
                'picture' => 'tor.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'เพชร',
                'emp_lname' => 'หลายใจ',
                'emp_email' => 'petch@gmail.com',
                'emp_password' => '4444444444',
                'emp_gender' => 'M',
                'emp_picture' => 'petch.jpg',
=======
                'fname' => 'เพชร',
                'lname' => 'หลายใจ',
                'email' => 'petch@gmail.com',
                'password' => '4444444444',
                'gender' => 'M',
                'picture' => 'petch.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'อ้อม',
                'emp_lname' => 'สวยสุด',
                'emp_email' => 'aom@gmail.com',
                'emp_password' => '5555555555',
                'emp_gender' => 'F',
                'emp_picture' => 'aom.jpg',
=======
                'fname' => 'อ้อม',
                'lname' => 'สวยสุด',
                'email' => 'aom@gmail.com',
                'password' => '5555555555',
                'gender' => 'F',
                'picture' => 'aom.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'น้ำหวาน',
                'emp_lname' => 'สุดสวย',
                'emp_email' => 'namwan@gmail.com',
                'emp_password' => '6666666666',
                'emp_gender' => 'F',
                'emp_picture' => 'namwan.jpg',
=======
                'fname' => 'น้ำหวาน',
                'lname' => 'สุดสวย',
                'email' => 'namwan@gmail.com',
                'password' => '6666666666',
                'gender' => 'F',
                'picture' => 'namwan.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'กร',
                'emp_lname' => 'ว่าที่ร้อยตรี',
                'emp_email' => 'korn@gmail.com',
                'emp_password' => '7777777777',
                'emp_gender' => 'M',
                'emp_picture' => 'korn.jpg',
=======
                'fname' => 'กร',
                'lname' => 'ว่าที่ร้อยตรี',
                'email' => 'korn@gmail.com',
                'password' => '7777777777',
                'gender' => 'M',
                'picture' => 'korn.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 3,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'emp_id' => 0,
<<<<<<< HEAD
                'emp_fname' => 'กล์อฟ',
                'emp_lname' => 'ซูเปอร์ทีมลีด',
                'emp_email' => 'golf@gmail.com',
                'emp_password' => '888888888',
                'emp_gender' => 'M',
                'emp_picture' => 'golf.jpg',
=======
                'fname' => 'กล์อฟ',
                'lname' => 'ซูเปอร์ทีมลีด',
                'email' => 'golf@gmail.com',
                'password' => '888888888',
                'gender' => 'M',
                'picture' => 'golf.jpg',
>>>>>>> e81599feff887396e90198461ed039c74da78093
                'emp_dep_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

<<<<<<< HEAD
                foreach($users as $users)
            {
                DB::table('users')->insert($users);
=======
                foreach($users as $userModel)
            {
                DB::table('users')->insert($userModel);
>>>>>>> e81599feff887396e90198461ed039c74da78093
            }
    }
}
