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
        $startdate = $this->generateRandomString(rand(2, 15));
        $startdate = strtolower($startdate);
        $startdate = ucfirst($startdate);        
        return $startdate;
        $endyear = $this->generateRandomString(rand(2, 15));
        $endyear = strtolower($endyear);
        $endyear = ucfirst($endyear);
        return $endyear;
    }
    public function generateRandomStartYear(){
        $startyears = array();
        $startyears[] = '2020/8/7';
        $startyears[] = '2021/1/1';
        $startyears[] = '2022/9/29';
        $startyears[] = '2022/10/3';
        $startyears[] = '2022/10/20';
        $startyears[] = '2022/11/3';
        $startyears[] = '2022/11/15';
        $startyears[] = '2022/12/9';
        $startyears[] = '2022/12/28';
        $startyears[] = '2022/12/29';
        $startyears[] = '2023/1/3';
        $startyears[] = '2023/1/12';
        $startyears[] = '2023/1/16';
        $startyears[] = '2023/2/10';
        $startyears[] = '2023/2/13';
        $startyears[] = '2023/2/24';
        $startyears[] = '2023/3/1';
        $startyears[] = '2023/3/7';
        $startyears[] = '2023/3/10';
        $startyears[] = '2023/3/31';
        $startyears[] = '2023/4/1';
        $startyears[] = '2023/4/3';
        $startyears[] = '2023/4/5';
        $startyears[] = '2023/4/11';
        $startyears[] = '2023/5/4';
        $startyears[] = '2023/5/9';
        $startyears[] = '2023/5/18';
        $startyears[] = '2023/5/29';
        $startyears[] = '2023/6/1';
        $startyears[] = '2023/6/5';
        $startyears[] = '2023/6/12';
        $startyears[] = '2023/7/6';
        $startyears[] = '2023/7/12';
        $startyears[] = '2023/8/2';
        $startyears[] = '2023/8/4';
        $startyears[] = '2023/8/23';
        $startyears[] = '2023/9/6';
        $startyears[] = '2023/9/7';
        $startyears[] = '2023/9/11';
        $startyears[] = '2023/9/14';
        $startyears[] = '2023/11/1';
        $startyears[] = '2023/11/3';
        $startyears[] = '2023/11/14';
        $startyears[] = '2023/11/15';
        $startyears[] = '2023/12/8';
        $startyears[] = '2023/12/18';
        $startyears[] = '隨到隨審';

        
        return $startyears[rand(0, count($startyears)-1)];
    }
    public function generateRandomEndYear(){
        $endyears = array();
        $endyears[] = '2023/12/31';
        $endyears[] = '2027/12/31';
        $endyears[] = '2023/1/17';
        $endyears[] = '2023/3/23';
        $endyears[] = '2023/1/3';
        $endyears[] = '2023/2/2';
        $endyears[] = '2023/2/7';
        $endyears[] = '2023/2/15';
        $endyears[] = '2023/3/7';
        $endyears[] = '2023/3/14';
        $endyears[] = '2023/5/4';
        $endyears[] = '2023/4/27';
        $endyears[] = '2023/2/24';
        $endyears[] = '2023/4/17';
        $endyears[] = '2023/3/30';
        $endyears[] = '2023/4/28';
        $endyears[] = '2023/5/15';
        $endyears[] = '2023/3/31';
        $endyears[] = '2023/5/2';
        $endyears[] = '2023/4/6';
        $endyears[] = '2023/3/24';
        $endyears[] = '2023/5/1';
        $endyears[] = '2023/5/16';
        $endyears[] = '2023/6/1';
        $endyears[] = '2023/7/14';
        $endyears[] = '2023/6/19';
        $endyears[] = '2023/7/31';
        $endyears[] = '2023/6/12';
        $endyears[] = '2023/5/26';
        $endyears[] = '2023/6/16';
        $endyears[] = '2023/6/21';
        $endyears[] = '2023/7/21';
        $endyears[] = '2023/7/19';
        $endyears[] = '2023/9/18';
        $endyears[] = '2023/7/28';
        $endyears[] = '2023/9/15';
        $endyears[] = '2023/9/28';
        $endyears[] = '2023/9/5';
        $endyears[] = '2023/9/27';
        $endyears[] = '2023/10/2';
        $endyears[] = '2023/9/20';
        $endyears[] = '2023/11/8';
        $endyears[] = '2023/10/26';
        $endyears[] = '2023/11/10';
        $endyears[] = '2023/10/19';
        $endyears[] = '2024/2/1';
        $endyears[] = '2024/1/15';
        $endyears[] = '2024/1/30';
        $endyears[] = '2024/2/21';
        $endyears[] = '2024/3/20';
        $endyears[] = '2024/2/22';
        $endyears[] = '隨到隨審';

        return $endyears[rand(0, count($endyears)-1)];
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
        $countryes[]= '法國';
        $countryes[]= '波蘭';
        $countryes[]= '芬蘭';
        $countryes[] = '英國';
        $countryes[] = '菲律賓';
        $countryes[] = '蒙古';
        $countryes[] = '西班牙';
        $countryes[] = '韓國';

        return $countryes[rand(0, count($countryes)-1)];

    }
    public function generateRandomAgreement(){
        $agreement = array();
        $agreement[] = '美國國家科學基金會(NSF)';
        $agreement[] = '歐盟';
        $agreement[] = '法國國家癌症研究院(INCa)';
        $agreement[] = '愛沙尼亞研究委員會(ETAG)';
        $agreement[] = '英國經濟暨社會研究委員會';
        $agreement[] = '德國國家研究基金會(DFG)';
        $agreement[] = '以色列科技部';
        $agreement[] = '西班牙國家高等科學研究委員會(CSIC)';
        $agreement[] = '德國學術交流總署(DAAD)';
        $agreement[] = '日本國立研究開發法人理化學研究所(RIKEN)';
        $agreement[] = '英國自然環境研究委員會(NERC)';
        $agreement[] = '蒙古教育文化科學體育(MECSS)及蒙古科學技術基金會(MFST)';
        $agreement[] = '菲律賓科技部(DOST)';
        $agreement[] = '法國國家研究總署(ANR)';
        $agreement[] = '拉脫維亞、立陶宛教育及科學部';
        $agreement[] = '捷克科學基金會(GACR)';
        $agreement[] = '印度教育部社會科學研究委員會(ICSSR)';
        $agreement[] = '法國在台協會(BFT)';
        $agreement[] = '法蘭西學院自然科學院(ADS)';
        $agreement[] = '日本國立研究開發法人科學技術振興機構(JST)';
        $agreement[] = '捷克科研院(CAS)';
        $agreement[] = '斯洛伐克科學院(SAS)';
        $agreement[] = '波蘭科學院(PAS)';
        $agreement[] = '韓國國家研究基金會(NRF)';
        $agreement[] = '波蘭國家研究發展中心(NCBR)';
        $agreement[] = '保加利亞科學院(BAS)';
        $agreement[] = '捷克技術署(TACR)';
        $agreement[] = '匈牙利科學院(HAS)';
        $agreement[] = '印度科技部(DST)';
        $agreement[] = '法國國家健康與醫學研究院(INSERM)';
        $agreement[] = '日本台灣交流協會';
        $agreement[] = '法國國家科學研究院(CNRS)';
        $agreement[] = '德國聯邦教育及研究部(BMBF)';
        $agreement[] = '英國皇家學會(RS)';
        $agreement[] = '法國格列諾柏大學(協辦)';
        $agreement[] = '芬蘭科學院(AKA)';
        $agreement[] = '英國國家學術院(BA)';
        $agreement[] = '英國愛丁堡皇家學會 (RSE)';

        return $agreement[rand(0, count($agreement)-1)];

    }

    public function run()
    {
        for ($i=0; $i<500; $i++)
        {
            $application_start_date = $this->generateRandomStartYear();
            $application_deadline = $this->generateRandomEndYear();
            $project_name = $this->generateRandomProject();
            $country = $this->generateRandomCountry();
            $agreement_agency = $this->generateRandomAgreement();
            DB::table('list')->insert([
                    'recruitment_year' => rand(2020, 2023),
                    'application_start_date' => $application_start_date,
                    'application_deadline' => $application_deadline,
                    'project_name' => $project_name,
                    'country' => $country,
                    'agreement_agency' => $agreement_agency
                ]);
        }
    }
}
