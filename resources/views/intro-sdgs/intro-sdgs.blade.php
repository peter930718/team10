
@extends('app')

<body>
    <div class="main">
        <div class="mainleft" style="background: #fff;flex:auto;" >
            <h2 >計畫背景</h2>
            <tr>
            <td>在全球化日益加深的今天，
                國際合作對於科研與教育的發展至關重要。
                透過科教國合處的雙/多邊國際合作計畫，
                我們有機會與世界各地的研究機構和學者進行交流與合作，
                共同解決當前面臨的各種挑戰。</td>
            <h2>申請時程</h2>        <p>為大概申請時程</p>
            <div class="timeline" style="background-color: beige;margin: 10px;">
                <tr>
                <br>前期準備：每年1月 - 3月        </br>
                <br>提案撰寫：每年4月 - 6月        </br>
                <br>提交申請：每年7月              </br>
                <br>審查過程：每年8月 - 9月        </br>
                <br>結果公布：每年10月             </br>
                </tr>
            </tr>
            </div>
        </div>
        <div>
            <div class="mainright">
                <table border="tablelist" style="font-size: 13px;margin: 15px;">
                @foreach ($oberservations->slice(0,16) as  $oberservation)
                <tr>
                <td >{{$oberservation->recruitment_year}}</td>
                <td>{{$oberservation->application_start_date}}</td>
                <td>{{$oberservation->application_deadline}}</td>
                <td>{{$oberservation->project_name}}</td>
                <td>{{$oberservation->country}}</td>
                <td>{{$oberservation->agreement_agency}}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>


</body>
