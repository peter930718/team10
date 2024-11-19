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
        $projects[] = '2021-2023臺美GEMT雙邊協議合作研究計畫';
        $projects[] = '2021-2027徵求成功參與歐盟跨國團隊科研暨創新計畫';
        $projects[] = '臺美(NSTC-NSF)先進半導體晶片設計及製作(ACED Fab)合作計畫';
        $projects[] = '2024臺法(NSTC-INCa)雙邊協議擴充加值(add-on)國際合作研究計畫';
        $projects[] = '2023年臺愛(NSTC-ETAg)雙邊合作人員交流互訪計畫';
        $projects[] = '國科會同步徵求2022年歐盟「未來新興信息與通訊技術研究(CHIST-ERA)」跨國多邊合作計畫';
        $projects[] = '臺英(NSTC-ESRC)雙邊人員交流計畫';
        $projects[] = '2023-2026臺德(NSTC-DFG)雙邊協議國際合作研究計畫(3年期)';
        $projects[] = '國科會同步徵求2022年歐盟促進歐洲健康研究領夥伴關係(ERA4health)之聯合跨國多邊「CARDINNOV」合作計畫';
        $projects[] = '國科會同步徵求2023年歐盟ERA-NET NEURON聯合跨國多邊「心理健康中環境挑戰的恢復力和脆弱性機制研究」計畫';
        $projects[] = '國科會同步徵求2023年歐盟促進歐洲健康研究領夥伴關係(ERA4Health Partnership)之聯合跨國多邊「HealthEquity」合作計畫';
        $projects[] = '國科會同步徵求2023年歐盟ERA-NET NEURON聯合跨國多邊「神經科學的倫理、法律和社會層面探討 (ELSA)」計畫';
        $projects[] = '臺以(NSTC-MIST)雙邊合作研究計畫';
        $projects[] = '臺西(NSTC-CSIC)博士生研習計畫';
        $projects[] = '2023年臺德(DAAD)暑期營';
        $projects[] = '臺日(NSTC-RIKEN)雙邊合作研究計畫';
        $projects[] = '臺英(NSTC-NERC)雙邊合作研究計畫(環境科學領域)';
        $projects[] = '臺蒙(NSTC-MECSS/MFST)雙邊合作研究計畫';
        $projects[] = '臺菲(NSTC-DOST)雙邊協議國際合作研究計畫(第二階段)';
        $projects[] = '臺法(NSTC-ANR)國際合作研究計畫';
        $projects[] = '臺拉立三邊協議國際合作研究計畫';
        $projects[] = '臺捷(NSTC-GACR)雙邊合作研究計畫';
        $projects[] = '2023年國際共同研究暨培訓型合作活動計畫';
        $projects[] = '臺印(NSTC-ICSSR)社會科學雙邊協議國際合作研究計畫';
        $projects[] = '國科會同步徵求2023年歐盟「材料與電池技術研究暨創新計畫(M-ERA.NET 3)」跨國多邊合作計畫';
        $projects[] = '國科會同步徵求2023年歐盟「歐洲研究領域網絡旗艦計畫(FLAG-ERA)」跨國多邊合作計畫';
        $projects[] = '臺法雙邊人員交流互訪型計畫(幽蘭計畫)';
        $projects[] = '臺法雙邊研討會(幽蘭計畫)';
        $projects[] = '2023年臺法科技獎(The France-Taiwan Scientific Grand Prize)';
        $projects[] = '2024-2027臺日(NSTC-JST)雙邊合作研究計畫';
        $projects[] = '臺捷(NSTC-CAS)雙邊計畫人員交流PPP計畫';
        $projects[] = '臺斯(NSTC-SAS)雙邊合作研究計畫';
        $projects[] = '臺波(NSTC-PAS)雙邊計畫人員交流PPP計畫';
        $projects[] = '2024-2025臺韓(NSTC-NRF)雙邊合作研究計畫';
        $projects[] = '臺德(NSTC-DAAD)雙邊計畫人員交流PPP計畫';
        $projects[] = '臺波(NSTC-NCBR)雙邊合作研究計畫及國際合作鏈結法人計畫';
        $projects[] = '臺保(NSTC-BAS)雙邊計畫人員交流PPP計畫';
        $projects[] = '國科會同步徵求2023年歐盟「癌症轉譯(TRANSCAN-3)」聯合跨國多邊合作計畫';
        $projects[] = '臺捷(NSTC-TACR)雙邊協議國際合作鏈結法人計畫';
        $projects[] = '臺匈(NSTC-HAS)雙邊計畫人員交流PPP 計畫';
        $projects[] = '臺印(NSTC-DST)雙邊協議國際合作研究計畫';
        $projects[] = '臺法(NSTC-INSERM)雙邊人員交流計畫';
        $projects[] = '臺日青年科技人才交流計畫(日本臺灣交流協會訪日研究活動)─選送博士生赴日研究';
        $projects[] = '臺西(NSTC-CSIC)雙邊人員交流計畫';
        $projects[] = '臺法(NSTC-CNRS)國際新興活動(IEA)雙邊人員交流計畫';
        $projects[] = '臺德(NSTC-BMBF)半導體晶片設計學術合作研究計畫(試辦方案)(構想書)';
        $projects[] = '臺英(NSTC-RS)雙邊合作人員交流計畫(自然科學領域, Cost Share Programme, CSP)';
        $projects[] = '2024年歐盟大型儀器培訓計畫(HERCULES)';
        $projects[] = '臺芬(NSTC-AKA)雙邊合作人員交流計畫';
        $projects[] = '臺英(NSTC-BA)雙邊小型研究計畫(人文領域, Small Research Grant, SRG)';
        $projects[] = '臺英(NSTC-RSE)雙邊訪問計畫(不限領域, Bilateral Visits Programme, BVP)';
        $projects[] = '國科會同步徵求2023年歐盟「生物多樣性(Biodiversa+: European Biodiversity Partnership)」跨國多邊合作計畫pre-proposals';
        $projects[] = '2024臺法(NSTC-ANR)雙邊協議國際合作研究計畫';
        $projects[] = '2025-2027臺灣-德國(NSTC-DFG)雙邊協議專案型國際合作研究計畫';
        $projects[] = '國科會同步徵求2024年歐盟促進歐洲健康研究領夥伴關係(ERA4Health Partnership)之聯合跨國多邊「NutriBrain」合作計畫';
        $projects[] = '國科會同步徵求2024年歐盟促進歐洲健康研究領夥伴關係(ERA4Health Partnership)之聯合跨國多邊「NANOTECMEC」合作計畫';
        $projects[] = '2024年臺愛(NSTC-ETAg)雙邊合作人員交流互訪計畫';
        $projects[] = '2024年度臺日青年科技人才交流計畫';
        $projects[] = '2024年臺德(NSTC-DAAD)青年暑期營';
        $projects[] = '2025年度臺灣與菲律賓(NSTC-DOST)雙邊協議國際合作研究計畫(第一階段研究構想書)';
        $projects[] = '臺灣-德國(NSTC-DFG)雙邊研討會(隨到隨審, 6個月前提出申請)';
        $projects[] = '臺灣-德國(NSTC-DFG)研究訪問計畫 (隨到隨審, 6個月前提出申請)';
        $projects[] = '補助學研機構與德國馬克斯普朗克研究院(MPI)合設 「國際馬克斯普朗克中心 International Max Planck Center」 先導計畫';

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
