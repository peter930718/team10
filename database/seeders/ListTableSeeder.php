<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomProject() {
        $projects = array();
        $projects[] = '臺以(NSTC-MIST)雙邊合作研究計畫';
        $projects[] = '臺保(NSTC-BAS)雙邊計畫人員交流PPP計畫';  
        $projects[] = '臺匈(NSTC-HAS)雙邊計畫人員交流PPP計畫';
        $projects[] = '臺印(NSTC-ICSSR)社會科學雙邊協議國際合作研究計畫';
        $projects[] = '臺印(NSTC-DST)雙邊協議國際合作研究計畫';
        return $projects[rand(0, count($projects)-1)];
    }

    public function generateRandomCountry() {
        $countryes = array();

        $countryes[] = '美國';
        $countryes[] = '以色列';
        $countryes[] = '保加利亞';
        $countryes[] = '匈牙利';
        $countryes[] = '印度';
        $countryes[] = '德國';  
        $countryes[] = '愛沙尼亞';
        $countryes[] = '拉脫維亞及立陶宛';
        $countryes[] = '捷克';
        $countryes[] = '斯洛伐克';
        $countryes[] = '日本';
        $countryes[] = '東南亞、南亞、中東、大洋洲、中南美洲等區域發展中國家';
        $countryes[] = '歐盟';
        $countryes = '法國';
        $countryes = '波蘭';
        $countryes = '芬蘭';
        $countryes[] = '英國';
        $countryes[] = '菲律賓';
        $countryes[] = '蒙古';
        $countryes[] = '西班牙';
        $countryes[] = '韓國';

        


        return $countryes[rand(0, count($countryes)-1)];

    }

    public function run()
    {
        $firstNames = array('John', 'Mary', 'James', 'Elizabeth', 'Robert', 'Jennifer', 'Michael', 'Linda', 'William', 'Barbara', 'David', 'Patricia', 'Richard', 'Jessica', 'Joseph', 'Susan', 'Thomas', 'Margaret', 'Charles', 'Sarah', 'Christopher', 'Karen', 'Daniel', 'Nancy', 'Matthew', 'Lisa', 'Anthony', 'Betty', 'Mark', 'Dorothy', 'Donald', 'Sandra', 'Steven', 'Ashley', 'Paul', 'Kimberly', 'Andrew', 'Emily', 'Joshua', 'Donna', 'Kenneth', 'Michelle', 'Kevin', 'Carol', 'Brian', 'Amanda', 'George', 'Melissa', 'Edward', 'Deborah', 'Ronald', 'Stephanie', 'Timothy', 'Rebecca', 'Jason', 'Laura', 'Jeffrey', 'Helen', 'Ryan', 'Sharon', 'Jacob', 'Cynthia', 'Gary', 'Kathleen', 'Nicholas', 'Amy', 'Eric', 'Shirley', 'Jonathan', 'Angela', 'Stephen', 'Anna', 'Larry', 'Brenda', 'Justin', 'Pamela', 'Scott', 'Nicole', 'Brandon', 'Emma', 'Benjamin', 'Samantha', 'Samuel', 'Katherine', 'Gregory', 'Christine', 'Frank', 'Debra', 'Alexander', 'Rachel', 'Raymond', 'Catherine', 'Patrick', 'Carolyn', 'Jack', 'Janet', 'Dennis', 'Ruth', 'Jerry', 'Maria', 'Tyler', 'Heather', 'Aaron', 'Diane', 'Jose', 'Virginia', 'Adam', 'Julie', 'Henry', 'Joyce', 'Nathan', 'Victoria', 'Douglas', 'Olivia', 'Zachary', 'Kelly', 'Peter', 'Christina', 'Kyle', 'Lauren', 'Walter', 'Joan', 'Ethan', 'Evelyn', 'Jeremy', 'Judith', 'Harold', 'Megan', 'Christian', 'Cheryl', 'Noah', 'Andrea', 'Gerald', 'Hannah', 'Keith', 'Martha', 'Roger', 'Jacqueline', 'Arthur', 'Frances', 'Lawrence', 'Gloria', 'Dylan', 'Teresa', 'Austin', 'Kathryn', 'Joe', 'Sara', 'Jesse', 'Janice', 'Albert', 'Jean', 'Bryan', 'Alice', 'Billy', 'Doris', 'Bruce', 'Abigail', 'Willie', 'Julia', 'Jordan', 'Judy', 'Alan', 'Rose', 'Ralph', 'Ann', 'Roy', 'Beverly', 'Juan', 'Denise', 'Wayne', 'Amber');
        $lastNames = array('Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor', 'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin', 'Thompson', 'Garcia', 'Martinez', 'Robinson', 'Clark', 'Rodriguez', 'Lewis', 'Lee', 'Walker', 'Hall', 'Allen', 'Young', 'Hernandez', 'King', 'Wright', 'Lopez', 'Hill', 'Scott', 'Green', 'Adams', 'Baker', 'Gonzalez', 'Nelson', 'Carter', 'Mitchell', 'Perez', 'Roberts', 'Turner', 'Phillips', 'Campbell', 'Parker', 'Evans', 'Edwards', 'Collins', 'Stewart', 'Sanchez', 'Morris', 'Rogers', 'Reed', 'Cook', 'Morgan', 'Bell', 'Murphy', 'Bailey', 'Rivera', 'Cooper', 'Richardson', 'Cox', 'Howard', 'Ward', 'Torres', 'Peterson', 'Gray', 'Ramirez', 'James', 'Watson', 'Brooks', 'Kelly', 'Sanders', 'Price', 'Bennett', 'Wood', 'Barnes', 'Ross', 'Henderson', 'Coleman', 'Jenkins', 'Perry', 'Powell', 'Long', 'Patterson', 'Hughes', 'Flores', 'Washington', 'Butler', 'Simmons', 'Foster', 'Gonzales', 'Bryant', 'Alexander', 'Russell', 'Griffin', 'Diaz', 'Hayes');  
        for ($i=0; $i<500; $i++)
        {
            $application_start_date = $firstNames[array_rand($firstNames)];
            $$application_deadline = $lastNames[array_rand($lastNames)];
            $project_name = $this->generateRandomProject();
            $country = $this->generateRandomCountry();
            DB::table('list')->insert([
                    'recruitment_year' => $recruitment_year,
                    'application_start_date' => $application_start_date,
                    'application_deadline' => $application_deadline,
                    'project_name' => $project_name,
                    'country' => $country,
                    'agreement_agency' => $agreement_agency,
                ]);
        }
    }
}